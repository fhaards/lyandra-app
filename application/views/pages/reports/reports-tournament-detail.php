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
            margin-left: 1cm;
            margin-right: 1cm;
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

        header h1 {
            width: 90%;
            margin:auto;
            text-align: center;
            font-size:25px;
        }

        header .description-title {
            font-size: 20px;
            color: #475569;

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

        #table .bg-approve {
            background: #bbf7d0;
        }
    </style>
</head>

<body>
    <!-- Define header and footer blocks before your content -->
    <header>
        <h1><?= $item->tournament_name; ?> </h1>
    </header>

    <footer>
        Copyright Lyandra Project Event Oragnizer &copy; <?php echo date("Y"); ?>
    </footer>

    <!-- Wrap the content of your PDF inside a main tag -->
    <main>
        <br>
        <h5>Tournament Detail</h5>
        <br>

        <table id="table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td><?= $item->tournament_name; ?></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><?= $item->type; ?></td>
                </tr>
                <tr>
                    <td>Event Date</td>
                    <td><?= setDate($item->event_date); ?></td>
                </tr>
                <tr>
                    <td>Start</td>
                    <td><?= setDate($item->regist_date); ?></td>
                </tr>
                <tr>
                    <td>End</td>
                    <td><?= setDate($item->closed_date); ?></td>
                </tr>
                <tr>
                    <td>Condition</td>
                    <td><?= "Min " . $item2->max_weight . " Kg - Max " . $item2->max_weight . " Kg"; ?></td>
                </tr>
                <tr>
                    <td>Max Participants</td>
                    <td><?= $item->max_participants; ?></td>
                </tr>
                <tr>
                    <td>Venue</td>
                    <td>
                        <?= $item->venue; ?> <br>
                        Gmaps : <a href="<?= $item->venue_map; ?>"> Click Here</a>
                    </td>
                </tr>
            </thead>
        </table>

        <br>
        <h5>Participants List</h5>
        <br>

        <table id="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Contingent</th>
                    <th>Gender</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Submit At</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participant as $tr) : ?>
                    <tr class="<?= ($tr['participant_status'] == '1') ? 'bg-approve' : ''; ?>">
                        <td><?= $tr['name']; ?></td>
                        <td><?= $tr['contingent_name']; ?></td>
                        <td><?= $tr['gender']; ?></td>
                        <td><?= $tr['weight']; ?> Kg</td>
                        <td><?= $tr['height']; ?> cm</td>
                        <td><?= setTimeDate($tr['submit_at']); ?></td>
                        <td><?= setParticipantStatus($tr['participant_status']); ?></td>
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