<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['submit'])) {
            $con = $data["coffeeShopModel"]->con;
            $id = $_POST['id'];
            $taxId = $_POST['taxId'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phoneNumber = $_POST['phoneNumber'];
            $role = $_POST['role'];
            if (!isset($data["id"])) {
                $sql = "call insertCoffeeShop(N'$taxId', N'$name',N'$address',N'$phoneNumber',N'$role')";
                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('them coffeeShop thanh cong');
                            window.location.href = 'http://localhost/assignment/CoffeeShop/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/CoffeeShop/new';
                    </script>");
                }
            } else {
                $id = $data["id"];
                $sql = "call updateCoffeeShop(N'$id',N'$taxId', N'$name',N'$address',N'$phoneNumber',N'$role')";
                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('cap nhat coffee shop thanh cong');
                            window.location.href = 'http://localhost/assignment/CoffeeShop/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/CoffeeShop/edit/$id';
                    </script>");
                }
            }
        }
        ?>
        <?php
        if (isset($data["coffeeShop"])) {
            while ($row = mysqli_fetch_assoc($data["coffeeShop"])) {
        ?>
                <form method="POST" action="">
                    <div class="row form-group">
                        <label for="taxId" class="col-sm-2 col-form-label input-label">tax Id</label>
                        <div class="col-sm-4">
                            <input type="number" name="taxId" class="form-control" placeholder="Please input taxId" value="<?php echo $row["taxId"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Please input name" value=" <?php echo $row["name"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="address" class="col-sm-2 col-form-label input-label">address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" placeholder="Please input address" value="<?php echo $row["address"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="phoneNumber" class="col-sm-2 col-form-label input-label">phone number</label>
                        <div class="col-sm-10">
                            <input type="text" name="phoneNumber" class="form-control" placeholder="Please input phone number" value="<?php echo $row["phoneNumber"] ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="role" class="col-sm-2 col-form-label input-label">Role</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-control">
                                <option value="1">Headquater</option>
                                <option value="2">Branch</option>
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
                    <label for="taxId" class="col-sm-2 col-form-label input-label">tax Id</label>
                    <div class="col-sm-4">
                        <input type="number" name="taxId" class="form-control" placeholder="Please input taxId" required=" true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Please input name" " required=" true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="address" class="col-sm-2 col-form-label input-label">address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" placeholder="Please input address" required=" true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="phoneNumber" class="col-sm-2 col-form-label input-label">phone number</label>
                    <div class="col-sm-10">
                        <input type="text" name="phoneNumber" class="form-control" placeholder="Please input phone number" required=" true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="role" class="col-sm-2 col-form-label input-label">Role</label>
                    <div class="col-sm-10">
                        <select name="role" class="form-control">
                            <option value="1">Headquater</option>
                            <option value="2" selected>Branch</option>
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