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

}
