<?php 


namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;


class CrudService extends Controller
{
    public static function getResult($model){
        $model::all();
    }

}