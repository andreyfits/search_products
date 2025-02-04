<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Product Search</h1>

    <!-- Форма поиска -->
    <form id="searchForm" class="mb-6 bg-white p-4 rounded shadow">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <input type="text" name="sku" class="w-full p-2 border rounded" placeholder="SKU" value="{{ request('sku') }}">
            </div>
            <div>
                <input type="text" name="city" class="w-full p-2 border rounded" placeholder="City" value="{{ request('city') }}">
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Search</button>
            </div>
        </div>
    </form>

    <!-- Результаты поиска -->
    <div id="searchResults">
        @include('products._results', ['products' => $products])
    </div>
</div>
</body>
</html>
