<!DOCTYPE html>
<html lang="en">
<title>@yield('page-title')</title>

<div class="flex w-full max-w-[400px] ml-10">
    <div class="flex items-center justify-center bg-pallette-light-blue w-16 ">
        <i class="{{$icon}} text-white text-3xl py-5"></i>
    </div>
    <div class="bg-white p-5 w-[calc(100%-4rem)]">
        <h3 class="font-bold mb-3">{{ $title }}</h3>
        <p class="text-pallette-text-gray">{{$text}}</p>            
    </div>
</div>