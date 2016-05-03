<?php
include 'core/init.php';
logged_in_redirect();   //a logged in user should not be able to register while logged in
include 'includes/overall/top_page.php';

//execute the logic below only when the user has submitted a form
if(empty($_POST) === false){
    //hard coding the required fields on the form
    $required_fields = array('username', 'password', 'password_retype', 'first_name', 'last_name', 'email');
    //first ensure that all required fields on the form has been filled
    foreach ($_POST as $key=>$value){
        //if any of the submitted values from the POST are empty, and if its a required field, then break
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = 'Fields marked with an asterisk are required!';
            break 1;    //even if we find one
        }
    }
    //only when there's no errors(i.e. no empty required field), then...
    if(empty($errors) === true){
        if(user_exists($_POST['username']) === true){   //we don't want to register multiple username
            $errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
        }
        if(preg_match("/\\s/", $_POST['username']) == true){
            $errors[] = 'Your username must not contain any spaces.';
        }
        if($_POST['password'] !== $_POST['password_retype']){
            $errors[] = 'Your passwords do not match';
        }
        //just the basic email address validation. NOTE this doesn't check if its a valid domain
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
            $errors[] = 'A valid email address is required';
        }
        if(email_exists($_POST['email']) === true){
            $errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
        }
    }
}
?>
    <div class="index_splash">
        <h1 class="header_text">Register Page</h1>
    </div>
<?php
//we check if a registration went well
if(isset($_GET['success']) && empty($_GET['success'])){
    echo 'You have registered successfully. Go to login';
}else {
    //only insert into DB if the POST array is not empty, and if there were no validation errors
    if (empty($_POST) === false && empty($errors) === true) {
        //register user
        //create an assoc array of the data that we want to insert into the DB
        $register_data = array(
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email']
        );
        //does the actual insertion into the DB
        if (register_user($register_data) === false) {
            $errors[] = 'An error occurred during registration!';
            echo output_errors($errors);
            //header('Location: register.php');   //redirect the user back to the registration page.
        } else {
            //sets the success variable in the GET method
            header('Location: register.php?success');
            exit();
        }

    } else if (empty($errors) === false) {
        //if we had other validation errors, display them
        echo output_errors($errors);
    }
    ?>

    <form action="" method="post">
        <fieldset>

            <p class="register_boxes"><input type="text" name="username" placeholder="Username or Email">*</p>
            <p class="register_boxes"><input type="password" name="password" placeholder="Password">*</p>
            <p class="register_boxes"><input type="password" name="password_retype" placeholder="ReType Password">*</p>
            <p class="register_boxes"><input type="text" name="first_name" placeholder="First Name">*</p>
            <p class="register_boxes"><input type="text" name="last_name" placeholder="Last Name">*</p>
            <p class="register_boxes"><input type="text" name="email" placeholder="Enter Email">*</p>
            <p class="register_boxes"><input type="submit" name="commit" value="Register"></p>

        </fieldset>
    </form>

    <?php
}
//including the footer part of the page
include 'includes/overall/bottom_page.php';
?>


