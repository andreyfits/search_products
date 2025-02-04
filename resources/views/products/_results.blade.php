@if ($products->count() > 0)
    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKU</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->sku }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->city_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Пагинация -->
    <div class="mt-6">
        {{ $products->links() }}
    </div>
@else
    <p class="text-center text-gray-500">No products found.</p>
@endif
