<?php
   $id=$_GET['del'];
   include('../model/control_product.php');
    $get_data=new product();
    $delete=$get_data->delete_product($id);
        if($delete) echo "<script> alert('Xóa sản phẩm thành công')
                        window.location='../advance-admin/product_select.php'</script>";
        else echo "<script>alert('Chưa thực thi được')</script>";
   
?>