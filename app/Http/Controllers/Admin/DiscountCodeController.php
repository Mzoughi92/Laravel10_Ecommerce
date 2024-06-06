<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiscountCodeModel;
use Auth;

class DiscountCodeController extends Controller

    {
        public function list()
        {    
                $data['getRecord'] = DiscountCodeModel::getRecord();
                $data['header_title'] = "Gutscheincode-Liste";
                return view('admin.discount_code.list', $data);
        }
    
        public function add()
        {    
                $data['header_title'] = "Gutscheincode hinzufügen";
                return view('admin.discount_code.add', $data);
        }
    
        
        public function insert (Request $request)
        {
          //  dd($request->all());
           $DiscountCode = new DiscountCodeModel;
           $DiscountCode->name = trim($request->name);
           $DiscountCode->type= trim($request->type);
           $DiscountCode->percent_amount = trim($request->percent_amount);
           $DiscountCode->expire_date= trim($request->expire_date);
           $DiscountCode->status = trim($request->status);
         
           $DiscountCode->save();
    
           return redirect('admin/discount_code/list')->with('success', "Gutscheincode Erfolgreich erstellt");
          
        }
    
    
        public function edit($id)
        {    
                $data['getRecord'] = DiscountCodeModel::getSingle($id);
                $data['header_title'] = "Gutscheincode Bearbeiten";
                return view('admin.discount_code.edit', $data);
        }
    
    
        public function update($id, Request $request)
        {
            $DiscountCode = DiscountCodeModel::getSingle($id);
            $DiscountCode->name = trim($request->name);
            $DiscountCode->type= trim($request->type);
            $DiscountCode->percent_amount = trim($request->percent_amount);
            $DiscountCode->expire_date= trim($request->expire_date);
            $DiscountCode->status = trim($request->status);
         
            $DiscountCode->save();
           return redirect('admin/discount_code/list')->with('success', "Gutscheincode Erfolgreich aktualisiert");
        }
    
    
        public function delete($id)
        {
            $DiscountCode = DiscountCodeModel::getSingle($id);
            $DiscountCode -> is_delete = 1;
            $DiscountCode ->save();
            return redirect()->back()->with('success', "Gutscheincode Erfolgreich gelöscht");
         }
    
    }
    
    
    