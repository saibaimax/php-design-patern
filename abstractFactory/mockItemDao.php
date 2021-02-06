<?php

require_once 'itemDao.php';
require_once 'item.php';

class MockItemDao implements ItemDao
{
	public function findById($item_id)
	{
		$item = new Item('99', 'ダミー商品');
		return $item;
	}

}
