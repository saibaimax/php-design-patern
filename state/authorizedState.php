<?php

require_once 'userState.php';
require_once 'unauthorizedState.php';

/**
* ConcreteStateクラスに相当する
* 認証後の状態を表すクラス
*/
class AuthorizedState implements UserState
{

	private static $singleton = null;

	private function __construct()
	{
	}

	public static function getInstance() {
		if (self::$singleton == null) {
		self::$singleton = new AuthorizedState();
		}
		return self::$singleton;
	}

	public function isAuthenticated()
	{
		return true;
	}

	public function nextState()
	{
		// 次の状態（未認証）を返す
		return UnauthorizedState::getInstance();
	}

	public function getMenu()
	{
		$menu = '<a href="?mode=inc">カウントアップ</a> | '
		.    '<a href="?mode=reset">リセット</a> | '
		.    '<a href="?mode=state">ログアウト</a>';
		return $menu;
	}

	/**
	* このインスタンスの複製を許可しないようにする
	* @throws RuntimeException
	*/
	public final function __clone() {
		throw new Exception ('Clone is not allowed against ' . get_class($this));
	}
}
