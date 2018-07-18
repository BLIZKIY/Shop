<?php

class Category {

	public static function getCategoriesList() {

		$db = Db::getConnection();
		$catagoryList = array();

		$result = $db->query('SELECT id, name from category ORDER by sort_order ASC');

		$i = 0;
		while ( $row = $result->fetch() ) {
			$categoryList[$i]['name'] = $row['name'];			
			$categoryList[$i]['id'] = $row['id'];			
			$i++;
		}

		return $categoryList;
	}
}