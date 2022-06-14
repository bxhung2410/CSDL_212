<?php

class CustomerMember extends Controller
{
    function index()
    {
        $customerMember = $this->model("CustomerMemberModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/customerMembers/index", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "customerMembers" => $customerMember->getAllCustomerMember(), "customerMemberModel" => $customerMember]);
    }
    function new()
    {
        $customerMember = $this->model("CustomerMemberModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/customerMembers/new", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "customerMemberModel" => $customerMember]);
    }
    function edit($id)
    {
        $customerMember = $this->model("CustomerMemberModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/customerMembers/edit", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "customerMember" => $customerMember->getCustomerMemberWithId($id), "id" => $id, "customerMemberModel" => $customerMember]);
    }
    function delete($id)
    {
        $customerMember = $this->model("CustomerMemberModel");
        $layout = $this->view("layouts/admin", ["admin_page" => "admin/customerMembers/delete", "admin_header" => "shared/admin_header", "admin_sidebar" => "shared/admin_sidebar", "customerMember" => $customerMember->getCustomerMemberWithId($id), "id" => $id, "customerMemberModel" => $customerMember]);
    }
}
