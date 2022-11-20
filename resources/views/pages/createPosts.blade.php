@extends('layouts.master')
@section('page-title',"Posts")

@section('page-content')
  
<section>
    @include('include.header')
</section>

<section class="my-24">
   
            <h2 class="text-6xl mb-8 text-center">
                Create posts
            </h2>
      
    

    <div class="w-4/5 m-auto pt-20 block text-center object-center  ">
        <form action="/posts" method="POST" enctype="multipart/form-data">
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
        
            <input type="text" name="title" placeholder="title.." class="bg-gray-300 block border-b-2 w-full h-20 text-4xl outline-none h-12 w-[400px] ">
            <textarea name="description" placeholder="Description" class="py-20 bg-gray-0 block border-b-2 w-full h-60 text-xl outline-none w-[1600px]"></textarea>
            <div class=" pt-15">
                <label for="" class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide
                uppercase border border-blue-500 cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input type="file" name="image" class="">
            </label>
            </div>

            <button type="submit" class="uppercase mt-15 bg-blue-500 text-gray-50 text-lg font-bold py-4 px-8 rounded-3xl hover:bg-blue-800">
                Submit post
            </button>
        </form>
    
    </div>    

    
    

</section>



@include('include.footer')
@endsection

