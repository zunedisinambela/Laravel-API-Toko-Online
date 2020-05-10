<?php

use App\Models\ImagesProduct;
use Illuminate\Database\Seeder;

class ImagesProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_product = array(
            array(
                "id" => 1,
                "product_id" => 1,
                "image" => "product/1o0K9OaAZH61HtbD6IzlmlepJ5GKOlMKolljQ5hi.jpeg",
                "created_at" => \Carbon\Carbon::now(),
            ),
            array(
                "id" => 2,
                "product_id" => 2,
                "image" => "product/OsIkhfEOxtksChd6waH7PzsAqITXxOn4oqvthhhW.jpeg",
                "created_at" => \Carbon\Carbon::now(),
            ),
            array(
                "id" => 3,
                "product_id" => 3,
                "image" => "product/ZCCi60dgI6KCDPpuPezuRrG4xy4dnRyBx4Z5uTog.jpeg",
                "created_at" => \Carbon\Carbon::now(),
            ),
        );

        ImagesProduct::insert($images_product);
    }
}
