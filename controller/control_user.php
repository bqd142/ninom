<?php
    if(isset($_POST['submit_contact'])){
      include("../model/control_contact.php");
      $get_data=new data();
      $insert=$get_data->insert_table($_POST['Ten'],$_POST['Email'],$_POST['Phone'],$_POST['Messages']);  
      if($insert) echo "<script>alert('SEIKOU')
                 window.location='../Guest/contact.php'</script>";
      else echo "<script>alert('MAKE')</script>";
    }
  ?>