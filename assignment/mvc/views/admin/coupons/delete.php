<?php
if (isset($data["id"])) {
    $id = $data["id"];
    $sql = "call deleteCoupon($id)";
    $con = $data["couponModel"]->con;
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('xoa Coupon thanh cong');
            window.location.href = 'http://localhost/assignment/Coupon/index';
            </script>";
    } else {
        echo ("<script type='text/javascript'>alert('1" . mysqli_error($con) . "');
        window.location.href = 'http://localhost/assignment/Coupon/index';
        </script>");
    }
}
