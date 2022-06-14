<?php

class MenuItem extends Controller
{
    function index()
    {
        $menuItem = $this->model("MenuItemModel");
        $category = $this->model("CategoryModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/menuItems/index", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "menuItems" => $menuItem->getAllMenuItem(), "categories" => $category->getAllCategoryOrderById()],);
    }

    function new()
    {
        $menuItem = $this->model("MenuItemModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/menuItems/new", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "menuItemModel" => $menuItem]);
    }
    function edit($id)
    {
        $menuItem = $this->model("MenuItemModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/menuItems/edit", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "menuItem" => $menuItem->getMenuItemWithId($id), "id" => $id, "menuItemModel" => $menuItem]);
    }
    function delete($id)
    {
        $menuItem = $this->model("MenuItemModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/menuItems/delete", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "menuItem" => $menuItem->getMenuItemWithId($id), "id" => $id, "menuItemModel" => $menuItem]);
    }
}
