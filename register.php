<?php

// Include the database connection file
include 'connect.php';


// Handle user registration when the signUp form is submitted
if(isset($_POST['signUp'])){

    // Get form data from POST request
    $fullName=$_POST['fullnames'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    // Hash the password using MD5
    $password = md5($password);


    // Check if the email already exists in the database
     $checkEmail="SELECT * From clients where email='$email'";
     $result=$conn->query($checkEmail);

     // If email exists, show error message
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{

        // Insert new user into the database
        $insertQuery="INSERT INTO clients(name,email,password)
                      VALUES ('$fullName','$email','$password')";

            // Execute the query and check if successful
            if($conn->query($insertQuery)==TRUE){

                // Redirect to login page after successful registration
                header("location: homepage.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}


// Handle user login when the logIn form is submitted
if(isset($_POST['logIn'])){

// Get login credentials from POST request
   $email=$_POST['email'];
   $password=$_POST['password'];

   // Hash the password using MD5
   $password = md5($password);
   
    // Query to check if user exists with provided credentials
   $sql="SELECT * FROM clients WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);

   // If a matching user is found
   if($result->num_rows>0){

    // Start a new session to store user data
    session_start();

    // Fetch the user's data as an associative array
    $row=$result->fetch_assoc();

    // Store user's email in the session
    $_SESSION['email']=$row['email'];

     // Redirect to the homepage 
    header("Location: homepage2.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}

?>

