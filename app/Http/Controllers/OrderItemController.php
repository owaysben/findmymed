<?php

namespace App\Http\Controllers;

use App\Models\ProductQuantity;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accepte($id)
    {
        $commande = OrderItem::where('id', $id)->first();
        $commande->status = 'Accepté';
        $commande->save();
        return redirect(route('pharmacy.commande'))->with('success', 'Reservation accepté avec succés');
    }
    public function refuse($id)
    {
        $commande = OrderItem::where('id', $id)->first();
        $commande->status = 'Refusé';
        $commande->save();
        return redirect(route('pharmacy.commande'))->with('success', 'Reservation refusé avec succés');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = ProductQuantity::where('id', $id)->first();
        return view('user.commande', compact('data', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = ProductQuantity::where('id', $id)->first();
        $request->validate([
            'quantity' => 'required'
        ]);
        $verif = OrderItem::where('user_id', auth()->user()->id)->where('product_id', $data->product_id)->where('pharmacy_id', $data->pharmacy_id)->first();
        if (empty($verif)) {
            OrderItem::create([
                'product_id' => $data->product_id,
                'pharmacy_id' => $data->pharmacy_id,
                'quantity' => $request->input('quantity'),
                'user_id' => auth()->user()->id
            ]);
        } else {
            OrderItem::where('id', $verif->id)->update([
                'quantity' => $verif->quantity + $request->input('quantity')
            ]);
        }
        return redirect('/user/profile')->with('success', 'Commande Complété, Vueiller attendre 24h au plus pour la validation de commande ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(OrderItem $orderItem)
    {
        $commandes = OrderItem::where('pharmacy_id', auth()->user()->id)->whereNot('status', 'Refusé');
        return view('pharmacy.commandes', compact('commandes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderItem $orderItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande = OrderItem::where('id', $id)->first();
        $commande->delete();
        return redirect(route('user.profile'))->with('success', 'Commande Annulé avec success');
    }
}
