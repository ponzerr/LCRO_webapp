@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-left items-left mx-1 mt-4">
    <p class="text-gray-500 text-m text-center">Republic of the Philippines</p>
        <p class="text-gray-500 text-m text-center">OFFICE OF THE CIVIL REGISTRAR GENERAL</p>
        <h2 class="font-semibold text-xl mb-2 text-gray-600 text-center">CERTIFICATES</h2>
      <div class="flex items-center justify-center mx-8">
          
      </div>
      </div>
      
@if(request()->routeIs(['certs.searchall']))
      @if (session('success'))
    <div
        class="mt-4 font-regular relative w-full rounded-lg bg-green-500 px-4 py-4 text-base text-white"
        data-dismissible="alert"
      >
        <div class="absolute top-4 left-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            aria-hidden="true"
            class="mt-px h-6 w-6"
          >
            <path
              fill-rule="evenodd"
              d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <div class="ml-8 mr-12">
          <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
            Success
          </h5>
          <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
          {{ session('success') }}
          </p>
        </div>
        <div
          data-dismissible-target="alert"
          data-ripple-dark="true"
          class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
        >
          <div role="button" class="w-max rounded-lg p-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
              ></path>
            </svg>
          </div>
        </div>
      </div>
    @endif

  <div class="w-full mx-auto px-8 mt-4">
    <!-- <div class="inline-block min-w-full py-2 sm:px-6"> -->
      <div class="overflow-x-auto">
        <table class="w-full table-auto text-left text-sm font-light bg-white border border-gray-300">
          <thead class="border-b bg-white font-medium">
            <tr>
              <th scope="col" class="px-6 py-3 text-center">FILE NAME</th>
              <th scope="col" class="px-6 py-3 text-center">ACTION</th>
            </tr>
          </thead>
          <tbody>
          @isset($results)
          @if (count($results) > 0)
            @foreach ($results as $result)
                <tr class="border-b bg-neutral-100">
                  <th class="whitespace-nowrap px-6 py-2 text-center">{{ $result['objectKey'] }}</th>
                  <!-- Add more table cells for other fields -->
                  <th class="whitespace-nowrap px-6 py-2 text-center">
                    <!-- show button -->
                    <a href="{{ asset('storage/certs/' . str_replace('.json','',$result['objectKey'])) }}" target="_blank" class="inline-block mb-1 ml-4">
                      <button type="button" class="flex items-center h-10 w-28 mr-4 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 py-3 px-4 text-center font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" class="h-4 w-4 mr-2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                        </svg>
                        <span class="inline-block ml-1">Open</span>
                      </button>
                </a>
                  </th>

                </tr>
              @endforeach
           @else
              <tr>
                <td colspan="1" class="py-4 text-center">No records found.</td>
              </tr>
            @endif
            @endisset

          </tbody>
        </table>
      </div>
    </div>
  <!-- s</div> -->
</div>
@endif
@if(request()->routeIs(['mcerts.home']))
<div class="flex justify-center mt-8">
  <div class="ml-4 mr-4 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 -mt-6 h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
      <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="img-blur-shadow" layout="fill" />
    </div>
    <div class="p-6">
      <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        BIRTH CERTIFICATE
      </h5>
      <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
      The birth certificate is a crucial record and proof that ensures the recognition and documentation of an individual's birth and identity.
      </p>
    </div>
    <div class="p-6 pt-0">
    <a href="{{route('bcerts.index_file')}}" class="inline-block mb-1 ml-4">
      <button class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
        View
      </button>
      </a>
    </div>
  </div>

  <div class="ml-4 mr-4 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 -mt-6 h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
      <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="img-blur-shadow" layout="fill" />
    </div>
    <div class="p-6">
      <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        DEATH CERTIFICATE
      </h5>
      <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
      The death certificate plays a vital role in documenting the end of a person's life and serves as an essential record for official and personal use.
      </p>
    </div>
    <div class="p-6 pt-0">
    <a href="{{route('dcerts.index_file')}}" class="inline-block mb-1 ml-4">
      <button class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
      View
      </button>
    </a>
    </div>
  </div>

  <div class="ml-4 mr-4 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 -mt-6 h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
      <img src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="img-blur-shadow" layout="fill" />
    </div>
    <div class="p-6">
      <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        MARRIAGE CERTIFICATE
      </h5>
      <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
      A marriage certificate is an official document issued by a government authority that confirms the legal union of two individuals in marriage.
      </p>
    </div>
    <div class="p-6 pt-0">
    <a href="{{route('mcerts.index_file')}}" class="inline-block mb-1 ml-4">
      <button class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" data-ripple-light="true">
      View
      </button>
    </div>
  </div>
</div>

@endif


@endsection


