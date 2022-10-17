
<div class="group border max-w-sm text-center overflow-hidden border-gray-200">     
            <div class="overflow-hidden w-[90%] mx-auto max-h-[170px] relative">
                <img class=" transition duration-500 group-hover:scale-125 " src="{{ $image }}" alt="">
                <div class="flex items-center justify-center absolute transition duration-500 scale-0 bg-pallette-light-blue opacity-90 top-0 left-0 h-full w-full group-hover:scale-100">
                    <a href="#" class="h-[25px] w-[25px] bg-blue-900 p-4 flex justify-center items-center hover:bg-black hover:transition hover:duration-500"><i class="fa-solid fa-link text-white "></i></a>
                </div>
            </div>
            <h3 class="text-pallette-light-blue text-left mt-5 ml-5">{{$info}}</h3>
            <p class="m-1 p-4 text-gray-600">{{$text}}</p>
        </div>