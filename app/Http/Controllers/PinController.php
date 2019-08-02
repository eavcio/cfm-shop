<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pin;

class PinController extends Controller
{
    public function listPins() {

        $data['pins'] = Pin::with('transactions')->get();

        return view('pins.listPins', $data);
    }

    /**
     * Create PINs Form
     */
    public function create() {

        return view('pins.create');
    }

    /**
     * Generate PINs
     */
    public function generatePINs(Request $request) {
        // dd($request->all());

        $pin = new Pin;
        $pin->pin = $pin->generatePIN();
        $pin->value = $request->value;
        $pin->save();

        return redirect()->route('pins.listPins');
    }

    /**
     * Generate PINs
     */
    public function transactions($pin_id) {
        // dd($request->all());

        $data['pin'] = Pin::find($pin_id);

        return view('pins.transactions', $data);
    }
}