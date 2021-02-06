<?php
require_once 'strategy.php';

/**
* タブ区切りデータを読み込む
* ConcreteStrategyに相当する
*/
class ReadTabSeparatedDataStrategy extends ReadItemDataStrategy
{

	/**
	* データファイルを読み込み、オブジェクトの配列で返す
	* @param string データファイル名
	* @return データオブジェクトの配列
	*/
	protected function readData($filename)
	{
		$fp = fopen($filename, 'r');

		/**
		* ヘッダ行を抜く
		*/
		$dummy = fgets($fp, 4096);

		/**
		* データの読み込み
		*/
		$return_value = array();
		while ($buffer = fgets($fp, 4096)) {
			list($item_code, $item_name, $price, $release_date) = split("\t", $buffer);
			/**
			* 戻り値のオブジェクトの作成
			*/
			$obj = new stdClass();
			$obj->item_name = $item_name;
			$obj->item_code = $item_code;
			$obj->price = $price;

			list($year, $mon, $day) = split('/', $release_date);
			$obj->release_date = mktime(0, 0, 0, $mon, $day, $year);
			$return_value[] = $obj;
		}
		fclose($fp);

		return $return_value;
	}
}
