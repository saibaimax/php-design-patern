<?php

require_once 'order.php';
require_once 'orderItem.php';
require_once 'itemDao.php';
require_once 'orderFacade.php';

$order = new Order();
$item_dao = ItemDao::getInstance();

$order->addItem(new OrderItem($item_dao->findById(1), 2));
$order->addItem(new OrderItem($item_dao->findById(2), 1));
$order->addItem(new OrderItem($item_dao->findById(3), 3));

OrderFacade::order($order);
