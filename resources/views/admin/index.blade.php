@extends('admin.master')

@section('content')
    <div>
      <div class="mt-7 flex items-center justify-items-end pb-4">
        <div>
            <button class="mr-3 inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                Tambah
            </button>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
        </div>
    </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


      <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr >
                  <th scope="col" class="px-6 py-3">
                      Tipe
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Jenis
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Harga
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Alamat
                  </th>
                  <th scope="col" class="px-6 py-3">
                      K.tidur
                  </th>
                  <th scope="col" class="px-6 py-3">
                      K.mandi
                  </th>
                  <th scope="col" class="px-6 py-3">
                      L.tanah
                  </th>
                  <th scope="col" class="px-6 py-3">
                      L.Bangunan
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Garasi
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Sertifikat
                  </th>
                  <th scope="col" class="px-6 py-3">
                      D.Listrik
                  </th>
                  <th scope="col" class="px-6 py-3">
                      J.Lantai
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Hadap
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Foto
                  </th>
                
                  <th class="text-center" scope="col" class="px-6 py-3">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody class="text-center">
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-200 dark:hover:bg-gray-600">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      Rumah
                  </th>
                  <td class="px-6 py-4">
                      Dijual
                  </td>
                  <td class="px-6 py-4">
                      Rp.300.000
                  </td>
                  <td class="px-6 py-4">
                      Karawang
                  </td>
                  <td class="px-6 py-4">
                      2
                  </td>
                  <td class="px-6 py-4">
                      2
                  </td>
                  <td class="px-6 py-4">
                      500 m2
                  </td>
                  <td class="px-6 py-4">
                      600 m2
                  </td>
                  <td class="px-6 py-4">
                      1
                  </td>
                  <td class="px-6 py-4">
                      Hak Milik
                  </td>
                  <td class="px-6 py-4">
                      2200 watt
                  </td>
                  <td class="px-6 py-4">
                      1
                  </td>
                  <td class="px-6 py-4">
                      Timur
                  </td>
                  <td class="px-6 py-4">
                      foto.jpg
                  </td>
                  <td class="flex items-center px-6 py-4 mt-3 space-x-3">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ubah</a>
                      <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                  </td>
              </tr>
          </tbody>
      </table>
    </div>
    <div>
      <nav class="flex  items-center justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex items-center -space-x-px">
            <li>
                <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </li>
            <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
            </li>
            <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </li>
        </ul>
      </nav>
    </div>
      
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>   
@endsection
