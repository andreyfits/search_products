<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    private const PER_PAGE = 10;

    public function __construct(protected readonly ProductService $productService)
    {}

    public function search(Request $request)
    {
        $sku      = $request->query('sku');
        $cityName = $request->query('city');
        $page     = $request->query('page', 1);

        $products = $this->productService->searchProducts(
            $sku ? (int)$sku : null,
            $cityName,
            self::PER_PAGE,
            $page
        );

        return view('products.search', compact('products'));
    }
}
