<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductQuantity;
use App\Models\User;
use App\Models\Pharmacy;

class ProductController extends Controller
{
    public function getResult(Request $request)
    {
        $data = Product::select('name')->where('name', 'LIKE', '%' . $request->value . '%')->get();
        return response()->json($data);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**public function index(Request $request)
    {
        $q = request()->input("q") ?? "";
        $product = Product::where('name', $q)->first();
        if (empty($product)) {
            return redirect(route('house'))->with('warning', 'Le nom de médicament est invalide');
        } else {
            $pharmacieswith = ProductQuantity::where('product_id', $product->id)->where('quantity', '>', 0)->paginate(3, ['*'], 'withPagination');
            $pharmacieswithout = ProductQuantity::where('product_id', $product->id)->where('quantity', '=', 0)->paginate(3, ['*'], 'withoutPagination');

            return view('products.index', compact('product', 'pharmacieswith', 'pharmacieswithout'));
        }
    }**/
public function index(Request $request)
    {
        $q = request()->input("q") ?? "";
        $product = Product::where('name', $q)->first();
        if (empty($product)) {
            return redirect(route('house'))->with('warning', 'Le nom de médicament est invalide');
        } else {
            $pharmacieswith = ProductQuantity::where('product_id', $product->id)->where('quantity', '>', 0)->paginate(3, ['*'], 'withPagination');
            $pharmacieswithout = ProductQuantity::where('product_id', $product->id)->where('quantity', '=', 0)->paginate(3, ['*'], 'withoutPagination');

            return view('products.index', compact('product', 'pharmacieswith', 'pharmacieswithout'));
        }
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('quantities')->find($id);
        // return $product;
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
