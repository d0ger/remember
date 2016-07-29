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
		if (Model_Test::get_current_test()->loaded()) {
			$content = View::factory('test/exist_current_test');

			$this->response->body(View::factory('template', array(
				'content' => $content,
			)));
		} else {
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
	}

	public function action_next()
	{
		if ($result_id = $this->request->post('result_id')) {
			Model_Result::mark_completed($result_id);
		}

		$item = Model_Item::get_next();

		if (!$item->loaded())
		{
			$this->redirect('/test/result/');
		}

		$content = View::factory('test/question', array(
			'item' => $item,
		));

		$this->response->body(View::factory('template', array(
			'content' => $content,
		)));
	}

	public function action_result()
	{
//		echo Debug::vars($_REQUEST);
//		exit;

		if (($result_id = $this->request->post('result_id')) && ($result = $this->request->post('result'))) {
			Model_Result::set_result($result_id, $result);
		}

		$item = Model_Item::get_next_for_set_result();

		if ($item->loaded()) {
			$content = View::factory('test/set_result', array(
				'item' => $item,
			));
		} else { // тест закончен

			Model_Test::finish_current();

			$content = View::factory('test/finish', array(
				'item' => $item,
			));
		}

		$this->response->body(View::factory('template', array(
			'content' => $content,
		)));
	}

	public function action_continue()
	{
		$item = Model_Item::get_next();

		$content = View::factory('test/question', array(
			'item' => $item,
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
		$new_test->user_id = Model_User::get_current_user();
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
