@extends('layouts.master')
@section('page-title',"Domov")
@include('include.header')
@section('page-content')
    

<section class="mt-16 relative lg:h-[540px] lg:flex items-center justify-center">
    <img class=" hidden md:block absolute top-0 left-0" src="{{asset('img/slider1.jpg')}}" alt="fotka">
    <div class=" max-w-[1500px] mx-auto flex justify-start lg:w-[1500px] mt-24 lg:mt-0">
            <div class="z-10 text-center lg:text-left">
                <h3 class=" text-4xl lg:text-6xl font-bold font-serif ">We can fix it broken <br>mobile glass</h3>
                <p class="text-gray-600 mt-10">m Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br> 
                     the industry's standard dummy </p>
                <button class="uppercase transition duration-300 shadow bg-blue-400 hover:bg-blue-600 focus:shadow-outline focus:outline-none border-2 border-transparent hover:border-blue-400 text-white font-bold py-2 px-4 mt-10 mr-2 " type="button">
                    Buy
                </button>
                <button class="uppercase transition duration-300 shadow bg-blue-600 hover:bg-blue-400 focus:shadow-outline focus:outline-none border-2 border-transparent hover:border-blue-600 text-white font-bold py-2 px-4 " type="button">
                    Contact us
                </button>
            </div>
    </div>
  
    
</section>

<section class="bg-white m-10">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 max-w-[1300px] mx-auto p-9">

        @include('include.oprava', [
                'text' => 'We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...',
                'image' => asset('img/oprava1.jpg'),
                'title' => 'Smart Phone repair'
            ] )
        
        @include('include.oprava', [
                'text' => 'If you are facing any problem with your Tablets / Ipads, Kindly pls go through the menttioned catagories ...',
                'image' => asset('img/oprava2.jpg'),
                'title' => 'Tablets & Ipad repair'
            ] )

        @include('include.oprava', [
                'text' => 'We specialist in providing On-Site Computer Desktop Repair Service and Network Support for all sized business, On-Site Computer.',
                'image' => asset('img/oprava3.jpg'),
                'title' => 'Desktrop & MAC repair'
            ] )
    </div>
</section>

<section class="pt-16 bg-cover bg-no-repeat bg-center categories-bg bg-fixed">
    <h2 class="text-center uppercase text-white text-5xl font-bold ">Categories</h2>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-3 max-w-[1300px] mx-auto py-16 ">
        
        @include('include.categoryBox', [
            'text' => 'Disassembly & replacement guides for the original iPhone, iPhone 3GS, iPhone 4….',
            'icon' => 'fa-brands fa-apple',
            'title' => 'APPLE IPHONE'
        ] )

        @include('include.categoryBox', [
            'text' => 'We are pleased to offer a wide range of Android repairs services we can repair..android',
            'icon' => 'fa-brands fa-android',
            'title' => 'ANDROID PHONE'
        ] )

        @include('include.categoryBox', [
            'text' => 'Repair guides and teardowns for many Windows cell phones, a of manufacturers.',
            'icon' => 'fa-brands fa-windows',
            'title' => 'WINDOWS PHONE'
        ] )

        @include('include.categoryBox', [
            'text' => 'Are you looking for Blackberry repair? We carry out large number repairs every day…',
            'icon' => 'fa-solid fa-phone',
            'title' => 'BLACKBERRY PHONE'
        ] )

        @include('include.categoryBox', [
            'text' => 'If you have any problems in your phone accessories dont worry our will repair…',
            'icon' => 'fa-solid fa-headphones-simple',
            'title' => 'PHONE ACCESSORY'
        ] )

        @include('include.categoryBox', [
            'text' => 'Also we done all types of desktop repair,we have experienced technicians…',
            'icon' => 'fa-solid fa-desktop',
            'title' => 'DESKTOP LAPTOP'
        ] )
    </div>

</section>

<section class="bg-white  ">
    <h2 class="text-4xl font-bold text-center mt-10">Latest News</h2>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 max-w-[1300px] mx-auto p-9">
        
        @include('include.newsBox', [
                'text' => 'We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...',
                'image' => asset('img/repairMan.jpg'),
                'info' => 'admin September 17, 2022'
            
            ] )
        
        @include('include.newsBox', [
                'text' => 'If you are facing any problem with your Tablets / Ipads, Kindly pls go through the menttioned catagories ...',
                'image' => asset('img/iphone.jpg'),
                'info' => 'admin October 10, 2022'
                
            ] )

        @include('include.newsBox', [
                'text' => 'We specialist in providing On-Site Computer Desktop Repair Service and Network Support for all sized business, On-Site Computer.',
                'image' => asset('img/console.jpg'),
                'info' => 'admin September 29, 2022'
            
            ] )
    </div>

    

</section>


@include('include.footer')
@endsection
