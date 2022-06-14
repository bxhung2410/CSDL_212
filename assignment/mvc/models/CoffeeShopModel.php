<?php
class CoffeeShopModel extends DB
{
    public function getAllCoffeeShop()
    {
        $qr = "SELECT * FROM coffeeshop";
        return mysqli_query($this->con, $qr);
    }

    public function countStaffsByCoffeeShop($id)
    {
        $qr = "SELECT * FROM staff WHERE coffeeShopId = $id";
        return  mysqli_num_rows(mysqli_query($this->con, $qr));
    }

    public function getCoffeeShopWithId($id)
    {
        $qr = "SELECT * FROM coffeeshop WHERE id = $id";
        return mysqli_query($this->con, $qr);
    }

    public function getCoffeeShopDetail($id)
    {
        $qr = "call StaffInfo($id)";
        return mysqli_query($this->con, $qr);
    }
}
