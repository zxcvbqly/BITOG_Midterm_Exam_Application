<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-purple-200 flex items-center justify-center min-h-screen p-6">

    <div class="w-full max-w-4xl bg-white shadow-2xl rounded-xl overflow-hidden">
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-5 px-6 text-center">
            <h1 class="text-4xl font-bold">Gadgets & Accessories</h1>
            <p class="text-sm opacity-80 mt-1">Latest Tech & Electronics</p>
        </div>

        <div class="p-6 overflow-x-auto">
            <table class="w-full border-collapse rounded-lg shadow-lg overflow-hidden">
                <thead>
                    <tr class="bg-gradient-to-r from-blue-500 to-purple-500 text-white text-lg">
                        <th class="py-4 px-5 text-left">Product Name</th>
                        <th class="py-4 px-5 text-left">Category</th>
                        <th class="py-4 px-5 text-left">Price</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100 transition duration-300">
                        <td class="py-4 px-5 font-medium text-gray-800">Samsung Galaxy S22 Ultra</td>
                        <td class="py-4 px-5 text-gray-600">Smartphone</td>
                        <td class="py-4 px-5 font-semibold text-blue-600">63,632.09 PHP</td>
                    </tr>
                    <tr class="hover:bg-gray-100 transition duration-300">
                        <td class="py-4 px-5 font-medium text-gray-800">Dell Inspiron 15</td>
                        <td class="py-4 px-5 text-gray-600">Laptop</td>
                        <td class="py-4 px-5 font-semibold text-blue-600">19,500.00 PHP</td>
                    </tr>
                    <tr class="hover:bg-gray-100 transition duration-300">
                        <td class="py-4 px-5 font-medium text-gray-800">Fitbit Inspire</td>
                        <td class="py-4 px-5 text-gray-600">Smartwatches</td>
                        <td class="py-4 px-5 font-semibold text-blue-600">4,599.00 PHP</td>
                    </tr>
                    <tr class="hover:bg-gray-100 transition duration-300">
                        <td class="py-4 px-5 font-medium text-gray-800">PlayStation 4 Pro</td>
                        <td class="py-4 px-5 text-gray-600">Gaming Console</td>
                        <td class="py-4 px-5 font-semibold text-blue-600">26,655.00 PHP</td>
                    </tr>
                    <tr class="hover:bg-gray-100 transition duration-300">
                        <td class="py-4 px-5 font-medium text-gray-800">HTC ViVe Pro</td>
                        <td class="py-4 px-5 text-gray-600">VR Headset</td>
                        <td class="py-4 px-5 font-semibold text-blue-600">48,264.00 PHP</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>