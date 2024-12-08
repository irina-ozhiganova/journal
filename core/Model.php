<?php 
class Model
{

	function __construct() { 
		$this->mysqli = mysqli_connect("db", "irina", "mypassword", "POSTS");

		if ($this->mysqli === false) {
		    	die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	}

	//Здесь мы получаем данные из БД
	public function executeQuery($query): mysqli_result|bool
    {
		$res = $this->mysqli->query($query);
		return $res;
	}

	function __destruct() {
		//Освобождаем память. И закрываем соединение
       $this->mysqli->close();
   }
}
?>