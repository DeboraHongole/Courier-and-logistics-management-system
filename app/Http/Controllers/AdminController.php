<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Region;


class AdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('isAdmin');
    } 

    public function index()
    {   

        return  view('admin.dashboard');
    }
    public function viewCountry(){

      
        $Coutry = Country::orderBy('country_name', 'asc')->get();
        
        return view("admin.countries",compact('Coutry'));

       
     }

    public function addCountry(Request $request){
        $this->validate(
            $request,
            [
               'Country' => 'required|string|max:50|unique:countries,country_name|',
                    
            ],
            [
                'Country.required' => 'Please Enter Country Name',
                'Country.unique' => 'Country Name exist',
                    
            ]
        );
        $country = new Country();
        $country->country_name = $request->Country;
        $country->save();
        $lastInsertedId = $country->id;
        $country->inc_id = md5($lastInsertedId);
        $country->save();
        return redirect()->back()->with('success',"Country Successfull created ...!"); 
        //dd($request->all()) ;
     }

     public function viewRegions(){

       // $Coutry = Country::orderBy('country_name', 'asc')->get();
       // $regions = Region::orderBy('name', 'asc')->get();
       // $posts = Post::whereBelongsTo($user)->get();  whereHas
        
       $Coutry = Country::orderBy('country_name', 'asc')->get();
        // $regions = Region::orderBy('name', 'asc')->get();
        $regions = Region::with('getCountry')->orderBy('country_id', 'Desc')->get();
        return view("admin.region",compact('Coutry','regions'));

     }

     public function addRegions(Request $request){
        $this->validate(
            $request,
            [
               'region' => 'required|string|max:50|unique:regions,name|',
               'Coutry' => 'required',      
            ],
            [
                'region.required' => 'Please Enter Region Name',
                'region.unique' => 'Region Name exist',      
                'Coutry.required' => 'Please Select Country',      
            ]
        );

        $region = new Region();
        $region->name = $request->region;
        $region->country_id = $request->Coutry;
        $region->save();
        $lastInsertedId = $region->id;
        $region->inc_id = md5($lastInsertedId);
        $region->save();
        return redirect()->back()->with('success',"Region Successfull created ...!"); 
        
        //dd ($request->all());
     }
     

     
}
