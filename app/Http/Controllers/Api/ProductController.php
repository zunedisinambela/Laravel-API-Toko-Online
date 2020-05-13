<?php

namespace App\Http\Controllers\Api;

use DB;
use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function products(Request $request)
    {
        $query = Product::with(['latestImage'])->select('*')->orderBy('product','asc');

        if ($request->search != null) {
            $query->where('product','like','%'.$request->search.'%');
        }

        // $products = Product::paginate(2);

        $products = $query->paginate(2);

        if ( $products->isEmpty()) {
            return Response::json([
                'status' => [
                    'code' => 404,
                    'description' => 'Data Not Found'
                ]
            ]);
        }else{
            return ProductResource::collection($products)->additional([
                'status' => [
                    'code' => 200,
                    'description' => 'OK'
                ]
            ])->response()->setStatusCode(200);
        }

    }
}
