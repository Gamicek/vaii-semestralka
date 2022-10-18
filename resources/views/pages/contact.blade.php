@extends('layouts.master')
@section('page-title',"Kontakt")
@include('include.header')
@section('page-content')
 
<section class=" mb-20 ">

  <h1 class="text-center text-4xl font-bold mt-32">Kontaktujte nás</h1>


  <form class="w-full max-w-lg m-auto mt-10 ">
    <div class="flex flex-wrap  -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Meno
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100" id="grid-first-name" type="text" placeholder="Janko">
      </div>

      <div class="w-full md:w-1/2 px-3 ">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Priezvisko
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-10 focus:bg-blue-100" id="grid-last-name" type="text" placeholder="Mrkvička">
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          E-mail
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100 focus:border-gray-500" id="email" type="email" placeholder="meno@email.com">
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Správa
        </label>
        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-10 focus:bg-blue-100 focus:border-gray-500 h-40 resize-none" id="message"></textarea>
      </div>
    </div>

    <div class="md:flex md:items-center">
      <div class="md:w-1/3">
        <button class="shadow bg-blue-400 hover:bg-blue-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
          Poslať
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
  </form>

</section>

<section>
  <iframe class="w-full h-96" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5405253.768028328!2d15.2127884843936!3d48.58525954179091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471460b9ae7cc67f%3A0xcd6b6167b1723a7d!2sSlovensko!5e0!3m2!1ssk!2ssk!4v1665763524221!5m2!1ssk!2ssk"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@include('include.footer')
@endsection

 