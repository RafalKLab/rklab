<?php

namespace App\Http\Controllers;

use App\Models\MainTable;
use App\Models\Orders;
use App\Models\OrdersData;
use Illuminate\Http\Request;

class MainTableController extends Controller
{
    public function index()
    {
        $mainTable = MainTable::where('name', 'Orders')->first();

        $map = [];

        $orders = Orders::all();

        foreach ($orders as $order) {
            $data = [];

            $data['id'] = $order->id;
            foreach ($mainTable->fields as $field) {
                $data[$field->name] = OrdersData::where('order_id', $order->id)->where('field_id', $field->id)->first()?->value;
            }

            $map[] = $data;
        }

        return view('concept', compact('mainTable', 'map'));
    }

    public function edit($id){
        dd($id);
    }
}
