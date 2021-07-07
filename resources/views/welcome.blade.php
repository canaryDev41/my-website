<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>CanaryDev41</title>

<style>
      body {
        background: #24C6DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #514A9D, #24C6DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #514A9D, #24C6DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      }

    </style>
    
    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-screen overflow-hidden">

<div class="mx-20">
    <section class="shadow-xl w-full lg:w-12/12 h-screen lg:mx-auto flex">

    <!-- left section -->
    <div class="w-full lg:w-2/4 xl:w-1/4 hidden lg:block flex flex-col justify-start items-stretch bg-gray-100 p-3 overflow-y-auto">
          <div class="flex-auto flex flex-col">
            <div class="flex-auto flex flex-row">
              <div class="w-full">
                <div class="">
                    <img class="mx-auto rounded-full h-28 w-28" src="{{ asset('images/profile.jpeg') }}">
                    
                    <div class="text-center text-sm text-black my-2">
                      <p>Mohammed Awad Elkhalifa</p>
                      <p>Full Stack Web Developer</p>
                      <p>Mobile Application Developer</p>

                      <p class="italic mt-3">"I love code, and i can't lie!"</p>
                    </div>

                </div>

                <div class="my-6 text-sm">
                  <div class="flex flex-col  gap-1">
                    <div class="flex flex-row justify-evenly">
                      <span>Nationality</span>
                      <span>Sudanese</span>

                    </div>
                    <div class="flex flex-row justify-evenly">
                      <span>City</span>
                      <span>Sudan, Khartoum</span>
                    </div>
                  </div>
                </div>

                <div class="">
                  <strong>Back-end</strong>
                  <ul class="ml-2">
                    <li class="flex flex-row items-center justify-start"> <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
PHP</li>
                    <li class="flex flex-row items-center justify-start">
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Nodejs</li>
                    <li class="flex flex-row items-center justify-start">
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
                    Laravel</li>
                    <li class="flex flex-row items-center justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Mysql, Postgres</li>
                  </ul>

                </div>

 <div class="mt-2">
                  <strong>Front-end</strong>
                  <ul class="ml-2">
                    <li class="flex flex-row items-center justify-start"> <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Bootstrap, Tailwindcss</li>
                    <li class="flex flex-row items-center justify-start">
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Vue.js</li>
                    <li class="flex flex-row items-center justify-start">
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
                    HTML</li>
                    <li class="flex flex-row items-center justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Alpine.js</li>
                  </ul>

                </div>

                 <div class="mt-2">
                  <strong>Mobile</strong>
                  <ul class="ml-2">
                    <li class="flex flex-row items-center justify-start"> <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Dart</li>
                    <li class="flex flex-row items-center justify-start">
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Flutter</li>
                    <li class="flex flex-row items-center justify-start">
<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
                    Firebase</li>
                    <li class="flex flex-row items-center justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bg-red-500 text-white mr-1" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
</svg>
Google Map SDK</li>
                  </ul>

                </div>

              </div>
            </div>
          </div>
        </div>


        <!-- Middle section -->
        <div class="w-5/6 px-6 bg-white overflow-y-auto">

          <div class="flex flex-row gap-3 justify-evenly my-4 group text-gray-500 text-center">
            <div class="flex flex-row w-2/6 p-6 justify-center gap-2 hover:text-gray-700 rounded-lg border-gray-400 border border-dashed">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
              <strong>
              Completed Projects = 5+</strong>
            </div>

            <div class="flex flex-row w-2/6 p-6 justify-center gap-2 hover:text-gray-700 rounded-lg border-gray-400 border-dashed border">
              
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
</svg>
              <strong>Ex. Years = 3+</strong>
            </div>
          </div>

          
          <hr class="my-8">

          <div>
              <strong class="font-bold">My Servics</strong>


                <div class="flex md:flex-row flex-col gap-4 mt-3">
                  
                    <div class="bg-gray-100 p-6 w-auto cursor-pointer">
                      <div class="">
                        <strong class="font-semibold">Develop Web Applications</strong>
                        <p class="font-light text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                      </div>
                    </div>

                    <div class="bg-gray-100 p-6 w-auto cursor-pointer">
                      <div>
                        <strong class="font-semibold">Develop Mobile Applications</strong>
                        <p class="font-light text-sm">
                          In publishing and graphic design, Lorem ipsum is a placeholder text commonly
used to demonstrate the visual form of a document or a typeface without relying
on meaningful content.
                        </p>

                      </div>
                    </div>

                </div>


          </div>

        </div>

        <!-- Right section -->
        <div class="bg-gray-100 p-2">
          <div class="p-1 flex flex-col justify-between items-center">
                <div class="">
                  <div class="p-1 flex justify-center items-center text-gray-500 cursor-pointer">
                    <button class="flex flex-col justify-center items-center w-full p-1 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring" aria-label="Hamburger menu">
                      <svg class="fill-current h-5 w-5" viewBox="0 0 20 20">
                        <path d="M3.314,4.8h13.372c0.41,0,0.743-0.333,0.743-0.743c0-0.41-0.333-0.743-0.743-0.743H3.314
                          c-0.41,0-0.743,0.333-0.743,0.743C2.571,4.467,2.904,4.8,3.314,4.8z M16.686,15.2H3.314c-0.41,0-0.743,0.333-0.743,0.743
                          s0.333,0.743,0.743,0.743h13.372c0.41,0,0.743-0.333,0.743-0.743S17.096,15.2,16.686,15.2z M16.686,9.257H3.314
                          c-0.41,0-0.743,0.333-0.743,0.743s0.333,0.743,0.743,0.743h13.372c0.41,0,0.743-0.333,0.743-0.743S17.096,9.257,16.686,9.257z"></path>
                      </svg>
                    </button>
                  </div>
                  <ul class="">
                    <li class="my-2 text-gray-500">
                      <button class="flex flex-col justify-center items-center w-full p-2 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring">
                        <span class="h-12 w-12 mx-1 fab fill-current text-2xl fa-linkedin"></span>
                        <p class="text-xs font-semibold">Linkedin</p>
                      </button>
                    </li>
                    <li class="my-2 text-gray-500">
                      <button class="flex flex-col justify-center items-center w-full p-2 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring">
                        <span class="h-12 w-12 mx-1 fab fill-current text-2xl fa-github"></span>
                        <p class="text-xs font-semibold">Github</p>
                      </button>
                    </li>
                    <li class="my-2 text-gray-500">
                      <button class="flex flex-col justify-center items-center w-full p-2 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring">
                        <span class="h-12 w-12 mx-1 fab fill-current text-2xl fa-twitter"></span>
                        <p class="text-xs font-semibold">Twitter</p>
                      </button>
                    </li>
                  </ul>
                </div>
                <ul>
                  <li class="my-2 text-gray-500">
                    <button class="flex flex-col justify-center items-center p-2 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring">
                      <span class="h-12 w-12 mx-1 fab fill-current text-2xl fa-facebook-f"></span>
                      <p class="text-xs font-semibold">Facebook</p>
                    </button>
                  </li>
                </ul>
              
        </div>
</section>
</div>


</body>
</html>
