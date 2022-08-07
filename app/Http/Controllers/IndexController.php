<?php

namespace App\Http\Controllers;
use Nwidart\Modules\Facades\Module;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function disableModule($name){
        $module=Module::find($name);
        $module->disable();

        return back();
    }

    public function enableModule($name){
        $module=Module::find($name);
        $module->enable();

        return back();
    }
}
