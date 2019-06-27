<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use DB;

class CheckOutController extends Controller
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
        //dd($request->session()->get('exhibitor')->space_id);

        $space = DB::table('exhibitors')->where('id','=', $request->session()->get('exhibitor')->id)->get();
        //dd($space->space_id);
         try {
            $charge = Stripe::charges()->create([
                'amount' => $request->session()->get('exhibitor')->total,
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Ticket',
                //'customer' => $request->session()->get('exhibitor')->contact_name,
                'receipt_email' => $request->session()->get('exhibitor')->email,
                'metadata' => [
                    
                ],
            ]);
            //$order = $this->addToOrdersTables($request, null);
            //Mail::send(new OrderPlaced($order));
            // decrease the quantities of all the products in the cart
            //$this->decreaseQuantities();
            //Cart::instance('default')->destroy();
            //session()->forget('coupon');

            DB::table('spaces')->where('id','=', $request->session()->get('exhibitor')->space_id)->update(['status'=>'Paid']);

            return redirect('/sendemail/send');

            return view('order_submitted')->with('success_message', 'Thank you! Your payment has been successfully accepted!');

        } catch (CardErrorException $e) {
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }

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
