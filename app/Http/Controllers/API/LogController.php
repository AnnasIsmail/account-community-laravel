<?php

namespace App\Http\Controllers\API;

use App\Models\Log;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataReturn = [];
        $data = Log::latest()->get();

        foreach ( $data as $d){
            $d->DateTime = $d->created_at->diffForHumans();
            array_push($dataReturn ,  $d);
        }

        if($data){
            return ApiFormatter::createApi(200, 'Success', $dataReturn);
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
                'access_name' => 'required',
                'activity' => 'required',
                'ip_address' => 'required',
                'browser' => 'required',
            ]);
    
            $account = Log::create([
                'access_code' => $request->access_code,
                'access_name' => $request->access_name,
                'activity' => $request->activity,
                'ip_address' => $request->ip_address,
                'browser' => $request->browser,
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
    public function show($id)
    {
        //
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
        //
    }
}
