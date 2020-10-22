<?php
//$servername = "localhost";
//$username = "nurihsan";
//$password = "pondokit";
//
// Create connection
//$conn = mysqli_connect($servername, $username, $password);
//
// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//


//$servername = "localhost";
//$username = "nurihsan";
//$password = "pondokit";
//
// Create connection
//$conn = new mysqli($servername, $username, $password);
//
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";




// $servername = "localhost";
// $username = "nurihsan";
// $password = "pondokit";

// try {
//    $conn = new PDO("mysql:host=$servername;dbname=evaluasi", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully"; 
//    }
// catch(PDOException $e)
//    {
//    echo "Connection failed: " . $e->getMessage();
//    }


class connectpdo {
public $server = 'localhost',
        $username = 'nurihsan',
        $password = 'pondokit';

// public function __construct(){
// // $this->connect = new PDO('mysql:host=localhost; dbname=evaluasi', 'nurihsan', 'pondokit');
//  $this->connect = new PDO("mysql:host=$this->server; dbname=test", $this->username, $this->password);
// }
// public function datasantri(){
//    $query = "select * from santri";
//    $show = $this->connect->prepare($query);
//    $show->execute();
//    $result = $show->fetchALL(pdo::FETCH_ASSOC);
//    print_r($result);
// }

// // public function getdata(){
// //  $query = "SELECT nama FROM santri";
// //  $show = $this->connect->prepare($query);
// //  // $show->execute(["muhammad", 70]);
// //  $show->execute();
// // $result = $show->fetchALL(pdo::FETCH_ASSOC);
// // print_r($result);
// //

$lol = new connectpdo;
$lol->datasantri();





?>
