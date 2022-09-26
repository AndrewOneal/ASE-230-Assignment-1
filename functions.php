<?php
    include_once 'data.php';

    function displayCards($members) {
        for($i=0;$i<count($members);$i++){
            ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb">
                        <a href="detail.php?member=<?= $i ?>"><img src="<?= $members[$i]['image'] ?>" alt="" style="height: 315px;"></a>
                        <!-- Social Info-->
                        <div class="social-info">
                            <a href="https://www.facebook.com/andrew.oneal.56863/"><i class="fa fa-facebook"></i></a><a href="https://www.facebook.com/andrew.oneal.56863/"><i class="fa fa-twitter"></i></a><a href="https://www.linkedin.com/in/andrewjoneal/"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!-- Team Details-->
                    <div class="single_advisor_details_info">
                        <h6><?= $members[$i]['name'] ?></h6>    
                        <p class="designation"><?= $members[$i]['title'] ?></p>
                        <p class="designation">Year: <?= $members[$i]['year'] ?></p>
                        <p class="designation">Age: <?= calculateAge($members[$i]['dob']) ?></p>
                        <p class="designation">Born <?= calculateYMD($members[$i]['dob']) ?> ago.</p>
                    </div>
                </div>
            </div>;
<?php
        }
    }

    function calculateAge($birthday) {

        $date = date("Y-m-d");

        $diff = date_diff(date_create($birthday), date_create($date));

        return $diff->format('%y');
    }

    function calculateYMD($birthday) {

        $date = date("Y-m-d");

        $diff = date_diff(date_create($birthday), date_create($date));

        return $diff->format('%y Years, %m Months, and %d Days');
    }
?>