<?php
/**
 * Elgg Bootswatch plugin settings.
 *
 * @package ElggTwitterBootswatch
 */

$curstyle = $vars['entity']->bootswatch_style;
if (!$curstyle) $curstyle = 'united';
$available = array(
	'amelia',	'cerulean',	'cosmo',	'cyborg',
	'flatly',	'journal',	'readable',	'simplex',
	'slate',	'spacelab',	'spruce',	'superhero',
	'united' );
$optvalues = array();
foreach($available as $style)
	$optvalues[$style] = ucwords($style);
?>
<div>
	<div id="bootswtach_preview"><?php
		$preview_dir = $CONFIG->url . 'mod/twitter_bootswatch/bootswatches/';
		foreach($available as $style)
			echo "<img src='{$preview_dir}{$style}.png' data-name='{$style}' title='".ucwords($style)."' width='150'
					style='height: auto; cursor: pointer; padding: 2px; margin: 2px;' />"; ?>
	</div>
	<br/>
	<?php
		echo elgg_echo('twitter_bootswatch:style') . ' ';
		echo elgg_view('input/dropdown', array(
			'name' => 'params[bootswatch_style]',
			'options_values' => $optvalues,
			'value' => $curstyle,
		));
	?>
</div>
<script type="text/javascript">
(function($) {
	$(document).ready(function() {
		$('#bootswtach_preview img').hover(
				function(){ $(this).css('outline', '1px dashed grey') },
				function(){ $(this).css('outline', 'none')
		});
		$('#bootswtach_preview img').click(function() {
			val = $(this).data('name');
			if(<?php echo '[';foreach($available as $style) echo "'".$style."',";echo ']';?>.indexOf(val) != -1) {
				$("select[name='params[bootswatch_style]']").attr('value', val);
			}
		});
	})
})(jQuery);
</script>
