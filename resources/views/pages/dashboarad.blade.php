@extends('layouts.master')
@section('page-title',"login")
@section('page-content')


<section>
    @include('include.header')
</section>

<section>
        
    <div class="flex items-center justify-center h-screen bg-gray-100">
        <h4 class="text-2xl">Welcome to dashboard {{$data->name}}</h4>
       
   
 
         
    </div>
</section>

@include('include.footer')
@endsection