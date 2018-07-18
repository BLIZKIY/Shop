<?php

include_once ROOT.'/models/Category.php';

class CategoryController{

	public static function actionIndex($categoryId) {

			$categories = array();
			$categories = Category::getCategoriesList();

			$categoryProducts = array();
			$categoryProducts = Product::getProductListByCategory();

			require_once ROOT.'/views/catalog/category.php';
	}
}

?>