<?php

namespace App\Controllers\Modules;

class LoremBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
