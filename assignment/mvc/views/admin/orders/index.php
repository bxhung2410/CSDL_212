<div class="page-header">
  <div class="row align-items-center mb-3">
    <div class="col-sm mb-2 mb-sm-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-no-gutter">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="http://localhost/assignment/Order/index"></a></li>
          <!-- icon home -->
          <li class="breadcrumb-item active" aria-current="page">Orders</li>
        </ol>
      </nav>

      <h1 class="page-header-title">Orders<span class="badge badge-soft-dark ml-2"><?php echo mysqli_num_rows($data["orders"]) ?></span></h1>
    </div>
  </div>
</div>

<div class="card">
  <div class="table-responsive">
    <table class="table table-borderless card-table">
      <thead class="thead-light">
        <tr>
          <th>Id</th>
          <th>Customer id</th>
          <th>Phone number</th>
          <th>Address</th>
          <th>Time order</th>
          <th>Detail</th>
        </tr>
      </thead>

      <tbody>
        <?php
        while ($row = mysqli_fetch_array($data["orders"])) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["customerId"] ?></td>
            <td><?php echo $row["phoneNumber"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["timeOrder"] ?></td>
            <td><a href="http://localhost/Assignment/Order/viewDetail/<?php echo $row["id"] ?>">check</a></td>

          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</div>