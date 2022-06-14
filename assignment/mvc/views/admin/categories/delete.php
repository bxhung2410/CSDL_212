<?php
if (isset($data["id"])) {
    $id = $data["id"];

    $sql = "call deleteCategory($id)";
    $con = $data["categoryModel"]->con;
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('xoa category thanh cong');
            window.location.href = 'http://localhost/assignment/Category/index';
            </script>";
    } else {
        echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
        window.location.href = 'http://localhost/assignment/Category/index';
        </script>");
    }
}
