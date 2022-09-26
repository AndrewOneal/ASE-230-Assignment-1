<!doctype html>
<html lang="en">
    <head>
        <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <?php
            include_once 'data.php';
            include_once 'functions.php';
        ?>
    </head>
    <body>
        <link rel="stylesheet" href="assets/css/detail.css" />
        <title>This is ASE 230 - <?=  $members[$_GET['member']]['name'] ?></title>
        <div class="container text-center mb-5">
            <h1>This is ASE 230 - <?=  $members[$_GET['member']]['name'] ?></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="mb-2">
                        <img class="w-100" src="<?= $members[$_GET['member']]['image'] ?>" alt="">
                    </div>
                    <div class="mb-2 d-flex">
                        <h4 class="font-weight-normal">
                            <?= $members[$_GET['member']]['name'] ?>
                        </h4>
                        <div class="social d-flex ml-auto">
                            <p class="pr-2 font-weight-normal">Follow on:</p>
                            <a href="#" class="text-muted mr-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-muted mr-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-muted mr-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-muted">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mb-2">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="w-25 text-black font-weight-normal">Dream profession:</span>
                                <label class="media-body">
                                    <?=  $members[$_GET['member']]['profession'] ?>
                                </label>
                            </li>
                            <li class="media">
                                <span class="w-25 text-black font-weight-normal">Dream company: </span>
                                <label class="media-body">
                                    <?= $members[$_GET['member']]['company'] ?>
                                </label>
                            </li>
                            <li class="media">
                                <span class="w-25 text-black font-weight-normal">Email: </span>
                                <label class="media-body">
                                    <?= $members[$_GET['member']]['email'] ?>
                                </label>
                            </li>
                            <li class="media">
                                <span class="w-25 text-black font-weight-normal">Age: </span>
                                <label class="media-body">
                                    <?= calculateAge($members[$_GET['member']]['dob']) ?>
                                </label>
                            </li>
                            <li class="media">
                                <span class="w-25 text-black font-weight-normal">Born: </span>
                                <label class="media-body">
                                    <?= calculateYMD($members[$_GET['member']]['dob']) ?> ago
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 pl-xl-3">
                    <h5 class="font-weight-normal">Short intro</h5>
                    <p><?= $members[$_GET['member']]['intro'] ?></p>
                    <div class="my-2 bg-light p-2">
                        <p class="font-italic mb-0">
                            <?= $members[$_GET['member']]['quote'] ?>
                        </p>
                    </div>
                    <div class="mb-2 mt-2 pt-1">
                        <h5 class="font-weight-normal">Top skills</h5>
                    </div>
                    <div class="py-1">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar-title"><?= $members[$_GET['member']]['progressTitle1'] ?></div>
                                <span class="progress-bar-number"><?= $members[$_GET['member']]['progressPercent1'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="py-1">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar-title"><?= $members[$_GET['member']]['progressTitle2'] ?></div>
                                <span class="progress-bar-number"><?= $members[$_GET['member']]['progressPercent2'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="py-1">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar-title"><?= $members[$_GET['member']]['progressTitle3'] ?></div>
                                <span class="progress-bar-number"><?= $members[$_GET['member']]['progressPercent3'] ?></span>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-normal">Fun fact</h5>
                    <p>
                        <?= $members[$_GET['member']]['funfact'] ?>
                    </p>
                </div>
            </div>
        </div>
        <a href="index.php"><button type="button" class="btn btn-primary">Back to Index</button></a>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>