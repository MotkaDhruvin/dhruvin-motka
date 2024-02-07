<?php

require "model.php";
class control extends model
{
    function __construct()
    {
        error_reporting(0);
        session_start();
        model::__construct();
        $url = $_SERVER['PATH_INFO'];

        switch($url)
        {
            case "/index":
                include "index.php";
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

                    case "/view-users":

                            $user_arr = $this->select("users");

                        include "view-users.php";
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
                                setcookie('email',$email,time() + 10);
                                setcookie('password',$password,time() + 10);

                            }

                           $_SESSION['unm'] =  $uemail;

                           if($uemail==$email && $upass==$password)
                           {
                            echo "<script>
                            alert('Welcome user.....!');
                            window.location='index';

                            </script>";
                            //  header("location:index");
                           }



                        }


                        include "login.php";
                        break;

                        case "/logout":
                            unset( $_SESSION['unm']);
                            echo "<script>
                            alert('Logout success.....!');
                            window.location='index';

                            </script>";
                            break;




        }
    }
}

$obj = new control;
