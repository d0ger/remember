<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

	public function action_test()
	{
//		$sql = "SELECT * FROM `tests`";
//
//		$res = DB::query(Database::SELECT, $sql)
//			->execute();
//
//		print_r($res);

		$model = new Model_Test();
		$tests = $model->find_all();

		foreach ($tests as $test) {
			echo "<br>$test->question - $test->date_create";
		}
		echo 'test2';
	}

} // End Welcome
