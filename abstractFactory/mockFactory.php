<?php

require_once 'daoFactory.php';
require_once 'mockItemDao.php';
require_once 'mockOrderDao.php';

class MockFactory implements DaoFactory
{
	public function createItemDao()
	{
		return new MockItemDao();
	}

	public function createOrderDao()
	{
		return new MockOrderDao();
	}
}

