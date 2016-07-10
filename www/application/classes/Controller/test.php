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
	}

	public function action_list()
	{
		$model = new Model_Test();
		$tests = $model->find_all();

		foreach ($tests as $test) {
			echo "<br>$test->question - $test->answer - $test->date_create";
		}
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

}
//		header('Content-Type: text/html; charset=utf-8');
////		echo $this->request->method();
////		exit;
//
//		if ($this->request->method() == 'POST') {
//
//			$values = $this->request->post();
////			echo "<pre>";
////			print_r($values);
////			echo "</pre>";
////			exit;
//
//			$model = new Model_Test();
//			$model->values($values)->save();
//
//			$this->response->body("Тест добавлен");
//		} else {
//			$this->response->body(View::factory('tests/add'));
//		}
//	}
//}
