<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$tests = ORM::factory('Test')
			->order_by('id', 'desc')
			->limit(10)
			->find_all();

		$content = View::factory('test/list', array(
			'tests' => $tests,
		));

		$this->response->body(View::factory('template', array(
			'content' => $content,
		)));
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

	public function action_add()
	{
		if ($this->request->method() == 'POST') {

			$test = new Model_Test();
			$test->question = $this->request->post('question');
			$test->answer = $this->request->post('answer');
			$test->save();

			$this->redirect('test');

		} else {
			$this->response->body(View::factory('test/add'));
		}
	}

} // End Welcome
