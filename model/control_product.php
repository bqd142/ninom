<?php
    include ("connect.php");
    class product{
        public function insert_product($NamePro, $NumberPro, $Picture, $CategoryPro, $DatePro, $PricePro, $DesPro){
            global $conn;
            $sql="insert into product(NamePro, NumberPro, Picture, CategoryPro, DatePro, PricePro, DesPro)
                                values('$NamePro', '$NumberPro', '$Picture', '$CategoryPro', '$DatePro', '$PricePro', '$DesPro')";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_product()
        {
            global $conn;
            $sql="select * from product";

            $run=mysqli_query($conn,$sql);
            return $run;
        } 
        public function select_product_id($id)
        {
            global $conn;
            $sql = "select * from product where ID_Pro='$id'"; 
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }
        public function update_product($NamePro, $NumberPro, $Picture, $CategoryPro, $DatePro, $PricePro, $DesPro, $id)
        {
            global $conn;
            $sql = "update product set NamePro = '$NamePro', 
                                       NumberPro='$NumberPro', 
                                       Picture='$Picture', 
                                       CategoryPro='$CategoryPro', 
                                       DatePro='$DatePro', 
                                       PricePro='$PricePro', 
                                       DesPro='$DesPro'
                                       where ID_Pro='$id'";
            $run=mysqli_query($conn,$sql);
            return $run; 
        }
        public function delete_product($id)
        {
            global $conn;
            $sql="delete from product where ID_Pro='$id'"; 
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        
    }
?>

