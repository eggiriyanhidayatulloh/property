@extends('layouts.app')


    @section('main')

    {{-- <---- hero ----> --}}
    <div class="bg-white h-1/2 w-full p-4 mt-20">
        <div class="container px-1 mx-auto grid grid-cols-1 md:grid-cols-2 items-center">
            <div>
                    <img class="rounded-lg h-200 mb-5 lg:mb-0" src="{{ asset('image/rizal.jpg') }}" alt="rizal">
            </div>
            <div class="md:pl-5">
                <p class=" lg:text-xl text-lg font-semibold mb-2">Cari Properti Idaman ?</p>
                <p class="font-sans font-black text-4xl lg:text-6xl mb-5">
                    Jual Beli <br/>
                    Properti Jadi Mudah Disini
                </p>
                <a type="button" href="https://wa.me/6281387726824" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Hubungi</a>
            </div>
        </div>
        {{-- <img class="object-cover w-full" src="{{ asset('image/rumah.jpg') }}" alt=""> --}}
    </div>
     
    {{-- <---- iklan ----> --}}
    <div class="container items-center mx-auto  ">
        <div class="lg:mt-10 sm:mt-5 sm:mb-4 rounded-lg p-5 lg:p-0 lg:object-fill lg:w-full lg:h-80">
            <p class="mb-5 text-xl font-semibold">Summarecon Bogor</p>
            <a href="https://www.summareconbogor.com/pinewood-extension?utm_source=display_rumah123&utm_medium=cpc&utm_campaign=220709_PinewoodExtension&utm_source=adunit-r123&utm_medium=billboard-top-homepage&utm_campaign=homepage&utm_term=iab-banner">
                <img class="rounded-lg lg:w-full lg:h-80" src="{{ asset('image/summarecon.jpg') }}" alt="">
            </a>
        </div>
    </div>

    <div class="container items-center mx-auto  ">
            {{-- <---- card rekomendasi ----> --}}
            <div class="lg:mt-20 p-5 lg:p-0 ">  
                <p class="lg:pt-10 mb-3 text-xl font-semibold">Rekomendasi untuk anda</p>
                <div class="grid-rows-1 grid lg:grid lg:grid-cols-4 lg:gap-4 text-center">      
                    <div class="max-w my-3 lg:max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('image/rumah.jpg') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center rounded-lg text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 ">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w my-3 lg:max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('image/rumah.jpg') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center rounded-lg text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 ">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w my-3 lg:max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('image/rumah.jpg') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center rounded-lg text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 ">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                    <div class="max-w my-3 lg:max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('image/rumah.jpg') }}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center rounded-lg text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 ">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    
            {{-- <---- olx ----> --}}
            
            <div class="grid-rows-1 grid lg:flex lg:justify-around mb-20 lg:mx-0 mx-5">
                <a href="https://www.olx.co.id/profile/79145969" class="flex flex-col mt-10 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-fill lg:object-cover w-full rounded-t-lg lg:ml-5 h-96 md:h-auto md:w-48 md:rounded-lg md:rounded-l-lg" src="{{ asset('image/olx.jpg') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kunjungi Profil OLX kami</h5>
                        <p class="mb-3 font-normal text-justify text-gray-700 dark:text-gray-400">Di Profil OLX kami terdapat Listing Properti yang lebih banyak dan juga lebih menarik lagi silahkan kunjungi dengan mengklik tautan ini</p>
                    </div>
                    <a href="https://ljhooker.co.id/home" class="flex flex-col mt-10 items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-fill lg:object-cover w-full rounded-t-lg lg:ml-5 h-96 md:h-auto md:w-48 md:rounded-lg md:rounded-l-lg shadow" src="{{ asset('image/lj.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Website Resmi Agen Kami</h5>
                            <p class="mb-3 font-normal text-justify text-gray-700 dark:text-gray-400">LJ Hooker adalah salah satu jaringan penjualan properti terbesar di dunia, LJ Hooker memiliki lebih dari 6000 Property</p>
                        </div>
                    </a>
                </a>
            </div>
    
    </div>

    
    


@endsection