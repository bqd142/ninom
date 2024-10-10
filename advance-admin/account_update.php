<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ninom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

  <?php
    include("../model/control_user.php");
    $id = $_GET['id'];
    $model = new data_account();
    $infor = $model->sl_id($id);
    $infor = $infor->fetch_assoc(); 
  ?>
    <div class="container" style="margin-bottom: 100px;">
        <form method="post" action="../controller/sub_change_inf.php" enctype="multipart/form-data"> 
            <div class="row mt-5">
                <div class="offset-1 col-4">
                    <h4>HÌNH ĐẠI DIỆN</h4>
                    <img class="rounded" width="165px" height="165px" src="../upload/<?php echo$infor['avatar'];?>">
                </div>
                <div class="col-7 lh-lg" >
                    <h4>THÔNG TIN CÁ NHÂN</h4>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        EMAIL:
                        <input type="text" class="form-control mb-3" name="txtemail" value="<?php echo$infor['email'];?>"> 
                        PASSWORD:
                        <input type="text" class="form-control mb-3" name="txtpass" value="<?php echo$infor['pass'];?>"> 
                        ADDRESS:
                        <input type="textarea" class="form-control mb-3" name="txtaddress" value="<?php echo$infor['address'];?>"> 
                        AVATAR:
                        <input type="file" class="form-control mb-3" name="txtavatar">
                        GENDER:
                        <select class="form-select mb-3" name="txtgender">
                            <option value="Male" <?php if ($infor['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if ($infor['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                            <option value="Other" <?php if ($infor['gender'] == 'Other') echo 'selected'; ?>>Other</option>
                        </select>
                        HOBBY:
                        <textarea name="txthobby" class="form-control"> <?php echo$infor['hobby'];?></textarea>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                <button name="txtupdate_id"  type="submit" style="width: 100px;" class="btn btn-dark">Cập Nhật</button>
            
            </div>
            </div>
        </form>
    </div>
</body>

</html>