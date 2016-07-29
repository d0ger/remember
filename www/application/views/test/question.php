<?php
/** @var Model_Item $item */
?>

<form method="post">
    <input type="hidden" name="result_id" value="<?=$item->result_id?>">
    <div><?=$item->question?></div>
    <br>
    <button type="submit">Далее</button>
</form>

