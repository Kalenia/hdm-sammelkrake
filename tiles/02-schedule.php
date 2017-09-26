<?php
require_once(ROOT_PATH . '/include/config.php');
?>
<article id="schedule" class="official changing" data-width="4" data-height="1">
	<p class="empty">Die Krake schlägt gerade deinen Stundenplan nach</p>
	<script>
		$.get('schedule.html.php').success(function(data){
			$('article#schedule > p').replaceWith(data);
		});
	</script>
</article>