<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\qos;

class QosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    

     public function index()
    {
        return view('qos.index');
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    
    

     public function create()
    {
        return view('qos.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request--$request
     * @return Illuminate\Http\Response
     */

     public function store(Request $request)
    {
        Session::flash('longitude',$request->longitude);
        Session::flash('latitude',$request->latitude);
        Session::flash('pathloss',$request->pathloss);
        Session::flash('link_budget',$request->link_budget);
        Session::flash('field_strength',$request->field_strength);
        Session::flash('cnr',$request->cnr);
        Session::flash('snr',$request->snr);
        Session::flash('ber',$request->ber);

        $request->validate([
            'longitude'=>"required|numeric",
	        'latitude'=>'required|numeric',
	        'pathloss'=>'required|numeric',
	        'link_budget'=>'required|numeric',
	        'field_strength'=>'required|numeric',
	        'cnr'=>'required|numeric',
	        'snr'=>'required|numeric',
	        'ber'=>'required|numeric',
        ],[
            'longitude.required'=>'Longitude wajib di isi',
            'latitude.required'=>'Latitude wajib di isi',
            'pathloss.required'=>'Pathloss wajib di isi',
            'link_budget.required'=>'Link Budget wajib di isi',
            'field_strength.required'=>'Field Strength wajib di isi',
            'cnr.required'=>'CNR wajib di isi',
            'snr.required'=>'SNR wajib di isi',
            'ber.required'=>'BER wajib di isi',

        ]);

        $data=[
            'longitude'=>$request->longitude,
	        'latitude'=>$request->latitude,
	        'pathloss'=>$request->pathloss,
	        'link_budget'=>$request->link_budget,
	        'field_strength'=>$request->field_strength,
	        'cnr'=>$request->cnr,
	        'snr'=>$request->snr,
	        'ber'=>$request->ber,
        ];

        qos::create($data);
        return 'HI';

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
