<footer>
    <section class="bg-blue-900 mt-1">
        <div class="grid lg:grid-cols-5 md:grid-cols-2 gap-10 max-w-[1300px] mx-auto p-9 grid-cols-1">

            <div class=" max-w-sm text-center lg:col-span-2 w-full">
                <img src="{{asset('img/footer-logo.png')}}" class="w-60 " alt="logo">
                <h3 class="text-gray-400 pt-8 text-left">Repairplus brings 41 years of Digital Repairs experience right to your Device.
                    Our Texhnicians are equipped to help you that work best.
                    <br><br>
                    Our commitment to bring professionalism, good service & trust to the Phone repair service & maintenance business.</h3>
            </div>
            
            <div class="text-left max-w-sm mr-0 w-full">
                    <h3 class="text-white text-xl font-bold uppercase">Our services</h3>
                    <ul class="list-disc mt-3">
                        <li class="text-pallette-text-gray">Smarth Phone oprava</li>
                        <li class="text-pallette-text-gray">Tablet a iPad Oprava</li>
                        <li class="text-pallette-text-gray">Desktop a Laptopy</li>
                        <li class="text-pallette-text-gray">Herné konzoly opravy</li>
                        <li class="text-pallette-text-gray">LCD a LED TV opravy</li>
                        <li class="text-pallette-text-gray">MP3 a MP4 </li>
                    </ul>
            </div>

            <div class="text-left max-w-sm w-full">
                    <h3 class="text-white text-xl font-bold uppercase ml-0">Subscribe us</h3>
                    <p class="text-pallette-text-gray mt-3">Subscibe to our newstletter!</p>
                    <input class="my-2 p-1" type="email" placeholder=" Váš email..." type="text">
                    <h3 class="text-pallette-text-gray">Neposielame vám spamy a váš email je v bezpečí </h3>

                    <div>
                        <ul class="flex mt-3">
                            <li class="mr-4"><a href=""></a><i class="fa-brands fa-facebook-f text-pallette-text-gray text-lg"></i></li>
                            <li class="mr-4"><a href=""></a><i class="fa-brands fa-instagram text-pallette-text-gray text-lg"></i></li>
                            <li class="mr-4"><a href=""></a><i class="fa-brands fa-twitter text-pallette-text-gray text-lg"></i></li>
                            <li class=""><a href=""></a><i class="fa-brands fa-linkedin-in text-pallette-text-gray text-lg"></i></li>
                        </ul>
                    </div>
            </div>

                <div class=" row max-w-sm w-full">
                    <h2 class="text-white text-xl font-bold uppercase lg:text-center md:text-left">contact info</h2>
                    
                    @include('include.contactInfo',[
                        'title' => '32, breaking street,',
                        'text' => '2nd cros, Newyork ,USA 10002',
                        'icon' => 'fa-solid fa-house'
                    ])

                     @include('include.contactInfo',[
                        'title' => 'zavolajte nám',
                        'text' => '+321 4567 89 012 & 79 023',
                        'icon' => 'fa-solid fa-phone'
                    ])

                     @include('include.contactInfo',[
                        'title' => 'E-mail',
                        'text' => 'Support@Repairplus.com',
                        'icon' => 'fa-sharp fa-solid fa-envelope'
                    ])
                    
                     @include('include.contactInfo',[
                        'title' => 'otváracie hodiny',
                        'text' => 'Mon - Sat: 09.00am to 18.00pm',
                        'icon' => 'fa-solid fa-clock'
                    ])





            </div>
        </div>
    </section>
</footer>