<?php 

require "model.php";
class control extends model
{
    function __construct()
    {
        error_reporting(0);
        model::__construct();
        $url = $_SERVER['PATH_INFO'];

        switch($url)
        {
            case "/home2":
                include "home2.php";
                break;

                
                case "/register":

                    if(isset($_REQUEST['create']))
                    {                          
                        $fname = $_REQUEST['fname'];
                        $lname =  $_REQUEST['lname'];
                        $phone =  $_REQUEST['phoneno'];
                        $email =  $_REQUEST['email'];
                        $password =  $_REQUEST['password'];
                        $where = array(
                            "u_email"=>$email
                        );                    
                        $res = $this->select_where("users",$where);

                       $fetch =  $res->fetch_object();
                       $uemail= $fetch->u_email;

                        if($email==$uemail)
                        {                           
                           echo "<script>alert('already exits...!')</script>";//ankit@gmail.com                          
                        }

                        else
                        {                     
    
                           $data = array(
                            "u_fname"=>$fname,
                            "u_lname"=>$lname,
                            "u_phone"=>$phone,
                            "u_email"=>$email,
                            "u_password"=>$password                 
                            
                           );
    
                           if($fname!=="")
                           {
                            $ins =   $this->insert('users',$data);

                            if($ins)
                            {
                                echo "<script>alert('Records inserted.....!')</script>";
                            }
                           }
                        }
                    }
                
                 
                 
                    include "register.php";
                    break;

                    
                    case "/login":

                        if(isset($_REQUEST['create']))
                        {                        
                          
                            $email =  $_REQUEST['email'];
                            $password =  $_REQUEST['password'];
                            $where = array(
                                "u_email"=>$email,
                                "u_password"=>$password
                            );                    
                            $res = $this->select_where("users",$where);
    
                           $fetch =  $res->fetch_object();
                           $uemail= $fetch->u_email;
                           $upass= $fetch->u_password;

                           
                           if(isset($_REQUEST['remember']))
                            {
                                setcookie('email',$email,time() + 10000);
                                setcookie('password',$password,time() + 10000);

                            }

                           if($uemail==$email && $upass==$password)
                           {
                            echo " <script>
                            alert('Welcome user.....!');
                            window.location='home2';
                            
                            </script>";
                            //  header("location:home2.php");
                           }
                        }
                        include "login.php";
                        break;
                        
                        case "/logout":
                            setcookie('email','',time() - 10000);
                            setcookie('password','',time() - 10000);
                            unset( $_COOKIE['email']);
                            unset( $_COOKIE['password']);
                            echo "<script>
                            alert('Logout success.....!');
                            window.location='home2';
                            
                            </script>";
                            break;

                            case "/forgot_pass":
                                if(isset($_REQUEST['create']))
                                {                        
                                  
                                    $email =  $_REQUEST['email'];                               
                                    $password =  $_REQUEST['password'];
                                    $cpassword =  $_REQUEST['cpassword'];
                                   
    
                                    // 'update users set u_password=123 where u_id=18'
    
                                    $where = array(
                                        "u_email"=>$email
                                    );
    
                                    $res = $this->select_where("users",$where);
                                    $fetch = $res->fetch_object();
    
                                   $uemail =  $fetch->u_email;
    
                                   if($uemail != $email)
                                   {
                                    echo "<script>
                                    alert('We dont have this record in our database.....!');
                                    window.location='login';
                                    
                                    </script>";
                                   }
    
                                   else if($password!=$cpassword)
                                   {
                                    echo "<script>
                                    alert('Passwords do not match....!');
                                    window.location='login';
                                    
                                    </script>";
                                   }
    
                                   else
                                   {
                                    $data = array(
                                        "u_password"=>$password
                                    );
    
                                   $update =  $this->update("users",$data,$where);
                                   if($update)
                                   {
                                    echo "<script>
                                    alert('Password updated......!');
                                    window.location='login';
                                    
                                    </script>";
                                   }
                                   }
    
                                
    
                                 
    
                                }
    
                                include "forgot_pass.php";
                                break;
                

                    case "/blog":
                        include "blog.php";
                        break;

                        case "/contact":
                            include "contact.php";
                            break;

                            case "/about":
                                include "about.php";
                                break;

                                case "/chair":
                                    include "chair.php";
                                    break;

                                    case "/single-product":
                                        include "single-product.php";
                                        break;

                                        case "/coming-soon":
                                            include "coming-soon.php";
                                            break;

                                            case "/cartt":
                                                include "cart.php";
                                                break;

                                                case "/wishlist":
                                                    include "wishlist.php";
                                                    break;
    

        }
    }
}

$obj = new control;