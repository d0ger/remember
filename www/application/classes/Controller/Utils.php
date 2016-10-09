<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Utils extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!!');
	}

	public function action_transcription()
	{
		$model = new Model_Item();
		$items = $model->find_all();

//		preg_match('/\[.*\]/', $model->answer, $matches);
//		echo Debug::vars($matches);
//		echo Debug::vars($model->answer);
//		exit;

		foreach ($items as $item) {
			/** @var Model_Item $item */
			preg_match('/\[.*\]/', $item->answer, $matches);

			if ($matches) {
				$item->comment = $matches[0];
				$item->answer = preg_replace('/\[.*\]/', '', $item->answer);
				$item->save();
			}

			echo Debug::vars($matches);
		}
	}

} // End Welcome
