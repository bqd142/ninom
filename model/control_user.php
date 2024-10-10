<?php
include "connect.php";
class data_account{
    public function insert_account($name,$email,$pass){
        global $conn;
        $sql = "INSERT INTO user_inf(username,email,pass)
                values('$name','$email','$pass')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function sl_username($name){
        global $conn;
        $sql = "SELECT*FROM user_inf where username = '$name'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_pass($name, $newpass){
        global $conn;
        $sql = " UPDATE user_inf SET pass = '$newpass' WHERE username = '$name' ";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_profile($username, $address, $avatar, $gender, $hobby, $email ){
        global $conn;
        $sql = "UPDATE user_inf 
                SET address = '$address', avatar = '$avatar', gender = '$gender', hobby = '$hobby', email = '$email' 
                WHERE username = '$username'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}

?>