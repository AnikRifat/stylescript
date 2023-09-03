<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => "Elegant Floral Dress",
                'description' => "<h2 class='specification-section__title mb-3' style='text-align:center;'>Product Description</h2> <p>This elegant floral dress is perfect for a summer evening. It features a floral pattern and a comfortable fit, making it ideal for any occasion.</p>",
                'price' => 89.00,
                'image' => "1693734190.jpg",
                'status' => 1,
                'created_at' => "2023-09-03 15:31:41",
                'updated_at' => "2023-09-03 15:43:10",
            ],
            [
                'name' => "Men's Classic Suit",
                'description' => "<h2 class='specification-section__title mb-3' style='text-align:center;'>Product Description</h2> <p>This classic suit for men is tailored to perfection. It's suitable for formal events and includes a jacket and trousers.</p>",
                'price' => 200.00,
                'image' => "1693734307.jpg",
                'status' => 1,
                'created_at' => "2023-09-03 15:31:41",
                'updated_at' => "2023-09-03 15:45:07",
            ],
            [
                'name' => "Designer Handbag",
                'description' => "<h2 class='specification-section__title mb-3' style='text-align:center;'>Product Description</h2> <p>This designer handbag is a fashion statement. It features high-quality leather and a unique design, perfect for any fashion enthusiast.</p>",
                'price' => 150.00,
                'image' => "1693734357.jpg",
                'status' => 1,
                'created_at' => "2023-09-03 15:31:41",
                'updated_at' => "2023-09-03 15:45:57",
            ],
            [
                'name' => "Fashionable Sunglasses",
                'description' => "<h2 class='specification-section__title mb-3' style='text-align:center;'>Product Description</h2> <p>These fashionable sunglasses not only protect your eyes but also elevate your style. They come in various trendy designs.</p>",
                'price' => 40.00,
                'image' => "1693734388.jpg",
                'status' => 1,
                'created_at' => "2023-09-03 15:31:41",
                'updated_at' => "2023-09-03 15:46:28",
            ],
            [
                'name' => "Casual Sneakers",
                'description' => "<h2 class='specification-section__title mb-3' style='text-align:center;'>Product Description</h2> <p>These casual sneakers are both comfortable and stylish. They are suitable for everyday wear and come in various colors.</p>",
                'price' => 70.00,
                'image' => "1693734435.jpg",
                'status' => 1,
                'created_at' => "2023-09-03 15:31:41",
                'updated_at' => "2023-09-03 15:47:15",
            ],
            [
                'name' => "Kashmiri Silk Pear Green Handcrafted Saree",
                'description' => "<span data-mce-fragment='1' style='color: rgba(18, 18, 18, 0.87); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;'>This Kashmiri Silk Pear Green Handcrafted Saree is a beautiful addition to your ethnic wear collection. It features intricate handcrafted designs and is perfect for special occasions.</span>",
                'price' => 567.00,
                'image' => "1693734579.jpg",
                'status' => 1,
                'created_at' => "2023-09-03 15:31:41",
                'updated_at' => "2023-09-03 15:49:39",
            ],
            [
                'name' => "Stylish White and Black Color Panjabi",
                'description' => "<p style='border: 0px; font-size: 15px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; background: transparent; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 16px;'>This stylish white and black color Panjabi is a trendy outfit for men. It can be worn on various occasions and complements your style.</p>",
                'price' => 80.00,
                'image' => "1693734658.jpg",
                'status' => 1,
                'created_at' => "2023-09-03 15:31:41",
                'updated_at' => "2023-09-03 15:50:58",
            ],
            // Add additional products here
            [
                'name' => "Product Name 1",
                'description' => "Description for Product 1",
                'price' => 99.99,
                'image' => "product_image_1.jpg",
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Product Name 2",
                'description' => "Description for Product 2",
                'price' => 79.99,
                'image' => "product_image_2.jpg",
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more products if needed
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
