<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Network</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
<?php require_once "autoloader.php";

$user = new Users();

$users = $user->all();
?>


<div class="container bg-dark text-white">
    <h1 class="text-center mb-5">All Users</h1>


    <div class="row">

        <?php foreach($users as $value) : ?>

        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
            <?php echo "<p><a  href='single_user.php?id=$value->id' class='text-white text-decoration-none'>$value->firstname $value->surname</a></p>" ?>
        </div>

        <?php endforeach; ?>


    </div>
</div>
</body>
</html>


<?php ?>
