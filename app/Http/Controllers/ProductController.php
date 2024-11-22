<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = [
            (object)['id' => 1, 'name' => 'Kopi Gayo'],
            (object)['id' => 2, 'name' => 'Kopi Robusta'],
            (object)['id' => 3, 'name' => 'Kopi Arabica'],
        ];

        return view('user.Frontend.jenis_product', compact('categories'));
    }

    public function detailJenis($id)
    {
        $products = [
            (object)['id' => 1, 'name' => 'Kopi Gayo - Warkop Abah', 'price' => 50000, 'image' => 'https://via.placeholder.com/150'],
            (object)['id' => 2, 'name' => 'Kopi Gayo - Premium', 'price' => 75000, 'image' => 'https://via.placeholder.com/150'],
            (object)['id' => 3, 'name' => 'Kopi Gayo - Fresh Roast', 'price' => 100000, 'image' => 'https://via.placeholder.com/150'],
        ];

        $category = (object)['id' => $id, 'name' => 'Kopi Gayo'];

        return view('user.Frontend.detail_jenis_product', compact('products', 'category'));
    }

    public function detailProduct($id)
    {
        $product = (object)[
            'id' => $id,
            'name' => 'Kopi Gayo - Warkop Abah',
            'description' => 'Kopi Gayo memiliki cita rasa yang khas dengan aroma kuat dan sedikit hint cokelat yang unik.',
            'price' => 50000,
            'image' => 'https://via.placeholder.com/300',
        ];

        return view('user.Frontend.detail_product', compact('product'));
    }

    public function pembayaran()
    {
        $qris_image = 'https://via.placeholder.com/300';
        $orders = [
            (object)['product_name' => 'Kopi Gayo - Warkop Abah', 'price' => 50000],
            (object)['product_name' => 'Kopi Robusta - Premium', 'price' => 45000],
        ];
        $total = 95000;

        return view('user.Frontend.pembayaran', compact('qris_image', 'orders', 'total'));
    }
}
