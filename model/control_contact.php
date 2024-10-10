<?php
    include ("connect.php");
    class data{
        public function insert_table($Ten, $Email, $Phone, $Messages){
            global $conn;
            $sql="insert into contact (Ten,Email,Phone,Messages)
                                values('$Ten','$Email','$Phone','$Messages')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }

        public function select_table(){
            global $conn;
            $sql="select * from contact";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
    }
?>