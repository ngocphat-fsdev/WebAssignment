<?php
              if (isset($_POST['apply']) && isUser()){
                include "connectDB.php";
            
                $upid = addslashes($_POST['upid']);
                $min = addslashes($_POST['min']);
            
                if ($upid != ""){
                  $sql = 'EXEC getAllPosts @UploaderID= ?';
                  $param = array($upid);
                  $stmt = sqlsrv_query($conn, $sql, $param);
                  while ($row = sqlsrv_fetch_array($stmt)){
                
            ?>
            
            <!-- Job item 
              SELECT POST.ID, UPLOADER_NAME, TITLE, UPLOAD_TIME, WORK_PLACE, POSTION, REQUIREMENT, WORK_TIME,
	QUANTITY, CV_DEADLINE, SALARY, POST.ACC_ID
            -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.php">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4><?php echo $row['UPLOADER_NAME'] ?></h4>
                    <h5><?php echo $row['TITLE'] ?><span class="label label-success">Full-time</span></h5>
                  </div>
                  <p><?php echo $row['UPLOAD_TIME'] ?></p>
                  <p><?php echo $row['POSTION'] ?></p>
                  <p><?php echo $row['CVDEADLINE'] ?></p>
                </header>

                <div class="item-body">
                  <p><p><?php echo $row['QUANTITY'] ?></p></p>
                </div>

                <footer>
                  <ul class="details cols-3">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span><?php echo $row['WORK_PLACE'] ?></span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span><?php echo $row['SALARY'] ?></span>
                    </li>

                    <li>
                      <i class="fa fa-certificate"></i>
                      <span><?php echo $row['REQUIREMENT'] ?></span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Job item 
                POST.UPLOADER_NAME, RECRUIT_POST.SALARY, 
                COUNT(RECRUIT_POST.ID_UPLOADER) AS NUMBER_OF_POSTS 
          -->
              
            <?php
                  }
                }
                elseif ($min != ""){
                  $sql = 'EXEC countPosts @MinSalary= ?';
                  $param = array($min);
                  $stmt = sqlsrv_query($conn, $sql, $param);
                  while ($row = sqlsrv_fetch_array($stmt)){
            ?>
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.php">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4><?php echo $row['UPLOADER_NAME'] ?></h4>
                    <h5><?php echo $row['TITLE'] ?><span class="label label-success">Full-time</span></h5>
                  </div>
                  <p><?php echo $row['UPLOAD_TIME'] ?></p>
                  <p><?php echo $row['POSTION'] ?></p>
                  <p><?php echo $row['CVDEADLINE'] ?></p>
                </header>

                <div class="item-body">
                  <p><p><?php echo $row['QUANTITY'] ?></p></p>
                </div>

                <footer>
                  <ul class="details cols-3">
                    <li>
                      <i class="fa fa-map-marker"></i>
                      <span><?php echo $row['WORK_PLACE'] ?></span>
                    </li>

                    <li>
                      <i class="fa fa-money"></i>
                      <span><?php echo $row['SALARY'] ?></span>
                    </li>

                    <li>
                      <i class="fa fa-certificate"></i>
                      <span><?php echo $row['REQUIREMENT'] ?></span>
                    </li>
                  </ul>
                </footer>
              </a>
            </div>
            <!-- END Job item -->
              <?php
                  }
                }
              ?>