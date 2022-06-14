<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['submit'])) {
            $con = $data["staffModel"]->con;
            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $coffeeShopId = $_POST['coffeeShopId'];
            $address = $_POST['address'];
            $phoneNumber = $_POST['phoneNumber'];
            $age = $_POST['age'];
            $personalId = $_POST['personalId'];
            $gender = $_POST['gender'];
            $startDay = $_POST['startDay'];
            $role = $_POST['role'];
            $type = $_POST['type'];
            $unitOfSalary = $_POST['unitOfSalary'];
            $salaryPerUnit = $_POST['salaryPerUnit'];
            if (!isset($data["id"])) {
                $sql = "call insertStaff(N'$lastName', N'$firstName', N'$coffeeShopId', N'$address', N'$phoneNumber', N'$age', N'$personalId', N'$gender', N'$startDay', N'$role', N'$type', N'$unitOfSalary', N'$salaryPerUnit')";
                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('them staff thanh cong');
                            window.location.href = 'http://localhost/assignment/Staff/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/Staff/new';
                    </script>");
                }
            } else {
                $id = $data["id"];
                $sql = "call updateStaff(N'$id',N'$lastName', N'$firstName', N'$coffeeShopId', N'$address', N'$phoneNumber', N'$age', N'$personalId', N'$gender', N'$startDay', N'$role', N'$type', N'$unitOfSalary', N'$salaryPerUnit')";

                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('cap nhat staff thanh cong');
                            window.location.href = 'http://localhost/assignment/staff/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/Staff/edit/$id';
                    </script>");
                }
            }
        }
        ?>
        <?php
        if (isset($data["staff"])) {
            while ($row = mysqli_fetch_assoc($data["staff"])) {
        ?>
                <form method="POST" action="">
                    <div class="row form-group">
                        <label for="lastName" class="col-sm-2 col-form-label input-label">last name</label>
                        <div class="col-sm-4">
                            <input type="text" name="lastName" class="form-control" placeholder="Please input lastName" value="<?php echo $row["lastName"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="firstName" class="col-sm-2 col-form-label input-label">first name</label>
                        <div class="col-sm-10">
                            <input type="text" name="firstName" class="form-control" placeholder="Please input firstName" value=" <?php echo $row["firstName"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="coffeeShopId" class="col-sm-2 col-form-label input-label">coffee shop</label>
                        <div class="col-sm-4">
                            <input type="number" name="coffeeShopId" class="form-control" placeholder="Please input coffeeShopId" value="<?php echo $row["coffeeShopId"]; ?>" required="true">
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
                        <label for="age" class="col-sm-2 col-form-label input-label">age</label>
                        <div class="col-sm-4">
                            <input type="number" name="age" class="form-control" placeholder="Please input age" value="<?php echo $row["age"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="personalId" class="col-sm-2 col-form-label input-label">personalId</label>
                        <div class="col-sm-4">
                            <input type="number" name="personalId" class="form-control" placeholder="Please input personalId" value="<?php echo $row["personalId"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="gender" class="col-sm-2 col-form-label input-label">gender</label>
                        <div class="col-sm-10">
                            <select name="gender" class="form-control">
                                <option value="1" <?php if ($row["gender"] == 'male') {
                                                        echo ("selected");
                                                    } ?>>male</option>
                                <option value="2" <?php if ($row["gender"] == 'female') {
                                                        echo ("selected");
                                                    } ?>>female</option>
                                <option value="3" <?php if ($row["gender"] == 'not defined') {
                                                        echo ("selected");
                                                    } ?>>not defined</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="startDay" class="col-sm-2 col-form-label input-label">startDay</label>
                        <div class="col-sm-4">
                            <input type="date" name="startDay" class="form-control" placeholder="Please input startDay" value="<?php echo $row["startDay"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="role" class="col-sm-2 col-form-label input-label">Role</label>
                        <div class="col-sm-10">
                            <select name="role" class="form-control">
                                <option value="1" <?php if ($row["role"] == 'cashier') {
                                                        echo ("selected");
                                                    } ?>>cashier</option>
                                <option value="2" <?php if ($row["role"] == 'service') {
                                                        echo ("selected");
                                                    } ?>>service</option>
                                <option value="3" <?php if ($row["role"] == 'manager') {
                                                        echo ("selected");
                                                    } ?>>manager</option>
                                <option value="4" <?php if ($row["role"] == 'shipper') {
                                                        echo ("selected");
                                                    } ?>>shipper</option>
                                <option value="5" <?php if ($row["role"] == 'bartender') {
                                                        echo ("selected");
                                                    } ?>>bartender</option>
                                <option value="3" <?php if ($row["role"] == 'security') {
                                                        echo ("selected");
                                                    } ?>>security</option>

                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="type" class="col-sm-2 col-form-label input-label">type</label>
                        <div class="col-sm-10">
                            <select name="type" class="form-control">
                                <option value="1" <?php if ($row["type"] == 'full-time') {
                                                        echo ("selected");
                                                    } ?>>full time</option>
                                <option value="2" <?php if ($row["type"] == 'part-time') {
                                                        echo ("selected");
                                                    } ?>>part time</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="unitOfSalary" class="col-sm-2 col-form-label input-label">unitOfSalary</label>
                        <div class="col-sm-10">
                            <select name="unitOfSalary" class="form-control">
                                <option value="1" <?php if ($row["unitOfSalary"] == 'hour') {
                                                        echo ("selected");
                                                    } ?>>hour</option>
                                <option value="2" <?php if ($row["unitOfSalary"] == 'month') {
                                                        echo ("selected");
                                                    } ?>>month</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="salaryPerUnit" class="col-sm-2 col-form-label input-label">salaryPerUnit</label>
                        <div class="col-sm-4">
                            <input type="number" name="salaryPerUnit" class="form-control" placeholder="Please input salaryPerUnit" value="<?php echo $row["salaryPerUnit"]; ?>" required="true">
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
                    <label for="lastName" class="col-sm-2 col-form-label input-label">last name</label>
                    <div class="col-sm-4">
                        <input type="text" name="lastName" class="form-control" placeholder="Please input lastName" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="firstName" class="col-sm-2 col-form-label input-label">first name</label>
                    <div class="col-sm-10">
                        <input type="text" name="firstName" class="form-control" placeholder="Please input firstName" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="coffeeShopId" class="col-sm-2 col-form-label input-label">coffee shop</label>
                    <div class="col-sm-4">
                        <input type="number" name="coffeeShopId" class="form-control" placeholder="Please input coffeeShopId" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="address" class="col-sm-2 col-form-label input-label">address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" placeholder="Please input address" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="phoneNumber" class="col-sm-2 col-form-label input-label">phone number</label>
                    <div class="col-sm-10">
                        <input type="text" name="phoneNumber" class="form-control" placeholder="Please input phone number" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="age" class="col-sm-2 col-form-label input-label">age</label>
                    <div class="col-sm-4">
                        <input type="number" name="age" class="form-control" placeholder="Please input age" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="personalId" class="col-sm-2 col-form-label input-label">personalId</label>
                    <div class="col-sm-4">
                        <input type="number" name="personalId" class="form-control" placeholder="Please input personalId" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="gender" class="col-sm-2 col-form-label input-label">gender</label>
                    <div class="col-sm-10">
                        <select name="gender" class="form-control">
                            <option value="1">male</option>
                            <option value="2">female</option>
                            <option value="3" selected="selected">not defined</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="startDay" class="col-sm-2 col-form-label input-label">startDay</label>
                    <div class="col-sm-4">
                        <input type="date" name="startDay" class="form-control" placeholder="Please input startDay" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="role" class="col-sm-2 col-form-label input-label">Role</label>
                    <div class="col-sm-10">
                        <select name="role" class="form-control">
                            <option value="1">cashier</option>
                            <option value="2">service</option>
                            <option value="3">manager</option>
                            <option value="4">shipper</option>
                            <option value="5">bartender</option>
                            <option value="6">security</option>

                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="type" class="col-sm-2 col-form-label input-label">type</label>
                    <div class="col-sm-10">
                        <select name="type" class="form-control">
                            <option value="1">full-time</option>
                            <option value="2">part-time</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="unitOfSalary" class="col-sm-2 col-form-label input-label">unitOfSalary</label>
                    <div class="col-sm-10">
                        <select name="unitOfSalary" class="form-control">
                            <option value="1">hour</option>
                            <option value="2">month</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="salaryPerUnit" class="col-sm-2 col-form-label input-label">salaryPerUnit</label>
                    <div class="col-sm-4">
                        <input type="number" name="salaryPerUnit" class="form-control" placeholder="Please input salaryPerUnit" value="<?php echo $row["salaryPerUnit"]; ?>" required="true">
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