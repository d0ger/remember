<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_debug()
	{
		$model = new Model_Item();
		$model->find_all();
		echo $model->last_query();
	}

	public function action_index()
	{
		$this->response->body(View::factory('template', array(
			'content' => '',
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
		$count_items_in_test = 5;
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

		$this->redirect('/test/next/');
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
			$test->comment = $this->request->post('comment');
			$test->save();

			Model_NextRepeat::add_new_item($test->id);

			$this->redirect('test');

		} else {
			$content = View::factory('test/add');

			$this->response->body(View::factory('template', array(
				'content' => $content,
			)));
		}
	}

	public function action_edit()
	{
		$item_id = (int) Request::current()->param('id');
		$item = new Model_Item($item_id);

		if (!$item->loaded()) {
			HTTP_Exception_404::response(new Exception('Вопрос не найден'));
		}

		if ($this->request->method() == 'POST') {

			$item->question = $this->request->post('question');
			$item->answer = $this->request->post('answer');
			$item->comment = $this->request->post('comment');
			$item->save();

			$this->redirect('/datatables');

		} else {
			$content = View::factory('test/edit', array('item' => $item));

			$this->response->body(View::factory('template', array(
				'content' => $content,
			)));
		}
	}
}
