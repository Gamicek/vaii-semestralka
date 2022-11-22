@extends('layouts.master')
@section('page-title',"Kontakt")
@section('page-content')
 

<section>
    @include('include.header')
</section>

<section class=" mb-20 ">

  <h1 class="text-center text-4xl font-bold mt-96 md:mt-32">Kontaktujte nás</h1>

<div class="err contact">
  <p></p>
</div>
  <form class="w-full max-w-lg m-auto mt-10 flex flex-col contact_forms" action="{{ route('fe-pages.contact.store') }}" method="POST">
    @csrf
    <p>
          @if ($errors->any())
              <div class="w-full bg-rose-600 rounded-md mb-8">
                  <h2 class="error-wrapper-heading font-bold text-xl text-white py-2 px-3 bg-rose-800 rounded-t-md">Form is filled wrong</h2>
                  <ul class="error-wrapper-list pt-2 pb-3 px-3 list-disc ml-6 text-white">
                      @foreach ($errors->all() as $error)
                          <li>
                              <p class="text-white">{{ $error }}</p>
                          </li>
                      @endforeach
                  </ul>
              </div>
          @endif
      </p>

    <div class="flex flex-col  mb-6">
      <div class="w-full mb-4 md:mb-0">
        <label class="block text-gray-700 text-sm font-bold mb-2 ">
          Meno
        </label>
        <input value="{{old('name')}}" name="name" class="contactName appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100" id="grid-first-name" type="text" placeholder="Janko">
      </div>

     

    <div class="flex   mb-6">
      <div class="w-full">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          E-mail
        </label>
        <input value="{{old('email')}}" name="email" class="contactEmail appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100 focus:border-gray-500" id="email"  placeholder="meno@email.com">
      </div>
    </div>

    <div class="flex  mb-6">
      <div class="w-full">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Správa
        </label>
        <textarea value="{{old('message')}}" name="message" class="contactText appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100 focus:border-gray-500 h-40 resize-none" id="message"></textarea>
      </div>
    </div>

    <div class="md:flex md:items-center">
      <div class="md:w-1/3">
        <button type="submit" name="submit" class="shadow bg-blue-400 hover:bg-blue-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
          Poslať
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
  </form>

</section>

<section>
 <div class="map w-full h-96" id="map">
</section>
@section('scripts')
        @vite([ 'resources/js/checkContact.js','resources/js/map.js' ])
@endsection
@include('include.footer')
@endsection

 