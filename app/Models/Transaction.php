<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Config;
use App\Models\user;
use Illuminate\Support\Carbon;

class Transaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'transaction';
    protected $fillable = ['amount', 'type', 'details', 'balance', 'user_id','added_date'];

    public function addTransactionInfo($amount, $type, $details)
    {

        try {
            $now = Carbon::now();

            $user_info = auth()->user();
            $balance = $this->getUserCurrentBalance();
            if ($type == Config::get('constants.credit')) {
                $balance = $balance + $amount;
            } else if ($type == Config::get('constants.debit')) {
                $balance = $balance - $amount;
            }
            DB::beginTransaction();
            $tran_info = new Transaction([
                'amount' => $amount,
                'type' => $type,
                'details' => $details,
                'balance' => $balance,
                'user_id' => $user_info->id,
                'added_date'=> $now->toDateTimeString()

            ]);
            $tran_id = $tran_info->save();
            if ($tran_id <= 0) {
                DB::rollback();
                $res[Config::get('constants.errormessage')] = "db error";
                $res[Config::get('constants.errorcode')] = 10;
                return $res;
            }

            $User_Update = user::where("id",  $user_info->id)->update(['balance' => $balance]);
            if ($User_Update <= 0) {
                DB::rollback();
                $res[Config::get('constants.errormessage')] = "db error";
                $res[Config::get('constants.errorcode')] = 10;
                return $res;
            }
            DB::commit();
            $res[Config::get('constants.errormessage')] = "Successfully Added /Updated ";
            $res[Config::get('constants.errorcode')] = 0;
            return $res;
        } catch (\Exception $e) {
            DB::rollback();
            $res[Config::get('constants.errormessage')] = "Database Error";
            $res[Config::get('constants.errorcode')] = 60;
            return $res;
        }
    }

    public function getUserCurrentBalance()
    {
           $user_info = auth()->user();
        return $balance = DB::table('users')
            ->where('users.id', '=', $user_info->id)
            ->select('users.balance')
            ->first()->balance;
    }


    // public function getcreated_atAttribute() {
    //     return \Carbon\Carbon::now(
    //         $this->attributes['created_at']
    //     )->format('g:i A');
    // }



}
