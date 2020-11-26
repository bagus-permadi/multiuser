<?php
// use Jenssegers\Blade\Blade;
use Coolpraz\PhpBlade\PhpBlade;

if(!function_exists('view'))
{
	//parameter pertama view
	//parameter kedua data dalam bentuk array
	function view()
	{
		//path folder views
		$viewDirectory = VIEWPATH;
		//path folder cache
		$cacheDirectory = APPPATH.'cache';

		$blade = new Blade($viewDirectory, $cacheDirectory);
		echo $blade->make($view);
	}
}

?>