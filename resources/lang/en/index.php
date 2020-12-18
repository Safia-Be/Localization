<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'nav' => [
        'lang' => 'Languages',
        'home' => 'Home',
        'about' => 'About',
    ],
    'home' => [
        'chosen_lang_title' => ' The current chosen language is ',
        'chosen_lang' => 'English',
    ],
    'about' => [
        'about_title' => ' A step-by-step guide ',
        'about_sub_title' => 'First, you need to have Composer to install Laravel .
                Composer is a package manager designed for the PHP programming language.',
        'about_details' => [
            'about_top' => 'Laravel localization helps you can create multilingual applications.
                There are several ways in which you can configure multiple languages with your application.
                These steps can be broken down into 4 steps :',

            'about_point_1' => ' Create a controller : to be able to change the language. ',
            'about_point_2' => ' Create a middleware : to check the current locale stored in the session and set it accordingly for every incoming request. ',
            'about_point_3' => ' Add the middleware you created to kernel.php under the middlewareGroups array. ',
            'about_point_4' => ' Add a route to access the controller created earlier. ',

            'about_bottom' => 'The steps are easy and straight forward ,
                to see the entire process of implementing laravel localization in details ',
            'about_click' => ' Click Here',
        ],
    ],
    'rights' => [
        'reserved' => ' All Rights Reserved ',
        'copyright' => 'Copyright',
    ],

];
