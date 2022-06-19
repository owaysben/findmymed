<?php

namespace App\Http\Controllers;

use App\Models\ProductQuantity;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = ProductQuantity::where('id', $id)->first();
        return view('user.reserve', compact('data', 'id'));
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
        $verif = Reserve::where('user_id', auth()->user()->id)->where('product_id', $data->product_id)->where('pharmacy_id', $data->pharmacy_id)->first();
        if (empty($verif)) {
            Reserve::create([
                'product_id' => $data->product_id,
                'pharmacy_id' => $data->pharmacy_id,
                'quantity' => $request->input('quantity'),
                'user_id' => auth()->user()->id,
                'type' => 'reservation'
            ]);
        } else {
            Reserve::where('id', $verif->id)->update([
                'quantity' => $verif->quantity + $request->input('quantity')
            ]);
        }
        $data->quantity = $data->quantity - $request->input('quantity');
        $data->save();
        return redirect('/user/profile')->with('success', 'Reservation Complété');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $reservations = Reserve::where('pharmacy_id', auth()->user()->id);
        return view('pharmacy.reservation', compact('reservations'));
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
        $reservation = Reserve::where('id', $id)->first();
        $reservation->delete();
        return redirect(route('user.profile'))->with('success', 'Reservation Annulé avec success');
    }
}
