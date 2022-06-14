<?php

class Coupon extends Controller
{
    function index()
    {
        $coupon = $this->model("CouponModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coupons/index", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coupons" => $coupon->getAllCoupon(), "couponModel" => $coupon]);
    }
    function new()
    {
        $coupon = $this->model("CouponModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coupons/new", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "couponModel" => $coupon]);
    }
    function edit($id)
    {
        $coupon = $this->model("CouponModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coupons/edit", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coupon" => $coupon->getCouponWithId($id), "id" => $id, "couponModel" => $coupon]);
    }
    function delete($id)
    {
        $coupon = $this->model("CouponModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coupons/delete", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coupon" => $coupon->getCouponWithId($id), "id" => $id, "couponModel" => $coupon]);
    }
}
