<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ColorModel;
use Auth;



class ColorController extends Controller

    {
        public function list()
        {    
                $data['getRecord'] = ColorModel::getRecord();
                $data['header_title'] = "Farbe Liste";
                return view('admin.color.index', $data);
        }
    
        public function add()
        {    
                
                $data['header_title'] = "Farbe hinzufügen";
                return view('admin.color.add', $data);
        }
    
        
    
        public function insert (Request $request)
        {
          //  dd($request->all());
    
       
    
           $color = new ColorModel;
           $color->name = trim($request->name);
           $color->code = trim($request->code);
           $color->status = trim($request->status);
           $color->created_by = Auth::user()->id;
           $color->save();
    
           return redirect('admin/color/list')->with('success', "Farbe erfolgreich erstellt");
        }
    
    
        public function edit($id)
        {    
                $data['getRecord'] = ColorModel::getSingle($id);
                $data['header_title'] = "Farbe bearbeiten";
                return view('admin.color.edit', $data);
        }
    
    
        public function update($id, Request $request)
        {
           
          
           $color = ColorModel::getSingle($id);
           $color->name = trim($request->name);
           $color->code = trim($request->code);
           $color->status = trim($request->status);
     
          
           $color->save();
           return redirect('admin/color/list')->with('success', "Farbe erfolgreich aktualisiert");
        }
    
    
        public function delete($id)
        {
            
            $color = ColorModel::getSingle($id);
            $color -> is_delete = 1;
            $color->save();
            return redirect()->back()->with('success', "Farbe erfolgreich gelöscht");
         }
    
    }
    
    
    