<?php
$santri = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
     ]

    ];

asort ($santri);
echo "urutan santri sesuai nemer induk" . "\n";
foreach ($santri as $k) {
    echo $k["id"] . " | " . $k["name"] . " | " . $k["division"] . " | " . $k["age"] . "\n";
}

echo "urutan santri sesuai nama" . "\n";
foreach ($santri as $k) {
$nama [] = $k["name"];
}
array_multisort($nama, SORT_ASC, $santri);
foreach ($santri as $k){
echo $k["id"] . " | " . $k["name"] . " | " . $k["division"] . " | " . $k["age"] . "\n";
}

echo "data santri dengan divisi backend" . "\n";
foreach ($santri as $k) {
if ($k["division"] == "PHP Backend"){
    echo $k["id"] . " | " . $k["name"] . " | " . $k["division"] . " | " . $k["age"] . "\n";
}
}

echo "jumlah santri dengan umur dibawah 25" . "\n";
foreach ($santri as $k) {
if ($k["age"] > 25){
}
}
$jumlah = count($k); 
echo $jumlah . "\n";

echo "rerata umur santri" . "\n";
foreach ($santri as $k) {
$jum [] = $k["age"];
}
$total = array_sum($jum)/count($jum);
echo $total . "\n";
 
echo "santri termuda" . "\n";
foreach ($santri as $k) {
$age [] = $k["age"];
}
array_multisort($age, SORT_DESC, $santri);
foreach ($santri as $k){

}

echo $k["id"] . " | " . $k["name"] . " | " . $k["division"] . " | " . $k["age"] . "\n";




?>
