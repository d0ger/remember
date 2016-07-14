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

		$action = $this->request->post('action');

		switch ($action) {
			case 'start':
				$this->action_start();
				exit;
				break;
		}

		$tests = Model_Item::find_for_repeat();

		$content = View::factory('test/test', array(
			'tests' => $tests,
		));

		$this->response->body(View::factory('template', array(
			'content' => $content,
		)));
	}

	public function action_start()
	{
		$count_items_in_test = 2;
		$items = Model_Item::find_for_repeat($count_items_in_test);
		$new_test = new Model_Test();
		$new_test->user_id = 1;
		$new_test->save();

		/** @var Model_Item $item */
		foreach ($items as $item) {
			$new_result = new Model_Result();
			$new_result->item_id = $item->id;
			$new_result->test_id = $new_test->id;
			$new_result->save();
		}
	}

	public function action_list()
	{
		$model = new Model_Item();
		$tests = $model->find_all();

		foreach ($tests as $test) {
			echo "<br>$test->question - $test->answer - $test->date_create";
		}
	}

	public function action_add()
	{
		if ($this->request->method() == 'POST') {

			$test = new Model_Item();
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
