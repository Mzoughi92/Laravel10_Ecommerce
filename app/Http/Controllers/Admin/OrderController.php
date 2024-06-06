<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderModel;
use Auth;
use Mail;
use App\Mail\OrderStatusMail;



class OrderController extends Controller
{
    public function list()
    {    
            $data['getRecord'] = OrderModel::getRecord();
            $data['header_title'] = "Aufträge LISTE Kategorie Liste";
            return view('admin.order.list', $data);
    }

    public function order_detail($id)
    {
        $data['getRecord'] = OrderModel::getSingle($id);
        $data['header_title'] = "Bestellung Detail";
        return view('admin.order.detail', $data);
    }

public function order_status(Request $request)
{
//dd($request->all());
 $getOrder = OrderModel::getSingle($request->order_id);
 if ($getOrder) {
    // Update status and send mail
    $getOrder->status = $request->status;
    $getOrder->save();
    //dd($getOrder);
    Mail::to($getOrder->email)->send(new OrderStatusMail($getOrder));

    $json['message'] = "Status Successfully Updated";
} else {
    $json['error'] = "Order not found";
}

echo json_encode($json);

}



}