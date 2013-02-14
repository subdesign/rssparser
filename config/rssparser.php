<?php 

return array(
	'feed_url'         => 'https://github.com/laravel/laravel/commits/master',
	'enable_cache'     => true,
	'cache_duration'   => 60,
	'cache_location'   => path('storage').'cache',
	'order_by_date'    => true,
	'container_div_id' => 'newsfeed',
	'item_count'       => 3,	// number of feed items 
	'result'		   => 'html',	 // raw / html
	'use_daysago'	   => true,		// needs "Date" bundle
	'thumbnail_x_size' => 30,
	'thumbnail_y_size' => 30,
);
