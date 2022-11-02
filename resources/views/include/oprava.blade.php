<div class="group border max-w-sm text-center overflow-hidden border-gray-200 mt-10">
            <h3 class="font-serif text-xl text-gray-700 py-4 uppercase">{{ $title }}</h3>
        <div class="overflow-hidden w-[90%] mx-auto max-h-[170px] relative">
            <img class=" transition duration-500 group-hover:scale-125 " src="{{ $image }}" alt="">
            <div class="flex items-center justify-center absolute transition duration-500 scale-0 bg-pallette-light-blue opacity-90 top-0 left-0 h-full w-full group-hover:scale-100">
                <a href="http://vaii-semestralka.test/services" class="h-[25px] w-[25px] bg-blue-900 p-4 flex justify-center items-center hover:bg-black hover:transition hover:duration-500"><i class="fa-solid fa-link text-white "></i></a>
            </div>
        </div>
            <p class="m-2 p-4 text-gray-600">{{$text}}t</p>
</div>