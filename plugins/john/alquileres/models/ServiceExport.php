<?php

namespace John\Alquileres\Models;

class ServiceExport extends \Backend\Models\ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $Services = Service::all();
        $Services->each(function ($Service) use ($columns) {
            $Service->addVisible($columns);
        });
        return $Services->toArray();
    }
}

?>