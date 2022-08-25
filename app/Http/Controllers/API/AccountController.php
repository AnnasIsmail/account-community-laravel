<?php

namespace App\Http\Controllers\API;

use App\Models\Account;
use App\Models\AccountSkin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Account::all();

        if($data){
            return response()->json(['code' => 200, 'message' => 'Success', 'data' => $data]);
        }else{
            return response()->json(['code' => 400,'message' => 'Failed' , 'data' => null]);
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
            //code...
            $request->validate([
                'puuid' => 'required',
                'username' => 'required',
                'password' => 'required',
                'owner' => 'required',
            ]);
    
            $account = Account::create([
                'puuid' => $request->puuid,
                'username' => $request->username,
                'password' => $request->password,
                'owner' => $request->owner,
            ]);

            return response()->json(['code' => 200, 'message' => 'Success', 'data' => $account]);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['code' => 400, 'message' =>  'Failed', 'data' => $th]);
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
        $data = Account::where('id', '=', $id)->get();

        if($data){
            return response()->json(['code' => 200, 'message' =>  'Success', 'data' => $data]);
        }else{
            return response()->json(['code' => 400,  'message' => 'Failed' ,'data' => null]);
        }
    
    }

    public function showPUUID($puuid)
    {
        $data = Account::where('puuid', '=', $puuid)->get();

        if($data){
            return response()->json(['code' => 200,  'message' => 'Success', 'data' => $data]);
        }else{
            return response()->json(['code' => 400,  'message' => 'Failed' ,'data' => null]);
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
        try {
            //code...
            $request->validate([
                'puuid' => 'required',
                'username' => 'required',
                'password' => 'required',
                'owner' => 'required',
            ]);
    
            $account = Account::findOrFail($id);

            $account->update([
                'puuid' => $request->puuid,
                'username' => $request->username,
                'password' => $request->password,
                'owner' => $request->owner,
            ]);

            return response()->json([200, 'Success', $account]);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([400, 'Failed', $th]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //code...
    
            $account = Account::findOrFail($id);

            $account->delete();

            return response()->json([200, 'Success', $account]);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([400, 'Failed', $th]);
        }
    }
}
