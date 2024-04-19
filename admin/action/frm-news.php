<!DOCTYPE html>
<html lang="en">
<?php
include('action.php');
$db=new Action();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>frm-menu</title>
</head>
<body>
    <div class="wrap-frm shadow-sm p-3 mb-5 bg-body rounded " style="width: 98%;height:95%;">
        <div class="card-header d-flex justify-content-between align-items-center ml-0">
            <div class="title">New</div>
            <i class="fa-solid fa-circle-xmark fs-2 position-absolute top-0 start-100 translate-middle " id="btn-close"></i>
        </div>
        <form class="upl" enctype="multipart/form-data">
        <input type="text" value="0" class="form-control  d-none" id="txt-edit"  name="txt-edit">
        <div class="d-flex flex-row">
        <div style="width: 20%;" class="me-2">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" name="id">
        <label for="Od" class="form-label">OD</label>
        <input type="text" class="form-control" id="od" name="od">
        <label for="loaction" class="form-label">location</label>
        <input type="text" class="form-control" id="location" name="location">
        <label for="menu_id" class="form-label">Menu</label>
        <select class="form-select" name="menu_id" id="menu_id">
            <?php
              $get_data=$db->get_data("id,name","tbl_menu","id>0","id DESC","0,20");
              if($get_data!='0'){
                foreach($get_data as $row){
                    ?>
                     <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
                    <?php
                }
              }
            ?>
        </select>
        <label for="Status" class="form-label">(1=activ,2=delete)</label>
        <select class="form-select" aria-label="Default select example" name="status" id="status">
           <option value="1">1</option>
           <option value="2">2</option>
        </select>
        <label for="Photo" class="form-label">Photo</label>
        <div class="img-box mt-2 rounded-1 shadow-sm">
        <input type="file" class="form-control" id="txt-file" name="txt-file">
        </div>
        <input type="text" id="txt-photo" name="txt-photo" class="mt-3 d-none">
        </div>
        <div style="width: 80%;">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control mb-1" id="title" name="title">
        <div class="form-floating">
        <textarea class="form-control"  id="myTextarea" style="height: 400px; resize:none" name="des"></textarea>
        </div>
        </div>
        </div>
        <div class="footer mt-3 d-flex justify-content-end">
        <input class="btn btn-primary" type="button" value="save" id="btn-save">
        </div>
        </form>
    </div>
</body>
</html>