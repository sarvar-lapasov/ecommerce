<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserPaymentCardResource;
use App\Models\UserPaymentCards;
use App\Http\Requests\StoreUserPaymentCardsRequest;
use App\Http\Requests\UpdateUserPaymentCardsRequest;

use App\Repositories\PaymentCardRepository;

use function Symfony\Component\String\s;
use function Symfony\Component\Translation\t;

class UserPaymentCardsController extends Controller
{
    public function __construct(
        protected PaymentCardRepository $paymentCardRepository,
    )
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->response(UserPaymentCardResource::collection(auth()->user()->paymentCards));
    }


    public function store(StoreUserPaymentCardsRequest $request)
    {
        $this->paymentCardRepository->savePaymentCard($request);

        return $this->success('card added');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserPaymentCardsRequest $request, UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPaymentCards $userPaymentCards)
    {
        //
    }
}
