<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload video</title>

    <link rel="stylesheet" href="./index.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <?php if(isset($_GET['error'])) { ?>
        <p><?=$_GET['error']?></p>
    <?php } ?>
    <form style="text-align: center;" action="upload.php" method="post" enctype="multipart/form-data">

        <label class="form-label" for="customFile">upload video</label>
        <input type="file" name="my_video" class="form-control" id="customFile" /> <br>
        <input class="btn btn-primary" type="submit" name="submit" value="upload">

    </form>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>