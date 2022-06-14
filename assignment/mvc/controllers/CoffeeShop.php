<?php

class CoffeeShop extends Controller
{
    function index()
    {
        $coffeeShop = $this->model("CoffeeShopModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coffeeShops/index", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coffeeShops" => $coffeeShop->getAllCoffeeShop(), "coffeeShopModel" => $coffeeShop]);
    }
    function new()
    {
        $coffeeShop = $this->model("CoffeeShopModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coffeeShops/new", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coffeeShopModel" => $coffeeShop]);
    }
    function edit($id)
    {
        $coffeeShop = $this->model("CoffeeShopModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coffeeShops/edit", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coffeeShop" => $coffeeShop->getCoffeeShopWithId($id), "id" => $id, "coffeeShopModel" => $coffeeShop]);
    }
    function delete($id)
    {
        $coffeeShop = $this->model("CoffeeShopModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coffeeShops/delete", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coffeeShop" => $coffeeShop->getCoffeeShopWithId($id), "id" => $id, "coffeeShopModel" => $coffeeShop]);
    }

    function viewDetail($id)
    {
        $coffeeShop = $this->model("CoffeeShopModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/coffeeShops/detail", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "coffeeShop" => $coffeeShop->getCoffeeShopWithId($id), "id" => $id, "coffeeShopModel" => $coffeeShop, "coffeeShopDetail" => $coffeeShop->getCoffeeShopDetail($id)]);
    }
}
