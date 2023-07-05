<?php

namespace App\Http\Controllers;

use App\AnnualLeave;
use App\Http\Resources\AnnualLeaveResource;
use Illuminate\Http\Request;

class AnnualLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = AnnualLeave::all();
            return response()->json([
                "success" => 1,
                "message" => "Show data success",
                "data"    => AnnualLeaveResource::collection($data)
            ], 200);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            $validaeData = $request->validate([
                'user_id' => 'required',
                'from_date' => 'required',
                'to_date' => 'required',
                'description' => '',
            ]);
            
            // if ($validator->fails()) {
            //     return response()->json([
            //         'success' => 0,
            //         'message' => $validator->messages()->all(),
            //     ], 422);
            // }
            
            // AnnualLeave::create($request->all());
            $annual = new AnnualLeave;
            $annual->user_id = $request->user_id;
            $annual->from_date = $request->from_date;
            $annual->to_date = $request->to_date;
            $annual->description = $request->description;
            $annual->save();
            
            return response()->json([
                "success" => 1,
                "message" => "Create success",
            ], 200);
            
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnnualLeave  $annualLeave
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $annualLeave = AnnualLeave::find($id);
        return response()->json([
            "success" => 1,
            "message" => "Detail",
            "data"    => new AnnualLeaveResource($annualLeave)
        ], 200);
    }

}
