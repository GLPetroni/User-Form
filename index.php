<!DOCTYPE HTML PUBLIC>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="osu_style.css">
<link rel="stylesheet" href="style.css">
<?php
    try {
        $config_file = "./golden_ticket.conf";
        if( !file_exists($config_file) ){
            throw new Exception("File not found.");
            }

            $config_data = file($config_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if( !$config_data ) {
                throw new Exception("File open failed.");
            }
    }
    catch ( Exception $e ) {
        die("Error opening ./golden_ticket.conf\n" . $e);
    }
   
   
    $configs = array();
    foreach($config_data as $line) {
        list($k, $v) = explode('=', $line);
        $configs[ $k ] = $v;
    }
?>
</head>

<body>

    <header role="banner" class="osu-top-hat">
            <a href="/" title="Home" rel="home" class="logo">
                <img src="https://oregonstate.edu/themes/osu/homepage/logo.svg" alt="Oregon State University">
            </a>
        <nav role="navigation" aria-labelledby="block-homepage-main-menu-menu" id="block-homepage-main-menu" data-block-plugin-id="system_menu_block:main" class="d-none d-lg-block">
                    
            <ul class="main-menu nav nav-pills">
                <li class="nav-item">
                    <a href="http://shell.cqls.oregonstate.edu/" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="http://shell.cqls.oregonstate.edu/access/" class="nav-link">CGRB ACCOUNT REQUEST</a>
                    </li>
                <li class="nav-item">
                    <a href="http://shell.cqls.oregonstate.edu/access/actf.php" class="nav-link ">ACTF ACCOUNT REQUEST</a>
                </li>
                <li class="nav-item">
                    <a href="http://shell.cqls.oregonstate.edu/support/" class="nav-link">SUPPORT REQUEST</a>
                </li>
                <li class="nav-item">
                    <a href="https://files.cqls.oregonstate.edu/" class="nav-link">CGRB WEB ACCESS</a>
                </li>
                <li class="nav-item">
                    <a href="https://cqls.oregonstate.edu/contact-us" class="nav-link">CONTACT US</a>
                </li>
            </ul>
                                
            <nav class="d-block d-sm-none mobile-menu-main">
                <ul>
                    <li>
                        <a href="/future" data-drupal-link-system-path="node/26">Future Students</a>
                    </li>
                    <li>
                        <a href="/current" data-drupal-link-system-path="node/11">Current Students</a>
                    </li>
                    <li>
                        <a href="http://ecampus.oregonstate.edu/">Online Students</a>
                    </li>
                    <li>
                        <a href="/faculty" data-drupal-link-system-path="node/36">Faculty and Staff</a>
                    </li>
                    <li>
                        <a href="http://www.osualum.com/s/359/16/home.aspx?gid=1001&amp;pgid=312">Alumni</a>
                    </li>
                    <li>
                        <a href="https://www.osufoundation.org/s/359/foundation/start.aspx?sid=359&amp;gid=34&amp;pgid=61">Donors and Friends</a>
                    </li>
                </ul>


            </nav>

        </nav>

        <div class="icon-wrapper">
            <a class="toggle-mobile-menu d-lg-none" href="#">
                <i class="sr-only sr-only-focusable">Open Menu</i>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <a class="toggle-search" href="https://search.oregonstate.edu">
                <i class="sr-only sr-only-focusable">Open Search</i>
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>

    </header>

    <div class="menu">
        <div id="menu_header"> 
            <h3><span>MAIN MENU</span></h3>
        </div>
        <a href="http://shell.cqls.oregonstate.edu/documentation.php">Documentation</a>
        <a href="http://shell.cqls.oregonstate.edu/donations.php">Donations</a>
        <a href="http://shell.cqls.oregonstate.edu/software/">Software</a>
        <a href="http://cqls.oregonstate.edu/core/mailing-lists">Mail Lists</a>
        <a href="https://cqls.oregonstate.edu/biocomputing/biocomputing-service-fees">Biocomputing Services</a>
        <a href="http://shell.cqls.oregonstate.edu/status.php">Cloud Status</a>
        <a href="http://shell.cqls.oregonstate.edu/policies/">CGRB Policies</a>
        <a href="http://shell.cqls.oregonstate.edu/voting/">Conference Voting</a>

    <br><br>
        <div id="menu_header">
            <h3><span>Announcements</span></h3>
        </div>

            <a class='announcement_link' href="/announcement.php" title="Read more about this announcemen    t">SAMBA (Windsows shares) Problem</a>
            <em class='announcement-date'>- March 09, 2021</em>
            <a class='announcement_link' href="/announcement.php" title="Read more about this announcemen    t">CGRB Power Outage</a>
            <em class='announcement-date'>- June 03, 2021</em>


<?php
include('lock.php');
$value = isset($login_session) ? $login_session : '';
    if($value != "") {
        require("admin_menu.php");
    }
?>

    </div>

    </div>




    <p><h1>ACTF class resource request form</h1></p>
<?php require("form.php"); ?>
<?php include "email.php"; ?>
<br><br>
<div>
<?php require("footer.php"); ?>
</div>
<script src="Sslider.js"></script>
<script src="Cslider.js"></script>
<script src="cost.js"></script>
</body>
