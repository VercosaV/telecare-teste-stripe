<?php

namespace App\Http\Controllers\pagamentos;

use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function doacao() {


        return view('pagamentos.doacao');
    }

    public function pagamento() {

    }

    public function sucesso() {

    }

    public function cancelado() {
        
    }
}
