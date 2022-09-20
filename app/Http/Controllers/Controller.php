<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /*public function list(Request $request)
    {

    }

    public function show($model, $id)
    {
        $modelData = $model::find($id);
        if ($modelData) {
            return response()->json($modelData);
        }
    }

    public function update(Request $request, $model,$id)
    {
        $modelData = $model::find($id);
        if ($modelData) {
            $modelData->update($request->all());
        }
    }

    public function destroy($model,$id)
    {
        $modelData = $model::find($id);
        if ($modelData) {
            $modelData->delete();
        }

    }*/
}
