<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function list()
    {    
            $data['getRecord'] = ProductModel::getRecord();
            $data['header_title'] = "Produkten Liste";
            return view('products.list', $data);
    }

}
