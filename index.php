<?php
include 'logic/actions.php';
?>


<!doctype html>
<html lang="en">

<head>
  <title>MyInvDB Inventory App</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="css/all.css">
  <!-- Bootstrap CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" type="image/png" href="images/favicon.ico">
</head>

<body>

  <!-- Top Navigation & Logo -->
  <?php include 'includes/top_nav.html'; ?>
  <!-- Top Navigation & Logo End -->

  <!-- Page Content -->
  <div class="container">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h3 class="font-weight-light"><img src="images/logo-40.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="MyInvDB Logo"> Inventory</h3>
        <hr>
        <div class="top-icons"><a href="#"><i class="fas fa-th-list" alt="List View"></i></a> <a href="#"><i class="fas fa-th" alt="Card View"></i></a> <a href="#"><i class="fas fa-print" alt="Print"></i></a> <a href="#add-edit-form" data-toggle="collapse"><i class="fas fa-plus-square" alt="Add Product"></i></a></div>


        <div id="add-edit-form" class="collapse mt-2 mb-2">

          <div class="container form-bg-add">
            <h3 class="text-center pt-3">Add+ New Item</h3>

            <form action="index.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="prod_id">Part #:</label>
                        <input type="text" class="form-control" id="prod_id" placeholder="Part #" name="prod_id">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" placeholder="Price Each" name="price">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="qty">Quantity:</label>
                        <input type="text" class="form-control" id="qty" placeholder="Qty" name="qty">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="prod_name">Item:</label>
                        <input type="text" class="form-control" id="prod_name" placeholder="Item" name="prod_name">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="mfr">Manufacturer:</label>
                        <input type="text" class="form-control" id="mfr" placeholder="Manufacturer" name="mfr">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="prod_url">Product URL:</label>
                        <input type="text" class="form-control" id="prod_url" placeholder="MFR Product URL" name="prod_url">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="prod_desc">Description:</label>
                        <textarea type="text" class="form-control" rows="5" id="prod_desc" placeholder="Description" name="prod_desc"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3 mt-5">
                  <div class="col">
                    <div class="prodimg">

                      <img src="images/choose-image-400.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" id="prodimg">

                      <div class="form-group">
                        <label for="prod_img">Select Image:</label>
                        <input type="file" class="form-control-file" name="prod_img" id="prod_img">
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="reset" name="reset-btn" class="btn btn-info btn-block mt-2 btn-add-reset"> Reset </button>
                    </div>
                    <div class="form-group">
                      <button type="submit" name="add-btn" class="btn btn-primary btn-block mt-2 btn-add-reset"> Add+ </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <br>
          </div>

        </div>

        <!-- checks $msg variable to see if not empty and displays message with styling -->
        <?php if (!empty($msg)) : ?>
          <div class="alert <?php echo $css_styling; ?>">
            <?php echo $msg; ?>
          </div>
        <?php endif; ?>

        <!-- table starts -->
        <div class="table-responsive">
          <table class="table table-hover item-icons">
            <thead class="thead-light">
              <tr>
                <th>Part ID</th>
                <th>Item</th>
                <th>Manufacturer</th>
                <th>Price</th>
                <th>Quantity</th>
                <th> <i class="fas fa-info-circle" alt="Detailed Info"></i> <i class="fas fa-globe" alt="Mfr Website"></i> <i class="fas fa-edit" alt="Edit"></i> <i class="far fa-trash-alt" alt="Delete"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12345</td>
                <td>This is an item</td>
                <td>Smith & Company</td>
                <td>12.95</td>
                <td>3</td>
                <td><a href="#"><i class="fas fa-info-circle" alt="Detailed Info"></i></a> <a href="#"><i class="fas fa-globe" alt="Mfr Website"></i></a> <a href="#"><i class="fas fa-edit" alt="Edit"></i></a> <a href="#"><i class="far fa-trash-alt" alt="Delete"></i></a></td>
              </tr>
              <tr>
                <td>12345</td>
                <td>This is a second item</td>
                <td>Smith & Company</td>
                <td>12.95</td>
                <td>3</td>
                <td><a href="#"><i class="fas fa-info-circle" alt="Detailed Info"></i></a> <a href="#"><i class="fas fa-globe" alt="Mfr Website"></i></a> <a href="#"><i class="fas fa-edit" alt="Edit"></i></a> <a href="#"><i class="far fa-trash-alt" alt="Delete"></i></a></td>
              </tr>

            </tbody>
          </table>
        </div>


        <div style="height: 300px"></div>
        <p class="lead mb-0">You've reached the end!</p>
        <!-- Navigation & Logo Starts -->
        <!-- <?php include 'includes/bottom_nav.html'; ?> -->
        <!-- Navigation & Logo End -->
        <hr>
        <!-- Copyright Starts -->
        <?php include 'includes/copyright.php'; ?>
        <!-- Copyright End -->

        </img>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>