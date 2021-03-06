<?php

require_once(dirname(__FILE__) . '/../include/view_helpers.php');

// Fetch and parse the Mensa RSS feed
$rss = simplexml_load_file('http://www.studentenwerk-stuttgart.de/speiseangebot_rss');
// Get the first (newest) news item. This should be the stuff for today.
$item = $rss->channel->item[0];

// The news item contains kind of screwed up HTML. Use the DOM parser for it
// since it can handle broken HTML.
$doc = new DOMDocument();
// The loadHTML() function does not use utf-8 by default and encodings set on
// the document are ignored (only meant for saving new documents). The xml
// processing instruction with encoding gives loadHTML() the correct encoding.
// Source: http://de.php.net/manual/en/domdocument.loadhtml.php#95251
@$doc->loadHTML('<?xml encoding="UTF-8">' . $item->description);
$xpath = new DOMXPath($doc);

// Extract the dish names by searching for TD elements without a class. Right now
// this works. Let's see for how long.
$names = $xpath->query('//tbody/tr/td[not(@class)]');

// Capture the output we want to write into the tile
ob_start();

?>
<article id="mensa" class="misc changing" data-width="2" data-height="1">
	<h2 title="<?= $item->title ?>"><a href="http://www.studentenwerk-stuttgart.de/gastronomie/speiseangebot">Mensa <?= $item->title ?></a></h2>
	
	<ul>
<?php foreach($names as $name): ?>
<?php	$display_name = trim($xpath->evaluate('string(.)', $name)) ?>
		<li><span title="<?= ha($display_name) ?>"><?= h($display_name) ?></span></li>
<?php endforeach ?>
	</ul>
</article>
<?php

// And store the captured output into the tile
file_put_contents(dirname(__FILE__) . '/../tiles/11-mensa.php', ob_get_clean());

?>
