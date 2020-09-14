<?php namespace John\Alquileres\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Reporte extends Controller
{
    public $implement = ['Backend\Behaviors\ImportExportController'  ];

    public $importExportConfig = 'config_list.yaml';
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('John.Alquileres', 'main-menu-item3', 'side-menu-item');
    }
}
