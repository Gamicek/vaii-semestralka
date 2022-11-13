@extends('layouts.master')
@section('page-title',"Kontakt")
@section('page-content')
 

<section>
    @include('include.header')
</section>

<section class=" mb-20 ">

  <h1 class="text-center text-4xl font-bold mt-96 md:mt-32">Kontaktujte nás</h1>


  <form class="w-full max-w-lg m-auto mt-10 flex flex-col" action="{{ route('fe-pages.contact.store') }}" method="POST">
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
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Meno
        </label>
        <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100" id="grid-first-name" type="text" placeholder="Janko">
      </div>

     

    <div class="flex   mb-6">
      <div class="w-full">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          E-mail
        </label>
        <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100 focus:border-gray-500" id="email"  placeholder="meno@email.com">
      </div>
    </div>

    <div class="flex  mb-6">
      <div class="w-full">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Správa
        </label>
        <textarea value="{{old('message')}}" name="message" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100 focus:border-gray-500 h-40 resize-none" id="message"></textarea>
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

  <iframe class="w-full h-96" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.892717579868!2d-73.99574358459341!3d40.76438427932628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2585030aa9f29%3A0xab71cee5daae1b86!2sAmerican%20Red%20Cross!5e0!3m2!1ssk!2ssk!4v1666091436288!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@include('include.footer')
@endsection

 