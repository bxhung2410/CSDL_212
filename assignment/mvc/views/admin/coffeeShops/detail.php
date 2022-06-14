<div class="page-header">
    <div class="row align-items-center mb-3">
        <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="http://localhost/Assignment/Staff/index"></a></li>
                    <!-- icon home -->
                    <li class="breadcrumb-item active" aria-current="page">Staff</li>
                </ol>
            </nav>

            <h1 class="page-header-title">Staffs<span class="badge badge-soft-dark ml-2"><?php echo mysqli_num_rows($data["coffeeShopDetail"]) ?></span></h1>
        </div>
        <div class="col-sm-auto">
            <a href="http://localhost/Assignment/Staff/new" class="btn btn-primary">Add Staff</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless card-table">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>taxId</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>phone number</th>
                    <th>role</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($row = mysqli_fetch_array($data["coffeeShop"])) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["taxId"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["address"] ?></td>
                        <td><?php echo $row["phoneNumber"] ?></td>
                        <td><?php echo $row["role"] ?></td>
                        <td><a href="http://localhost/Assignment/CoffeeShop/edit/<?php echo $row["id"] ?>">Edit</td>
                        <td><a href="http://localhost/Assignment/CoffeeShop/delete/<?php echo $row["id"] ?>">Delete</td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

    </div>

    <br>
    <br>
    <div class="table-responsive">
        <table class="table table-borderless card-table">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>last name</th>
                    <th>first name</th>
                    <th>Address</th>
                    <th>phone number</th>
                    <th>age</th>
                    <th>gender</th>
                    <th>role</th>
                    <th>type</th>
                    <th>start day</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($row = mysqli_fetch_array($data["coffeeShopDetail"])) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["lastName"] ?></td>
                        <td><?php echo $row["firstName"] ?></td>
                        <td><?php echo $row["address"] ?></td>
                        <td><?php echo $row["phoneNumber"] ?></td>
                        <td><?php echo $row["age"] ?></td>
                        <td><?php echo $row["gender"] ?></td>
                        <td><?php echo $row["role"] ?></td>
                        <td><?php echo $row["type"] ?></td>
                        <td><?php echo $row["startDay"] ?></td>
                        <td><a href="http://localhost/Assignment/Staff/edit/<?php echo $row["id"] ?>">Edit</td>
                        <td><a href="http://localhost/Assignment/Staff/delete/<?php echo $row["id"] ?>">Delete</td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<a href="http://localhost/Assignment/CoffeeShop/index">Back</a>