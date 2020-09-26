<?php
echo "masukkan nama :";
$data["nama"]  = trim(fgets(STDIN));
echo "masukkan asal :";
$data["asal"]  = trim(fgets(STDIN));

print_r ($data);
