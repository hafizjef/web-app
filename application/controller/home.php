<?php

class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/indexflex.php';
        require APP . 'view/_templates/footer.php';
    }

    public function about()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/about.php';
        require APP . 'view/_templates/footer.php';
    }
}