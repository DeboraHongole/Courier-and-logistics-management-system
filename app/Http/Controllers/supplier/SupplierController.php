<?php


namespace App\Http\Controllers\supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\ShippingNumber;
use App\Models\Country;
use App\Models\Region;
use App\Models\BusnessContactFrom;
use App\Models\BusnessContactTo;
use App\Models\ParcelDetail;
use Session;


class SupplierController extends Controller
{

    public function index()
        {
    
            Session::forget('from_country');Session::forget('to_country');
            Session::forget('from_id');Session::forget('to_id');

        ///select data  from shippingNumber table and Update the shipping_id to get new shipping_id for new request
            $ShipNumber = ShippingNumber::select('id','shipping_id')->first();
          ////create new shippingNumber
            ShippingNumber::where('id','=',$ShipNumber->id)->update(['shipping_id'=>$ShipNumber->shipping_id + random_int(1,99),'inc_shipping_id'=>md5($ShipNumber->shipping_id+random_int(1,99))]);   
            
            ///select shipping_id  from shippingNumber table and put in session for any request
            $ShipNumber = ShippingNumber::select('id','inc_shipping_id')->first();
            Session::put("shipping_id_created", $ShipNumber->inc_shipping_id);
            
           return view('Home.homepage');
        }

    public function homepage()
    {
         
          $Countries = Country::orderby("country_name","asc")->select('id','country_name')->get();
          $Region_from = Region::orderby("name","asc")->select('id','name')->where('country_id',Session::get("from_id"))->get();
          $Region_to = Region::orderby("name","asc")->select('id','name')->where('country_id',Session::get("to_id"))->get();

    	return view('supplier.home',compact('Countries','Region_from','Region_to'));
    }

    public function destination(Request $request)
    {
        $this->validate(
            $request,
                ['selectCountry' => 'required','selectCountry2' => 'required',],

                [
                    'selectCountry.required' => 'Destination (FROM) Not selected.', 
                    'selectCountry2.required' => 'Destination (TO) Not selected.',                    
                ]
            );
           
            $ShipNumber = Destination::select('shipping_id','from_country','to_country')->where('shipping_id','=',md5(Session::get("shipping_id_created")))->first();
                

        if ($ShipNumber != null)
            {            
                return redirect()->route('supplier.index')->with('destination_denied','Please Finish the  Process or Go Back..!');
            }
        else{

                $addDestination = new Destination;
                $addDestination->from_country = $request->selectCountry;
                $addDestination->to_country = $request->selectCountry2;
                $addDestination->shipping_id = md5(Session::get("shipping_id_created"));
                $addDestination->save();            
                $lastInsertedId = $addDestination->id;
                $addDestination->save();

                $country_from = Destination::with('getFromCountry')->where('shipping_id','=',md5(Session::get("shipping_id_created")))->first();
                $country_to = Destination::with('getToCountry')->where('shipping_id','=',md5(Session::get("shipping_id_created")))->first();

                Session::put("from_country", $country_from->getFromCountry->country_name);
                Session::put("from_id", $country_from->getFromCountry->id);
                Session::put("to_id", $country_from->getToCountry->id);
                Session::put("to_country", $country_to->getToCountry->country_name);

                return redirect()->route('supplier.index')->with('destination_success','Destination Saved successfully.');

          }
            
    }
    

     public function busness_contact_from(Request $request)
    {
        $this->validate(
            $request,
                [
                    
                	'fullname' => 'required',
                	'company' => 'required',
                	'from_email' => 'required',
                	'country' => 'required',
                	'reg_from' => 'required',
                	'state' => 'required', 
                	'address' => 'required',
                	'phonetype' => 'required',
                	'code' => 'required', 
                	'phone' => 'required',
                    'selectCountry.required' => 'Destination (FROM) Not selected.', 
                	'vat' => 'required',
            	],


                [
                    'fullname.required' => 'Please Enter Name', 
                    'company.required' => 'Please Enter Company Name', 
                    'from_email.required' => 'Please Enter Email', 
                    'country.required' => 'Please Enter Country Name', 
                    'reg_from.required' => 'Please Select Region', 
                    'state.required' => 'Please Enter State',                    
                    'address.required' => 'Please Enter Address.', 
                    'phonetype.required' => 'Please select Phone type.',                    
                    'code.required' => ' Please Enter Code.', 
                    'phone.required' => ' Please Enter Phone Number.',                    
                    'vat.required' => ' Please Enter VAT Number.',                    
                                       
                ]
            );
        
        $current_destination = Destination::with('getFromCountry')->where('shipping_id','=',md5(Session::get("shipping_id_created")))->first();
    
        $details_from = new BusnessContactFrom();
        $details_from->dest_id = $current_destination->id;
        $details_from->inc_dest_id = $current_destination->shipping_id;
        $details_from->country_id = $request->country;
        $details_from->region_id = $request->reg_from;
        $details_from->full_name = $request->fullname;
        $details_from->company = $request->company;
        $details_from->from_email = $request->from_email;
        $details_from->state = $request->state;
        $details_from->address = $request->address;
        $details_from->phone_type = $request->phonetype;
        $details_from->code = $request->code;
        $details_from->phone = $request->phone;
        $details_from->vat = $request->vat;
        $details_from->save();
        //$lastInsertedId = $details_from->id;
        
        //$details_from->save();
        return redirect()->back()->with('success',"Detail  Successfull Saved ...!"); 
          // dd($request->all()) ;
    }


