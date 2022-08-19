<?php

namespace App\Http\Controllers\API;

use App\Models\Access;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;

class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Access::all();

        if($data){
            return ApiFormatter::createApi(200, 'Success', $data);
        }else{
            return ApiFormatter::createApi(400, 'Failed');
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
                'access_code' => 'required',
                'name' => 'required',
                'role' => 'required',
            ]);
    
            $account = Access::create([
                'access_code' => $request->access_code,
                'name' => $request->name,
                'role' => $request->role,
            ]);

            return ApiFormatter::createApi(200, 'Success', $account);

        } catch (\Throwable $th) {
            //throw $th;
            return ApiFormatter::createApi(400, 'Failed', $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($access_code)
    {
        $data = Access::where('access_code', '=', $access_code)->get();

        if(count($data) !== 0){
            return ApiFormatter::createApi(200, 'Success', $data);
        }else{
            return ApiFormatter::createApi(400, 'Failed');
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
    public function destroy($id)
    {
        try {
            //code...
    
            $account = Access::findOrFail($id);

            $account->delete();

            return ApiFormatter::createApi(200, 'Success', $account);

        } catch (\Throwable $th) {
            //throw $th;
            return ApiFormatter::createApi(400, 'Failed', $th);
        }
    }
}
