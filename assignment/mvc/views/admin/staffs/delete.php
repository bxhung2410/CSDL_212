<?php
if (isset($data["id"])) {
    $id = $data["id"];
    $sql = "call deleteStaff($id)";
    $con = $data["staffModel"]->con;

    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('xoa staff thanh cong');
            window.location.href = 'http://localhost/assignment/Staff/index';
            </script>";
    } else {
        echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
        window.location.href = 'http://localhost/assignment/Staff/index';
        </script>");
    }
}
