<?php

namespace App\Http\Controllers;

use App\Models\HouseService;
use App\Models\category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HouseServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = category::all();
        foreach ($category as $item) {
            if ($item->Category_Name === 'Housing') {
                $housing = $item->id;
                $housingname = $item->Category_Name;
            }

        }
        return view('admin/service/houseService', compact('housing', 'housingname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service_img1 = $request->file('photo1')->getClientOriginalName();
        $request->file('photo1')->storeAs('public/serviceImg', $service_img1);

        $service_img2 = $request->file('photo2')->getClientOriginalName();
        $request->file('photo2')->storeAs('public/serviceImg', $service_img2);

        $service_img3 = $request->file('photo3')->getClientOriginalName();
        $request->file('photo3')->storeAs('public/serviceImg', $service_img3);

        $housing = new HouseService;
        $housing->serviceCategory       = $request->catId;
        $housing->partnerId             = $request->userId;
        $housing->serviceName           = $request->service_name;
        $housing->serviceDescription    = $request->service_desc;
        $housing->price_bed             = $request->price_bed;
        $housing->romeNumber            = $request->romeNumber;
        $housing->bedNumber             = $request->bedNumber;
        $housing->service_photo1        = $service_img1;
        $housing->service_photo2        = $service_img2;
        $housing->service_photo3        = $service_img3;
        $housing->save();
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HouseService  $houseService
     * @return \Illuminate\Http\Response
     */
    public function show(HouseService $houseService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HouseService  $houseService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::all();
        $service = HouseService::find($id);
        if(! $service){
            redirect('service');
        }
        return view('admin.service.houseedit', [ 'service'=>$service, 'category'=>$category ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HouseService  $houseService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service_img1 = $request->file('photo1')->getClientOriginalName();
        $request->file('photo1')->storeAs('public/serviceImg', $service_img1);

        $service_img2 = $request->file('photo2')->getClientOriginalName();
        $request->file('photo2')->storeAs('public/serviceImg', $service_img2);

        $service_img3 = $request->file('photo3')->getClientOriginalName();
        $request->file('photo3')->storeAs('public/serviceImg', $service_img3);
        var_dump($request->file('upload_file'));

        $service = HouseService::findOrFail($id);
        $service->serviceCategory       = $request->catId;
        $service->serviceName           = $request->service_name;
        $service->serviceDescription    = $request->service_desc;
        $service->price_bed             = $request->price_bed;
        $service->romeNumber            = $request->romeNumber;
        $service->bedNumber             = $request->bedNumber;
        $service->service_photo1        = $service_img1;
        $service->service_photo2        = $service_img2;
        $service->service_photo3        = $service_img3;
        $service->save();
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HouseService  $houseService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = HouseService::findOrFail($id);
        $service->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
