<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['submit'])) {
            $con = $data["couponModel"]->con;
            $id = $_POST['id'];
            $discount = $_POST['discount'];
            $startTime = $_POST['startTime'];
            $endTime = $_POST['endTime'];
            $minAccumulatedPoints = $_POST['minAccumulatedPoints'];
            if (!isset($data["id"])) {
                $sql = "call insertCoupon(N'$id',N'$discount',N'$startTime',N'$endTime',N'$minAccumulatedPoints')";
                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('them coupon thanh cong');
                            window.location.href = 'http://localhost/assignment/Coupon/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/Coupon/index';
                    </script>");
                }
            } else {
                $oldId = $data["id"];
                $sql = "call updateCoupon(N'$oldId', N'$id',N'$discount',N'$startTime',N'$endTime',N'$minAccumulatedPoints')";
                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('cap nhat coupon thanh cong');
                            window.location.href = 'http://localhost/assignment/coupon/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/Coupon/index';
                    </script>");
                }
            }
        }
        ?>
        <?php
        if (isset($data["coupon"])) {
            while ($row = mysqli_fetch_assoc($data["coupon"])) {
        ?>
                <form method="POST" action="">
                    <div class="row form-group">
                        <label for="id" class="col-sm-2 col-form-label input-label">id</label>
                        <div class="col-sm-4">
                            <input type="text" name="id" class="form-control" placeholder="Please input id" value="<?php if (isset($data["id"])) echo $data["id"]; ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="discount" class="col-sm-2 col-form-label input-label">tax Id</label>
                        <div class="col-sm-4">
                            <input type="number" name="discount" class="form-control" placeholder="Please input discount" value="<?php echo $row["discount"]; ?>" required="true">
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="startTime" class="col-sm-2 col-form-label input-label">startTime</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" name="startTime" class="form-control" value="<?php echo str_replace(' ', 'T', $row["startTime"]); ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="endTime" class="col-sm-2 col-form-label input-label">endTime</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" name="endTime" class="form-control" value="<?php echo str_replace(' ', 'T', $row["endTime"]) ?>" required="true">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="minAccumulatedPoints" class="col-sm-2 col-form-label input-label">minAccumulatedPoints</label>
                        <div class="col-sm-10">
                            <input type="text" name="minAccumulatedPoints" class="form-control" placeholder="Please input min" value="<?php echo $row["minAccumulatedPoints"] ?>" required="true">
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
                        <input type="text" name="id" class="form-control" placeholder="Please input id" required=" true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="discount" class="col-sm-2 col-form-label input-label">discount</label>
                    <div class="col-sm-4">
                        <input type="number" name="discount" class="form-control" placeholder="Please input discount" required=" true">
                    </div>
                </div>

                <div class="row form-group">
                    <label for="startTime" class="col-sm-2 col-form-label input-label">startTime</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" name="startTime" class="form-control" required=" true">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="endTime" class="col-sm-2 col-form-label input-label">endTime</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" name="endTime" class="form-control" required=" true">
                    </div>
                </div>

                <div class="row form-group">
                    <label for="minAccumulatedPoints" class="col-sm-2 col-form-label input-label">minAccumulatedPoints</label>
                    <div class="col-sm-10">
                        <input type="text" name="minAccumulatedPoints" class="form-control" required=" true">

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