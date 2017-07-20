<?php

namespace App\Http\Controllers;

use App\brand;
use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = brand::all();
        return view('admin.brands.index' , compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BrandsCreateRequest $request)
    {
        $input = $request->all();

        if($file = $request->file('photo_id')) {
            $name = time(). $file->getClientOriginalName();
            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }


        brand::create($input);




        return redirect('admin/brands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = brand::findOrFail($id);
        //return $category;
        return view('admin.brands.edit' , compact('brand'));
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
        $input = $request->all();

        $brand = brand::findOrFail($id);




        if($file = $request->file('photo_id')) {
            $name = time(). $file->getClientOriginalName();
            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }




        $brand->update($input);

        return redirect('/admin/brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        brand::findOrFail($id)->delete();
        return redirect('/admin/brands');
    }
}
