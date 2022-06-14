<?php 
    class MenuItemModel extends DB{
        public function getAllMenuItem(){
            $qr = "SELECT * FROM menuitem";
            return mysqli_query($this->con, $qr);
        }

        public function getMenuItemWithID($id){
            $qr = "SELECT * FROM menuitem WHERE id = $id";
            return mysqli_query($this->con, $qr);
        }
    }
