@extends('layouts.master')
@section('page-title',"Posts")

@section('page-content')
  
<section>
    @include('include.header')
</section>

<section class="mt-24">
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h2 class="text-6xl mb-10">
                Blog Posts
            </h2>
        </div>
    </div>

    @if(Session::has('message'))
            <div class="w-full bg-green-600 rounded-md mb-8">
                <h2 class="error-wrapper-heading font-bold text-xl text-white py-2 px-3 bg-green-800 rounded-t-md">{{Session::get('message')}} </h2>
            </div>
    @endif
    


    @auth
    <div class="pt-15 w-4/5 m-auto text-gray-50 mt-8  ">
        <a href="{{ route('fe-pages.posts.create') }}" class="uppercase font-bold bg-green-600 py-3 px-5 rounded-2xl hover:bg-green-900">Create post</a>
    </div>
   
    @endauth

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 mt-20">
            <div>
                <img src="{{asset('images/' . $post->image_path)}}" alt="" class="mb-10  w-[700px] h-[600px]">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4"> {{ $post->title }}</h2>
                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name ?? 'none' }}</span>, Created on {{ date('jS M Y',strtotime($post->updated_at))}}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">{{ $post->description }}</p>

                <a href="/posts/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-800">
                    Keep Reading
                </a>

                @auth
                    <span class="float-right mt-3">
                        <a href="/posts/{{ $post->slug }}/edit" class=" uppercase py-3 px-7 rounded-2xl bg-gray-600 text-white hover:bg-slate-900 ">Edit</a>
                    </span>

                    <span class="float-right">
                        <form action="/posts/{{ $post->slug }}" method="POST">
                        @csrf
                        @method('delete')

                        <button class=" mr-2 mt-0 text-gray-400 uppercase py-3 px-5 bg-red-600 rounded-2xl hover:bg-gray-400 hover:text-red-600" type="submit">
                            delete
                        </button>
                        </form>
                    </span>
                @endauth
            </div>
        </div>  
    @endforeach
 



@include('include.footer')
@endsection
