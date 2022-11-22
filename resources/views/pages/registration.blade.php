@extends('layouts.master')
@section('page-title',"registration")
@section('page-content')


<section>
    @include('include.header')
</section>

<section>
     <div class="flex items-center justify-center h-screen bg-gray-100">
         <form action="{{ route('auth.register.store') }}" method="POST" class="registerForm">
            @csrf
            <div class="err register text-center mb-2 bg-red-600 text-white text-2xl rounded-md">
                 <p></p>
            </div>
            @if(Session::has('success'))
            <div class="w-full bg-green-600 rounded-md mb-8">
                <h2 class="error-wrapper-heading font-bold text-xl text-white py-2 px-3 bg-green-800 rounded-t-md">{{Session::get('success')}} </h2>
            </div>
            @endif
             @if(Session::has('fail'))
            <div class="w-full bg-rose-600 rounded-md mb-8">
                <h2 class="error-wrapper-heading font-bold text-xl text-white py-2 px-3 bg-rose-800 rounded-t-md">{{Session::get('fail')}} </h2>
            </div>
            @endif
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
            <div class="bg-gray-200 w-96 p-6 rounded shadow-sm">
                <h3 class="text-center text-2xl mb-4">Registration</h3>  
                <label class="text-black" for="">Full Name</label>
                <input name="name" value="{{old('name')}}" class="registerName w-full py-2 bg-gray-50 text-pallette-text-gray px-1 outline-none mb-4" type="name" id="grid-first-name" placeholder="Your Full name"> 
                <label class="text-black" for="">Email</label>
                <input name="email" value="{{old('email')}}" class="registerEmail w-full py-2 bg-gray-50 text-pallette-text-gray px-1 outline-none mb-4"  id="email" placeholder="Your email">
                <label class="text-black" for="">Password</label>
                <input name="password" class="password w-full py-2 bg-gray-50 text-pallette-text-gray px-1 outline-none mb-4" type="password" id="password" placeholder="Your password" >
                <button class="bg-pallette-light-blue w-full text-black py-2 rounded hover:bg-blue-600 transition-colors mt-4">Register</button>
            </div>
            <li class="list-none">
                <a href="{{ route('auth.login')}}" class="hover:text-gray-400 uppercase text-black">Already register ? Log in</a>
            </li>
        </form>
    </div>
</section>

@section('scripts')
    @vite([ 'resources/js/checkRegister.js'])
@endsection

@include('include.footer')
@endsection
