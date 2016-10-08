<?php
/** @var Model_Item $item */
?>

<form method="post">
    <input type="hidden" name="result_id" value="<?=$item->result_id?>">
    <div><?=$item->question?></div>
    <br>
    <div><?=$item->comment?></div>
    <br>
    <div><?=$item->answer?></div>
    <br>
    <button type="submit" name="result" value="1">Верно</button>
    <button type="submit" name="result" value="-1">Не верно</button>
</form>

