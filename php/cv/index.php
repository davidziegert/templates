<?php include('history.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>resume.tmp</title>

        <meta name="author" content="AUTHOR">
        <meta name="description" content="DESCRIPTION">
        <meta name="keywords" content="KEYWORD, KEYWORD">
        <meta name="robots" content="noindex, nofollow">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
        <link rel="apple-touch-icon" href="./img/touch.png" />

        <!-- GoogleFonts -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

        <!-- ForkAwesome -->    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> 
    </head>
    <body>
        <div class="wrapper">
            <div class="column first"></div>
            <div class="column second">
                <div class="fixed">
                    <div class="info personal">
                        <span class="name">
                            <span><?php print $firstname ?></span>
                            <span><?php print $lastname ?></span>
                        </span>
                        <span><?php print $occupation ?></span>
                    </div>
                    <div class="info contact">
                        <span><i class="fa fa-calendar" aria-hidden="true"></i> <?php print $dateofbirth ?></span>
                        <span><a href="mailto:<?php print $mail ?>" target=“_blank“ rel=“noopener noreferrer“><i class="fa fa-envelope" aria-hidden="true"></i> <?php print $mail ?></a></span>
                        <span><i class="fa fa-phone" aria-hidden="true"></i> <?php print $phone ?></span>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php print $street . ', ' . $citycode . ' ' . $city ?></span>
                    </div>
                </div>
            </div>
            <div class="column third">
                <div class="box download">
                    <a href="cv.pdf" target=“_blank“ rel=“noopener noreferrer“><i class="fa fa-download" aria-hidden="true"></i> Download CV</a>
                    <a href="#" id="print-button" target=“_blank“ rel=“noopener noreferrer“ onclick="window.print();return false;"><i class="fa fa-print" aria-hidden="true"></i> Print CV</a> 
                </div>
                <h2>About me</h2>
                <div class="box aboutme">
                    <span><?php print $aboutme ?></span>
                </div>
                <h2>Education</h2>
                <div class="time-flex education">
                    <div class="box education">
                        <span class="education-year"><?php print $education_date_1 ?></span>
                        <div class="education-line">
                            <span class="education-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                            <div class="education-content">
                                <span><?php print $education_place_1 ?></span>
                                <span><a href="<?php print $education_link_1 ?>" target=“_blank“ rel=“noopener noreferrer“><?php print $education_title_1 ?></a></span>
                                <span><?php print $education_description_1 ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="box education">
                        <span class="education-year"><?php print $education_date_2 ?></span>
                        <div class="education-line">
                            <span class="education-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                            <div class="education-content">
                                <span><?php print $education_place_2 ?></span>
                                <span><a href="<?php print $education_link_2 ?>" target=“_blank“ rel=“noopener noreferrer“><?php print $education_title_2 ?></a></span>
                                <span><?php print $education_description_2 ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Work Experience</h2>
                <div class="time-flex work">
                    <details class="box work">
                        <summary>
                            <span><b><?php print $work_date_1 ?></b></span>
                            <span><b><i class="fa fa-briefcase" aria-hidden="true"></i> <?php print $work_place_1 ?></b></span>
                        </summary>
                        <div>
                            <span><b>Position:</b> <?php print $work_title_1 ?></span>
                            <span><b>Description:</b> <?php print $work_description_1 ?></span>
                            <span><b>Website:</b> <a href="<?php print $work_link_1 ?>" target=“_blank“ rel=“noopener noreferrer“><?php print $work_link_1 ?></a></span>
                        </div>
                    </details>
                    <details class="box work">
                        <summary>
                            <span><b><?php print $work_date_2 ?></b></span>
                            <span><b><i class="fa fa-briefcase" aria-hidden="true"></i> <?php print $work_place_2 ?></b></span>
                        </summary>
                        <div>
                            <span><b>Position:</b> <?php print $work_title_2 ?></span>
                            <span><b>Description:</b> <?php print $work_description_2 ?></span>
                            <span><b>Website:</b> <a href="<?php print $work_link_2 ?>" target=“_blank“ rel=“noopener noreferrer“><?php print $work_link_2 ?></a></span>
                        </div>
                    </details>
                </div>
                <h2>Skills</h2>
                <div class="box skills idea1">
                    <div class="container">
                        <span class="container-title">
                            <?php print $skill_group_1 ?>
                        </span>
                        <?php
                        array_map(function ($skill, $value) {
                            print '<span class="container-button">' . $skill . '</span>';
                        }, $skills_group_1, $values_group_1);
                        ?>
                    </div>
                    <div class="container">
                        <span class="container-title">
                            <?php print $skill_group_2 ?>
                        </span>
                        <?php
                        array_map(function ($skill, $value) {
                            print '<span class="container-button">' . $skill . '</span>';
                        }, $skills_group_2, $values_group_2);
                        ?>
                    </div>
                    <div class="container">
                        <span class="container-title">
                            <?php print $skill_group_3 ?>
                        </span>
                        <?php
                        array_map(function ($skill, $value) {
                            print '<span class="container-button">' . $skill . '</span>';
                        }, $skills_group_3, $values_group_3);
                        ?>
                    </div>
                    <div class="container">
                        <span class="container-title">
                            <?php print $skill_group_9 ?>
                        </span>
                        <?php
                        array_map(function ($skill, $value) {
                            print '<span class="container-button">' . $skill . '</span>';
                        }, $skills_group_9, $values_group_9);
                        ?>
                    </div>
                </div>
                <div class="box skills idea2">
                    <div class="container">
                        <span class="container-title"><?php print $skill_group_4 ?></span>
                        <?php
                            array_map(function ($skill, $value) {
                                print '<div class="container-progress">';
                                print '<span>' . $skill . '</span>';
                                print '<progress value="' . $value . '" max="100"></progress>';
                                print '</div>';
                            }, $skills_group_4, $values_group_4);
                        ?>
                    </div>
                    <div class="container">
                        <span class="container-title"><?php print $skill_group_5 ?></span>
                        <?php
                            array_map(function ($skill, $value) {
                                print '<div class="container-progress">';
                                print '<span>' . $skill . '</span>';
                                print '<progress value="' . $value . '" max="100"></progress>';
                                print '</div>';
                            }, $skills_group_5, $values_group_5);
                        ?>
                    </div>
                    <div class="container">
                        <span class="container-title"><?php print $skill_group_10 ?></span>
                        <?php
                            array_map(function ($skill, $value) {
                                print '<div class="container-progress">';
                                print '<span>' . $skill . '</span>';
                                print '<progress value="' . $value . '" max="100"></progress>';
                                print '</div>';
                            }, $skills_group_10, $values_group_10);
                        ?>
                    </div>
                </div>
                <div class="box skills idea3">
                    <div class="container">
                        <span class="container-title"><?php print $skill_group_6 ?></span>
                        <div class="container-flex">
                            <?php
                                array_map(function ($skill, $value) {
                                    print '<div class="circle outside percent' . $value . '">';
                                        print '<div class="inside">'.$skill.'</div>';
                                    print '</div>';
                                }, $skills_group_6, $values_group_6);
                            ?>
                        </div>
                    </div>
                    <div class="container">
                        <span class="container-title"><?php print $skill_group_7 ?></span>
                        <div class="container-flex">
                            <?php
                                array_map(function ($skill, $value) {
                                    print '<div class="circle outside percent' . $value . '">';
                                        print '<div class="inside">'.$skill.'</div>';
                                    print '</div>';
                                }, $skills_group_7, $values_group_7);
                            ?>
                        </div>
                    </div>
                    <div class="container">
                        <span class="container-title"><?php print $skill_group_8 ?></span>
                        <div class="container-flex">
                            <?php
                                array_map(function ($skill, $value) {
                                    print '<div class="circle outside percent' . $value . '">';
                                        print '<div class="inside">'.$skill.'</div>';
                                    print '</div>';
                                }, $skills_group_8, $values_group_8);
                            ?>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="column fourth"></div>
        </div>
    </body>
</html>