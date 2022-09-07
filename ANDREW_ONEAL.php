<!doctype html>
<html lang="en">
    <head>
        <!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <?php
            $title = "ASE 230 - Andrew Oneal";
            $header = "This is ASE 230 - Andrew Oneal";
            $name = "Andrew Oneal";
            $profession = "Full-Stack Software Engineer";
            $company = "Spotify";
            $email = "oneala5@nku.edu";
            $intro = "Hello! I am a sophomore in the Applied Software Engineering program. I am minoring in Electronics Technology and Philosophy. I am very focused on self-improvement and self-fulfillment. I love working on myself and getting better at everything that I do.";
            $quote = "If you are distressed by anything external, the pain is not due to the thing itself, but to your estimate of it; and this you have the power to revoke at any moment. - Marcus Aurelius";
            $funfact = "I am obsessed with hobbies. I am usually engrossed in 2-3 hobbies at a time and I switch them around every year or so. My current hobbies are electric guitar, social media creation, and studying philosophy. Some hobbies I want to get into in the future are motorcycles, car mods, robotics,  and video editing among many others.";
            $progressTitle1 = "Programming";
            $progressTitle2 = "Typing";
            $progressTitle3 = "Technical Writing";
            $progressPercent1 = "70%";
            $progressPercent2 = "80%";
            $progressPercent3 = "75%";
        ?>
    </head>
    <body>
        <link rel="stylesheet" href="assets/css/detail.css" />
        <title><?= $title; ?></title>
        <div class="container text-center mb-5">
            <h1><?= $header; ?></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="mb-2">
                        <img class="w-100" src="assets\images\headshot.jpg" alt="">
                    </div>
                    <div class="mb-2 d-flex">
                        <h4 class="font-weight-normal">
                            <?= $name; ?>
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
                                    <?= $profession; ?>
                                </label>
                            </li>
                            <li class="media">
                                <span class="w-25 text-black font-weight-normal">Dream company: </span>
                                <label class="media-body">
                                    <?= $company; ?>
                                </label>
                            </li>
                            <li class="media">
                                <span class="w-25 text-black font-weight-normal">Email: </span>
                                <label class="media-body">
                                    <?= $email; ?>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 pl-xl-3">
                    <h5 class="font-weight-normal">Short intro</h5>
                    <p><?= $intro; ?></p>
                    <div class="my-2 bg-light p-2">
                        <p class="font-italic mb-0">
                            <?= $quote; ?>
                        </p>
                    </div>
                    <div class="mb-2 mt-2 pt-1">
                        <h5 class="font-weight-normal">Top skills</h5>
                    </div>
                    <div class="py-1">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar-title"><?= $progressTitle1 ?></div>
                                <span class="progress-bar-number"><?= $progressPercent1 ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="py-1">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar-title"><?= $progressTitle2 ?></div>
                                <span class="progress-bar-number"><?= $progressPercent2 ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="py-1">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar-title"><?= $progressTitle3 ?></div>
                                <span class="progress-bar-number"><?= $progressPercent3 ?></span>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-normal">Fun fact</h5>
                    <p>
                        <?= $funfact; ?>
                    </p>
                </div>
            </div>
        </div>
        <a href="index.php"><button type="button" class="btn btn-primary">Back to Index</button></a>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>