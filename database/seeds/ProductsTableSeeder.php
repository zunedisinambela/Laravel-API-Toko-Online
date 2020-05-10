<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            array(
                "id" => 1,
                "product" => "Baju",
                "price" => 200000.00,
                "stock" => 20,
                "description" => "<p>\r\n\r\n</p><div><div></div><div><b>Lorem </b>ipsum dolor sit amet</div></div><p></p>",
                "created_at" => \Carbon\Carbon::now(),
            ),
            array(
                "id" => 2,
                "product" => "Printer",
                "price" => 500000.00,
                "stock" => 50,
                "description" => "<p>\r\n\r\n<b>Lorem </b>ipsum dolor sit amet\r\n\r\n<br></p>",
                "created_at" => \Carbon\Carbon::now(),
            ),
            array(
                "id" => 3,
                "product" => "Kipas",
                "price" => 500000.00,
                "stock" => 100,
                "description" => "<p>\r\n\r\n<b>Lorem </b>ipsum dolor sit amet\r\n\r\n<br></p>",
                "created_at" => \Carbon\Carbon::now(),
            ),
        );

        Product::insert($products);
    }
}
