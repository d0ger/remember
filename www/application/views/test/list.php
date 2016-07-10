<?php
/**
 * Created by PhpStorm.
 * User: d0ger
 * Date: 17.05.2016
 * Time: 21:10
 */

/** @var Model_Test[] $tests */
?>

<div class="table-header row">
    <div class="date-create-col">Дата добавления</div>
    <div class="question-col">Вопрос</div>
    <div class="answer-col">Ответ</div>
</div>

<? foreach ($tests as $test): ?>
    <div class="row">
        <div><?=$test->date_create?></div>
        <div><?=$test->question?></div>
        <div><?=$test->answer?></div>
    </div>
<? endforeach; ?>
