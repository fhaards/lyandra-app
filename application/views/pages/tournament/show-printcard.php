<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 0px;
            padding: 0px;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        .container {
            margin: auto;
            width: 9cm;
            height: 14cm;
            border: 1px solid #64748b;
            position: relative;
            border-radius: 5px;
        }

        .container .header {
            height: 6cm;
            width: 100%;
            position: relative;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .container .header .header-img {
            width: 100%;
            height: 4cm;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            position: relative;
            object-fit: cover;
        }

        .container .header .header-img::before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            opacity: 0.9;
            background: rgba(30, 41, 59, 0.75);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(0px);
            -webkit-backdrop-filter: blur(0px);
            transition: 0.3s;
            transition: 0.3s ease-in;

        }

        .container .header .header-img .img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .container .header .header-content {
            width: 90%;
            margin: auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .container .header .header-content .header-foto {
            width: 3cm;
            height: 3cm;
            position: relative;
            object-fit: cover;
            margin: -1.5cm auto;
            z-index: 2;
            border-radius: 10px;
        }

        .container .header .header-content .header-foto .img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            border: 5px solid #fff;
        }

        .container .main {
            width: 100%;
            height: 5.5cm;
            position: relative;
        }

        .container .main .main-content {
            width: 80%;
            margin: auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 1cm;

        }

        .container .main .main-content .name {
            height: 3cm;
        }

        .container .main .main-content .name p {
            text-transform: uppercase;
            font-size: 15px;
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container .main .main-content .participants {
            padding: 10px;
            border-radius: 50px;
            background-color: #2563eb;
            position: absolute;
            bottom: 20;
            left: 50;
            right: 50;
            color: #fff;
        }

        /* FOOTER */
        .container .footer {
            width: 100%;
            height: 3.5cm;
            position: relative;
        }

        .container .footer .footer-content {
            width: 8cm;
            height: 100%;
            margin: auto;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .container .footer .footer-content .left {
            width: 2cm;
            float: left;
            height: 100%;
            padding-top: 10px;
        }

        .container .footer .footer-content .right {
            width: 5cm;
            float: left;
            height: 100%;
            padding-top: 10px;
        }

        .container .footer .footer-content .left .footer-img {
            width: 1.2cm;
            height: 1.2cm;
            position: relative;
            object-fit: cover;
            z-index: 2;
            border-radius: 10px;
        }

        .container .footer .footer-content .left .footer-img .img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .container .footer .footer-content .right p {
            text-transform: uppercase;
            font-size: 9px;
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">

            <div class="header-img">
                <img class="img-responsive" src="<?= 'uploads/tournaments/' . $item3->tournament_id . '/' . $item3->banner; ?>">
            </div>
            <div class="header-content">
                <div class="header-foto">
                    <img class="img-responsive" src="<?= 'uploads/profile/' . $userAcc->user_id . '/' . $userAcc->photo; ?>">
                </div>
            </div>
        </div>
        <div class="main">
            <div class="main-content">
                <div class="name">
                    <h3><?= $user->name; ?></h3>
                    <p><?= $contingent->contingent_name; ?></p>
                </div>
                <h4 class="participants">PARTICIPANTS</h4>
            </div>
        </div>
        <div class="footer">
            <div class="footer-content">
                <div class="left">
                    <div class="footer-img">
                        <img class="img-responsive" src="<?= 'uploads/tournaments/' . $item3->tournament_id . '/' . $item3->logo; ?>">
                    </div>
                </div>
                <div class="right">
                    <h5><?= $item->tournament_name; ?></h5>
                    <p><?= setDate($item->event_date); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align:center;margin-top:50px;">
        PRINT 9 X 14 CM
    </div>
</body>

</html>