<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;
use App\Models\reservision;
use App\Models\User;
use App\Models\category;
use App\Models\CleanService;
use App\Models\DeliveryService;
use App\Models\HouseService;
use App\Models\pio;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pios = pio::get();
        $address = address::get();
        return view('admin.profile', compact( 'pios' , 'address'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $result = [];
        $pios = pio::get();
        $reservision = reservision::orderBy('created_at', 'desc')->get();
        // dd($result);
        foreach($reservision as $reserv){
            $test = [];
            $test['id']             = $reserv->id;
            $test['usersId']        = $reserv->usersId;
            $test['startDate']      = $reserv->startDate;
            $test['endDate']        = $reserv->endDate;
            $test['partnerId']      = $reserv->partnerId;
            $test['reserState']     = $reserv->reserState;
            $test['user-fname']     = User::find($reserv->usersId)->user_first_name;
            $test['user-lname']     = User::find($reserv->usersId)->user_last_name;
            $test['category']       = category::find($reserv->categoryId)->Category_Name;
            if( $reserv->categoryId == 1){
                $test['servicename']    =  HouseService::find($reserv->serviceId)->serviceName;
                $test['servicprice']    =  HouseService::find($reserv->serviceId)->servicePrice;
                $test['serviceimage']   =  HouseService::find($reserv->serviceId)->service_photo1;
            }elseif( $reserv->categoryId == 3 ){
                $test['servicename']    =  CleanService::find($reserv->serviceId)->serviceName;
                $test['servicprice']    =  CleanService::find($reserv->serviceId)->servicePrice;
                $test['serviceimage']   =  CleanService::find($reserv->serviceId)->service_photo1;
            }elseif( $reserv->categoryId == 4 ){
                $test['servicename']    =  DeliveryService::find($reserv->serviceId)->serviceName;
                $test['servicprice']    =  DeliveryService::find($reserv->serviceId)->servicePrice;
                $test['serviceimage']   =  DeliveryService::find($reserv->serviceId)->service_photo1;
            }
            $test['partner-fname'] = User::find($reserv->partnerId)->user_first_name;
            $test['partner-lname'] = User::find($reserv->partnerId)->user_last_name;
            array_push($result, $test);

        }
        return view('userProfile', compact( 'reservision', 'result', 'pios' ));
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
