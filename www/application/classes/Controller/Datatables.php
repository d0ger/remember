<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Datatables extends Controller {

	public function action_index()
	{
		$content = View::factory('datatables/index');

		$this->response->body(View::factory('datatables/template', array(
			'content' => $content,
		)));
	}

	public function action_first()
	{
		echo 'test';
	}

}
