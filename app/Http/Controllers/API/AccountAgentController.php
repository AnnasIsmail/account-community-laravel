<?php

namespace App\Http\Controllers\API;

use App\Models\AccountAgent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AccountAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AccountAgent::all();

        if($data){
            return response()->json(['code' => 200,  'message' => 'Success', 'data' => $data]);
        }else{
            return response()->json(['code' => 400,  'message' => 'Failed',  'data' =>null]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {
            $request->validate([
                'account_id' => 'required',
                'name' => 'required',
                'uuid' => 'required',
            ]);
    
            $agent = AccountAgent::create([
                'account_id' => $request->account_id,
                'name' => $request->name,
                'uuid' => $request->uuid,
            ]);

            return response()->json(['code' => 200, 'message' =>  'Success', 'data' => $agent]);

        } catch (Exception $th) {
            return response()->json(['code' => 400,  'message' => 'Failed',  'data' =>$th]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = AccountAgent::where('account_id', '=', $id)->get();

        if($data){
            return response()->json(['code' => 200, 'message' =>  'Success', 'data' => $data]);
        }else{
            return response()->json(['code' => 400,  'message' => 'Failed',  'data' =>null]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($account_id)
    {
        try {
    
            $skin = AccountAgent::where('account_id' , $account_id);

            $skin->delete();

            return response()->json(['code' => 200, 'message' =>  'Success Delete All Data',  'data' =>null ]);

        } catch (Exception $th) {
            return response()->json(['code' => 400,  'message' => 'Failed',  'data' =>$th]);
        }
    }
}
