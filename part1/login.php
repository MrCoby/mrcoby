<?php
include 'core/init.php';
//login program logic is specified here at the top

if(empty($_POST) === false){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) === true || empty($password) === true){
        $errors[] = 'The username and password cannot be empty';

    }else if(user_exists($username) === false){
        $errors[] = 'Username cannot be found';
    }else{
        $login = login($username, $password);
        if($login === false){
            $errors[] = 'The username/password combination is incorrect';
        }else{
            //set the user session
            $_SESSION['user_id'] = $login;
            //redirect user to home
            header('Location: bookmark.php');
            exit();
        }
    }
}else{
    $errors[] = 'No data received';
}
include 'includes/overall/top_page.php';

if(empty($errors) === false){
?>
    <h2>We tried to log you in, but...</h2>
<?php
}
    echo output_errors($errors);
    include 'includes/overall/bottom_page.php';
?>
