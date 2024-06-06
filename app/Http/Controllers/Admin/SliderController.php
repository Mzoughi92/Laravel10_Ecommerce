<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderModel;
use Auth;

class SliderController extends Controller

    {
        public function list()
        {    
                $data['getRecord'] = SliderModel::getRecord();
                $data['header_title'] = "Banners Liste";
                return view('admin.slider.list', $data);
                
        }
    
        public function add()
        {    
                $data['header_title'] = "Banners hinzufügen";
                return view('admin.slider.add', $data);
        }
    
        
        public function insert (Request $request)
        {
          //  dd($request->all());
           $slider = new SliderModel;
           $slider->name = trim($request->name);
           $slider->description= trim($request->description);
           $slider->description2= trim($request->description2);
           $slider->link= trim($request->link);
           $slider->status = trim($request->status);
           $slider->created_by = Auth::user()->id;
      

         if ($request->file('photo')) 
         {

             $newname = uniqid();
             $image = $request->file('photo');
             $newname.= '.'.$image->getClientOriginalExtension();
             $destinationPath = 'uploads';
             $image->move($destinationPath, $newname);
             $slider->photo = $newname;
         }
 

         
           $slider->save();
    
           return redirect('admin/slider/list')->with('success', "Banner erfolgreich erstellt");
        }
    
    
        public function edit($id)
        {    
                $data['getRecord'] = SliderModel::getSingle($id);
                $data['header_title'] = "Banner bearbeiten ";
                return view('admin.slider.edit', $data);
        }
    
    
        public function update($id, Request $request)
        {
            $slider = SliderModel::getSingle($id);
            $slider->name = trim($request->name);
           $slider->description= trim($request->description);
           $slider->description2= trim($request->description2);
           $slider->link= trim($request->link);
           $slider->status = trim($request->status);
         



           if ($request->file('photo')) 
           {
              


               $newname = uniqid();
               $image = $request->file('photo');
               $newname.= '.'.$image->getClientOriginalExtension();
               $destinationPath = 'uploads';
               $image->move($destinationPath, $newname);

               $slider->photo = $newname;
           }




            $slider->save();
           return redirect('admin/slider/list')->with('success', "Banner erfolgreich aktualisiert");
        }
    
    
        public function delete($id)
        {
            $slider = SliderModel::getSingle($id);
            $slider -> is_delete = 1;
            $slider ->save();
            return redirect()->back()->with('success', "Banner erfolgreich gelöscht");
         }
    
    }
    
    
    