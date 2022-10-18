@extends('layouts.master')
@section('page-title',"aboutUs")
@include('include.header')
@section('page-content')
    
<h1>O nas</h1>


<section>
    <h2 class="text-center text-4xl font-bold mt-20">Náš Team</h2>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 max-w-[1300px] mx-auto mb-16">
        @include('include.ourTeam', [
            'name' => 'Parsley Montana',
            'function' => 'Founder and CEO',
            'about' => 'On the other hands ofdenounces with sed righteours idea pleasure ut and praising pain was born and I will give indignations.',
            'portrait' => asset('img/man.jpg')
        ] )
        @include('include.ourTeam', [
            'name' => 'Rebecca Garza',
            'function' => 'Team Leader',
            'about' => 'Foresee the pains and troublers thats ut are bound to ensue; and equall blamed seds belongs to those duty you a complete account of the system.',
            'portrait' => asset('img/woman1.jpg')
        ] )
        @include('include.ourTeam', [
            'name' => 'Sunny Vandosky',
            'function' => 'Customer Relations',
            'about' => 'When our power of choices is untrams melled ut and when nothing prevento our being ut able to do you a complete expound the actual teachings ...',
            'portrait' => asset('img/man1.jpg')
        ] )
        @include('include.ourTeam', [
            'name' => 'Willaim Rickmen',
            'function' => 'Business Developer',
            'about' => 'When our power of choices is untrams melled ut and when nothing prevento seds our being of the great explorer of the truth, the maste -builder.',
            'portrait' => asset('img/man4.jpg')
        ] )
        @include('include.ourTeam', [
            'name' => 'Stephen Adams',
            'function' => 'Cheif Engineer',
            'about' => 'Certain circumstances us and owings to the claims of duty the obligations of business it frequently there anyone who loves or pursues or desires.',
            'portrait' => asset('img/man3.jpg')
        ] )
        @include('include.ourTeam', [
            'name' => 'Benjo Johnson',
            'function' => 'Team Leader',
            'about' => 'Foresee the pains and troublers thats are ut bound to ensue; and there anyone uts who loves or pursues or desires equall blame seds those duty.',
            'portrait' => asset('img/man5.jpg')
        ] )
       

    </div>
</section>

<section class="bg-gray-300 mb-0">
    <div class="grid lg:grid-cols-3 max-w-[1300px] mx-auto p-9 mt-10 ">
            <div class="grid ">
                <img class="" src="http://tk.commonsupport.com/repairplus/wp-content/uploads/2017/02/core-value.png.webp" alt="">
            </div>
            
            <div class="grid col-span-2">
                <h4 class=" text-4xl font-bold">Naše hodnoty</h4>

                <div class="grid lg:grid-cols-2 gap-10">
                    <div>
                        <h4 class="text-xl font-bold">Positive & Optimistic</h4>
                        <p class="text-gray-500 mt-3">How all this mistaken idea denouncing seds pleasurepraising pain was born and will give you a complete account of the system.</p>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold">Wow Customer Service</h4>
                        <p class="text-gray-500 mt-3">Some great pleasure take trivial example, whichof ever undertakes laborious physical except to obtain some advantage.</p>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold">Love Customer</h4>
                        <p class="text-gray-500 mt-3">The master-builder of human happiness no one rejects, dislikes,avoids pleasure itself, because it is pleasure extremely.</p>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold">Have Integrity</h4>
                        <p class="text-pallette-text-gray mt-3">Chooses to enjoy a pleasure that annoying consequences, or one who avoids a pain that no resultant pleasure works.</p>                       
                    </div>


                </div>
            </div>
    </div>
   
    
</section>

@include('include.footer')
@endsection
