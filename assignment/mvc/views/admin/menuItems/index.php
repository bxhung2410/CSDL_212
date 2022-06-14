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

      <h1 class="page-header-title">MenuItems<span class="badge badge-soft-dark ml-2"><?php echo mysqli_num_rows($data["menuItems"]) ?></span></h1>
    </div>
    <div class="col-sm-auto">
      <a href="http://localhost/assignment/MenuItem/new" class="btn btn-primary">Add Menu item</a>
    </div>
  </div>
</div>

<div class="card">
  <div class="table-responsive">
    <table class="table table-borderless card-table">
      <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Image</th>
          <th>Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Description</th>
          <th colspan="2"></th>
        </tr>
      </thead>

      <tbody>
        <?php
        $categories = array();
        while ($row = mysqli_fetch_array($data["categories"])) {
          $categories[] = $row;
        }
        while ($row = mysqli_fetch_array($data["menuItems"])) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><img src="<?php echo $row["image"] ?>" alt="" style="width: 70%; height: auto;"></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $categories[$row["categoryId"] - 1]["name"] ?></td>
            <td><?php echo $row["price"] ?></td>
            <td><?php echo $row["description"] ?></td>
            <td><a href="http://localhost/assignment/MenuItem/edit/<?php echo $row["id"] ?>">Edit</td>
            <td><a href="http://localhost/assignment/MenuItem/delete/<?php echo $row["id"] ?>">Delete</td>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</div>