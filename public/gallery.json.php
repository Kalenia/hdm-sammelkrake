<?php

const ROOT_PATH = '..';
require_once(ROOT_PATH . '/include/config.php');

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$context = stream_context_create(array(
	'http' => array(
		'header' => array(
			'Accept: text/html',
			'Authorization: Basic ' . base64_encode("$user:$pass")
		),
		'user_agent' => 'HdM Sammelkrake/1.0'
	),
	'ssl' => array(
		'verify_peer' => false
	)
));

if ( isset($_GET['image']) ) {
    // Request an image in the name of the client
    $path = urldecode($_GET['image']);
    $from_mi_server = fopen("https://www.hdm-stuttgart.de$path", "rb", false, $context);
    $to_client = fopen("php://output", "wb");
    stream_copy_to_stream($from_mi_server, $to_client);
    fclose($to_client);
    fclose($from_mi_server);
    exit();
} else if ( isset($_GET['semester']) ) {
    // Request image list of that semester
	$escaped_id = urlencode($_GET['semester']);
	$url = "https://www.hdm-stuttgart.de/mm/student/studienanfaenger/?directory=$escaped_id&Anzeige=Anzeigen";
	$html_source = file_get_contents($url, false, $context);
	
	$doc = @DOMDocument::loadHTML($html_source);
	$xpath = new DOMXPath($doc);
	$gallery = $xpath->query("//div[@id='center_content']//p[img]");
	
	$gallery_object = [];
	for($i = 0; $i < $gallery->length; $i++) {
		$student_node = $gallery->item($i);
		$name = $xpath->evaluate("string(.)", $student_node);
		$image_path = $xpath->evaluate("string(.//img/@src)", $student_node);
		$image_url = "$image_path";
		
		$gallery_object[trim($name)] = trim($image_url);
	}
	
	die(json_encode($gallery_object));
} else {
	$html_source = file_get_contents("https://www.hdm-stuttgart.de/mm/student/studienanfaenger/", false, $context);

	$doc = @DOMDocument::loadHTML($html_source);
	$xpath = new DOMXPath($doc);
	$semester_list_node = $xpath->query("//select[@name='directory']")->item(0);
	$semester_list = simplexml_import_dom($semester_list_node);

	$semester_list_object = [];
	foreach($semester_list->option as $option) {
		$id = strval($option['value']);
		$display_name = strval($option);
		$semester_list_object[$id] = $display_name;
	}

	die(json_encode($semester_list_object));
}