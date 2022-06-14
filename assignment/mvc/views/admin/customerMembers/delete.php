<?php
if (isset($data["id"])) {
    $id = $data["id"];
    $sql = "DELETE FROM customermember WHERE id ='$id'";
    if (($data["customerMemberModel"]->con)->query($sql)) {
        echo "<script type='text/javascript'>alert('xoa Customer member thanh cong');
            window.location.href = 'http://localhost/assignment/CustomerMember/index';
            </script>";
    } else {
        echo "<script type='text/javascript'>alert('xoa Customer member that bai');
            window.location.href = 'http://localhost/assignment/CustomerMember/index';
            </script>";
    }
}
