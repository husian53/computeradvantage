<?php

namespace App\Http\Controllers;

use App\Models\CompanyGroupMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Services\CrudService;

class CompanyGroupMasterController extends Controller
{
   

  public function index(){
        $data['data'] = CompanyGroupMaster::all();
        return View::make('welcome',$data);
    }
}
