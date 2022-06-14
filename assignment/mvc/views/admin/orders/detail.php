<div class="page-header">
    <div class="row align-items-center mb-3">
        <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="http://localhost/Assignment/MenuItems/index"></a></li>
                    <!-- icon home -->
                    <li class="breadcrumb-item active" aria-current="page">MenuItems</li>
                </ol>
            </nav>

            <h1 class="page-header-title">Num of menu items<span class="badge badge-soft-dark ml-2"><?php echo mysqli_num_rows($data["orderDetail"]) ?></span></h1>
        </div>

    </div>
</div>

<div class="card">

    <div class="table-responsive">
        <table class="table table-borderless card-table">
            <thead class="thead-light">
                <tr>

                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>

                </tr>
            </thead>

            <tbody>
                <?php

                while ($row = mysqli_fetch_array($data["orderDetail"])) {
                ?>
                    <tr>
                        <td><?php echo $row["Name"] ?></td>
                        <td><?php echo $row["Price"] ?></td>
                        <td><?php echo $row["Quantity"] ?></td>
                        <td><?php echo $row["Total"] ?></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<a href="http://localhost/Assignment/Order/index">Back</a>