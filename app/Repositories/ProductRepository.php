<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ProductRepository
{
    /**
     * Поиск продуктов по SKU и названию города.
     *
     * @param int|null $sku
     * @param string|null $cityName
     * @return array
     */
    public function searchProducts(?int $sku, ?string $cityName): array
    {
        $sql = "
            SELECT p.id, p.sku, c.name as city_name
            FROM products p
            LEFT JOIN cities c ON p.city_id = c.id
            WHERE 1=1
        ";

        $params = [];

        // Добавляем условия, если параметры переданы
        if ($sku !== null) {
            $sql      .= " AND p.sku LIKE ?";
            $params[] = "%{$sku}%";
        }

        if ($cityName !== null) {
            $sql      .= " AND c.name LIKE ?";
            $params[] = "%{$cityName}%";
        }

        return DB::select($sql, $params);
    }
}
