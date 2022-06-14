<?php

class Order extends Controller
{
    function index()
    {
        $order = $this->model("OrderModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/orders/index", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "orders" => $order->getAllOrder()]);
    }
    function viewDetail($id)
    {

        $order = $this->model("OrderModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/orders/detail", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "id" => $id, "orderModel" => $order, "orderDetail" => $order->getOrderDetail($id), "order" => $order->getOrderById($id), "customer" => $order->getCustomerByOrder($id),]);
    }
}
