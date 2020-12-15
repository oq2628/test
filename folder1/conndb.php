<?php
class connDB {
    public $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "aa";
    function connectDB(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);

        $sql = "CREATE DATABASE IF NOT EXISTS $this->dbname";
        if ($this->conn->query($sql) === TRUE) {
        } else {
            echo "Error creating database: " . $this->conn->error;
        }
        $sql1 = "CREATE TABLE IF NOT EXISTS `aa`.`testdb` (
            `id` INT(100) UNSIGNED AUTO_INCREMENT NOT NULL ,
            `title` VARCHAR(100) NOT NULL ,
            `description` TEXT NOT NULL ,
            `image` VARCHAR(200) NOT NULL ,
            `status` TEXT NOT NULL ,
            `create_at` DATETIME NOT NULL ,
            `update_at` DATETIME NOT NULL ,
            PRIMARY KEY (`id`)) ENGINE = InnoDB";
            if ($this->conn->query($sql1) === TRUE) {
            } else {
                echo "Error creating table: " . $this->conn->error;
            }
            $sql_stmt = "SELECT * FROM testdb"; 
            $result = mysqli_query($this->conn,$sql_stmt);
            if($result==null){
                $sql2="INSERT INTO `aa`.`testdb`(`title`, `description`, `image`, `status`)
                VALUES  ('title1','description1','https://asianwiki.com/images/b/ba/Kim_Hyun-Soo-2000-p01.jpg','enable'),
                        ('title2','description2','https://i.pinimg.com/originals/ee/72/ff/ee72ff492fcd7af89d26fe79f0a52143.jpg','enable'),
                        ('title3','description3','https://pbs.twimg.com/media/DVgITLUVQAA37r6?format=jpg&name=large','enable'),
                        ('title4','description4','https://64.media.tumblr.com/f4fd2383da66cae8d20a962dfb8e38ee/075d8323f11e4083-0c/s1280x1920/dcc364558fc8a658ae5df2bff89c18a3d6988f52.jpg','enable'),
                        ('title5','description5','http://localhost/new/models/image/1.jpg','enable')";
                if ($this->conn->query($sql2) === TRUE) {
                    } else {
                    echo "Error: " . $sql2 . "<br>" . $this->conn->error;
                    }
            }
    }
}
?>