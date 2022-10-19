<?php
include('dashboardOpening.php');
include('../PHP/phpMethods.php');
$varUserID = $_SESSION['UserID'];
$sql = "SELECT * FROM tbl_reservation WHERE clientID = '".$varUserID."' ORDER BY reservationID DESC LIMIT 1";
$result = getData($sql);

if(count($result) != 0){
  $varReservationID = $result['reservationID'];
  $varDestination = $result['destination'];
  $varhotelName = $result['hotelName'];
  $varPackageCategory = $result['packageCategory'];

  $varPackageDescription = $result['packageDescription'];
  $varNoOfNights = $result['noOfNights'];
  $varPackagePrice = $result['packagePrice'];
  $varModeOfTransport = $result['modeOfTransport'];

  $varTransportPrice = $result['transportPrice'];
  $varTotalPrice = $result['totalPrice'];
  $varStatus = $result['status'];
}
?><br><br><br>
  <div class="container-fluid" id="hero-2">
    <div class="container py-4">
      <div class="row my-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-2">
              <button type="button" class="col-12 btn btn-outline-success btn-lg btn-block" data-toggle="collapse" data-target="#multiCollapseExample" aria-expanded="true" aria-controls="multiCollapseExample">
                <span class="one-line-blocks">
                  <h5>
                  Bookings
                  </h5>
                  <!-- This is for the arrow glow -->
                  <i class="fas fa-angle-right fa-2x"></i>
                </span>
              </button>

              <button type="button" class="col-12 btn btn-outline-success btn-lg btn-block" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                <span class="one-line-blocks">
                  <h5>
                  History
                  </h5>
                  <!-- This is for the arrow glow -->
                  <i class="fas fa-angle-right fa-2x"></i>
                </span>
              </button>
            </div>
            <div class="col-lg-10">
              <div class="accordion collapse multi-collapse" id="multiCollapseExample">
                <!--<div class="card" style="max-width: 45rem;">
                  <img src="images/home-schooling.png" class="card-img-top" alt="home-schooling image">
                </div>-->
                <div class="row my-4">
                  <div class="col-12">
                    <div class="row">
			            <div class="col-3 text-center">
			              <img src="<?php echo($_SESSION['tripImage']); ?>" class="img-fluid my-3 male-user-icon" alt="User image">
			            </div>
			            <div class="col-9 float-left">
			              <div class="row my-2">
			                <div class="col-7 title">
			                  <big><h2>BOOKING</h2></big>
			                </div>

			              </div>
			              <div class="row my-2">
			                <div class="col-4">
			                  <strong>Destination</strong>
			                </div>
			                <div class="col-5 float-left">
                        <p><?php echo($varDestination); ?></p>
			                </div>
			              </div>
			              <div class="row my-2">
			                <div class="col-4">
			                  <strong>Accomodation</strong>
			                </div>
			                <div class="col-5 float-left">
			                  <p><?php echo($varhotelName); ?></p>
			                </div>
			              </div>
			              <div class="row my-2">
			                <div class="col-4">
			                  <strong>Transportation</strong>
			                </div>
			                <div class="col-5 float-left">
			                  <p><?php echo($varModeOfTransport); ?></p>
			                </div>
			              </div>
			              <div class="row my-2">
			                <div class="col-4">
			                  <strong>Price</strong>
			                </div>
			                <div class="col-5 float-left">
			                  <p>KShs. <?php echo($varTotalPrice); ?></p>
			                </div>
			              </div>
			              <div class="row my-2">
			                <div class="col-4">
			                  <strong>Status</strong>
			                </div>
			                <div class="col-5 float-left">
			                  <i><?php echo($varStatus); ?></i>
			                </div>
			              </div>

			            </div>
			          </div>
                  </div>
                </div>
              </div>

              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <!--<div class="card" style="max-width: 45rem;">
                  <img src="images/syllabi-orientation.png" class="card-img-top" alt="syllabi-orientation image">
                </div>-->
                <div class="row my-4">
                  <div class="col-12">
                    <h6 style="text-align:center; ">Visited Places</h6>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">ReservationID</th>
                          <th scope="col">Destination</th>
                          <th scope="col">Accomodation</th>
                          <th scope="col">Transportation</th>
                          <th scope="col">Total cost</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $sql = "SELECT * FROM tbl_reservation WHERE clientID = '".$varUserID."'";
                          $result = getDataRows($sql);
                          for($i=0;$i<count($result);$i++){
                            $varReservationID = $result[$i]['reservationID'];
                            $varDestination = $result[$i]['destination'];
                            $varhotelName = $result[$i]['hotelName'];
                            $varModeOfTransport = $result[$i]['modeOfTransport'];
                            $varTotalPrice = $result[$i]['totalPrice'];
                            ?>
                            <tr>
                              <th scope="row"><?php echo($i+1); ?></th>
                              <td><?php echo($varReservationID); ?></td>
                              <td><?php echo($varDestination); ?></td>
                              <td><?php echo($varhotelName); ?></td>
                              <td><?php echo($varModeOfTransport); ?></td>
                              <td><?php echo($varTotalPrice); ?></td>
                            </tr>
                            <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script>
    less = {
      env: 'development'
    };
  </script>
  <script src="less.js"></script>
  <script>
    less.watch();
  </script>
<?php include('dashboardClosing.php'); ?>
