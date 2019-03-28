<?php 

namespace Middlewares;

class Stylesheet
{
    public static function register()
    {
        $link = 'home';

        if(isset($_GET['page'])) {
            $link = $_GET['page'];
        }

        return 'assets/stylesheets/' . $link . '.css';
    }
}