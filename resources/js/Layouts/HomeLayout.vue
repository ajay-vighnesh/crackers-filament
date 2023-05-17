<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
import { ref, onMounted } from 'vue';
import { Head, router } from "@inertiajs/vue3";


onMounted(() => {
    setTimeout(appendApp, 100);
    function appendApp() {
        let mainJS = document.getElementById('main-js')
        if (mainJS != null) {
            mainJS.remove()
        }
        let mainScript = document.createElement('script')
        mainScript.setAttribute('src', 'js/main.js')
        mainScript.setAttribute('id', 'main-js')
        document.body.appendChild(mainScript)
    }
});

</script>

<template>
    <!-- <div class="loader-bg">
      <div class="loader"></div>
    </div> -->

    <!-- <nav class="bg-white border-gray-200 px-2 md:px-4 py-2.5 ">
      <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
          <a href="/" class="flex items-center">
              <img src="/images/GT-logo-4.png" class="h-12 logo" alt=" Logo" />

          </a>
          <div class="flex items-center md:order-2">

              <a href="/login" class="  bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Login</a>
              <a href="/sign-up" class="   bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Sign up</a>
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
                      <a href="/home" class="block text-1xl lg:text-2xl block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  " aria-current="page">Home</a>
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
                                      <Link href="\contactus" class="text-blue-900  text-1xl   hover:text-[#FF52B4]">
                                          Contact Us
                                      </Link>
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
                    <Link href="/orderlist" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">Order-List</Link>
                </li>
                  <li>
                      <a href="/gallery" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">Gallery</a>
                  </li>
                  <li>
                      <Link href="/contactus" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">Contact us</Link>
                  </li>

              </ul>
          </div>
      </div>
  </nav>  -->

  <!-- new  -->
  <nav class="bg-white shadow-lg">
			<div class="max-w-7xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="/" class="flex items-center py-4 px-2">
								<img src="/images/GT-logo-4.png" class="h-12 logo" alt=" Logo" />
							</a>
						</div>
                        <!---->

                        <!---->
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
                            <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-6 md:mt-0">
							<Link href="/home" class="block text-1xl lg:text-2xl block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2 ">Home</Link>
							<a href="/about" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">About</a>
							<a href="/products" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Product</a>
							<!-- <a href="" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">More Product</a>
                            <svg aria-hidden="true" class="w-5 h-5 ml-1 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> -->
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class=" drow-1  flex items-center justify-between text-1xl block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2  ">
                          More Products<svg aria-hidden="true" class=" w-5 h-5 ml-1 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      </button>
							<a href="/orderlist" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Order-List</a>
							<a href="/gallery" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Gallery</a>
							<a href="/contactus" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Contact Us</a>
                            </ul>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						<a href="/login" class="bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Log In</a>
						<a href="/sign-up" class="bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Sign Up</a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
                            <div class="container-2" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-6 md:mt-0">
					<li class="active"><a href="/home" class="">Home</a></li>
					<li><a href="/about" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">About</a></li>
					<li><a href="/product" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Product</a></li>
                    <div class="flex">
                        <li><a href="/home" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">More Product</a></li>
                        <svg aria-hidden="true" class=" w-5 h-5 ml-1 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                    <li><a href="/orderlist" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Order-List</a></li>
				    <li><a href="/gallery" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Gallery</a></li>
				    <li><a href="/contactus" class="block text-1xl lg:text-2xl text-blue-800  hover:text-[#FF52B4] py-2">Contact Us</a></li>
				    <!-- <li><a href="" class="bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Log In</a></li>
				    <li><a href="" class="bg bg__new w-28 h-10 text-center  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  text-md px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">Sign Up</a></li> -->

				</ul>
			</div>
		</nav>
  <!---->
    <main>
        <slot />
    </main>

    <footer>
        <div class="text-center lg:text-left bg-[#281a3bcf] text-white">
            <div class="mx-6 py-10 text-center md:text-left">
                <div class="max-w-[85%] mx-auto">
                    <div
                        class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-8"
                    >
                        <div class="">
                            <h6
                                class="uppercase font-semibold mb-4 items-center justify-center md:justify-start"
                            />
                            <div>
                                <img
                                    src="images/GT-logo-4.png"
                                    alt=""
                                    class="w-62 lg:w-40"
                                />
                            </div>
                        </div>
                        <div class="">
                            <h6
                                class="uppercase font-semibold mb-4 flex justify-center md:justify-start"
                            >
                                Products
                            </h6>
                            <p class="mb-4">
                                <Link href="#!" class="text-white">Home</Link>
                            </p>
                            <p class="mb-4">
                                <Link href="#!" class="text-white"
                                    >About Us</Link
                                >
                            </p>
                            <p class="mb-4">
                                <Link href="#!" class="text-white"
                                    >Products</Link
                                >
                            </p>
                            <p>
                                <Link href="#!" class="text-white"
                                    >Gallary</Link
                                >
                            </p>
                            <div class="mt-4">
                                <p>
                                    <Link href="\contactus" class="text-white"
                                        >Contact US</Link
                                    >
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <h6
                                class="uppercase font-semibold mb-4 flex justify-center md:justify-start"
                            >
                                Contact us
                            </h6>
                            <p
                                class="flex items-center justify-center md:justify-start mb-4 text-sm"
                            >
                                <svg
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="home"
                                    class="w-5 mr-4"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"
                                    ></path>
                                </svg>
                                3/265/A1,Chinnakamanpatti,<br />Sattur Main
                                Road, SIVAKASI
                            </p>

                            <p
                                class="flex items-center justify-center md:justify-start mb-4"
                            >
                                <svg
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="envelope"
                                    class="w-4 mr-4"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"
                                    ></path>
                                </svg>
                                info@example.com
                            </p>

                            <p
                                class="flex items-center justify-center md:justify-start mb-4"
                            >
                                <svg
                                    aria-hidden="true"
                                    focusable="false"
                                    data-prefix="fas"
                                    data-icon="phone"
                                    class="w-4 mr-4"
                                    role="img"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"
                                    ></path>
                                </svg>
                                <!-- <i class="fa fa-phone mr-2 " style="font-size:24px;color:gray"></i> -->
                                94873 68824
                            </p>

                            <div class="flex mt-10 mx-16 lg:mx-0">
                                <Link href="#!" class="mr-6 text-gray-600">
                                    <svg
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fab"
                                        data-icon="facebook-f"
                                        class="w-3"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 320 512"
                                    >
                                        <path
                                            fill="white"
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                        ></path>
                                    </svg>
                                </Link>
                                <Link href="#!" class="mr-6 text-gray-600">
                                    <svg
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fab"
                                        data-icon="twitter"
                                        class="w-5"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512"
                                    >
                                        <path
                                            fill="white"
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                        ></path>
                                    </svg>
                                </Link>
                                <Link href="#!" class="mr-6 text-gray-600">
                                    <svg
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fab"
                                        data-icon="google"
                                        class="w-5"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 488 512"
                                    >
                                        <path
                                            fill="white"
                                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                                        ></path>
                                    </svg>
                                </Link>

                                <Link href="#!" class="mr-6 text-gray-600">
                                    <svg
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fab"
                                        data-icon="instagram"
                                        class="w-5"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512"
                                    >
                                        <path
                                            fill="white"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                        ></path>
                                    </svg>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
