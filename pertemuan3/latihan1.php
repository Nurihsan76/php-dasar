<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for ($i = 0; $ < 5; $i++ ) {Hello, Nur Ihsan <br>;}

// $i = 0;
// while ($i < 5;) {
//     echo "Hello, Nur ihsan <br>;"
//     $i++;
// }

// $i = 0
// do {
//     echo "Hello, Nur Ihsan <br>;"
//     $i++;
// } while($i < 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php
    for ($i = 1; $i <=3; $i++ ) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++ ) {
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>




















