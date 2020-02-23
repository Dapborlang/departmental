<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $product=Product::orderBy('name')
        ->get();
        foreach($product as $item)
        {
            $credit=ProductDetail::where('product_id',$item->id)
            ->where('type','CREDIT')
            ->sum('quantity');
            $debit=ProductDetail::where('product_id',$item->id)
            ->where('type','DEBIT')
            ->sum('quantity');
            $ProductDetail[$item->id]['name']=$item->name;
            $ProductDetail[$item->id]['remaining']=$credit-$debit;
            $ProductDetail[$item->id]['barcode']=$item->barcode;
        }
        return view('product.index',compact('ProductDetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       ProductDetail::create($request->all());
        return redirect()->back()->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detail=ProductDetail::findOrFail($id);
        $detail->quantity = $request->quantity;
        $detail->save();
        return redirect('product')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function getBarcode(Request $request)
    {
        $product=Product::where('barcode',$request->barcode)
        ->get();
        return $product;
    }

    public function getStock(Request $request)
    {
        $product=Product::where("barcode",$request->barcode)
        ->first();
        return view('product.stock',compact('product'));
    }
}
