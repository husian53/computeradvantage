<?php

namespace App\Services;

use App\Models\Company;
use App\Models\CompanyUser;
use Illuminate\Support\Facades\DB;

class CompanyService{

    public static function all(){
        return $data = Company::all();
    }

    public function store($request){

        $company = Company::updateOrCreate(
            ['company_name' => $request->companyName],
            ['company_group_id' => $request->companyGroupId]
        );

         return $company->id;
        
    }
    
    public function companies($request){

         return $data =  Company::where('company_group_id', $request->companyGroupId)->get();
        
    }

    public static function updateUser($request,$userId)
    {
        foreach($request as $companyId)
        {
            CompanyUser::create([
           
                'company_id' => $companyId,
               
                'user_id' => $userId
               
            ]);
        }
        
    }

}