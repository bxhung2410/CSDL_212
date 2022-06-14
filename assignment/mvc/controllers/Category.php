<?php

class Category extends Controller
{
    function index()
    {
        $category = $this->model("CategoryModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/categories/index", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "categories" => $category->getAllCategoryOrderById(), "categoryModel" => $category]);
    }
    function new()
    {
        $category = $this->model("CategoryModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/categories/new", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "categoryModel" => $category]);
    }
    function edit($id)
    {
        $category = $this->model("CategoryModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/categories/edit", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "category" => $category->getCategoryWithId($id), "id" => $id, "categoryModel" => $category]);
    }
    function delete($id)
    {
        $category = $this->model("CategoryModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/categories/delete", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "category" => $category->getCategoryWithId($id), "id" => $id, "categoryModel" => $category]);
    }
}
