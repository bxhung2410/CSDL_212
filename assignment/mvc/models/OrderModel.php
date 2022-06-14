<?php
class OrderModel extends DB
{
    public function getAllOrder()
    {
        $qr = "SELECT * FROM orderdetail";
        return mysqli_query($this->con, $qr);
    }
    public function getOrderById($id)
    {
        $qr = "SELECT * FROM order WHERE id = $id";
        return mysqli_query($this->con, $qr);
    }

    public function getOrderDetail($id)
    {
        $qr = "call MenuOrderdetail($id)";
        return mysqli_query($this->con, $qr);
    }

    public function getCustomerByOrder($id)
    {
        
        $qr = "SELECT customermember.id, customermember.name
        FROM customermember, orderdetail
        WHERE customermember.id = orderdetail.customerId";
        return mysqli_query($this->con, $qr);
    }
}
