@extends('layouts.app')


@section('main')
    
<div class="container mb-20 pt-10 lg:px-0 px-5 mx-auto">
    <form class="mt-20 shadow-lg mb-20 rounded-lg">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-slate-500 focus:border-slate-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-slate-400 hover:bg-slate-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
    <h1 class="mb-10 font-bold text-2xl">
        Properti Baru
    </h1>
                <div class="container flex flex-wrap">
                    <div class="lg:w-2/3 w-full mb-5">
                        <div class="flex flex-col mb-4 md:mb-4 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-full md:h-80 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <a href="https://wa.me/6281387726824">
                            <img class="object-cover w-full rounded-t-lg md:h-full md:w-80 md:rounded-none md:rounded-l-lg" src="{{ asset('image/rumah.jpg') }}" alt="">
                            </a>
                            <div class="flex flex-col p-4 leading-normal">
                                <a href="https://wa.me/6281387726824">
                                <div class="flex justify-start">
                                    <div class="rounded-full text-sm mr-2 border px-3 py-1 bg-slate-300 text-black">
                                        <p>Dijual</p>
                                    </div>
                                    <div class="rounded-full text-sm  border px-3 py-1 bg-sky-300 text-black">
                                        <p>Nego</p>
                                    </div>
                                  
                                </div>
                                
                                <h5 class="mb-2 mt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rp 1,05 Miliar</h5>
                                <p class="mb-2 text-lg mt-2 font-normal text-gray-700 dark:text-gray-400">Rumah Modern Siap Kpr di Premier Savanna Vida Bekasi Harga All In Nego</p>
                                <p class="mb-5 text-sm  font-normal text-gray-700 dark:text-gray-400">Karawang, Jawa barat</p>
                                <div class="flex mb-2 justify-start">
                                    <div class="flex items-center pr-2">
                                        <img class="w-5 h-5" src="{{ asset('image/bed.png') }}" alt="bedroom">
                                        <p class="px-1">1</p>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <img class="w-5 h-5" src="{{ asset('image/bathroom.png') }}" alt="bathroom">
                                        <p class="px-1">2</p>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <img class="w-6 h-6" src="{{ asset('image/garages.png') }}" alt="garage">
                                        <p class="px-1">2</p>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <p class="px-1">LT :</p>
                                        <p class="px-1">90 m2</p>
                                    </div>
                                    <div class="flex items-center px-2">
                                        <p class="px-1">LB :</p>
                                        <p class="px-1">60 m2</p>
                                    </div>
                                </div>
                            </a>
                                <hr class="my-3 border-slate-300" />
                                <div class="flex flex-row  items-center justify-end">
                                    <p></p>
                                    <a  href="tel:081387726824" class="text-black border border-slate-500 bg-white hover:bg-slate-200  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                                        +6281387726824
                                    </a>
                                    <a  href="https://wa.me/6281387726824" class="text-white bg-green-500 hover:bg-green-700  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                                        <img class="w-4 h-4 mr-2 -ml-1" src="{{ asset('image/whatsapp.png') }}" alt="whatsapp">
                                        WhatsApp
                                    </a>
                                </div>
                            </div>
                         </div>
                        </div>
                        <div class="lg:w-2/3 w-full mb-5">
                            <div class="flex flex-col mb-4 md:mb-4 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-full md:h-80 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <a href="https://wa.me/6281387726824">
                                <img class="object-cover w-full rounded-t-lg md:h-full md:w-80 md:rounded-none md:rounded-l-lg" src="{{ asset('image/rumah.jpg') }}" alt="">
                                </a>
                                <div class="flex flex-col p-4 leading-normal">
                                    <a href="https://wa.me/6281387726824">
                                    <div class="flex justify-start">
                                        <div class="rounded-full text-sm mr-2 border px-3 py-1 bg-slate-300 text-black">
                                            <p>Dijual</p>
                                        </div>
                                        <div class="rounded-full text-sm  border px-3 py-1 bg-sky-300 text-black">
                                            <p>Nego</p>
                                        </div>
                                    
                                    </div>
                                    
                                    <h5 class="mb-2 mt-5 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rp 1,05 Miliar</h5>
                                    <p class="mb-2 text-lg mt-2 font-normal text-gray-700 dark:text-gray-400">Rumah Modern Siap Kpr di Premier Savanna Vida Bekasi Harga All In Nego</p>
                                    <p class="mb-5 text-sm  font-normal text-gray-700 dark:text-gray-400">Karawang, Jawa barat</p>
                                    <div class="flex mb-2 justify-start">
                                        <div class="flex items-center pr-2">
                                            <img class="w-5 h-5" src="{{ asset('image/bed.png') }}" alt="bedroom">
                                            <p class="px-1">1</p>
                                        </div>
                                        <div class="flex items-center px-2">
                                            <img class="w-5 h-5" src="{{ asset('image/bathroom.png') }}" alt="bathroom">
                                            <p class="px-1">2</p>
                                        </div>
                                        <div class="flex items-center px-2">
                                            <img class="w-6 h-6" src="{{ asset('image/garages.png') }}" alt="garage">
                                            <p class="px-1">2</p>
                                        </div>
                                        <div class="flex items-center px-2">
                                            <p class="px-1">LT :</p>
                                            <p class="px-1">90 m2</p>
                                        </div>
                                        <div class="flex items-center px-2">
                                            <p class="px-1">LB :</p>
                                            <p class="px-1">60 m2</p>
                                        </div>
                                    </div>
                                </a>
                                    <hr class="my-3 border-slate-300" />
                                    <div class="flex flex-row  items-center justify-end">
                                        <p></p>
                                        <a  href="tel:081387726824" class="text-black border border-slate-500 bg-white hover:bg-slate-200  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                                            +6281387726824
                                        </a>
                                        <a  href="https://wa.me/6281387726824" class="text-white bg-green-500 hover:bg-green-700  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                                            <img class="w-4 h-4 mr-2 -ml-1" src="{{ asset('image/whatsapp.png') }}" alt="whatsapp">
                                            WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="lg:w-1/3 w-full lg:absolute lg:right-9 lg:pl-10 md:mb-4 ">
                            <a href="#" class="flex flex-cols items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-full md:h-80 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <h1>dasdasdas </h1>
                            </a>
                         </div> 
                </div>
           

</div>


@endsection