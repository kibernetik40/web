<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form id="addForm" method="post" novalidate name="signin-form" enctype="multipart/form-data">
    <div class="form-element">
        <label>add your text</label>
        <textarea name="insert" rows="4" cols="50"></textarea>
        <br>
    </div>
    <div class="form-element">
        <label>Select image to upload</label>
        <input id="images" type="file" name="images[]" >
    </div>
    <button id="addButton" class="btn btn-outline-primary btn-lg w-100 " type="button">SELECT</button>
<!--    <button type="submit" name="submit" value="">Upload Image</button>-->
    <div class="alSuccess alert-success fadeIn alert   col-md-6 mb-3">'DB' is missing</div>
</form>

<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="script.js"></script>

</body>
</html>
