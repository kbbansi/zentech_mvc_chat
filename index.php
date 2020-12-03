<?php
    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

    if ($url == '/') {
        # home page actions
        require_once __DIR__.'/models/IndexModel.php';
        require_once __DIR__.'/controllers/IndexController.php';
        require_once __DIR__.'/views/IndexView.php';

        # instantiate home page mvc object
        $indexModel = New IndexModel();
        $indexController = New IndexController($indexModel);
        $indexView = New IndexView($indexController, $indexModel);

        return $indexView->action();
    }else {
        # code...

        # home page actions
        require_once __DIR__.'/models/IndexModel.php';
        require_once __DIR__.'/controllers/IndexController.php';
        require_once __DIR__.'/views/IndexView.php';

        # instantiate home page mvc object
        $indexModel = New IndexModel();
        $indexController = New IndexController($indexModel);
        $indexView = New IndexView($indexController, $indexModel);

        return $indexView->save();
    }
?>