<?php
if (isset($_GET['variableName'])) {

$server="localhost";
$username="root";
$password="root1234";
$db="NS";

$conn=mysqli_connect($server,$username,$password,$db);

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" href="img/logo/Logo web.png">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
    <style>
      .tcolor {
        background-color: #fdefef;
      }
    </style>
  </head>

  <body style=" background-image: url(hero.png); background-attachment: fixed;">
    <div class="container-fluid">
      <div class="row">

        <div class="col-3 fixed-column">
          <div class="background-image">

          </div>

          <div class="sidebar">
            <div class="logo"></div>
            <div class="menu">
              <li class="active">
                <a href="#Dashboard">

                  <button class="btn" style="background-color: #D1A29F;" type="button">Dashboard</button>
                </a>
              </li>
              <li>
                <a href="#oders">
                  <button class="btn" style="background-color:#D1A29F;" type="button">Oders</button>
                </a>
              </li>
              <li>
                <a href="#Request">
                  <button class="btn" style="background-color: #D1A29F;" type="button">Request</button>
                </a>
              </li>
              <li>
                <a href="#newp">
                  <button class="btn" style="background-color: #D1A29F;" type="button">New Product</button>
                </a>
              </li>
              <li>
                <a href="#del">
                  <button class="btn" style="background-color: #D1A29F;" type="button">Delete</button>
                </a>
              </li>
            </div>
          </div>
        </div>
        <div class="col-9 scrollable-column">
          <div class="main-content">
            <div id="Dashboard" style="background-color:#fdefef;" class="header--wrapper">
              <div class="header--title">
                <h2 style="color: rgb(239, 133, 57); ">Admin Dashboard</h2>
              </div>

            </div>
            <div class="card--container">
              <h3 class="main--title">Most Sold Items</h3>
              <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">Today</button>
                <button class="btn btn-primary" type="button">Week</button>
                <button class="btn btn-primary" type="button">Month</button>
              </div>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" style="background-color:#fdefef;">Product Name</th>
                  <th scope="col" style="background-color:#fdefef;">Qunntuty Oders</th>
                </tr>
              </thead>
              <tbody style="background-color:#fdefef;">
                <tr>
                  <th scope="row">-</th>
                  <td>--</td>


                </tr>
                <tr>
                  <th scope="row">--</th>
                  <td>--</td>


                </tr>
                <tr>
                  <th scope="row">-</th>
                  <td colspan="2">--</td>

                </tr>
              </tbody>
            </table>
          </div>
          <div class="header--wrapper" style="background-color:#fdefef;" id="oders">
            <div class="header--title">
              <h2>Oders</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" style="background-color:#fdefef;">Product Name</th>
                  <th scope="col" style="background-color:#fdefef;">Costomer Name</th>
                  <th scope="col" style="background-color:#fdefef;">E-mail</th>
                  <th scope="col" style="background-color:#fdefef;">Address</th>
                  <th scope="col" style="background-color:#fdefef;">Contact Number</th>
                  <th scope="col" style="background-color:#fdefef;">Qunntuty Oders</th>
                  <th scope="col" style="background-color:#fdefef;">Ship</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">-</th>
                  <td colspan="1">--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Shiped
                      </label>
                    </div>
                  </td>

                </tr>
                <tr>
                  <th scope="row">-</th>
                  <td colspan="1">--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Sheped
                      </label>
                    </div>
                  </td>

                </tr>
                <tr>
                  <th scope="row">-</th>
                  <td colspan="1">--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>--</td>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label" for="flexCheckChecked">
                        Sheped
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>

            </table>
          </div>
          <br>
          <div class="header--wrapper" id="Request">
            <div class="header--title">
              <h2>Request</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Costomer Name</th>
                  <th scope="col">Request ID</th>
                  <th scope="col">Date</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Reply</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">--</th>
                  <td>--</td>
                  <td>-- / -- / ----</td>
                  <td>--</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">--</th>
                  <td>--</td>
                  <td> -- / -- /----</td>
                  <td>--</td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">--</th>
                  <td>--</td>
                  <td>-- / -- / ----</td>
                  <td>--</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <div class="header--wrapper" id="newp">
            <div class="header--title">
              <h2>Add New Product</h2>
            </div>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputEmail4">
              </div>

              <div class="col-12">
                <label for="inputAddress" class="form-label">About</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
              </div>

              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Price</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Rs:">
              </div>



              <div class="col-12">
                <label for="inputAddress" class="form-label">Product image</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="url/.jpg">
              </div>




              <div class="col-12">
                <button type="submit" class="btn btn-primary"> Add</button>
              </div>

            </form>
          </div>

          <br>

          <div class="header--wrapper" id="del">
            <div class="header--title">
              <h2>Delete Product</h2>
            </div>
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputEmail4">
              </div>

              <div class="col-12">
                <label for="inputAddress" class="form-label">About</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="">
              </div>

              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Price</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Rs:">
              </div>



              <div class="col-12">
                <label for="inputAddress" class="form-label">Product image</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="url/.jpg">
              </div>




              <div class="col-12">
                <button type="submit" class="btn btn-primary">Delete</button>
              </div>

            </form>


          </div>

        </div>


      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
  </body>

  </html>
<?php
}else {
 header("Location: login.html");
}
?>

