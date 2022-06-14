<?php
class CouponModel extends DB
{
    public function getAllCoupon()
    {
        $qr = "SELECT * FROM coupon";
        return mysqli_query($this->con, $qr);
    }

    public function getCouponWithId($id)
    {
        $qr = "SELECT * FROM coupon WHERE id = '$id'";
        return mysqli_query($this->con, $qr);
    }
}
