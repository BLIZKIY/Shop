<?php

class Catalog {


	public static function getCataloglist() {

		$db = Db::getConnection();

		$result = $db->query('SELECT name, price FROM product');

		$catalogList = array();


		$i = 0;

		while ( $row = $result->fetch()) {
			$catalogList[$i]['name'] = $row['name'];
			$catalogList[$i]['price'] = $row['price'];
			$i++;
		}

		return $catalogList;
	}

	





}