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

	public static function getCategoriesListAdmin() {

		$db = Db::getConnection();

		$result = $db->query("SELECT * FROM category ORDER BY sort_order ASC");

		$categoriesList = array();

		$i = 0;

		while($row = $result->fetch()) {
			$categoriesList[$i]['id'] = $row['id'];
			$categoriesList[$i]['name'] = $row['name'];
			$categoriesList[$i]['sort_order'] = $row['sort_order'];
			$categoriesList[$i]['status'] = $row['status'];
			$i++;
		}
		return $categoriesList;
	}

	public static function deleteCategoryById($id)
	{
		// Соединение с БД
		$db = Db::getConnection();
		// Текст запроса к БД
		$sql = 'DELETE FROM category WHERE id = :id';
		// Получение и возврат результатов. Используется подготовленный запрос
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	public static function createCategory($options)
	{
		// Соединение с БД
		$db = Db::getConnection();

		// Текст запроса к БД
		$sql = 'INSERT INTO category '
			. '(id, name, sort_order, status)'
			. 'VALUES '
			. '(:id, :name, :sort_order, :status)';
		// Получение и возврат результатов. Используется подготовленный запрос
		$result = $db->prepare($sql);
		$result->bindParam(':id', $options['id'], PDO::PARAM_STR);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
		$result->bindParam(':status', $options['status'], PDO::PARAM_INT);
		if ($result->execute()) {
			// Если запрос выполенен успешно, возвращаем id добавленной записи
			return $db->lastInsertId();
		}
		// Иначе возвращаем 0
		return 0;
	}

	public static function getCategoryById($id) {

		$id = intval($id);

		if($id) {
			$db = Db::getConnection();

			$result = $db->query('SELECT * FROM category WHERE id =' .$id);

			$result->setFetchMode(PDO::FETCH_ASSOC);

			return $result->fetch();
		}
	}

	public static function updateCategory($id, $options) {

		$db = Db::getConnection();

		$sql = "UPDATE category
                    SET
                    id = :id,
                    name = :name,
                    sort_order = :sort_order,
                    status = :status
                    WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':sort_order', $options['sort_order'], PDO::PARAM_STR);
		$result->bindParam(':status', $options['status'], PDO::PARAM_INT);
		return $result->execute();
	}
}