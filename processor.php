<?php

$firstname =$lastname = $email =$gender=$date=$dept=$password= "";
$error=array('firstnameErr'=>"",'lastnameErr'=>"",'emailErr'=>"",'genderErr'=>"",'dateErr'=>"",'deptErr'=>"",'passwordErr'=>"",'main'=>"");
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['register'])) {

        if(empty($_POST['firstName']))
        {
            $error['firstnameErr']= "You must Enter your first name";
        }else {

            if (!preg_match("/^[a-zA-Z ]*$/", $_POST['firstName'])) {
                $error['firstnameErr'] = "Only letters and white space allowed";
            }
        }
       $firstname = $_POST['firstName'];


        if(empty($_POST['lastName']))
        {
            $error['lastnameErr']= "You must Enter your Last name";
        }else {

            if (!preg_match("/^[a-zA-Z ]*$/", $_POST['lastName'])) {
                $error['lastnameErr'] = "Only letters and white space allowed";
            }
        }
      $lastname = $_POST['lastName'];



        ##OR##
        if(empty($_POST['Email']))
        {
            $error['emailErr']= "You must Enter your Email";
        }else {

//        if (!preg_match("//w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+/", $_POST['Email'])) {

                        #####OR#####

            if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
                $error['emailErr'] = "Invalid email format";
            }
        }
        $email = $_POST['Email'];

         $color = $_POST['Fcolor'];


        if(empty($_POST['date']))
        {
            $error['dateErr']= "You must select a date";
        }
        $date=$_POST['date'];


        if(empty($_POST['gender']))
        {
            $error['genderErr']= "You must select gender";
        }

        if(!empty($_POST['gender'])) {
            $no_checked = count($_POST['gender']);
            if($no_checked>1) {
                $error['genderErr'] = "Baba wetyn Na,Select one option";
            }else{
               $gender = $_POST['gender'][0];

            }
        }

        if(empty($_POST['dept'])){
            $error['deptErr']= "You must select a department";
    }
        $dept=$_POST['dept'];


        if(empty($_POST['password']))
        {
            $error['passwordErr']= "You must Enter a password";
        }else {

            if (!preg_match("/^(?=.*[!@$%^&*()\-_=+{};:,<.>])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{15,}$/", $_POST['password'])) {
                $error['passwordErr'] = "Invalid password format,passwords must have,at least an uppercase,a lowercase,a digit,a special character and longer than 15 characters";
            }
            $password=$_POST['password'];
    }
        if(array_filter($error)){
            $error['main']="Correct the errors";
        }else{
           $strip= str_replace("#", "", $color);
//           $password= str_replace("#", "", $password);

            header("location:landing.php?color=$strip&firstname=$firstname&lastname=$lastname&email=$email&DOB=$date&gender=$gender&dept=$dept&password=$password");
        }
    }
}


?>
