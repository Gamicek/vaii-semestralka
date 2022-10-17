@extends('layouts.master')
@section('page-title',"Services")
@include('include.header')
@section('page-content')
    
<h1>Servis</h1>
<section class="bg-white m-10">
    <div class="grid lg:grid-cols-3 max-w-[1300px] mx-auto p-9">

    @include('include.oprava', [
            'text' => 'We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...',
            'image' => asset('img/oprava1.jpg'),
            'title' => 'Smart Phone oprava'
        ] )
    
    @include('include.oprava', [
            'text' => 'If you are facing any problem with your Tablets / Ipads, Kindly pls go through the menttioned catagories ...',
            'image' => asset('img/oprava2.jpg'),
            'title' => 'Tablety a Ipady oprava'
        ] )

    @include('include.oprava', [
            'text' => 'We specialist in providing On-Site Computer Desktop Repair Service and Network Support for all sized business, On-Site Computer.',
            'image' => asset('img/oprava3.jpg'),
            'title' => 'Dosktopy a MAC oprava'
        ] )
        
    @include('include.oprava', [
            'text' => 'Has your gaming life come to a halt because of faulty equipment? Let us help you with video game console ...',
            'image' => asset('img/console2.jpg'),
            'title' => 'Herné konzoly oprava'
        ] )
    
    @include('include.oprava', [
            'text' => 'It doesn’t matter where you purchased your television, our experts can fix the problem at our state-of-the-art repair lab.',
            'image' => asset('img/lcd01.jpg'),
            'title' => 'LCD a LED tv oprava'
        ] )

    @include('include.oprava', [
            'text' => 'If you are facing any problem with your MP3 / P4 Player, dont worry our experts also repair those digital ...',
            'image' => asset('img/mp3.jpg'),
            'title' => 'MP3 a MP4 prehrávač oprava'
        ] )
    </div>

    

</section>
@include('include.footer')
@endsection
