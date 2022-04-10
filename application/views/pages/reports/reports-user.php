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
        /** Define the margins of your page **/
        @page {
            margin: 0cm 0cm;
        }

        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
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

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            color: #0f172a;
            text-align: center;
            line-height: 1.5cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            color: #ddd;
            text-align: center;
            line-height: 1.5cm;
        }

        #table {
            width: 100%;
            border-collapse: collapse;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 10px;
        }

        #table tr:nth-child(even) {
            background-color: #e2e8f0;
        }

        #table tr:hover {
            background-color: #cbd5e1;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #94a3b8;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Define header and footer blocks before your content -->
    <header>
        <h1><?= $title_pdf; ?> Reports</h1>
    </header>

    <footer>
        Copyright Lyandra Project Event Oragnizer &copy; <?php echo date("Y"); ?>
    </footer>

    <!-- Wrap the content of your PDF inside a main tag -->
    <main>
        <table id="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Contingent</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Created At</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($item as $x) : ?>
                    <tr>
                        <td><?= $x['username']; ?> </td>
                        <td><?= $x['name']; ?></td>
                        <td><?= $x['contingent_name']; ?></td>
                        <td><?= ($x['phone'] == null) ? '-' : $x['phone'] . ' Kg'; ?></td>
                        <td><?= $x['gender']; ?></td>
                        <td><?= ($x['weight'] == null) ? '-' : $x['weight'] . ' Kg'; ?> </td>
                        <td><?= ($x['height'] == null) ? '-' : $x['height'] . ' cm'; ?> </td>
                        <td><?= setTimeDate($x['created_at']); ?></td>
                        <td> <?= checkUserStatus($x['user_status']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- <p style="page-break-after: never;">
            Content Page 2
        </p> -->
    </main>
</body>

</html>