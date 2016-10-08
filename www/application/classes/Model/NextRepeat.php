<?php

/**
 * Date: 16.05.2016
 *
 * @property int   id
 * @property int   user_id
 * @property int   item_id
 * @property date   next_date
 */
class Model_NextRepeat extends ORM
{
    protected $_table_name = 'next_repeat';

    public static function update_next_date($item_id)
    {
        $model = new Model_Result();
        $result = $model
            ->select(array(DB::expr('sum(result.result)'), 'points'))
            ->with('tests')
            ->where('tests.user_id', '=', Model_User::get_current_user())
            ->where('result.item_id', '=', $item_id)
            ->find()
            ->as_array();

        $days = $result['points'];

        if ($days >= 2) {
            $days = $days * 2;
        } else {
            $days = 1;
        }

        DB::update('next_repeat')
            ->set(array('next_date' => DB::expr('DATE_ADD(NOW(), INTERVAL '. $days .' DAY)')))
            ->where('user_id', '=', Model_User::get_current_user()->id)
            ->where('item_id', '=', $item_id)
            ->execute();
    }

    public static function add_new_item($item_id)
    {
        $model = new self();
        $model->item_id = $item_id;
        $model->user_id = Model_User::get_current_user()->id;
        $model->next_date = date("Y-m-d");
        $model->save();
    }
}