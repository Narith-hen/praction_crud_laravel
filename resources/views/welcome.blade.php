<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="h-screen flex items-center justify-center">
    <div>
        <h1 class="text-blue-500 text-3xl font-bold text-center">
            Welcome to Practice CRUD Laravel By NARITH
        </h1>
        <div class="flex gap-6 justify-center">
            <a href="{{ route('categories.index') }}"
                class="px-6 py-3 bg-indigo-500 text-blue-500 border font-semibold rounded-full
                      hover:bg-indigo-400 hover:scale-105
                      transition-all duration-300 shadow-lg">
                Category
            </a>

            <a href="{{ route('products.index') }}"
                class="px-6 py-3 bg-indigo-500 text-blue-500 border font-semibold rounded-full
                      hover:bg-indigo-400 hover:scale-105
                      transition-all duration-300 shadow-lg">
                Product
            </a>
        </div>
    </div>
</body>

</html>
