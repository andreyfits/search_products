<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Pagination\LengthAwarePaginator;

readonly class ProductService
{
    public function __construct(private ProductRepository $productRepository)
    {}

    /**
     * Поиск продуктов с пагинацией.
     *
     * @param int|null $sku
     * @param string|null $cityName
     * @param int $perPage
     * @param int $page
     * @return LengthAwarePaginator
     */
    public function searchProducts(?int $sku, ?string $cityName, int $perPage = 10, int $page = 1): LengthAwarePaginator
    {
        $results = $this->productRepository->searchProducts($sku, $cityName);

        $offset           = ($page - 1) * $perPage;
        $paginatedResults = array_slice($results, $offset, $perPage);

        return new LengthAwarePaginator(
            $paginatedResults,
            count($results),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
    }
}
