<?php
session_start();

include_once($_SERVER["DOCUMENT_ROOT"] . '/lib/application.php');
// echo ($_SERVER["DOCUMENT_ROOT"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>วันเพ็ญโภชนา ลำพูน</title>
        <meta name="description" content="วันเพ็ญโภชนา ลำพูน" />
        <meta name="keywords" content="วันเพ็ญโภชนา ลำพูน" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="<?= ADDRESS ?>style.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?= ADDRESS ?>images/icon.png">
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
            <script src="<?= ADDRESS ?>dist/slippry.min.js"></script>
            <script src="//use.edgefonts.net/cabin;source-sans-pro:n2,i2,n3,n4,n6,n7,n9.js"></script>
            <meta name="viewport" content="width=device-width">
                <link rel="stylesheet" href="<?= ADDRESS ?>slide.css">
                    <link rel="stylesheet" href="<?= ADDRESS ?>dist/slippry.css">
                        <?php if (PAGE_CONTROLLERS != '') { ?>
                            <link rel="stylesheet" href="<?= ADDRESS ?>css/lightbox.css" type="text/css" media="screen" />
                            <link rel="stylesheet" href="<?= ADDRESS ?>css/style.css" type="text/css" media="screen" />
                            <script type="text/javascript" src="<?= ADDRESS ?>js/prototype.lite.js"></script>
                            <script type="text/javascript" src="<?= ADDRESS ?>js/moo.fx.js"></script>
                            <script type="text/javascript" src="<?= ADDRESS ?>js/litebox-1.0.js"></script>
                        <?php } ?>


                        </head>
                        <body>
                            <div id="tapmenu">
                                <div id="sizemenu">
                                    <div id="menu">
                                        <ul>
                                            <li><a href="<?= ADDRESS ?>" title="หน้าหลัก">หน้าหลัก</a></li>
                                            <li>/</li>
                                            <li><a href="<?= ADDRESS ?>menu" title="รายการอาหาร">รายการอาหาร</a></li>
                                            <li>/</li>
                                            <li><a href="<?= ADDRESS ?>menuset" title="เซตอาหาร">เซตอาหาร</a></li>
                                            <li>/</li>
                                            <li><a href="<?= ADDRESS ?>portfolio" title="ผลงานของเรา">ผลงานของเรา</a></li>
                                            <li>/</li>
                                            <li><a href="<?= ADDRESS ?>contact" title="ติดต่อเรา">ติดต่อเรา</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (PAGE_CONTROLLERS == '' || PAGE_CONTROLLERS == 'index') {
                                include 'controllers/home.php';
                            } else if (PAGE_CONTROLLERS == 'portfolio') {
                                include 'controllers/portfolio.php';
                            } else if (PAGE_CONTROLLERS == 'menu') {
                                include 'controllers/menu.php';
                            } else if (PAGE_CONTROLLERS == 'menuset') {
                                include 'controllers/menuset.php';
                            } else if (PAGE_CONTROLLERS == 'contact') {
                                include 'controllers/contact.php';
                            } 
                            ?> 
                            <div id="footer">
                                <div class="linefooter"></div>
                                <p>© สงวนลิขสิทธิ์  วันเพ็ญโภชนา.com</p>
                            </div>

                        </body>
                        </html>

