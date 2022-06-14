<div class="card">
    <div class="card-body">
        <?php
        if (isset($_POST['submit'])) {
            $con = $data["categoryModel"]->con;
            $name = $_POST['name'];
            if (!isset($data["id"])) {
                $sql = "call insertCategory(N'$name')";
                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('them category thanh cong');
                            window.location.href = 'http://localhost/assignment/Category/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/Category/index';
                    </script>");
                }
            } else {
                $id = $data["id"];
                $sql = "call updateCategory(N'$id',N'$name')";
                if (mysqli_query($con, $sql)) {
                    echo "<script type='text/javascript'>alert('sua category thanh cong');
                            window.location.href = 'http://localhost/assignment/Category/index';
                            </script>";
                } else {
                    echo ("<script type='text/javascript'>alert('" . mysqli_error($con) . "');
                    window.location.href = 'http://localhost/assignment/Category/index';
                    </script>");
                }
            }
        }
        ?>
        <form method="POST" action="">

            <div class="row form-group">
                <label for="name" class="col-sm-2 col-form-label input-label">name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" placeholder="Please input name" value="<?php if (isset($data["category"])) echo mysqli_fetch_assoc($data["category"])["name"] ?>" required="true">
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <input type="submit" value="Save changes" class="btn btn-primary" name="submit">
            </div>
        </form>

    </div>
</div>