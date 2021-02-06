<?php

require_once 'daoFactory.php';
require_once 'dbItemDao.php';
require_once 'dbOrderDao.php';

class DbFactory implements DaoFactory
{
	public function createItemDao()
	{
		return new DbItemDao();
	}

	public function createOrderDao()
	{
		return new DbOrderDao($this->createItemDao());
	}
}
