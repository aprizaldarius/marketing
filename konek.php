<?php
$host = "202.52.146.26";
$user = "ppikublc_cite19";
$pass = "bombatas92";
$database = "ppikublc_db_cite";

$konek = mysqli_connect($host,$user,$pass,$database);
if($konek){
    echo "Konek";
}else{
    echo "gagal";
}

?>