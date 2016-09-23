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

		$orm->select(
				'next_repeat.next_date',
				array(DB::expr('(
						select result
						from results
						where item_id = item.id
						order by id desc
						limit 1
					)'), 'result'),
				'result.points')
			->join('next_repeat')
			->on('next_repeat.item_id', '=', 'item.id')
			->join(array(
				DB::expr('(
					select
						results.item_id,
						sum(result) points
					from results
					group by item_id
				)'), 'result'), 'left')
			->on('result.item_id', '=', 'item.id')
			->where('next_repeat.user_id', '=', Model_User::get_current_user());

		$paginate = Paginate::factory($orm)
			->limit($start, $length)
			->search_columns(array(
				'item.id',
				'item.question',
				'item.comment',
				'item.answer',
				'item.date_create',
				'next_repeat.next_date',
				'result.points',
			))
			->columns(array(
				'item.id',
				'item.question',
				'item.comment',
				'item.answer',
				'item.date_create',
				'next_repeat.next_date',
				'result.points',
				'result',
			));

		$datatables = DataTables::factory($paginate)
			->sort_columns(array(
				'id',
				'date_create',
				'question',
				'comment',
				'answer',
				'next_date',
				'result.points',
				'result',
			))
			->execute();

		foreach ($datatables->result() as $item)
		{
			$datatables->add_row(array
			(
				'<a href="/test/edit/'.$item->id.'">'.$item->id.'</a>',
				date('Y-m-d', strtotime($item->date_create)),
				$item->question,
				$item->comment,
				$item->answer,
				$item->next_date,
				$item->points,
				$item->result,
			));
		}

		$this->response->body($datatables->render());
	}
}
