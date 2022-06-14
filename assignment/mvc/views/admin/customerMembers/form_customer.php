<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $birthDay = $_POST['birthDay'];
            $phoneNumber = $_POST['phoneNumber'];
            $accumulatedPoints = $_POST['accumulatedPoints'];

            if (!isset($data["id"])) {
                if (($data["customerMemberModel"]->con)->query("INSERT INTO customermember (id, name, address, birthDay, phoneNumber, accumulatedPoints) VALUES (N'$id', N'$name',N'$address',N'$birthDay', N'$phoneNumber',N'$accumulatedPoints')")) {
                    echo "<script type='text/javascript'>alert('them customerMember thanh cong');
                            window.location.href = 'http://localhost/assignment/customerMember/index';
                            </script>";
                } else {
                    echo "<script type='text/javascript'>alert('them customerMember that bai');
                            window.location.href = 'http://localhost/assignment/customerMember/index';
                            </script>";
                }
            } else {
                if (($data["customerMemberModel"]->con)->query("UPDATE customermember SET name = N'$name', address = N'$address', birthDay = N'$birthDay', phoneNumber = N'$phoneNumber', accumulatedPoints = N'$accumulatedPoints' WHERE id = N'$id'")) {
                    echo "<script type='text/javascript'>alert('cap nhat customer member thanh cong');
                            window.location.href = 'http://localhost/assignment/customerMember/index';
                            </script>";
                } else {
                    echo "<script type='text/javascript'>alert('cap nhat customer member that bai');
                            window.location.href = 'http://localhost/assignment/customerMember/index';
                            </script>";
                }
            }
        }
        ?>
        <?php
        if (isset($data["customerMember"])) {
            while ($row = mysqli_fetch_assoc($data["customerMember"])) {
        ?>
                <form method="POST" action="">
                    <div class="row form-group">
                        <label for="id" class="col-sm-2 col-form-label input-label">id</label>
                        <div class="col-sm-4">
                            <input type="number" name="id" class="form-control" placeholder="Please input id" value="<?php if (isset($data["id"])) echo $data["id"]; ?>" required="true">
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
                            <input type="text" name="address" class="form-control" placeholder="Please input address" value="<?php echo $row["address"]; ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="birthDay" class="col-sm-2 col-form-label input-label">birthDay</label>
                        <div class="col-sm-10">
                            <input type="date" name="birthDay" class="form-control" value="<?php echo str_replace(' ', 'T', $row["birthDay"]) ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="phoneNumber" class="col-sm-2 col-form-label input-label">phone number</label>
                        <div class="col-sm-10">
                            <input type="text" name="phoneNumber" class="form-control" placeholder="Please input phone number" value="<?php echo $row["phoneNumber"] ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="accumulatedPoints" class="col-sm-2 col-form-label input-label">Accumulated points</label>
                        <div class="col-sm-10">
                            <input type="number" name="accumulatedPoints" class="form-control" placeholder="Please input accumulated points" value="<?php echo $row["accumulatedPoints"] ?>" required="true">
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
                    <div class="col-sm-4">
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
                    <label for="address" class="col-sm-2 col-form-label input-label">address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" placeholder="Please input address">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="birthDay" class="col-sm-2 col-form-label input-label">birthDay</label>
                    <div class="col-sm-10">
                        <input type="date" name="birthDay" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="phoneNumber" class="col-sm-2 col-form-label input-label">phone number</label>
                    <div class="col-sm-10">
                        <input type="text" name="phoneNumber" class="form-control" placeholder="Please input phone number" required="true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="accumulatedPoints" class="col-sm-2 col-form-label input-label">Accumulated points</label>
                    <div class="col-sm-10">
                        <input type="number" name="accumulatedPoints" class="form-control" placeholder="Please input accumulated points" required="true">
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