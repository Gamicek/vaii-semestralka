<!DOCTYPE html>
<html lang="en">
<title>@yield('page-title')</title>

<nav class="px-2 sm:px-4 py-2.5 bg-blue-900 fixed w-full z-20 top-0 left-0 border-b border-gray-600 ">

  <div class="container flex flex-wrap justify-around items-center mx-auto ">
  <a href="{{ route('fe-pages.home-page')}}" class="flex items-center">
      <img src="{{asset('img/footer-logo.png')}}" class="w-40 " alt="logo">
      
  </a>

    <div class="flex md:order-2 ">
        <i class="hidden lg:flex fa-solid fa-mobile-screen text-4xl text-blue-700 mt-1"></i>
        <div class="lg:flex flex-col pl-3 hidden">
          <p class="text-gray-400">Customer Care</p>
          <p class="text-white">09057578</p>
        </div>  
      
    </div>


    <div class=" text-center lg:text-left justify-between items-center w-full md:flex md:w-auto md:order-1"  id="navbar-sticky">
      <ul class="flex flex-col p-4 mt-4 bg-blue-900 md:bg-blue-900 border-gray-700 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">  
          <li>
          <a href="{{ route('fe-pages.home-page')}}" class="navBar uppercase ">Home</a>
        </li>
        <li>
          <a href="{{ route('fe-pages.aboutUs-page')}}" class="navBar uppercase">About</a>
        </li>
        <li>
          <a href="{{ route('fe-pages.blog-page')}}" class="navBar uppercase">Blog</a>
        </li>
        <li>
          <a href="{{ route('fe-pages.services-page')}}" class="navBar uppercase">Services</a>
        </li>
        <li>
          <a href="{{ route('fe-pages.contact-page')}}" class="navBar uppercase">Contact Us</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>




