<?php
/**
 * @var Model_Item $item
 */
?>
<form method="post">

    <H3>Редактирование вопроса №<?=$item->id?></H3>

    <div class="form-row">
        <div><label for="question">Вопрос</label></div>
        <div><textarea id="question" name="question"><?=$item->question?></textarea></div>
    </div>

    <div class="form-row">
        <div><label for="answer">Ответ</label></div>
        <div><textarea id="answer" name="answer"><?=$item->answer?></textarea></div>
    </div>

    <div class="form-row">
        <div><label for="comment">Коммент</label></div>
        <div><textarea id="comment" name="comment"><?=$item->comment?></textarea></div>
    </div>

    <div><button type="submit">Сохранить</button></div>

</form>