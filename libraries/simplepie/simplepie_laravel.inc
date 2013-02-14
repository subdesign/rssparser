<?php 

define("SIMPLE_NAMESPACE_LARAVEL", "http://forums.laravel.com/extern.php?action=feed&type=atom");

class SimplePie_Item_Laravel extends SimplePie_Item 
{
	
	function get_summary()
	{
		$data = $this->get_item_tags(SIMPLE_NAMESPACE_LARAVEL, 'summary');
		return $data[0]['data'];
	}

}