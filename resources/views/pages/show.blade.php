@extends('layouts.master')


@section('page-content')
  
<section>
    @include('include.header')
</section>

<section class="my-24">
    <div class="w-4/5 my-10 text-left">
        <div class="py-15 ">
        </div>
    </div>
    
    
    <div class="w-4/5 m-auto pt-20 flex gap-10 flex-wrap flex-col text-center items-center">
        <div class="">
            <h2 class="text-6xl mb-4 ">
                {{ $post->title}}
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-700">{{ $post->user->name }}</span>
                , Created on {{ date('jS M Y',strtotime($post->updated_at))}}
            </span>
            <p class="text-xl text-gray-600 pt-7 pb-10 leading-8 font-light"> {{ $post->description}} </p>
        </div>
     
        <div class="flex mt-">
            <img src="{{asset('images/' . $post->image_path)}}" alt="" class="mb-10 w-[600px] ">
        </div>
    </div>    



</section>



@include('include.footer')
@endsection
