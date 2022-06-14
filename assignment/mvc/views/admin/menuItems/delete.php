<?php
if (isset($data["id"])) {
    $id = $data["id"];
    $sql = "DELETE FROM menuitem WHERE id =$id";
    if (($data["menuItemModel"]->con)->query($sql)) {
        echo "<script type='text/javascript'>alert('xoa menuItem thanh cong');
            window.location.href = 'http://localhost/assignment/MenuItem/index';
            </script>";
    } else {
        echo "<script type='text/javascript'>alert('xoa menuItem that bai');
            window.location.href = 'http://localhost/assignment/MenuItem/index';
            </script>";
    }
}
