
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <script src="validator.js"></script>



</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="card mb-3 ">
                <img src="image/welcome.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <div>
                    </div>
                    <form  method="post" action="landing.php" onsubmit="return validateForm()" name="regForm">
                        <div class="row mb-3">
                            <div class="col-xs-6 col-md-4 ">
                                <label for="">First Name</label>

                                <input type="text" class="form-control" placeholder="First Name" name="firstName" >
                                <span class="text-danger" id="firstNameErr"></span>
                            </div>
                            <div class="col-xs-6 col-md-8">
                                <label for="">Last Name</label>

                                <input type="text" class="form-control" placeholder="Last Name" name="lastName" >
                                <span class="text-danger" id="lastNameErr"></span>

                            </div>
                        </div>


                        <div class="row mb-3 mx-1">
                            <label for="">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >@</span>
                                </div>

                                <input type="text" class="form-control" name="email" placeholder="Email" >
                            </div>
                            <span class="text-danger" id="emailErr"></span>

                        </div>


                        <div class="row mb-3">

                            <div class="col-xs-6 col-md-4">
                                <label for="">Date of Birth</label>

                                <div class="input-group">

                                    <div class="input-group-prepend">
                                <span class="input-group-text" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
  <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Date" name="date" >
                                </div>
                                <span class="text-danger" id="dateErr"></span>

                            </div>

                            <div class="col-xs-6 col-md-8">
                                <label for="">Favourite Color</label>

                                <input type="color" class="form-control Fcolor" name="Fcolor" placeholder="Click here to change color">
                                <span class="text-info">Click on the above tab/input to pick a color</span>

                            </div>


                        </div>


                        <div class="row mb-3">
                            <div class="col-xs-6 col-md-4">
                                <label for="">Gender</label>
                                <div class="row">
                                    <div class="col-xs-6 col-md-6 mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="">M</span>
                                            </div>
                                            <input type="checkbox" name="gender" value="Male" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="" >F</span>
                                            </div>
                                            <input type="checkbox" name="gender"  value="Female" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger" id="genderErr"></span>

                            </div>

                            <div class="col-xs-6 col-md-8">
                                <label for="">Department</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
       <span class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-briefcase" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z"/>
            <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
        </svg></span>
                                    </div>
                                    <select name="dept" class="form-control" >
                                        <option value="">Select your Department</option>
                                        <option value="IT">IT</option>
                                        <option value="Human resources">Human resources</option>
                                        <option value="FINANCE">Finance</option>
                                    </select>
                                </div>
                                <span class="text-danger" id="deptErr"></span>

                            </div>
                        </div>


                        <div class="row mb-3 mx-1">
                            <label for="">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >#</span>
                                </div>

                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <span class="text-danger" id="passErr"></span>

                        </div>



                        <div class="row mb-3 mx-1 justify-content-center ">
                            <input type="submit" name="register" class="btn btn-success " value="Submit">
                        </div>
                    </form>
                </div>
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
