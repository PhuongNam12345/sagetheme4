<?php

namespace App\Controllers\Modules;

class SliderTrusted
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
