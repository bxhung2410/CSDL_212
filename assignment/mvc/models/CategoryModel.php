<?php
class CategoryModel extends DB
{
    public function getAllCategoryOrderById()
    {
        $qr = "SELECT * FROM category ORDER BY id ASC";
        return mysqli_query($this->con, $qr);
    }

    public function countMenuItemsByCategory($id)
    {
        $qr = "SELECT * FROM menuitem WHERE categoryId = $id";
        return  mysqli_num_rows(mysqli_query($this->con, $qr));
    }

    public function getCategoryWithID($id)
    {
        $qr = "SELECT name FROM category WHERE id = $id";
        return mysqli_query($this->con, $qr);
    }
}
