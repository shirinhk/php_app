<?php
//starts new or resume existing session, it should be the very first thing in the page
// when we call it in contact page and submit page they start sharing session together
session_start();

// we use functions we have in other php file in here
include '../includes/function.php';

// we get the data from submission form from post data function
$firstName = submitFormFromSession('first_name');
$lastName = submitFormFromSession('last_name');
$email = submitFormFromSession('email');

// should it show the data or not
$showSubmitionData = mustPresentSubmitionData();

// show errors if the data in not there or wrong, work with the session error
$firstNameError = errorMessageFromSession('first_name');
$lastNameError = errorMessageFromSession('last_name');
$emailError = errorMessageFromSession('email');

// if there is error in data validation call the errors and show the array and
// but with refreshing the page the error will go away
$_SESSION['errors'] =[];
// all input data will go away with refreshing the page
$_SESSION['submission'] = [];
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/main.css">     
    </head>

    <body>

        <?php 
        include '../includes/partials/navigation.php';
        ?>

        <div class="contact_form"> 
            <h4 class="kindly">Kindly Email us to Book, Reschedule or Cancel your appointment</h4>
            <form method="POST" action="../includes/submit.php">
                <span style="color:red">
                    <?php echo $firstNameError; ?>
                </span>
                <br>
                <input type="text" name="first_name" placeholder="First name" value="<?php echo $firstName; ?>">
                <br>
                <span style="color:red">
                    <?php echo $lastNameError; ?>
                </span>
                <br>
                <input type="text" name="last_name" placeholder="Last name" value="<?php echo $lasttName; ?>">
                <br>
                <span style="color:red">
                    <?php echo $emailError; ?>
                </span>
                <br>
                <input type="text" name="email" type="email" placeholder="Email" value="<?php echo $email; ?>"> 
                <br><br>
                <input type="text" name="subject" placeholder="Book/Reschedule/Cancel">
                <br><br>
                <textarea name="comment" id="comments" cols="30" rows="30" placeholder="Please tell us what days and times are preferable for you by detail..."></textarea>
                <br>
                <button type="submit">SUBMIT REQUEST</button>
            </form>
        </div>

        <?php 
        include '../includes/partials/navigation_2.php';
        ?>
        
    </body>
</html>