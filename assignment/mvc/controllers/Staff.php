<?php

class Staff extends Controller
{
    function index()
    {
        $staff = $this->model("StaffModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/staffs/index", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "staffs" => $staff->getAllStaff(), "staffModel" => $staff]);
    }
    function new()
    {
        $staff = $this->model("StaffModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/staffs/new", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "staffModel" => $staff]);
    }
    function edit($id)
    {
        $staff = $this->model("StaffModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/staffs/edit", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "staff" => $staff->getStaffWithId($id), "id" => $id, "staffModel" => $staff]);
    }
    function delete($id)
    {
        $staff = $this->model("StaffModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/staffs/delete", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "staff" => $staff->getStaffWithId($id), "id" => $id, "staffModel" => $staff]);
    }
}
