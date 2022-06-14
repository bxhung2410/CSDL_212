<div class="page-header">
  <div class="row align-items-center mb-3">
    <div class="col-sm mb-2 mb-sm-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-no-gutter">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="http://localhost/Assignment/CoffeeShop/index"></a></li>
          <!-- icon home -->
          <li class="breadcrumb-item active" aria-current="page">CoffeeShop</li>
        </ol>
      </nav>

      <h1 class="page-header-title">CoffeeShopes<span class="badge badge-soft-dark ml-2"><?php echo mysqli_num_rows($data["coffeeShops"]) ?></span></h1>
    </div>
    <div class="col-sm-auto">
      <a href="http://localhost/Assignment/CoffeeShop/new" class="btn btn-primary">Add CoffeeShop</a>
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
          <th>Num of staffs</th>
          <th>detail</th>
          <th colspan="2"></th>
        </tr>
      </thead>

      <tbody>
        <?php
        while ($row = mysqli_fetch_array($data["coffeeShops"])) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["taxId"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["phoneNumber"] ?></td>
            <td><?php echo $row["role"] ?></td>
            <td><?php echo $data["coffeeShopModel"]->countStaffsByCoffeeShop($row["id"]) ?></td>
            <td><a href="http://localhost/Assignment/CoffeeShop/viewDetail/<?php echo $row["id"] ?>">view detail</td>
            <td><a href="http://localhost/Assignment/CoffeeShop/edit/<?php echo $row["id"] ?>">Edit</td>
            <td><a href="http://localhost/Assignment/CoffeeShop/delete/<?php echo $row["id"] ?>">Delete</td>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>

  </div>
</div>