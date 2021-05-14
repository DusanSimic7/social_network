


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

<?php

include_once "autoloader.php";

$user = new Users();


if(isset($_GET['id'])){

    $user_id = $_GET['id'];

    $chosen_user = $user->find($user_id);

    $friendsOfChosen = $user->friendsByUser($user_id);

}
?>



<div class="container bg-dark text-white">
    <i class="fas fa-angle-double-left mr-2"></i><a href="index.php" class="text-white text-decoration-none">Go to home</a>


    <h1 class="text-center mb-0"><?php echo "$chosen_user->firstname $chosen_user->surname friends:"; ?></h1>
    <p class="text-center m-0 p-0"><i>(Chosen user)</i></p>



    <div class="row">

<?php
$array = [];
$duplicates = [];
?>

    <?php foreach ($friendsOfChosen as $friend) :   ?>
        <?php $findFriend = $user->find($friend->user2);





        ?>

            <div class="col-sm-6 col-md-3 col-lg-3 mb-5 border">

               <!-- chosen user friends-->

                <h3 class='text-center mb-0'><a class='text-decoration-none text-white'
                                             href='single_user.php?id=<?php echo $findFriend->id ?>'><?php  echo $findFriend->firstname.' '.$findFriend->surname ?></a> </h3>
                <div class="text-center"><i class="fas fa-angle-double-down"></i></div>
                <?php $friendsOfFriend = $user->friendsByUser($findFriend->id); ?>

                <?php foreach ($friendsOfFriend as $value) :   ?>
                <?php $findFriend2 = $user->find($value->user2); ?>

                <?php


                    if (!in_array($findFriend2->id, $array)) {

                        // I put out chosen user from friends of friends
                        if($user_id == $findFriend2->id){
                            continue;
                        }

                        //friends of friend
                        echo "<p class='text-center mb-0'><a class='text-decoration-none text-white' href='single_user.php?id=$findFriend2->id'>$findFriend2->firstname $findFriend2->surname</a></p>";


                        $duplicates[] .= $findFriend2->id;
                    }
                ?>

                <?php endforeach; ?>
                <p class='text-center'><i>(Friends of friend)</i></p>

            </div>

    <?php endforeach; ?>

<?php

$dupl= [];
$numbers = array_count_values($duplicates);

foreach ($numbers as $key => $value){
    if($value > 1){
            $dupl[] = $key;
    }
}

?>
    </div>
    <div class="text-center mb-5"><span class="text-center m-0 p-0 mb-5"><i>Suggested friends:</i></span><br><br>
        <?php
        foreach ($dupl as $number) {
                $suggestion_friend = $user->find($number);

               echo $suggestion_friend->firstname." ".$suggestion_friend->surname.', '.$suggestion_friend->age. ' age<br>';
            }

        ?>
    </div>
</div>


</body>
</html>
