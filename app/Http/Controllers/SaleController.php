<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Invoice;
use App\ProductDetail;

class SaleController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('sale.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $invoice=new Invoice();
        $invoice->customer="customer";
        $invoice->save();
        $i=0;
        foreach ($request->product_id as $item) {
            $product=new Sale();
            $product->invoice_id=$invoice->id;
            $product->product_id=$request->product_id[$i];
            $product->quantity=$request->p_quantity[$i];
            $product->rate=$request->p_rate[$i];
            $product->save();

            $p_transaction=new ProductDetail();
            $p_transaction->product_id=$request->product_id[$i];
            $p_transaction->quantity=$request->p_quantity[$i];
            $p_transaction->type="DEBIT";
            $p_transaction->save();
            $i++;
        }
        DB::commit();
        return view('sale.print',compact('invoice'));
    }

    public function show(Sale $sale)
    {
        
    }

    public function edit(Sale $sale)
    {
        //
    }

    public function update(Request $request, Sale $sale)
    {
        //
    }

    public function destroy(Sale $sale)
    {
        //
    }
}
