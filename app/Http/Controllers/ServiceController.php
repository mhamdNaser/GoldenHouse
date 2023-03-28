<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\CleanService;
use App\Models\DeliveryService;
use App\Models\User;
use App\Models\HouseService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        $category = category::all();
        $housing = HouseService::all();
        $cleaning = CleanService::all();
        $delivery = DeliveryService::all();
        return view('admin.service.service', [ 'category' => $category, 'housing'=>$housing, 'users'=>$users, 'cleaning'=>$cleaning, 'delivery'=>$delivery]);
    }

    public function allshow()
    {
        $housing = HouseService::get();
        $clean = CleanService::get();
        $delivery = DeliveryService::get();
        $result = [];
        foreach($housing as $item ){
            $serviceCard = [];
            $serviceCard['ID']                      =   $item->id;
            $serviceCard['serviceName']             =   $item->serviceName;
            $serviceCard['serviceCat']              =   $item->serviceCategory;
            $serviceCard['service_photo']           =   $item->service_photo1;
            $serviceCard['service_roms']            =   $item->romeNumber;
            $serviceCard['service_beds']            =   $item->bedNumber;
            $serviceCard['service_allbeds']         =   $item->allbed;
            $serviceCard['service_price']           =   $item->servicePrice;
            $serviceCard['serviceDescription']      =   $item->serviceDescription;
            array_push($result, $serviceCard);
        }
        foreach($clean as $item ){
            $serviceCard = [];
            $serviceCard['ID']                      =   $item->id;
            $serviceCard['serviceName']             =   $item->serviceName;
            $serviceCard['serviceCat']              =   $item->serviceCategory;
            $serviceCard['service_photo']           =   $item->service_photo1;
            $serviceCard['service_price']           =   $item->servicePrice;
            $serviceCard['serviceDescription']      =   $item->serviceDescription;
            array_push($result, $serviceCard);
        }
        foreach($delivery as $item ){
            $serviceCard = [];
            $serviceCard['ID']                      =   $item->id;
            $serviceCard['serviceName']             =   $item->serviceName;
            $serviceCard['serviceCat']              =   $item->serviceCategory;
            $serviceCard['service_photo']           =   $item->service_photo1;
            $serviceCard['service_price']           =   $item->servicePrice;
            $serviceCard['serviceDescription']      =   $item->serviceDescription;
            array_push($result, $serviceCard);
        }
        return view('HomeService' , compact('result'));
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
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if( $id == 1 ){
            $service = HouseService::get();
        }elseif( $id == 3 ){
            $service = CleanService::get();
        }elseif( $id == 4 ){
            $service = DeliveryService::get();
        }else{
            return view( 'notfound');
        }
        return view('categoryService' , compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
