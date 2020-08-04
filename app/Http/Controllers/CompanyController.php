<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompany;
use Intervention\Image\Facades\Image as ImageLib;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.company',[
            'companies' => Company::orderBy('name','asc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create',[
            'companies'=>[]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompany $request)
    {
        $company = new Company();

        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;


        if($request->hasFile('logo')) {
            ImageLib::make($request->file('logo'))
                ->resize(100, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(storage_path('app/public') . DIRECTORY_SEPARATOR . $request->file('logo')->getClientOriginalName());
            $company->logo = $request->file('logo')->getClientOriginalName();
        }else{
            $company->logo = '';
        }
        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit',[
            'company'=>$company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCompany $request, Company $company)
    {
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        if($request->hasFile('logo')){
            ImageLib::make($request->file('logo'))
                ->resize(100, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(storage_path('app/public') . DIRECTORY_SEPARATOR . $request->file('logo')->getClientOriginalName());
            $company->logo = $request->file('logo')->getClientOriginalName();
        }
        $company->save();

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index');
    }
}
