<?php

namespace App\Http\Controllers\Api;

use DB;
use Auth;
use Response;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use app\Models\DetailsTransaction;
use App\Http\Controllers\Controller;

class TransactionApiController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->detail as $detail) {

            $product = Product::where('id',$detail['product_id'])->first();

            if ( $product->stock <= $detail['qty'] ) {
                return Response::json([
                    'status' => [
                        'code' => 403,
                        'description' => "$product->product Melebihi Stock"
                    ]
                ]);
            }
        }
    }
}
