<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Config;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'page_name' => 'transfer',
        ];
        $user_info = auth()->user();

        return view('admin.transfer', compact('user_info'))->with($data);
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
        $request->validate([
            'amount' => 'required',
            'email' => 'required|email',
        ], [
            'amount.required' => 'Amount is Required!',
            'email.required' => 'Email is Required!',
        ]);
        $type = Config::get('constants.debit');
        $details = 'Transfer From ' . $request->email;
        $tran = new Transaction();
        $result = $tran->addTransactionInfo($request->amount, $type, $details);
        if ($result[Config::get('constants.errorcode')] == 0) {
            return redirect()->route('transfer.index')->with(['smsg' => 'Amount Successfully  Transfer.', 'heading' => 'Success!']);
        } else {
            return redirect()->route('transfer.index')->with(['emsg' => 'Transfer Process Faild', 'heading' => 'faild!']);
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
