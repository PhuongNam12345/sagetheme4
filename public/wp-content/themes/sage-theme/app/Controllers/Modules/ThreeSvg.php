<?php

namespace App\Controllers\Modules;

class ThreeSvg
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
