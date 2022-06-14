<?php
if (isset($data["id"])) {
    $id = $data["id"];

    $sql = "call deleteCoffeeShop($id)";
    $con = $data["coffeeShopModel"]->con;
    if (mysqli_query($con, $sql)) {
        echo "<script type='text/javascript'>alert('xoa coffee shop thanh cong');
            window.location.href = 'http://localhost/assignment/CoffeeShop/index';
            </script>";
    } else {
        echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
        window.location.href = 'http://localhost/assignment/CoffeeShop/index';
        </script>");
    }
}
