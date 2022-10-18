<!DOCTYPE html>
<html lang="en">
<title>@yield('page-title')</title>

<div class="flex mt-3 w-96 ">
    <div class="flex items-center">
        <i class="{{$icon}} text-pallette-light-blue text-lg"></i>
    </div>
    <div class="flex flex-col ml-3 text-justify">
        <h3 class="font-bold text-gray-300 uppercase">{{$title}}</h3>
        <h3 class="text-gray-300">{{$text}}</h3>            
    </div>
</div>
