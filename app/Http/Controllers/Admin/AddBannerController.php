<?php

namespace App\Http\Controllers\Admin;

use App\classes\General;
use App\Http\Controllers\Controller;
use App\Models\AddBanner;
use Illuminate\Http\Request;

class AddBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addbaners = AddBanner::paginate(15);
        return view('admin.pages.addbaners.index', compact('addbaners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.addbaners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      // return $request->all();
          //save the data to the database
         //return $request->file('image');
            if ($request->has('image')) {
            
                $fileName = General::uploadImage('addbaners',$request->file('image'));
            }
            $addbaner = AddBanner::create([
                'title' => $request->title,
                'description' => $request->description,
                'date_from' => $request->date_from,
                'date_to' => $request->date_to,
                'image' => $fileName,
                'duration'=>$request->duration,
                'frequency'=>$request->frequency
            ]);
           
      
    
          return redirect()->route('admin.addbaners.index')
            ->with('success','Item created successfully');
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
