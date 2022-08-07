<?php

namespace App\Http\Controllers\API;

use App\Models\Account;
use App\Models\AccountSkin;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
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
                'riotId' => 'required',
                'tagLine' => 'required',
                'slug' => 'required',
                'username' => 'required',
                'password' => 'required',
                'owner' => 'required',
            ]);
    
            $account = Account::create([
                'riotId' => $request->riotId,
                'tagLine' => $request->tagLine,
                'slug' => $request->slug,
                'username' => $request->username,
                'password' => $request->password,
                'owner' => $request->owner,
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
        try {
            //code...
            $request->validate([
                'riotId' => 'required',
                'tagLine' => 'required',
                'slug' => 'required',
                'username' => 'required',
                'password' => 'required',
                'owner' => 'required',
            ]);
    
            $account = Account::findOrFail($id);

            $account->update([
                'riotId' => $request->riotId,
                'tagLine' => $request->tagLine,
                'slug' => $request->slug,
                'username' => $request->username,
                'password' => $request->password,
                'owner' => $request->owner,
            ]);

            return ApiFormatter::createApi(200, 'Success', $account);

        } catch (\Throwable $th) {
            //throw $th;
            return ApiFormatter::createApi(400, 'Failed', $th);
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

            return ApiFormatter::createApi(200, 'Success', $account);

        } catch (\Throwable $th) {
            //throw $th;
            return ApiFormatter::createApi(400, 'Failed', $th);
        }
    }
}
