<?php

namespace App\Controllers\Modules;

class TowColBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
