<div class="row">
	<div class="row"><h2>Budget</h2></div>
	<div class="row">Total Expenses: $<?=InfoOutput::getExpenseAmount()?></div>
	<div class="row">Total Sales: $<?=InfoOutput::getSalesAmount() ?></div>
	<div class="row">Net Profit: $<?=InfoOutput::getNetProfit() ?></div>
</div>

<div class="row">
	<div class="row"><h2>Birds and Eggs</h2></div>
	<div class="row">
		Total Number of Eggs: <?= InfoOutput::getTotalEggs() ?>
	</div>	
	<div class="row offset1">
		Fertilized: <?= InfoOutput::getTotalFertilized() ?><br />
		Unfertilized:<?= InfoOutput::getTotalUnfertilized()?>
	</div>

	<div class="row">
		Total number of chickens: <?=InfoOutput::getTotalBirds()?>
	</div>
</div>

<div class="row">
	<div class="row"><h2>Feed</h2></div>
	<div class="row offset1">
		Last Feed Date: <?=InfoOutput::getLastFed() ?>
	</div>
	<div class="row offset1">
		Total Amount of Feed: <?=InfoOUtput::totalFeed() ?>
	</div>
</div>

