<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function show($id)
    {
        // TODO: Implement show method
        // You can implement your sale show logic here
        return view('sales.show', compact('id'));
    }
}
