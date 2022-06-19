<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Services\CompanyGroupService;
use Illuminate\Http\Request;

class CompanyGroupController extends Controller
{
  
  private $companyGroupService; 

  public function __construct(CompanyGroupService $companyGroupService)
  {

    $this->companyGroupService = $companyGroupService;

  }

  public function index(){
        
    $data['companies'] = $this->companyGroupService->all();

    return View::make('super.companygroup',$data);
      
    }
  
    public function store(Request $request){

     $this->companyGroupService->store($request); 
      
     return redirect()->intended('company-group')->with('message', 'Success');
   
    } 
}
