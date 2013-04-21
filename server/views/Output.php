<div class="row">
	<div class="row"><h2>Budget</h2></div>

	<pre><?php print_r($ex);?></pre>
	<pre><?php print_r($s);?></pre>
</div>

<div class="row">
	<div class="row"><h2>Birds and Eggs</h2></div>
	<div class="row">
		Total Number of Eggs: <?= InfoOutput::getTotalEggs() ?>
	</div>	
	<div class="row offset1">
		Fertilized: <?= InfoOutput::getTotalFertilized() ?><br />
		Unfertilized:<?= InfoOutput::getTotalFertilized() - InfoOutput::getTotalEggs() ?>
	</div>

	<div class="row">
		Total number of chickens: <?=InfoOutput::getTotalBirds()?>
	</div>
</div>

<div class="row">
	<div class="row"><h2>Feed</h2></div>
	<div class="row">
		Last Feed Date: <?=InfoOutput::getLastFed() ?>
	</div>
</div>

