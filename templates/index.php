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
    <?php
        echo $errorAddinstrument;
        echo $goodAddinstrument;
        echo $errorAssignMusician;
        echo $goodAssignMusician;
        echo $errorAddedMusician;
        echo $goodAddedMusician;
    ?>
    <h3 style="color: #1b6d85;text-align: center">First musician</h3>
    <table class="table table-bordered table-striped">
        <tr>
            <td>Style musician</td>
            <td colspan="2">Is in groups</td>
            <td colspan="2">Genre groups</td>
            <td colspan="2">Instrument</td>
            <td colspan="2">Type instrument</td>
        </tr>
        <tr>
        <?php
            foreach ($musicianInBand as $value)
            {
                foreach ($value as $item)
                {
                    ?>
                    <td><?php print_r($item); ?></td>
                    <?php
                }
            }
                    ?>
        </tr>
    </table>
    <?php
        echo $errorAddinstrumentForSecondMusician;
        echo $goodAddinstrumentForSecondMusician;
        echo $errorAssignMusicianForSecondMusician;
        echo $goodAssignMusicianForSecondMusician;
        echo $errorAddedMusicianForSecondMusician;
        echo $goodAddedMusicianForSecondMusician;
    ?>
    <h3 style="color: #1b6d85;text-align: center">Second musician</h3>
    <table class="table table-bordered table-striped">
        <tr>
            <td>Style musician</td>
            <td>Is in groups</td>
            <td >Genre groups</td>
            <td>Instrument</td>
            <td>Type instrument</td>
        </tr>
        <tr>
        <?php
            foreach ($musicianSecondinBand as $value)
            {
                foreach ($value as $item)
                {
                    ?>
                    <td><?php print_r($item); ?></td>
                    <?php
                }
            }
        ?>
        </tr>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
