<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function list()
    {    
            $data['getRecord'] = User::getAdmin();
            $data['header_title'] = "ADMIN LISTE";
            return view('admin.adminlist.index', $data);
    }


    public function warning()
    {    
            $data['getRecord'] = User::getAdmin();
            $data['header_title'] = "WARNUNG!!";
            return view('admin.adminlist.warning', $data);
    }
    

    public function add()
    {    
            
            $data['header_title'] = "ADMIN HINZUGEFÜGEN ";
            return view('admin.adminlist.add', $data);
    }

    public function insert(Request $request)
    {
       // dd($request->all());
     
       $user = new User;
       $user->name = $request->name;  
       $user->email = $request->email;  
       $user->password = Hash::make($request->password);
       $user->status = $request->status; 
       $user->is_admin = 1; 
        // Upload Image
        $newname = uniqid();
        $image = $request->file('photo');
        $newname.='.'.$image->getClientOriginalExtension();
        echo $newname;
        // echo $image->getSize();
        $destinationPath = 'uploads';
        $image->move($destinationPath, $newname );
        $user->photo = $newname;


       $user->save();

       return redirect('admin/admin/list')->with('success', "Der Administrator wurde erfolgreich erstellt");
    }


    public function edit($id)
    {    
            $data['getRecord'] = User::getSingle($id);
            $data['header_title'] = "Admin Bearbeiten";
            return view('admin.adminlist.edit', $data);
    }




    public function update($id, Request $request)
    {
       // dd($request->all());
       request()->validate([
        'email' => 'required|email|unique:users,email,'.$id
       ]);
       $user = User::getSingle($id);
       $user->name = $request->name;  
       $user->email = $request->email;  
       if(!empty($request->password))
       {
        $user->password = Hash::make($request->password);
       }
      
       $user->status = $request->status; 
       $user->is_admin = 1; 
        // Upload Image
     
        if ($request->file('photo')) 
        {
            $file_path = public_path().'/uploads/'.$user->photo;
            unlink( $file_path );   
            $newname = uniqid();
            $image = $request->file('photo');
            $newname.= '.'.$image->getClientOriginalExtension();
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newname);
            $user->photo = $newname;
        }

       $user->save();
       return redirect('admin/admin/list')->with('success', "Der Administrator wurde erfolgreich aktualisiert");
    }


    public function delete($id)
    {
        
        $user = User::getSingle($id);
        $user -> is_delete = 1;
        $user->save();
        return redirect()->back()->with('success', "Der Administrator wurde erfolgreich gelöscht");
     }
 









   public function customer_list()
   {
        $data['getRecord'] = User::getCustomer();
        $data['header_title'] = 'Kunde';
        return view('admin.customer.list', $data);
   }





   public function delete_customer($id)
   {
       
       $user = User::getSingle($id);
       $user -> is_delete = 1;
       $user->save();
       return redirect()->back()->with('success', "Der Kunde wurde erfolgreich gelöscht");
    }

    

   
}
