<?php namespace John\Alquileres\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use John\Alquileres\Models\Service;

class Services extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController', 'Backend.Behaviors.ImportExportController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $importExportConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('John.Alquileres', 'main-menu-item3');
    }

    public function reporte()
    {
        $filename = 'alquileres_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        $data = Service::get()->toArray();

        $file = fopen('php://output', 'w');
        $header = array("Sl.no", "Name", "Email", "Contact");
        fputcsv($file, $header);
        foreach ($data as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
    }
}
