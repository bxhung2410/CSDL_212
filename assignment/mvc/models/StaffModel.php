<?php
class StaffModel extends DB
{
    public function getAllStaff()
    {
        $qr = "SELECT * FROM staff";
        return mysqli_query($this->con, $qr);
    }
    public function getStaffWithId($id)
    {
        $qr = "SELECT * FROM staff WHERE id = $id";
        return mysqli_query($this->con, $qr);
    }
}
