
<div class="">
<nav class="px-2 sm:px-4 py-2.5 bg-blue-900 fixed w-full z-20 top-0 left-0 border-b border-gray-600 ">

  <div class="container flex flex-wrap justify-around items-center mx-auto ">
  <a href="{{ route('fe-pages.home-page')}}" class="flex items-center">
      <img src="http://tk.commonsupport.com/repairplus/wp-content/themes/repairplus/images/resources/logo.png" class=" sm:h-12" alt="logo">
      
  </a>

  <div class="flex md:order-2 ">
   
    
      <i class="hidden lg:flex fa-solid fa-mobile-screen text-4xl text-blue-700 mt-1"></i>
      <div class="lg:flex flex-col pl-3 hidden">
        <p class="text-gray-500">Zákaznícka linka</p>
        <p class="text-white">09057578</p>
      </div>  
    

      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        
      </button>
     
  </div>


  <div class=" hidden justify-between items-center w-full md:flex md:w-auto md:order-1"  id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 bg-gray-800 md:bg-blue-900 border-gray-700 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">  
        <li>
        <a href="{{ route('fe-pages.home-page')}}" class="navBar  text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 ">Domov</a>
      </li>
      <li>
        <a href="{{ route('fe-pages.aboutUs-page')}}" class="navBar">O nas</a>
      </li>
      <li>
        <a href="{{ route('fe-pages.blog-page')}}" class="navBar">Blog</a>
      </li>
      <li>
        <a href="{{ route('fe-pages.services-page')}}" class="navBar">Servis</a>
      </li>
      <li>
        <a href="{{ route('fe-pages.contact-page')}}" class="navBar">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
</div>

