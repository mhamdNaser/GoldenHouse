<?php

namespace App\Http\Controllers;

use App\Models\CleanService;
use App\Models\category;
use Illuminate\Http\Request;

class CleanServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
            if ($item->id === 2) {
                $housing = $item->id;
                $housingname = $item->Category_Name;
            }
             
        }
        return view('admin/service/cleanService', compact('housing', 'housingname'));
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


        $service = new CleanService;
        $service->serviceCategory       = $request->catId;
        $service->partnerId             = $request->userId;
        $service->serviceName           = $request->service_name;
        $service->serviceDescription    = $request->service_desc;
        $service->servicePrice          = $request->price;
        $service->service_photo1        = $service_img1;
        $service->save();
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CleanService  $cleanService
     * @return \Illuminate\Http\Response
     */
    public function show(CleanService $cleanService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CleanService  $cleanService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::all();
        $service = CleanService::find($id);
        if(! $service){
            redirect('service');
        }
        return view('admin.service.cleanedit', [ 'service'=>$service, 'category'=>$category ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CleanService  $cleanService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service_img1 = $request->file('photo1')->getClientOriginalName();
        $request->file('photo1')->storeAs('public/serviceImg', $service_img1);
        var_dump($request->file('upload_file'));

        $service = CleanService::findOrFail($id);
        $service->serviceName           = $request->service_name;
        $service->serviceDescription    = $request->service_desc;
        $service->servicePrice             = $request->price;
        $service->service_photo1        = $service_img1;
        $service->save();
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CleanService  $cleanService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = CleanService::findOrFail($id);
        $service->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
