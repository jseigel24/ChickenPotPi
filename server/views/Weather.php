<pre><?php print_r($w); ?></pre>

<div class="row">
	<h1>Current Weather</h1>
</div>
<div class="row offset2">
	<div class="row">
		<div class="span4">Current Temperature:</div>
		<div class="span4"><?=$w->current_conditions['temp_f']?></div>
	</div>

	<div class="row">
		<div class="span4">Feels Like:</div>
		<div class="span4"><?=$w->current_conditions['feelslike']?></div>
	</div>
	<div class="row">
		<div class="span4">Relative Humidity:</div>
		<div class="span4"><?=$w->current_conditions['humidity']?></div>
	</div>

	<div class="row">
		<div class="span4">Wind Speed:</div>
		<div class="span4"><?=$w->current_conditions['wind_speed']?></div>
	</div>
	
	<div class="row">
		<div class="span4">Wind Gusts:</div>
		<div class="span4"><?=$w->current_conditions['wind_gust']?></div>
	</div>
</div>
<div class="row">
<p>Powered by <a href="http://www.wunderground.com/">The Weather Underground</a>.</p>
<?php echo Weather::getLogo(250, 0); ?>
</div>
