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
        'lang' => ' اللغات',
        'home' => 'الرئيسيه ',
        'about' => 'تفاصيل ',

    ],
    'home' => [
        'chosen_lang_title' => 'اللغة المختارة حاليا هي ',
        'chosen_lang' => ' العربية',
    ],
    'about' => [
        'about_title' => 'دليل خطوة بخطوة ',
        'about_sub_title' => ' أولاً ، يجب أن يكون لديك Composer لتثبيت Laravel.
                Composer هو package manager مصمم للغة برمجة PHP.',
        'about_details' => [
            'about_top' => 'يساعدك Laravel Localization على إنشاء تطبيقات متعددة اللغات. هناك عدة طرق يمكنك من خلالها تكوين لغات متعددة في تطبيقك. يمكن تقسيم هذه الخطوات إلى 4 خطوات:
',
            'about_point_1' => ' قم بإنشاء Controller : لتتمكن من تغيير اللغة. ',
            'about_point_2' => ' إنشاء Middleware : للتحقق من الإعدادات المحلية الحالية المخزنة في الجلسة وتعيينها وفقًا لكل request. ',
            'about_point_3' => ' أضف Middleware التي أنشأتها إلى kernel.php ضمن مصفوفة middlewareGroups. ',
            'about_point_4' => ' أضف route للوصول إلى Controller التي تم إنشاؤها مسبقًا. ',

            'about_bottom' => 'الخطوات سهلة ومباشرة ،
                للاطلاع على العملية الكاملة لتنفيذ Laravel Localization بالتفصيل ',
            'about_click' => ' اضغط هنا',
        ],
    ],
    'rights' => [
        'reserved' => ' جميع الحقوق محفوظة ',
        'copyright' => 'حقوق النشر',
    ],


];
