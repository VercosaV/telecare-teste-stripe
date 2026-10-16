<?php

namespace App\Http\Controllers\pagamentos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class StripeController extends Controller
{
    public function doacao()
    {

        return view('pagamentos.doacao');
    }

    public function pagamento(Request $request)
    {
        $stripe = new StripeClient(config('stripe.sk'));

        $response = $stripe->checkout->sessions->create(
            [
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'brl',
                            'product_data' => [
                                'name' => 'Camiseta',
                            ],
                            'unit_amount' => $request->valor * 100,
                        ],
                        'quantity' => 2,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('stripe.sucesso'), // Define sucesso
                'cancel_url' => route('stripe.cancelado'),   // Define cancelado
            ]
        );

        return redirect()->away($response->url);

    }

    public function sucesso() {
        return "Pagamento Aprovado";
    }

    public function cancelado() {
        return "Pagamento Cancelado";
    }
}
