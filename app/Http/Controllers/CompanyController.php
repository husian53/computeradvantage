<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CompanyGroupService;
use App\Services\CompanyService;
use Illuminate\Support\Facades\View;
use com_exception;

class CompanyController extends Controller
{
    private $companyGroupService;
    private $companyService;
    
    public function __construct(CompanyGroupService $companyGroupService,CompanyService $companyService)
    {

        $this->companyGroupService = $companyGroupService;
        $this->companyService = $companyService;

    }

    public function index(){

        $data['options'] = $this->companyGroupService->all();

        return View::make('super.company',$data);
    }

    public function store(Request $request){

        $this->companyService->store($request);

        return redirect()->intended('company')->with('message', 'Success');
    }
}
