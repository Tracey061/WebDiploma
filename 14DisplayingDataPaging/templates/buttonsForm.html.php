<form action="buttons.php" method="post">     
    <input type="hidden" name="start" value=<?=$start ?>>
    <input type="hidden" name="count" value=<?=$count ?>>

    <?php
    //  echo $start;
    if ($start): ?>
        <input type="submit" name="prev" value="<">
    <?php endif; ?>
    <?php
    // echo $count;

    $count = $count/5;
    // echo $count;
    for ($i=1;$i<=$count+1;$i++):
        ?>
        <input type="submit" name="page" value="<?= $i ?>">
    <?php endfor; ?>

    <?php

    // echo $count*5;
    if ($count*5 > ($start + 5)): ?>
        <input type="submit" name="next" value=">">
    <?php endif; ?>
</form>



    