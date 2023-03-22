<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\reservision;
use Illuminate\Http\Request;
use App\Models\CleanService;
use App\Models\DeliveryService;
use App\Models\User;
use App\Models\HouseService;
use Termwind\Components\Dd;

class ReservisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = [];
        $reservision = reservision::orderBy('created_at', 'desc')->get();
        // dd($result);
        foreach($reservision as $reserv){
            $test = [];
            // $cat      = category::find($reserv->categoryId );
            $test['id']             = $reserv->id;
            $test['IdCard']         = $reserv->userIdCard;
            $test['startDate']      = $reserv->startDate;
            $test['endDate']        = $reserv->endDate;
            $test['partnerId']      = $reserv->partnerId;
            $test['reserState']     = $reserv->reserState;
            $test['user-fname']     = User::find($reserv->usersId)->user_first_name;
            $test['user-lname']     = User::find($reserv->usersId)->user_last_name;
            $test['category']       = category::find($reserv->categoryId)->Category_Name;
            if( $reserv->categoryId == 1){
                $test['servicename'] =  HouseService::find($reserv->serviceId)->serviceName;
                $test['servicprice'] =  HouseService::find($reserv->serviceId)->servicePrice;
            }elseif( $reserv->categoryId == 3 ){
                $test['servicename'] =  CleanService::find($reserv->serviceId)->serviceName;
                $test['servicprice'] =  CleanService::find($reserv->serviceId)->servicePrice;
            }elseif( $reserv->categoryId == 4 ){
                $test['servicename'] =  DeliveryService::find($reserv->serviceId)->serviceName;
                $test['servicprice'] =  DeliveryService::find($reserv->serviceId)->servicePrice;
            }
            $test['partner-fname'] = User::find($reserv->partnerId)->user_first_name;
            $test['partner-lname'] = User::find($reserv->partnerId)->user_last_name;
            array_push($result, $test);

        }
        return view('admin.reservitsionadmin', compact( 'reservision', 'result' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->input('id');
        $cat = $request->input('cat');
        if($cat == 1 ){
            $service = HouseService::get();
        }elseif($cat == 3){
            $service = CleanService::get();
        }elseif ($cat == 4) {
            $service = DeliveryService::get();
        }
        return view('reservision', ['service' => $service, 'id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cardId_img = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/userimage', $cardId_img);

        $reservision = new reservision();
        $reservision->usersId = $request->input('users_id');
        $reservision->categoryId = $request->input('catid');
        $reservision->serviceId = $request->input('serviceid');
        $reservision->partnerId = $request->input('partnerid');
        $reservision->startDate = $request->start_date;
        $reservision->endDate = $request->end_date;
        $reservision->userIdCard = $cardId_img;
        $reservision->save();
        return redirect('seviceshow');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservision  $reservision
     * @return \Illuminate\Http\Response
     */
    public function show(reservision $reservision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservision  $reservision
     * @return \Illuminate\Http\Response
     */
    public function edit(reservision $reservision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservision  $reservision
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $reservisionstate               = reservision::findOrFail($id);
        $reservisionstate->reserState   = $request->state;
        $reservisionstate->save();
        return redirect('reservision');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservision  $reservision
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservision $reservision)
    {
        //
    }
}
