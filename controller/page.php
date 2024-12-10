<?php
include_once 'model/category.php';
    extract($_REQUEST);
    if(isset($act)){
        switch($act){
            case'home';
            $dsdm=category_getAll();
            print_r ($dsdm);
                include_once 'view/header.php';
                include_once 'view/home.php';
                include_once 'view/footer.php';

            case 'about';
                include_once 'view/header.php';
                include_once 'view/about.php';
                include_once 'view/footer.php';

            case 'contract';
                include_once 'view/header.php';
                include_once 'view/contact.php';
                include_once 'view/footer.php'; 
            break;
        }
    }
?>