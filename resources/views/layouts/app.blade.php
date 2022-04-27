<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('Title') - login</title>
  <link rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-800" src="{{public_path(".//images.png")}}" class="text-aling-left" width="200px">
    <nav class="flex py-20 bg-blue-500 text-white">
        <div>
            <h2>
                

            </h2>
        </div>
        <ul class="w-1/2 tx-16 ml-auto flex justify-end pt-1">
            <li>
                <a href="{{ route('login.index')}}" class="font-bold border-2 border-white py-2 px-5 rounded-md hover:bg-white hover:text-indigo-700"> iniciar sesion </a>
                <a href="{{ route('register.index')}}"class="font-bold border-2 border-white py-2 px-5 rounded-md hover:bg-white hover:text-indigo-700"> registrar usuario </a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
