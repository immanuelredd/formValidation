
<?php
if(!empty($_GET['color']) && !empty($_GET['firstname'])&& !empty($_GET['lastname'])&& !empty($_GET['email'])&& !empty($_GET['DOB'])&& !empty($_GET['gender'])&& !empty($_GET['dept'])&& !empty($_GET['password'])){
     $color=$_GET['color'];
     $firstname=$_GET['firstname'];
     $lastname=$_GET['lastname'];
     $email=$_GET['email'];
     $DOB=$_GET['DOB'];
     $gender=$_GET['gender'];
     $dept=$_GET['dept'];
     $password=$_GET['password'];
}else{
    header("location:index.php?error=''");
}

?>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
<!--    <link href="css/main.css" rel="stylesheet" media="all">-->
</head>
<body style="background-color:<?php echo $color; ?>;">


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3 ">
                <div class="card-body">
                    <h5 class="card-title">Hi! <?php echo $firstname ." ". $lastname;?></h5>
                    <div class="card-header"
                         Here are your details
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Email address: <strong><?php echo $email;?></strong></li>
                        <li class="list-group-item">Date of birth: <strong><?php echo $DOB;?></strong></li>
                        <li class="list-group-item">Favorite Color:<strong style="color:<?php echo $color;?>"><?php echo $color;?></strong></li>
                        <li class="list-group-item">Gender: <strong><?php echo $gender;?></strong></li>
                        <li class="list-group-item">Department: <strong><?php echo $dept;?></strong></li>
                        <li class="list-group-item">Password: <strong><?php echo $password;?></strong></li>

                    </ul>

                </div>
        <div class="alert alert-success" style="text-align: center"><h3>The amount of knowledge you have is how small your limit is.</h3></div>
            </div>
        </div>
    </div>



</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>

</html>

