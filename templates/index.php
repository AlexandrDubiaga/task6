<?php
namespace templates;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<table class="table table-striped" >
    <tr>
        <td>Name Band</td>
        <td>Genre Band</td>
        <td>Style musician</td>
        <td>Band</td>
        <td>Instrument</td>
        <td>Type instrument</td>

    </tr>
    <tr>
        <?php
        foreach ($musicianInBand as $value){
            ?>
            <td><?php print_r($value);  ?></td>
        <?php
        }
        ?>
    </tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
