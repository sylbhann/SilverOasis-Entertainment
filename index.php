<?php
/*
 * SilverOasis Entertainment LLC
 * Live Company for Live Gaming
 * by
 * Dr. Sterling Grant, Founder
 */
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
session_start();

require 'com.web.models/database.php';
require 'com.web.models/db.php';
require 'com.web.models/users.php';
require 'com.web.models/navigation.php';
require 'com.web.models/roles.php';

include 'com.web.views/header.php';

if(isset($_POST['action'])) {                        
   $action = strtolower(filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING));
} elseif(isset($_GET['action'])) {
$action = strtolower(filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING));
}

switch ($action)
{
    case 'about':
	   include 'com.web.views/about.php';
	   break;
       
    case 'project':
            include 'com.web.views/project.php';
            break;
        
    case 'login':
        include 'com.web.views/login.php';
        break;
    
    //Projects Pages (INCLUDE: highlord >)
    case 'one':
        include 'com.web.views/projectOne.php'; //Dawnstone
        break;
    
    case 'two':
        include 'com.web.views/projectTwo.php'; //The High Lord
        break;
    
    case 'three':
        include 'com.web.views/projectThree.php'; //E.R.M.A
        break;
    
    case 'four':
        include 'com.web.views/projectFour.php'; //Soulbound
        break;
    
    case 'five':
        include 'com.web.views/projectFive.php'; //Our Royal Cannon
        break;
    
    case 'six':
        include 'com.web.views/projectSix.php'; //Primitive Helix
        break;
    
    case 'seven':
        include 'com.web.views/projectSeven.php'; //Hogwarts
        break;
    //Projects Pages Upgrade
    case 'oneptone':
        include 'com.web.views/oneptone.php'; //Dawnstone: Chapter One
        break;
    
    case 'onepttwo':
        include 'com.web.views/onepttwo.php'; //Dawnstone: Chapter Two
        break;
    
    case 'oneptthree':
        include 'com.web.views/oneptthree.php'; //Dawnstone: Chapter Three
        break;
    
    case 'oneptfour':
        include 'com.web.views/oneptfour.php'; //Dawnstone: Chapter Four
        break;
    
    case 'oneptfive':
        include 'com.web.views/oneptfive.php'; //Dawnstone: Chapter Five
        break;
    
    case 'oneptsix':
        include 'com.web.views/oneptsix.php'; //Dawnstone: Chapter Six
        break;
    //Contact Pages (INCLUDE: found, writer, programmer >)
    case 'contactone':
        include 'com.web.views/contactone.php'; //Contact Page: Founder Information
        break;
    
    case 'contacttwo':
        include 'com.web.views/contacttwo.php'; //Contact Page: Lead Sr Programmer Information
        break;
    
    case 'contactthree':
        include 'com.web.views/contactthree.php'; //Contact Page: Voice Actor and Sound Artist Information
        break;
    
    case 'contactfour':
        include 'com.web.views/contactfour.php'; //Contact Page: Story and Concept Writer Information
        break;
    
    case 'contactfive':
        include 'com.web.views/contactfive.php'; //Contact Page: Achievements and Quest Designer Information
        break;
    //Site Plan
    case 'siteplan':
        include 'com.web.views/site-plan.php';
        break;
    //Presentation
    case 'presentation':
        include 'com.web.views/presentation.php';
        break;

    case 'changerole':
        $userid = (int) filter_input(INPUT_GET, 'userid', FILTER_SANITIZE_NUMBER_INT);
        $role = filter_input(INPUT_GET, 'role', FILTER_SANITIZE_STRING);
        
        if (LoggedInUserIsAdmin() && $userid && $role)
        {
            UpdateUserRole($userid, $role);
        }
        
        header('Location: /?action=editusers');
        exit();
        
    case 'contact':
        include 'com.web.views/contact.php';
        break;
    
    case 'deleteuser':
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        if (LoggedInUserIsAdmin() && $id)
        {
            DeleteUser($id);
        }
        header('Location: /?action=editusers');
        exit();
        
    case 'editusers':
        $page = (LoggedInUserIsAdmin()) ? 'com.web.views/editusers.php' : 'com.web.views/login.php';
        $users = GetAllUsers();
        include $page;
        break;
        
    case 'info':
        include 'com.web.views/info.php';
        break;
        
    case 'home':
        include 'com.web.views/home.php';
        break;
    
    case 'loginsubmit':
        $email = filter_input(INPUT_POST, 'emaillogin', FILTER_SANITIZE_EMAIL);
	    $password = filter_input(INPUT_POST, 'passwordlogin', FILTER_SANITIZE_STRING);

        if (LoginUser($email, $password)) {
            header('Location: /?action=menu');
            exit();
        }else{
            echo "There was an error in the loginsubmit case. There's nothing you can do about it. You broke it.";
        }
        
        include 'com.web.views/login.php';
        break;
        
    case 'logout':
        session_destroy();
        $_SESSION = array();
        header('Location: /');
        exit();
        break;
        
    case 'menu':
        $page = (CheckSession()) ? 'com.web.views/menu.php' : 'com.web.views/login.php';
        include $page;
        break;
        
    case 'myinfo':
        $page = 'com.web.views/login.php';
        
        if ($userId = GetLoggedInUserId()) 
        {
            $page = 'com.web.views/myinfo.php';
            $user = GetUser($userId);
        }
        
        include $page;
        break;
        
    case 'registersubmit':
        $regFirst = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $regLast = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $regmail = filter_input(INPUT_POST, 'emailreg', FILTER_SANITIZE_EMAIL);
        $regpass1 = filter_input(INPUT_POST, 'passwordreg1', FILTER_SANITIZE_STRING);
        $regpass2 = filter_input(INPUT_POST, 'passwordreg2', FILTER_SANITIZE_STRING);
        $message = '';
        
        if (RegisterUser($regFirst, $regLast, $regmail, $regpass1, $regpass2, $message)) {
            header('Location: /?action=menu');
            exit();
        }
        
        include 'com.web.views/login.php';
        break;
        
    case 'updateinfo':
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $regFirst = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $regLast = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        
        if ($userId = GetLoggedInUserId()) 
        {
            $page = 'com.web.views/myinfo.php';
            
            if ($email && $regFirst && $regLast) 
            {
                UpdateUserInfo($userId, $email, $regFirst, $regLast);
                $user = GetUser($userId);
                $message = 'The user information has been updated.';
            }
            else
            {
                $message = 'For the system to update, fill in the information required.';
            }
        }
        else
        {
            $page = 'com.web.views/login.php';
        }
        
        include $page;
        break;
    
    case 'updatepassword':
        $oldpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $newpassword2 = $_POST['repeatpassword'];
        $message = '';
        
        if ($newpassword == $newpassword2)
        {
            $validMessage = '';
            if (ValidatePassword($newpassword, $validMessage))
            {
                if (ValidateOldPassword($oldpassword))
                {
                    UpdateUserPassword($newpassword);
                    $message = 'Password Updated!';
                }
                else
                {
                    $message = 'Oh no! The old passwords do not match.';
                }
            }
            else
            {
                $message = $validMessage;
            }
        }
        else
        {
            $message = "Oh no! The new passwords do not match.";
        }
        
        if ($userId = GetLoggedInUserId()) 
        {
            $page = 'com.web.views/myinfo.php';
            $user = GetUser($userId);
        }
  
        include 'com.web.views/myinfo.php';
        break;
    
    default:
        include 'com.web.views/home.php';
}

include 'com.web.views/footer.php';

