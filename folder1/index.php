<?php
require_once "./conndb.php";
$conn=new connDB();
$conns=$conn->connectDB();

require_once "./getdata.php";
$get=new getdata();
$gets=$get->get_data();
echo "hello";

?>