    public function busness_contact_to(Request $request)
    {
        $this->validate(
            $request,
                [
                    
                	'to_fullname' => 'required',
                	'company_to' => 'required',
                	'to_email' => 'required',
                	'country_to' => 'required',
                	'reg_to' => 'required',
                	'state_to' => 'required', 
                	'address_to' => 'required',
                	'phonetype_to' => 'required',
                	'code_to' => 'required', 
                	'phone_to' => 'required', 
                	'vat_to' => 'required',
            	],

                [
                    'to_fullname.required' => 'Please Enter Name', 
                    'company_to.required' => 'Please Enter Company Name', 
                    'to_email.required' => 'Please Enter Email', 
                    'country_to.required' => 'Please Enter Country Name', 
                    'reg_to.required' => 'Please Select Region', 
                    'state_to.required' => 'Please Enter State',                    
                    'address_to.required' => 'Please Enter Address.', 
                    'phonetype_to.required' => 'Please select Phone type.',                    
                    'code_to.required' => ' Please Enter Code.', 
                    'phone_to.required' => ' Please Enter Phone Number.',                    
                    'vat_to.required' => ' Please Enter VAT Number.',                    
                                       
                ]
            );
        
        $current_destination = BusnessContactFrom::where('inc_dest_id','=',md5(Session::get("shipping_id_created")))->first();
        
        if($current_destination == ""){
            return redirect()->back()->withInput($request->all())->with('from_denied',"Please Fill All Details From ...!");
        }
        else{
            $current_destination = BusnessContactFrom::where('inc_dest_id','=',md5(Session::get("shipping_id_created")))->first();
        
            $details_to = new BusnessContactTo();
            //$details_to->dest_id = $current_destination->id;
            //$details_from->inc_dest_id = $current_destination->inc_dest_id;
            $details_to->country_id = $request->country_to;
            $details_to->region_id = $request->reg_to;
            $details_to->full_name = $request->to_fullname;
            $details_to->company = $request->company_to;
            $details_to->to_email = $request->to_email;
            $details_to->state = $request->state_to;
            $details_to->address = $request->address_to;
            $details_to->phone_type = $request->phonetype_to;
            $details_to->code = $request->code_to;
            $details_to->phone = $request->phone_to;
            $details_to->vat = $request->vat_to;
            $details_to->save();
            //return redirect()->back()->with('success',"Detail  Successfull Saved ...!");
            return redirect()->route('supplier.parcel_detail');
                                   
        }
         
          // dd($request->all()) ; 
    }


    public function parcel_detail()
    {
         
         // $Countries = Country::orderby("country_name","asc")->select('id','country_name')->get();
         // $Region_from = Region::orderby("name","asc")->select('id','name')->where('country_id',Session::get("from_id"))->get();
         // $Region_to = Region::orderby("name","asc")->select('id','name')->where('country_id',Session::get("to_id"))->get();
        //return view('supplier.home',compact('Countries','Region_from','Region_to'));

    	return view('supplier.parcelDetail');
    }

    public function add_parceldetail(Request $request){
         //dd($request->all()) ;
         $this->validate(
             $request,
                [
                	'parcel_Name' => 'required',
                	'parcel_weight' => 'required|numeric',
                	'parcel_height' => 'required|numeric',
                	'parcel_width' => 'required|numeric',
                	'parcel_category' => 'required',
            	],
                [
                'parcel_Name.required' => 'Please Enter Parcel Name',
                'parcel_weight.required' => 'Please Enter Weight ',
                'parcel_weight.numeric' => 'Incorrect Input type ',
                'parcel_height.required' => 'Please Enter height',
                'parcel_height.numeric' => 'Incorrect Input ',
                'parcel_width.required' => 'Please Enter width',
                'parcel_width.numeric' => 'Incorrect Input',
                'parcel_category.required' => 'Please Select Category',       
            ]
        );
            //$current_destination = Destination::where('shipping_id','=',md5(Session::get("shipping_id_created")))->first();

            $parcel = new ParcelDetail();
            $parcel->ship_id = md5(Session::get("shipping_id_created"));
            $parcel->parcel_name = $request->parcel_Name;
            $parcel->weight = $request->parcel_weight.'Kg';
            $parcel->Dimension = $request->parcel_height.'cm x '.$request->parcel_width.'cm';
            $parcel->category = $request->parcel_category;
            $parcel->save();

            return redirect()->back()->with('success',"Detail  Successfull Saved ...!");
    }

  
}
