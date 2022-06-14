<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductQuantity;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductQuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantities = ProductQuantity::where('pharmacy_id', auth()->user()->id)->get();
        if (Auth::user()->hasRole('pharmacy')) {
            return view('pharmacy.stock', compact('quantities'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Product::all();

        return view('pharmacy.createstock', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**$product_q = request()->input("product") ?? "";
        $product = Product::where('name',  $product_q);**/
        $request->validate([

            'quantity' => 'required',
            'product' => 'required',
        ]);
        $verif = ProductQuantity::where('product_id', $request->input('product'))->select()->first();

        if (!empty($verif) && auth()->user->id == $verif->pharmacy_id) {
            ProductQuantity::where('product_id', $request->input('product'))->update([
                'quantity' => $verif->quantity + $request->input('quantity')
            ]);
        } elseif (empty($verif)) {
            ProductQuantity::create([
                'product_id' => $request->input('product'),
                'quantity' => $request->input('quantity'),
                'pharmacy_id' => auth()->user()->id
            ]);
        }
        return redirect('/pharmacy/stock')->with('success', 'stock ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $product_id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $productquantity = ProductQuantity::where('product_id', $product_id)->first();
        $product = Product::find($product_id);
        return view('pharmacy.editstock', compact('productquantity', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $product_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $product = ProductQuantity::find($product_id);
        $product->quantity = $request->quantity;
        $product->save();
        return redirect('pharmacy.stock')->with('succes', 'quantity mis à jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $product_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $med = ProductQuantity::where('product_id', $product_id)->first();
        if (auth()->user->id == $med->pharmacy_id) {
            $med->delete();
            return redirect('pharmacy.stock')->with('succes', 'quantity supprimé avec succés');
        }
    }
}
