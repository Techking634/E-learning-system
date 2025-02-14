<?php
//we get the request url and store it in a variable $request_site
$request_site = isset($_GET['request_site']) ? $_GET['request_site'] : 'home';



//displaying homepage
if (empty($request_site)) {
    $request_site = "home";
}


//login form and sign up form action attribute
$login_register_action = "handle-form-submission";


//check if either login or signup form is submitted
if ($request_site === $login_register_action && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "backend.php";
}

//set request url as file path
$page_path = __DIR__ . "/frontend/pages/" . $request_site . ".php";

session_start();

//function to get logged in user
function user()
{

    if (isset($_SESSION['user'])) {
        return (object) $_SESSION['user'];
    }
    return null;
}
$get_user = user();


function get_user($property)
{
    global $get_user;
    $res = $get_user->$property;
    echo "{$res}";
}

//function to check if user is logged in or not 
//you can call this function at the top of page you want user to be logged in in order to access 
function require_login()
{
    if (!isset($_SESSION['user'])) {
        header("Location: login");
    }
}

//function to display error messages

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
}


function display_error($error, $is_main = false)
{
    global $errors;
    if (isset($errors["{$error}"])) {

        echo '<div class="' . ($is_main ? 'error-main' : 'error') . '">
                    <p>' . $errors["$error"] . '</p>
             </div>';
    }
}

//displaying requested page

if (file_exists($page_path)) {

    require $page_path;
} else {
    http_response_code(404);

    //if page is not found we can display 404
    require __DIR__ . "/404.php";
}


//unsetting the errors after they have been displayed
if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}
