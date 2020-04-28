<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class CheckoutController extends \App\Http\Controllers\Controller
{

    public function shipping()
    {
        $cart = [];
        if (session()->has('cart')) {
            $cart = session()->get('cart');
        } else {
            redirect('/cart');
        }

        return view('frontend/checkout/shipping');
        // Tims Lösung


        // // TODO schicke Nutzer ohne Warenkorb zurück
        // if (!session()->has('cart')) {
        //     return redirect('/cart');
        // }
        // // TODO
        // // prüfe ob der Nutzer schon eine Bestellung in der Session hat
        // // wenn ja: hole sie aus der session
        // if (session()->has('orderItems')) {
        //     $orderItems = session()->get('orderItems');
        //     // wenn nein: lege eine neue Bestellung an speichere sie in der Datenbank
        // } else {
        //     $o = new \App\Order();
        //     $o->save();
        // }
        // // TODO füge mit der neuen addItems-methode
        // // den Inhalt des Warenkorbs der Bestellung hinzu
        // $o->addItems(['orderItems']);
        // // TODO speichere die Bestellung in der session
        // session()->put('order', $o);
        // // TODO rendere den shipping-view
        // return view('frontend/checkout/shipping');
    }

    public function payment()
    {
        return view('frontend/checkout/payment');
    }
    public function success()
    {
        return view('frontend/checkout/success');
    }
    public function fail()
    {
        return view('frontend/checkout/fail');
    }
    public function setShippingAddress()
    {
    }
}
