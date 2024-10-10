<?php
    include("../model/control_product.php");
    $get_data = new product();

    if(isset($_GET['up'])){
        $select = $get_data->select_product_id($_GET['up']);
        foreach ($select as $se_pro);
    }
    if(isset($_POST['txtinsert'])){
        move_uploaded_file($_FILES['Picture']['tmp_name'],'../upload/'.$_FILES['Picture']['name']);
        $insert=$get_data->insert_product($_POST['NamePro'],$_POST['NumberPro'],$_FILES['Picture']['name'],$_POST['CategoryPro'],$_POST['DatePro'],$_POST['PricePro'],$_POST['DesPro']);
          if($insert){echo "<script>alert('Thêm mới sản phẩm thành công');
            window.location='../advance-admin/product_select.php';</script>";} 
        else {echo "<script>alert('Chưa thực hiện được');</script>";}
    }

    if(isset($_POST['txtupdate'])) {
        if(!empty($_FILES['Picture']['tmp_name'])){
            move_uploaded_file($_FILES['Picture']['tmp_name'],'../upload/'.$_FILES['Picture']['name']);
            $picture = $_FILES['Picture']['name'];} 
        else{$picture = $se_pro['Picture'];}
        $update=$get_data->update_product($_POST['NamePro'],$_POST['NumberPro'],$picture,$_POST['CategoryPro'],$_POST['DatePro'],$_POST['PricePro'],$_POST['DesPro'],$_GET['up']);
          if($update){echo "<script>alert('Cập nhật sản phẩm thành công');
            window.location='../advance-admin/product_select.php';</script>";} 
        else{echo "<script>alert('Chưa thực hiện được');</script>";}
    }
?>


