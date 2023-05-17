<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gokul Traders</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    
    <link rel="stylesheet" href="css/style.css" />

    <!-- preloader -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/index.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">    <!-- login Logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="png" href="images/favicon-2.png">



  </head>

<body>
    <div class="loader-bg">
      <div class="loader"></div>
    </div>



  <section>
    <nav class="bg-white border-gray-200 px-2 md:px-4 py-2.5 ">
      <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
          <a href="/" class="flex items-center">
              <img src="/images/GT-logo-4.png" class="h-12 logo" alt=" Logo" />

          </a>
          <div class="flex items-center md:order-2">

              <a href="/login" class="  bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Login</a>
              <a href="/sign-up" class="   bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Sign up</a>
              <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg  md:hidden " aria-expanded="false">
                  <div class="container-2" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
              </button>
          </div>

          <div id="mega-menu" class="text-center  justify-between hidden w-full text-lg md:flex md:w-auto md:order-1 ">
              <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-6 md:mt-0">
                  <li>
                      <a href="/" class="block text-1xl lg:text-2xl block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  " aria-current="page">Home</a>
                  </li>
                  <li>
                    <a href="/about" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">About</a>
                  </li>
                  <li>
                    <a href="/products" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">Products</a>
                  </li>
                  <li class="group">
                      <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class=" drow-1  flex items-center justify-between text-1xl block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">
                          More Products<svg aria-hidden="true" class=" w-5 h-5 ml-1 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </button>
                      <div id="mega-menu-dropdown" class="absolute hidden  z-10 grid grid-cols-2 text-1xl bg-white  rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 lg:grid-cols-4 " >
                          <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                              <ul class="space-y-4 " aria-labelledby="mega-menu-dropdown-button">
                                  <li>
                                      <a href="/products1" class="text-blue-900 text-1xl  hover:text-[#FF52B4]">
                                        <h2 class="text-2xl ">Flower Pots</h2>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Flower Pots Big
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Flower Pots Small
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Flower Pots Special
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Super Deluxe (5 Pcs)
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Colour Koti Red&green(5 Pcs)
                                      </a>
                                  </li>
                              </ul>
                          </div>
                          <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                              <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                  <li>
                                      <a href="#" class="text-blue-900 text-1xl hover:text-[#FF52B4]">
                                        <h2 class="text-2xl "> Kids crackers </h2>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Magic Pops
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Ultra Candle
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Zee Boom Baa
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        4 '' Twinkling Star
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        1 1/2 Twinkling Star
                                      </a>
                                  </li>
                              </ul>
                          </div>
                          <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                              <ul class="space-y-4">
                                  <li>
                                      <a href="#" class="text-blue-900  text-1x   hover:text-[#FF52B4]">
                                        <h2 class="text-2xl "> Sound Crackers </h2>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        ds Bomb
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900   text-1xl hover:text-[#FF52B4]">
                                        Auto  Bomb
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Hydro Bomb
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Classic bomb
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                        Digital Bomb
                                      </a>
                                  </li>

                              </ul>
                          </div>
                          <div class="p-4 text-gray-900 dark:text-white">
                              <ul class="space-y-4">
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                          Contact Us
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                          Support Center
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                          Terms
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </li>
                  <li>
                    <a href="/Order-List" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">Order-List</a>
                </li>
                  <li>
                      <a href="/gallery" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">Gallery</a>
                  </li>
                  <li>
                      <a href="/contact-us" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">Contact us</a>
                  </li>

              </ul>
          </div>
      </div>
  </nav>

  </section>



