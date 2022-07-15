<?php

namespace App\Services;

use App\Models\CompanyGroup;



class CompanyGroupService{

    public function __construct()
    {

    }

    public static function all(){
        
      return  $data = CompanyGroup::all();
         
    } 
    
    public function store($request){

        $companyGroup = new CompanyGroup;

        $companyGroup->company_group_name = $request->companyName;

        $companyGroup->save();
    }
}