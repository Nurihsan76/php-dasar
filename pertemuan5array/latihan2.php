<?php
// pengulangan pada array
// for / foreach
$angka= [19, 04, 2001,];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: gray;
        text-align:center;
        line-height:50px;
        float: left;
    }
    .clear { clear: both;}
    
    </style>
</head>
<body>
<!-- 
<?php for($i=0; $i<count($angka); $i++) {?>

<div class="kotak"><?= $angka [$i];?></div>

<?php } ?> -->

<div class="clear"></div>


<?php foreach ( $angka as $a) {?>
<div class="kotak"><?php echo $a; ?></div>

<?php } ?>





    
</body>
</html>