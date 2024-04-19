<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>frm-menu</title>
</head>

<body>
    <div class="wrap-frm shadow-sm p-3 mb-5 bg-body rounded" style="width: 600px;height:580px;">
        <div class="card-header d-flex justify-content-between align-items-center ml-0">
            <div class="title">Menu</div>
            <i class="fa-solid fa-circle-xmark fs-2 position-absolute top-0 start-100 translate-middle " id="btn-close"></i>
        </div>
        <form class="upl" enctype="multipart/form-data">
        <input type="text" value="0" class="form-control d-none" id="txt-edit" name="txt-edit">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" name="id">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="name">
        <label for="Od" class="form-label">OD</label>
        <input type="text" class="form-control" id="od" name="od">
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
        <div class="footer mt-3 d-flex justify-content-end">
        <input class="btn btn-primary " type="button" value="save" id="btn-save">
        </div>
        </form>
    </div>
</body>

</html>