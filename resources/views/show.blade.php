@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="https://m.media-amazon.com/images/I/71Ul9tX6M3L._AC_SL1500_.jpg" alt="cover"
                    class="lg:w-80">
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-1">Final Fantasy 7 Remake</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>
                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">Member <br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">92%</div>
                        </div>
                        <div class="ml-4 text-xs">Critic <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                                <a href="" class="hover:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="mt-12">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos velit facilis assumenda molestias deleniti
                    consequatur. At rerum nam et, natus doloribus ab eveniet similique praesentium ratione nemo illum enim
                    quasi.
                    Voluptatem quibusdam odit dolore iure totam libero, dolorem exercitationem nostrum corporis dicta!
                    Recusandae, autem voluptates libero aliquid expedita cum provident, omnis maiores praesentium
                    repudiandae, maxime ipsam nostrum modi animi qui?
                    Nesciunt, voluptatibus veniam. Iste minus totam vel quam vitae aliquid laudantium nemo id perspiciatis
                    in, ducimus pariatur, laborum quis temporibus alias! Est quam ad maiores veritatis perferendis,
                    accusamus fuga minus!
                </div>
                <div class="mt-12">
                    <button
                        class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div> <!-- end game-details -->

        <div class="images-conatiner border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Images
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
                @for ($i = 0; $i < 5; $i++)
                    <div>
                        <a href="#">
                            <img src="https://www.gamereactor.eu/media/25/finalfantasy7_3102523b.jpg" alt="screenshot"
                                class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                @endfor
            </div>
        </div> <!-- end images-conatiner -->
        <div class="similar-games-conatiner mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Similar games
            </h2>
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
                @for ($i = 0; $i < 12; $i++)
                    <div class="game mt-8">
                        <div class="relative inline-block">
                            <a href="#">
                                <img src="https://m.media-amazon.com/images/I/71Ul9tX6M3L._AC_SL1500_.jpg" alt="game cover"
                                    class="hover:opacity-75 transition ease-in-out duration-150" />
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -bottom-5 -right-5">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                            </div>
                        </div>
                        <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final
                            Fantasy 7
                            Remake</a>
                        <div class="text-gray-400 mt-1">Playstation 4</div>
                    </div>
                @endfor
            </div>
        </div> <!-- end similar-games -->
    </div>
@endsection
