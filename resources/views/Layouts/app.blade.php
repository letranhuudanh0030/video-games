<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video games</title>
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/" class="text-3xl font-bold uppercase">
                    <span>Video</span>
                    <span class="text-blue-300">Games</span>
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-8 text-xl mt-6 lg:mt-0">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Comming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-md rounded-full w-64 px-4 pl-9 py-2 focus:shadow-none" placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#"><img src="/images/avatar.jpg" alt="avatar" class="rounded-full w-12"></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a href="#" class="underline hover:text-gray-400">IGDB API</a>
        </div>
    </footer>

</body>
</html>
