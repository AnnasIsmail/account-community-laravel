<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Helpers\ApiFormatter;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $account = Account::all();

        return ApiFormatter::createApi(200, 'Success', $account);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            // $validatedData = $request->validate([
            //     'riotId' => 'required',
            //     'tagLine' => 'required',
            //     'username' => 'required',
            //     'password' => 'required',
            //     'owner' => 'required',
            // ]);

            // Account::create([
            //     'riotId' => $request->riotId,
            //     'tagLine' => $request->tagLine,
            //     'slug' => $request->slug,
            //     'username' => $request->username,
            //     'password' => $request->password,
            //     'owner' => $request->owner,
            // ]);

            Account::create([$request]);

            return ApiFormatter::createApi(200, 'Success', $validatedData);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountRequest  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
