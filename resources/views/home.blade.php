<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


        <title>Laravel-Blog</title>

    </head>


    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        @include('partials.navigation')
                
         <!--blog post start-->
        <div class="flex mb-4 mt-16">
        <div class="w-1/3 h-full ml-10">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://images.unsplash.com/flagged/photo-1563536314719-2e812e896f50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" />
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">What is new to Laravel?</div>
            <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
        <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#laravel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#PHP</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#FrontendDeveloper</span>
        </div>
        </div>
        </div>

        <div class="w-1/3 h-full">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://images.unsplash.com/flagged/photo-1563536314719-2e812e896f50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" />
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">What is new to Laravel?</div>
            <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
        <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#laravel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#PHP</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#FrontendDeveloper</span>
        </div>
        </div>
        </div>

        <div class="w-1/3 h-full">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="https://images.unsplash.com/flagged/photo-1563536314719-2e812e896f50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" />
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">What is new to Laravel?</div>
            <p class="text-gray-700 text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
        </div>
        <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#laravel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#PHP</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#FrontendDeveloper</span>
        </div>
        </div>
        </div>


        </div>
            
        
        </div>
    </body>
</html>
