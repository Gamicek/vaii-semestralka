@extends('layouts.master')
@section('page-title',"SmarthPhone Repair")
@section('page-content')


<section>
    @include('include.header')
</section>

<div class="bg-gray-200 p-10 mt-96 md:mt-16">
        <h2 class="text-center font-bold text-3xl uppercase">SmarthPhone repair</h2>
</div>

<section class="bg-white mt-10">
    <div class="lg:max-w-[1300px] mx-auto p-9 mb-10">
        <div class="flex lg:flex-row flex-col">
            <div>
                <img class="max-w-screen-xs" src="{{ asset('img/opravaToto.jpg') }}" alt="oprava mobilu">
            </div>
            <div class="lg:ml-10 ">
                <h3 class="text-2xl font-bold uppercase">BROKEN GLASS REPAIR</h3>
                <p class="mt-5 lg:pr-40">Unlike many other repair issues may involve software malfunction, cracked glass on a mobile device is easy to diagnose. 

                It’s also easy to inflict. Cracked cell phone screens caused by drops and falls are common.Unfortunately, 
                the only way to fix a cracked screen is to replace it very quickly.
                <br><br>
                Often a cracked screen doesn’t affect the mobile device’s ability to function right away,
                and owners simply sed learn to look past the distraction of the cracks, However, this can be dangerous.</p>
            </div>
        </div>  

        <div class="flex lg:flex-row flex-col mt-10">
            <div>
                <h3 class="text-2xl font-bold uppercase">REPAIRING BROKEN GLASS</h3>
                <p class="mt-5 lg:pr-16">The best way to repair your cracked screen without risking further damage to the phone is to bring it to a professional repair service. 
                    The trained technicians at Cell Phone Repair can fix your screen quickly and safely. 
                    If you walk in to a local store, common repairs can be fixed on site while you wait.
                    <br><br> 
                    If you don’t have the time to wait, or if we are a bit too common repairs can be fixed on site while you wait. 
                    If you don’t have the time to wait far out of your way, just mail it in.We will fix your screen and mail it back enjoy your phone.</p>
            </div>
            <div>
                <img class="max-w-screen-xs mr-32 mt-10" src="{{ asset('img/repairing.jpg') }}" alt="oprava mobilu">
            </div>
        </div>

         <div class="flex lg:flex-row flex-col mt-5">
            <div>
                   <img class="max-w-screen-xs mr-12" src="{{ asset('img/SmartOprava.jpg') }}" alt="oprava mobilu">
            </div>
            <div>
                <p class="mt-5 lg:pr-16 mr-12">Unfortunately, the only way to fix a cracked screen is to replace it. 
                    Often a cracked screen doesn’t affect the mobile device’s ability to function right away, 
                    and owners simply learn to look past the distraction of the cracks. However, this can be dangerous, 
                    as the glass can nick or cut your skin. 
                    <br><br>
                    It can also cause more serious problems over time, such as dead spots,
                    backlight malfunction, dark spots, and discoloration. 
                    Continued cell phone use with a cracked screen can eventually lead to complete loss of functionality.
            </div>
        </div>
    </div>
    <div class="bg-gray-200 p-10 mt-16">
        <h2 class="text-center font-bold text-3xl uppercase">tablet & ipad repair</h2>
    </div>
    <div class="lg:max-w-[1300px] mx-auto p-9 mb-10">
        <div class="flex xl:flex-row flex-col">
            <div>
                <img class="max-w-screen-xs" src="{{ asset('img/tablet.jpg') }}" alt="oprava tabletu">
            </div>
            <div class="lg:ml-10 mt-10">
                <h3 class="text-2xl font-bold">TABLET REPAIR</h3>
                <p class="mt-5 lg:pr-40">Unlike many other repair issues may involve software malfunction, cracked glass on a mobile device is easy to diagnose. 

                It’s also easy to inflict. Cracked cell phone screens caused by drops and falls are common.Unfortunately, 
                the only way to fix a cracked screen is to replace it very quickly.
                <br><br>
                Often a cracked screen doesn’t affect the mobile device’s ability to function right away,
                and owners simply sed learn to look past the distraction of the cracks, However, this can be dangerous.</p>
            </div>
        </div>  

        <div class="flex lg:flex-row flex-col mt-10">
            <div>
                <h3 class="text-2xl font-bold">REPAIRING TABLET BROKEN GLASS</h3>
                <p class="mt-5 lg:pr-16">The best way to repair your cracked screen without risking further damage to the phone is to bring it to a professional repair service. 
                    The trained technicians at Cell Phone Repair can fix your screen quickly and safely. 
                    If you walk in to a local store, common repairs can be fixed on site while you wait.
                    <br><br> 
                    If you don’t have the time to wait, or if we are a bit too common repairs can be fixed on site while you wait. 
                    If you don’t have the time to wait far out of your way, just mail it in.We will fix your screen and mail it back enjoy your phone.</p>
            </div>
            <div>
                <img class="max-w-screen-xs mr-32 mt-10" src="{{ asset('img/tablet1.jpg') }}" alt="oprava tabletu">
            </div>
        </div>

         <div class="flex lg:flex-row flex-col mt-5">
            <div>
                   <img class="max-w-screen-xs mr-12 mt-0" src="{{ asset('img/tablet2.jpg') }}" alt="oprava tabletu">
            </div>
            <div>
                <p class="mt-5 lg:pr-16 mr-12">Unfortunately, the only way to fix a cracked screen is to replace it. 
                    Often a cracked screen doesn’t affect the mobile device’s ability to function right away, 
                    and owners simply learn to look past the distraction of the cracks. However, this can be dangerous, 
                    as the glass can nick or cut your skin. 
                    <br><br>
                    It can also cause more serious problems over time, such as dead spots,
                    backlight malfunction, dark spots, and discoloration. 
                    Continued cell phone use with a cracked screen can eventually lead to complete loss of functionality.
            </div>
        </div>
    </div>
    <div class="bg-gray-200 p-10 mt-16">
        <h2 class="text-center font-bold text-3xl uppercase">desktop & mac repair</h2>
    </div>
    <div class="lg:max-w-[1300px] mx-auto p-9 mb-10">
        <div class="flex lg:flex-row flex-col">
            <div>
                <img class="max-w-screen-xs" src="{{ asset('img/desktop.jpg') }}" alt="oprava tabletu">
            </div>
            <div class="lg:ml-10 mt-10">
                <h3 class="text-2xl font-bold uppercase">DESKTOP & MAC REPAIR</h3>
                <p class="mt-5 lg:pr-40">Unlike many other repair issues may involve software malfunction, cracked glass on a mobile device is easy to diagnose. 

                It’s also easy to inflict. Cracked cell phone screens caused by drops and falls are common.Unfortunately, 
                the only way to fix a cracked screen is to replace it very quickly.
                <br><br>
                Often a cracked screen doesn’t affect the mobile device’s ability to function right away,
                and owners simply sed learn to look past the distraction of the cracks, However, this can be dangerous.</p>
            </div>
        </div>  

        <div class="flex lg:flex-row flex-col  mt-10">
            <div>
                <h3 class="text-2xl font-bold uppercase">REPAIRING DESKTOP HARDWARE</h3>
                <p class="mt-5 lg:pr-16">The best way to repair your cracked screen without risking further damage to the phone is to bring it to a professional repair service. 
                    The trained technicians at Cell Phone Repair can fix your screen quickly and safely. 
                    If you walk in to a local store, common repairs can be fixed on site while you wait.
                    <br><br> 
                    If you don’t have the time to wait, or if we are a bit too common repairs can be fixed on site while you wait. 
                    If you don’t have the time to wait far out of your way, just mail it in.We will fix your screen and mail it back enjoy your phone.</p>
            </div>
            <div>
                <img class="max-w-screen-xs mr-32 mt-10" src="{{ asset('img/desktop2.jpg') }}" alt="oprava tabletu">
            </div>
        </div>

         <div class="flex lg:flex-row flex-col mt-5">
            <div>
                   <img class="max-w-screen-xs mr-12" src="{{ asset('img/desktop3.jpg') }}" alt="oprava tabletu">
            </div>
            <div>
                <p class="mt-5 lg:pr-16 mr-12">Unfortunately, the only way to fix a cracked screen is to replace it. 
                    Often a cracked screen doesn’t affect the mobile device’s ability to function right away, 
                    and owners simply learn to look past the distraction of the cracks. However, this can be dangerous, 
                    as the glass can nick or cut your skin. 
                    <br><br>
                    It can also cause more serious problems over time, such as dead spots,
                    backlight malfunction, dark spots, and discoloration. 
                    Continued cell phone use with a cracked screen can eventually lead to complete loss of functionality.
            </div>
        </div>
    </div>
   
    

</section>

@include('include.footer')
@endsection

