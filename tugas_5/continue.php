<?php
echo "<br><br>Continue<br>";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . " ";
}
?>
