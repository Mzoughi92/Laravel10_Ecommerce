<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use Auth;


class SubCategoryController extends Controller
{
    public function list()
    {    
            $data['getRecord'] = SubCategoryModel::getRecord();
            $data['header_title'] = "Unterkategorie Liste";
            return view('admin.subcategory.index', $data);
    }

    public function add()
    {    
           // die;
           $data['getCategory'] = CategoryModel::getRecord();
            $data['header_title'] = "Unterkategorie hinzufügen";
            return view('admin.subcategory.add', $data);
    }



    public function insert (Request $request)
    {
      //  dd($request->all());

      request()->validate([
        'slug' => 'required|unique:sub_category'
       ]);

       $category = new SubCategoryModel;
       $category->category_id = trim($request->category_id);
       $category->name = trim($request->name);
       $category->slug = trim($request->slug);
       $category->status = trim($request->status);
       $category->meta_title = trim($request->meta_title);
       $category->meta_description = trim($request->meta_description);
       $category->meta_keywords = trim($request->meta_keywords);
       $category->created_by = Auth::user()->id;
       $category->save();

       return redirect('admin/sub_category/list')->with('success', "Unterkategorie erfolgreich erstellt");
    }




    public function edit($id)
    {    
              $data['getCategory'] = CategoryModel::getRecord();
            $data['getRecord'] = SubCategoryModel::getSingle($id);
            $data['header_title'] = "Unterkategorie bearbeiten";
            return view('admin.subcategory.edit', $data);
    }




    public function update($id, Request $request)
    {
       
       request()->validate([
        'slug' => 'required|unique:sub_category,slug,'.$id
       ]);
       $subcategory = SubCategoryModel::getSingle($id);
       $subcategory->category_id = trim($request->category_id);
       $subcategory->name = trim($request->name);
       $subcategory->slug = trim($request->slug);
       $subcategory->status = trim($request->status);
       $subcategory->meta_title = trim($request->meta_title);
       $subcategory->meta_description = trim($request->meta_description);
       $subcategory->meta_keywords = trim($request->meta_keywords);
        
      
       $subcategory->save();
       return redirect('admin/sub_category/list')->with('success', "Unterkategorie erfolgreich aktualisiert");
    }



    
   

    public function delete($id)
    {
        
        $subcategory = SubCategoryModel::getSingle($id);
        $subcategory -> is_delete = 1;
        $subcategory->save();
        return redirect()->back()->with('success', "Unterkategorie erfolgreich gelöscht");
     }

public function get_sub_category(Request $request)
{
//dd($request->all());
$category_id = $request->id;
$get_sub_category = SubCategoryModel::getRecordSubCategory($category_id);
$html = '';
$html .= '<option value="">Select</option>';
foreach ($get_sub_category as $value)
{
        $html .= '<option value="'.$value->id.'">'.$value->name.'</option>';
}

$json['html'] = $html;
echo json_encode($json);

}

}
