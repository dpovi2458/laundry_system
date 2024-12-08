<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Orden</title>
    @vite('resources/css/app.css')
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Agregar Orden</h1>
    <form action="{{ route('orders.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="customer_name" class="block text-sm font-medium text-gray-700">Nombre del Cliente:</label>
            <input type="text" id="customer_name" name="customer_name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="items" class="block text-sm font-medium text-gray-700">Artículos:</label>
            <input type="text" id="items" name="items" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Agregar</button>
    </form>
    <a href="{{ route('orders.index') }}" class="text-blue-500 hover:underline mt-4 inline-block">Volver</a>
</body>
</html>