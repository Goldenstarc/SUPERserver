<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecificationRequest;
use App\ProductSpecification;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminProductSpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specifications = ProductSpecification::all();
        $types = ProductSpecification::$types;
        return view('admin.specifications.index' , compact('specifications' , 'types'));
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
    public function store(SpecificationRequest $request)
    {

        $inputs = $request->all();

        $user = Auth::user();

        $inputs['user_id'] = $user ->id;

        ProductSpecification::create($inputs);

        return redirect('admin/psf');
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
        $specification = ProductSpecification::findOrFail($id);
        $types = ProductSpecification::$types;
        return view('admin.specifications.edit' , compact('specification' , 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpecificationRequest $request, $id)
    {
        $inputs = $request->all();

        $user = Auth::user();

        $inputs['user_id'] = $user ->id;


        $specification = ProductSpecification::findOrFail($id);
        $specification->update($inputs);

        return redirect('admin/psf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        return 'sorry not support yet';
        //Todo complite this after cascade in database
    }
}
