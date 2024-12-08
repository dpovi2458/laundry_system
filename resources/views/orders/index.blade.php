<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Órdenes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Órdenes</h1>
        
        <a href="{{ route('orders.create') }}" 
           class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition mb-6">
            Agregar Orden
        </a>

        <ul class="bg-white rounded-lg shadow-sm divide-y divide-gray-200">
            @foreach ($orders as $order)
                <li class="p-4 hover:bg-gray-50">
                    <span class="font-medium">{{ $order->customer_name }}:</span> 
                    <span class="text-gray-600">{{ $order->items }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>