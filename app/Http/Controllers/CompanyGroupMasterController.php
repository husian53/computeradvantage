<?php

namespace App\Http\Controllers;

use App\Models\CompanyGroupMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class CompanyGroupMasterController extends Controller
{
   

  public function index(){
        $data['companies'] = CompanyGroupMaster::all();
        return View::make('super.companygroupmaster',$data);
    }
   public function store(Request $request){
      
    $companyGroup = new CompanyGroupMaster;

    $companyGroup->company_group_name = $request->companyName;

    $companyGroup->save();

    return redirect()->intended('company-group')->with('message', 'Success');
   } 
}
