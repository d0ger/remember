<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Datatables extends Controller {

	public function action_index()
	{
		$content = View::factory('datatables/index');

		$this->response->body(View::factory('datatables/template', array(
			'content' => $content,
		)));
	}

	public function action_browse()
	{
//		if (DataTables::is_request())
//		{
//		print_r(Request::$current->post());
//		exit;
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		$start = intval(Request::$current->query('start'));
		if (empty($start))
		{
			$start = 0;
		}

		$length = intval(Request::$current->query('length'));
		if (empty($length))
		{
			$length = 10;
		}

		$orm = ORM::factory('Item');

		$orm->select('next_repeat.next_date')
			->join('next_repeat')
			->on('next_repeat.item_id', '=', 'item.id')
			->where('next_repeat.user_id', '=', Model_User::get_current_user());

			$paginate = Paginate::factory($orm)
				->limit($start, $length)
				->columns(array(
					'item.id',
					'item.question',
					'item.answer',
					'item.date_create',
					'next_repeat.next_date',
				));

			$datatables = DataTables::factory($paginate)
				->sort_columns(array(
					'id',
					'date_create',
					'question',
					'answer',
					'next_date',
				))
				->execute();

			foreach ($datatables->result() as $item)
			{
				$datatables->add_row(array
				(
					$item->id,
					date('Y-m-d', strtotime($item->date_create)),
					$item->question,
					$item->answer,
					$item->next_date,
				));
			}

			$this->response->body($datatables->render());
//		}
//		else
//		{
//			throw new HTTP_Exception_500();
//		}
	}
}
