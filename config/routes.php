<?php 

    return array(
        
        'directors' => 'directors/directors',

        'admin/info/delete/([0-9]+)' => 'admin/infoDelete/$1',
        'admin/info/edit/([0-9]+)' => 'admin/infoEdit/$1',
        'admin/info/create' => 'admin/infoCreate',
        'admin/info' => 'admin/info',

        'admin/culture/delete/([0-9]+)' => 'admin/cultureDelete/$1',
        'admin/culture/edit/([0-9]+)' => 'admin/cultureEdit/$1',
        'admin/culture/create' => 'admin/cultureCreate',
        'admin/culture' => 'admin/culture',

        'admin/sport/delete/([0-9]+)' => 'admin/sportDelete/$1',
        'admin/sport/edit/([0-9]+)' => 'admin/sportEdit/$1',
        'admin/sport/create' => 'admin/sportCreate',
        'admin/sport' => 'admin/sport',

        'admin/projects/delete/([0-9]+)' => 'admin/projectsDelete/$1',
        'admin/projects/edit/([0-9]+)' => 'admin/projectsEdit/$1',
        'admin/projects/create' => 'admin/projectsCreate',
        'admin/projects' => 'admin/projects',

        // dfdo
        'info/([0-9]+)' => 'info/view/$1',
        'info' => 'info/info',
        
        'projects/([0-9]+)' => 'projects/view/$1',
        'projects' => 'projects/projects',

        'culture/([0-9]+)' => 'culture/view/$1',
        'culture' => 'culture/culture',

        'sport/([0-9]+)' => 'sport/view/$1',
        'sport' => 'sport/sport',


        'admin' => 'admin/info',


        '' => 'main/index',
    );

?>