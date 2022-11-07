<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConciertoResource;
use App\Models\Concierto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConciertoController extends BaseController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'nombre' => 'required',
            'numero_espectador' => 'required',
            'fecha' => 'required',
            'rentabilidad' => 'required',
            'id_promotor' => 'required',
            'id_recinto' => 'required',
            'id_grupo' => 'required',
            'id_medio' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        Concierto::create($input);
   
        return $this->sendResponse([], 'Concierto Created Successfully.', 201);
    }
}
