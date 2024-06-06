<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingChargeModel;
use Auth;

class ShippingChargeController  extends Controller

    {
        public function list()
        {    
                $data['getRecord'] = ShippingChargeModel::getRecord();
                $data['header_title'] = "Versandkosten Liste";
                return view('admin.Shipping_charge.list', $data);
        }
    
        public function add()
        {    
                $data['header_title'] = "Versandkosten hinzufügen";
                return view('admin.Shipping_charge.add', $data);
        }
    
        
        public function insert (Request $request)
        {
          //  dd($request->all());
           $ShippingCharge = new ShippingChargeModel;
           $ShippingCharge->name = trim($request->name);
           $ShippingCharge->price= trim($request->price);
           $ShippingCharge->status = trim($request->status);
         
           $ShippingCharge->save();
    
           return redirect('admin/shipping_charge/list')->with('success', "Versandkosten erfolgreich erstellt");
        }
    
    
        public function edit($id)
        {    
                $data['getRecord'] = ShippingChargeModel::getSingle($id);
                $data['header_title'] = "Versandkosten bearbeiten ";
                return view('admin.Shipping_charge.edit', $data);
        }
    
    
        public function update($id, Request $request)
        {
            $ShippingCharge = ShippingChargeModel::getSingle($id);
            $ShippingCharge->name = trim($request->name);
            $ShippingCharge->price= trim($request->price);

            $ShippingCharge->status = trim($request->status);
         
            $ShippingCharge->save();
           return redirect('admin/shipping_charge/list')->with('success', "Versandkosten erfolgreich aktualisiert");
        }
    
    
        public function delete($id)
        {
            $ShippingCharge = ShippingChargeModel::getSingle($id);
            $ShippingCharge -> is_delete = 1;
            $ShippingCharge ->save();
            return redirect()->back()->with('success', "Versandkosten erfolgreich gelöscht");
         }
    
    }
    
    
    