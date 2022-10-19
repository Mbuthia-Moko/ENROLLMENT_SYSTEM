<?php include('dashboardOpening.php');
include('../PHP/phpMethods.php');
?>
<div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <h3>Customer Reviews</h3>
            <?php
              $sql = "SELECT * FROM tbl_review ORDER BY reviewID DESC";
              $result = getDataRows($sql);
              if(!empty($result)){
                if(count($result) != 0){
                  for($i=0;$i<2;$i++){
                    $varClientUsername = $result[$i]['clientUsername'];
                    $varReviewMessage = $result[$i]['reviewMessage'];
                    $varReviewStarRating = $result[$i]['reviewStarRating'];
                    ?>
                    <div class="row">
                      <div class="col-3">
                        <h3>User:</h3>
                      </div>
                      <div class="col-9">
                        <h3><?php echo($varClientUsername); ?></h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <h3>Rating:</h3>
                      </div>
                      <div class="col-9">
                        <?php
                          for($i=0;$i<($varReviewStarRating);$i++){
                            ?>
                            <i class="text-success fa fa-star" aria-hidden="true"></i>
                            <?php
                          }
                        ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        <h3>Comment:</h3>
                      </div>
                      <div class="col-9">
                        <h3><?php echo($varReviewMessage); ?></h3>
                      </div>
                    </div><br>
                      <?php
                    }
                  }
                }
              ?>
        </div>

        <div class="top-sales box">
          <form method="post" action="../PHP/processReview.php" id="reviewform" class="reviewHelp">
               <br> <h3 style="text-align:center">Give us a review </h3><br>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                              <label>Rate this website</label>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <select class="form-control" id="rate" name="star_rating" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                            </div>
                          </div>
                        </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Write a review</label>
                                <textarea rows="10" id="message_review" name="message_review" class="form-control" placeholder="Write your review" style="height:200px;" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group contactUsMsg col-md-9" id="contactUsMsg">

                        </div>
                        <div class="col-md-9"><button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
  </form>
</div>
    </div>
<?php include('dashboardClosing.php'); ?>
