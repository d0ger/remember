<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

	public function action_test()
	{
	}

	public function action_list()
	{
		$model = new Model_Test();
		$tests = $model->find_all();

		foreach ($tests as $test) {
			echo "<br>$test->question - $test->answer - $test->date_created";
		}
	}

	public function action_add()
	{
		header('Content-Type: text/html; charset=utf-8');
//		echo $this->request->method();
//		exit;

		if ($this->request->method() == 'POST') {

			$values = $this->request->post();
//			echo "<pre>";
//			print_r($values);
//			echo "</pre>";
//			exit;

			$model = new Model_Test();
			$model->values($values)->save();

			$this->response->body("Тест добавлен");
		} else {
			$this->response->body(View::factory('tests/add'));
		}
	}
}
