<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\User;
use App\Models\ProductWishlistModel;
use App\Models\ProductReviewModel;
use Auth;
use Hash;



class UserController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] = "DASHBOARD";
        $data['TotalOrder'] = OrderModel::getTotalOrderUser(Auth::user()->id);
        $data['TotalTodayOrder'] = OrderModel::getTotalTodayOrderUser(Auth::user()->id);
        $data['TotalAmount'] = OrderModel::getTotalAmountUser(Auth::user()->id);
        $data['TotalTodayAmount'] = OrderModel::getTotalTodayAmountUser(Auth::user()->id);



        $data['TotalPending'] = OrderModel::getTotalStatusUser(Auth::user()->id, 0);
        $data['TotalInprogress'] = OrderModel::getTotalStatusUser(Auth::user()->id, 1);
        $data['TotalCompleted'] = OrderModel::getTotalStatusUser(Auth::user()->id, 3);
        $data['TotalCancelled'] = OrderModel::getTotalStatusUser(Auth::user()->id, 4);



        return view('user.dashboard', $data);
    }


    public function orders()
    {
        $data['getRecord'] = OrderModel::getRecordUser(Auth::user()->id);
        $data['header_title'] = "ORDERS";
        return view('user.orders', $data);
    }


    public function orders_detail($id)
    {
        $data['getRecord'] = OrderModel::getSingleUser(Auth::user()->id, $id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "ORDERS Deital";
            return view('user.order_detail', $data);
        }
        else
        {
            abort(404);
        }
        
    }


    public function edit_profile()
    {
     
        $data['getRecord'] = User::getSingle(Auth::user()->id);
        $data['header_title'] = "EDIT";
        return view('user.edit_profile', $data);
    }



    public function update_profile(Request $request)
    {
       // dd($request->all());
       $user = User::getSingle(Auth::user()->id);
       $user->name = trim($request->name);
       $user->last_name= trim($request->last_name);
       $user->company_name = trim($request->company_name);
       $user->country = trim($request->country);
       $user->address_one = trim($request->address_one);
       $user->address_tow = trim($request->address_tow);
       $user->city = trim($request->city);
       $user->state = trim($request->state);
       $user->postcode = trim($request->postcode);
       $user->phone = trim($request->phone);
       $user->save();

       return redirect()->back()->with('success', "Profile Succefully Updated");


    }

    public function change_password()
    {
        $data['header_title'] = "CHANGE";
        return view('user.change_password', $data);
    }


    public function update_password(Request $request)
    {
       // dd($request->all());
       $user =  User::getSingle(Auth::user()->id);
       if(Hash::check($request->old_password, $user->password))
       {

        if($request->password == $request->cpassword)
        {
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back()->with('success', 'Passwort Wuerde geandert');

        }
        else
        {
            return redirect()->back()->with('error', 'Neue Passwort Passt leider nicht!');
        }
       }
       else
       {
        return redirect()->back()->with('error', 'Alter Passwordt nicht korrekt!');
    }
       }





      public function add_to_wishlist(Request $request)
      {
       $check = ProductWishlistModel::checkAlready($request->product_id, Auth::user()->id);
       if(empty($check))
       {
       $save = new ProductWishlistModel;
       $save->product_id = $request->product_id;
       $save->user_id = Auth::user()->id;
       $save->save();

       $json['is_wishlist'] = 1;
       }
       else
       {
        ProductWishlistModel::DeleteRecord($request->product_id, Auth::user()->id);
        $json['is_wishlist'] = 0;
       }
       $json['status']= true;
       echo json_encode($json);
      }
     




      public function submit_review(Request $request)
      {
       //dd($request->all());
        $save = new ProductReviewModel;
        $save->product_id = trim($request->product_id);
        $save->order_id = trim($request->order_id);
        $save->user_id = Auth::user()->id;
        $save->rating = trim($request->rating);
        $save->review = trim($request->review);
        $save->save();

        return redirect()->back()->with('success' , "Thanks you for your review");
      }



    }
   

    
    


    
    


