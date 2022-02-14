<?php

session_start();
require_once 'vendor/autoload.php';
use App\classes\Product;
use App\classes\Auth;
use App\classes\User;
use App\classes\FileUpload;


if (isset($_GET['pages']))
{
    if ($_GET['pages']== 'home' )
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'product')
    {
        $product  = new Product();
        $products = $product->getAllProduct();
        include "pages/product.php";
    }
    elseif ($_GET['pages'] == 'detail')
    {
        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/detail.php';
    }
    elseif ($_GET['pages'] == 'product-details')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product_details.php';
    }
    elseif ($_GET['pages'] == 'login')
    {

        include 'pages/login.php';
    }
    elseif ($_GET['pages']=='logout')
    {
        $auth = new  Auth();
        $auth->logOut();
    }
    elseif ($_GET['pages'] == 'all-user')
    {
        if (isset($_SESSION['id']))
        {
            $user = new User();
            $users = $user->getAllUser();
            include 'pages/all_user.php';
        }
        else
        {
            $auth = new  Auth();
            $auth->logIn();
        }
    }
    elseif ($_GET['pages'] == 'file-upload')
    {
        if (isset($_SESSION['id']))
        {

            include 'pages/file_upload.php';
        }
        else
        {
            $auth = new  Auth();
            $auth->logIn();
        }
    }

}
elseif (isset($_POST['search_btn']))
{
    $product = new Product($_POST);
    $result = $product->getAllProductBySearchText();
    include "pages/search_result.php";
}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $message = $auth->verifyLogin();
    include 'pages/login.php';
}
elseif (isset($_POST['img_btn']))
{
    $fileUpload = new FileUpload($_POST);
    $result = $fileUpload->index();
    include 'pages/file_upload.php';
}