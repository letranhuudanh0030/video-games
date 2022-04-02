@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-300 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-gray-800 pb-16">
            @for ($i = 0; $i < 12; $i++)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="https://m.media-amazon.com/images/I/71Ul9tX6M3L._AC_SL1500_.jpg"
                                alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150" />
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -bottom-5 -right-5">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7
                        Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
            @endfor
        </div> <!-- end popular-games -->

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-300 uppercase tracking-wide font-semibold">
                    Recently reviewed
                </h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="https://m.media-amazon.com/images/I/71Ul9tX6M3L._AC_SL1500_.jpg"
                                        alt="game cover"
                                        class="w-48 hover:opacity-75 transition ease-in-out duration-150" />
                                </a>
                                <div
                                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full -bottom-5 -right-5">
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                                </div>
                            </div>
                            <div class="ml-8 lg:ml-12">
                                <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Final
                                    Fantasy 7 Remake</a>
                                <div class="text-gray-400 mt-1">Playstation 4</div>
                                <p class="mt-6 text-gray-400 hidden lg:block">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eligendi officia vel,
                                    dolor id odit unde impedit tempore, dicta non odio facilis velit quas accusantium
                                    distinctio minus corrupti illo at.Nisi maxime omnis tempora id animi, cumque nihil.
                                    Consequuntur earum atque neque, suscipit officiis velit quo nesciunt laudantium in ipsam
                                    harum eligendi quidem aliquid nihil praesentium! Numquam, tempore exercitationem. Sint!
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div> <!-- end recently-reviewed -->
            <div class="lg:w-1/4 space-y-10 mt-12 lg:mt-0">
                <div class="most-anticipated">
                    <h2 class="text-blue-300 uppercase tracking-wide font-semibold">
                        Most Anticipated
                    </h2>
                    <div class="most-anticipated-container space-y-10 mt-8">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="game flex">
                                <a href="#">
                                    <img src="https://m.media-amazon.com/images/I/71Ul9tX6M3L._AC_SL1500_.jpg"
                                        alt="game cover"
                                        class="w-16 hover:opacity-75 transition ease-in-out duration-150" />
                                </a>
                                <div class="ml-4">
                                    <a href="#" class="hover:text-gray-300">Cyperpunk 2077</a>
                                    <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div> <!-- end most-anticipated -->
                <div class="comming-soon">
                    <h2 class="text-blue-300 uppercase tracking-wide font-semibold">
                        Most Anticipated
                    </h2>
                    <div class="comming-soon-container space-y-10 mt-8">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="game flex">
                                <a href="#">
                                    <img src="https://m.media-amazon.com/images/I/71Ul9tX6M3L._AC_SL1500_.jpg"
                                        alt="game cover"
                                        class="w-16 hover:opacity-75 transition ease-in-out duration-150" />
                                </a>
                                <div class="ml-4">
                                    <a href="#" class="hover:text-gray-300">Cyperpunk 2077</a>
                                    <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div> <!-- end comming-soon -->
            </div>
        </div>
    </div>
@endsection
