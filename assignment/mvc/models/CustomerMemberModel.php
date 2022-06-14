<?php
class CustomerMemberModel extends DB
{
    public function getAllCustomerMember()
    {
        $qr = "SELECT * FROM customermember";
        return mysqli_query($this->con, $qr);
    }
    public function getCustomerMemberWithId($id)
    {
        $qr = "SELECT * FROM customermember WHERE id = $id";
        return mysqli_query($this->con, $qr);
    }
}
