<?php

$school = $_POST['school'];
$academic = $_POST['academic'];
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$games = $_POST['games'];
$animation = $_POST['animation'];
$business = $_POST['business'];
$softwaretesting = $_POST['softwaretesting'];
$objectoriented = $_POST['objectoriented'];
$computersystems = $_POST['computersystems'];
$project = $_POST['project'];
$totalscore = $_POST['totalscore'];
$average = $_POST['average'];
$classify = $_POST['classify'];

if (!empty($school)|| !empty($academic) || !empty($firstname) || !empty($surname) ||  !empty($email) || $empty($games)
    || !empty($animation)  ||  !empty($business)  ||  !empty($softwaretesting)  ||  !empty($objectoriented)  || !empty($computersystems)
        || !empty($project)  ||  !empty($totalscore)  ||  !empty($average)  ||  !empty($classify))

        {
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbname = "phpmyadmin";

            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
            if(mysqli_connect_error()){
                die('Connect Error(' . mysqli_connect_error().')'.  mysqli_connect_error());
            }else{
                $SELECT = "SELECT email From studentdata Where email = ? Limit 1";
                $INSERT = "INSERT Into studentdata(school, academic, firstname, surname, email, games, animation, business
                softwaretesting, objectoriented, computersystems, project, totalscore, average, classify)
                value(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param('s',$email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;
                if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                // $stmt->bind_param('sssssssssssssss',$school,$academic,$firstname,$surname,$email,$games,$animation,$business,$softwaretesting,$objectoriented,$computersystems,$project,$totalscore,$average,$classify);
                // $stmt->execute();

                 echo "New record inserted successfully";
                }else{
                   echo "Someone already register using this email";
                }
                // $stmt->close();
                $conn->close();
            }
        }else {
            echo "All field are required";
            die();
        }

?>