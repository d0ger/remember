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
//        $model = new self();
////        $next_repeat = $model
////            ->where('id', '=', 2)
////            ->find();
//
//        $model->update()
//            ->set('next_date', DB::expr('DATE_ADD(next_date,INTERVAL 1 DAY'))
//            ->where('id', '=', 2)
//            ->save();
//        $add_days = 1;
//
//        $sql = "update next_repeat set next_date = DATE_ADD(next_date,INTERVAL 1 DAY)
//                where user_id = %d and item_id = %d";
//
//        $sql = sprintf($sql, Model_User::get_current_user()->id, $item_id);

        $model = new Model_Result();
        $result = $model
            ->select(array(DB::expr('sum(result.result)'), 'points'))
            ->with('tests')
            ->where('tests.user_id', '=', Model_User::get_current_user())
            ->where('result.item_id', '=', $item_id)
            ->find()->as_array();

        echo Debug::vars($result);
        exit;
        $days = '';

        DB::update('next_repeat')
            ->set(array('next_date' => DB::expr('DATE_ADD(next_date,INTERVAL 1 DAY)')))
            ->where('user_id', '=', Model_User::get_current_user()->id)
            ->where('item_id', '=', $item_id)
            ->execute();
    }
}