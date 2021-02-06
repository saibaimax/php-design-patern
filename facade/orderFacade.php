<?php

require_once 'order.php';
require_once 'itemDao.php';
require_once 'orderDao.php';

class OrderFacade
{
	public static function order(Order $order)
	{
		$item_dao = ItemDao::getInstance();

		foreach ($order->getItems() as $order_item) {
			$item_dao->setAside($order_item);
		}

		OrderDao::createOrder($order);

	}
}
