<?php

 ?>

<html>

<h1>
    <?php
    if (isset($sum))
        echo $sum
    ?>
</h1>
<form action="index.php" >
    <input type="text" name ="x1" ><input type="text" name ="operation" ><input  type ="text" name="x2" >
    <input type="submit" value="=">
</form>

</html>