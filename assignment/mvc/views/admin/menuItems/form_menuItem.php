<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = $_POST['image'];
            $categoryId = $_POST['categoryId'];
            if (!isset($data["id"])) {
                $result = ($data["menuItemModel"]->con)->query("INSERT INTO menuitem (id,name,price,description,image, categoryId) VALUES (N'$id', N'$name', N'$price', N'$description',N'$image', N'$categoryId')");
                if ($result) {
                    echo "<script type='text/javascript'>alert('them menu item thanh cong');
                            window.location.href = 'http://localhost/assignment/MenuItem/index';
                            </script>";
                } else {
                    echo "<script type='text/javascript'>alert('them menu item that bai');
                    window.location.href = 'http://localhost/assignment/MenuItem/index';
                    </script>";;
                }
            } else {
                echo $categoryId;

                $result = ($data["menuItemModel"]->con)->query("UPDATE menuitem SET name = N'$name', price = N'$price', description = N'$description',image = N'$image', categoryId = N'$categoryId'   WHERE id = N'$id'");
                if ($result) {
                    echo "<script type='text/javascript'>alert('cap nhat menu item thanh cong');
                            window.location.href = 'http://localhost/assignment/MenuItem/index';
                            </script>";
                } else {
                    echo "<script type='text/javascript'>alert('cap nhat menu item that bai');
                            window.location.href = 'http://localhost/assignment/MenuItem/index';
                            </script>";
                }
            }
        }
        ?>
        <?php
        if (isset($data["menuItem"])) {
            while ($row = mysqli_fetch_assoc($data["menuItem"])) {
        ?>
                <form method="POST" action="">
                    <div class="row form-group">
                        <label for="id" class="col-sm-2 col-form-label input-label">id</label>
                        <div class="col-sm-10">
                            <input type="number" name="id" class="form-control" placeholder="Please input id" value="<?php if (isset($data["id"])) echo $data["id"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Please input name" value="<?php echo $row["name"] ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="price" class="col-sm-2 col-form-label input-label">price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" class="form-control" placeholder="Please input price" value="<?php echo $row["price"] ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="description" class="col-sm-2 col-form-label input-label">description</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" class="form-control" placeholder="Please input description" value="<?php echo $row["description"] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="image" class="col-sm-2 col-form-label input-label">image</label>
                        <div class="col-sm-10">
                            <input type="text" name="image" class="form-control" placeholder="Please input image url" value="<?php echo $row["image"] ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="categoryId" class="col-sm-2 col-form-label input-label">category</label>
                        <div class="col-sm-10">
                            <select name="categoryId" class="form-control">
                                <option value="1">Cafe</option>
                                <option value="2">Tea</option>
                                <option value="3">Juice</option>
                                <option value="4">Food</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <input type="submit" value="Save changes" class="btn btn-primary" name="submit">
                    </div>
                </form>
            <?php
            }
        } else {
            ?>
            <form method="POST" action="">
                <div class="row form-group">
                    <label for="id" class="col-sm-2 col-form-label input-label">id</label>
                    <div class="col-sm-10">
                        <input type="number" name="id" class="form-control" placeholder="Please input id" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Please input name" required="true">
                    </div>
                </div>

                <div class="row form-group">
                    <label for="price" class="col-sm-2 col-form-label input-label">price</label>
                    <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" placeholder="Please input price" required="true">
                    </div>
                </div>

                <div class="row form-group">
                    <label for="description" class="col-sm-2 col-form-label input-label">description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" placeholder="Please input description">
                    </div>
                </div>

                <div class="row form-group">
                    <label for="image" class="col-sm-2 col-form-label input-label">image</label>
                    <div class="col-sm-10">
                        <input type="text" name="image" class="form-control" placeholder="Please input image url" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="categoryId" class="col-sm-2 col-form-label input-label">category</label>
                    <div class="col-sm-10">
                        <select name="categoryId" class="form-control">
                            <option value="1">Cafe</option>
                            <option value="2">Tea</option>
                            <option value="3">Juice</option>
                            <option value="4">Food</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <input type="submit" value="Save changes" class="btn btn-primary" name="submit">
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>