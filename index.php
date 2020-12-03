<?php
 require_once __DIR__.'/models/IndexModel.php';
 require_once __DIR__.'/controllers/IndexController.php';
 require_once __DIR__.'/views/IndexView.php';
   
    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

    // use a switch here
    switch ($url) {
        case '/':
            # code...
            # instantiate home page mvc object
            $indexModel = New IndexModel();
            $indexController = New IndexController($indexModel);
            $indexView = New IndexView($indexController, $indexModel);
            print $indexView->action();
            break;
        
        // case '/actionMan':
        //     $indexModel = New IndexModel();
        //     $indexController = New IndexController($indexModel);
        //     $indexView = New IndexView($indexController, $indexModel);
        //     print $indexView->action();
        //     break;
    
            
        default:
            # code...
            break;
    }
?>