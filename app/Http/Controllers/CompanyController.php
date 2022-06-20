<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyGroupService;
use App\Services\CompanyService;
use App\Services\YearService;
use Illuminate\Support\Facades\View;
use com_exception;

class CompanyController extends Controller
{
    private $companyGroupService;
    
    private $companyService;
    
    private $yearService;

    public function __construct(CompanyGroupService $companyGroupService,CompanyService $companyService,YearService $yearService)
    {

        $this->companyGroupService = $companyGroupService;
        
        $this->companyService = $companyService;

        $this->yearService = $yearService;

    }

    public function index(){

        $data['options'] = $this->companyGroupService->all();

        $data['items'] = $this->companyService->all();


        return View::make('super.company',$data);
    }

    public function store(Request $request){

      $companyId =  $this->companyService->store($request);

      $this->yearService->store($companyId,$request);
    
      return redirect()->intended('company')->with('message', 'Success');
    }
}
