<?php

class News {

	// Возвращает одну новость по идентификатору
	public static function getNewsItemById($id) {

		$id = intval($id);

		if($id) {
			//получаем обьект класа PDO
			$db = Db::getConnection();

			//устанавливаем кодировку
			$db->exec('SET NAMES utf8');

			$result = $db->query('SELECT * from news WHERE id='.$id);

			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

	// Возвращает список новостей
	public static function getNewsList() {
		//получаем обьект класа PDO
		$db = Db::getConnection();

		//устанавливаем кодировку
		$db->exec('SET NAMES utf8');


		$newsList = array();

		$result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC limit 10');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}		

		return $newsList;
		
	}


}
?>