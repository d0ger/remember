<?php
/**
 * Created by PhpStorm.
 * User: d0ger
 * Date: 17.05.2016
 * Time: 21:10
 */
?>
<form method="post">
    <H3>Добавить новый вопрос</H3>

    <div class="form-row">
        <div><label for="question">Вопрос</label></div>
        <div><textarea id="question" name="question"></textarea></div>
    </div>

    <div class="form-row">
        <div><label for="answer">Ответ</label></div>
        <div><textarea id="answer" name="answer"></textarea></div>
    </div>

    <div class="form-row">
        <div><label for="comment">Коммент</label></div>
        <div><textarea id="comment" name="comment"></textarea></div>
    </div>


    <div><button type="submit">Добавить</button></div>

</form>