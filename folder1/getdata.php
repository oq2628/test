<?php
class getdata extends connDB{
    function get_data(){

        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        if (!mysqli_select_db($this->conn,$this->dbname))
            die("Unable to select database: " . mysqli_error());
            $sql_stmt = "SELECT * FROM testdb"; 
            $result = mysqli_query($this->conn,$sql_stmt);
            $rows = mysqli_fetch_all($result);
            print_r($rows);
            // return $rows;
    }
}
?>