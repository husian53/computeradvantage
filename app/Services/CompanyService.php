<?php

namespace App\Services;

use App\Models\Company;

class CompanyService{

    public function all(){
        return $data = Company::all();
    }

    public function store($request){

        $company = Company::updateOrCreate(
            ['company_name' => $request->companyName],
            ['company_group_id' => $request->companyGroupId]
        );

         return $company->company_master_id;
        
    }

}