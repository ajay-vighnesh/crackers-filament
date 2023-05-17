<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import HomeLayout from "@/Layouts/HomeLayout.vue";
import { ref, onMounted } from "vue";
import { Head } from "@inertiajs/vue3";

onMounted(() => {
    setTimeout(appendApp, 100);
    function appendApp() {
        let mainJS = document.getElementById("main-js");
        if (mainJS != null) {
            mainJS.remove();
        }
        let mainScript = document.createElement("script");
        mainScript.setAttribute("src", "js/main.js");
        mainScript.setAttribute("id", "main-js");
        document.body.appendChild(mainScript);
    }
});

defineProps({
    categories: Object,
});
</script>

<template>
    <Head title="Order_List" />

    <HomeLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Order_List
            </h2>
        </template>

        <section class="mt-5">
            <div class="">
                <h1
                    class="text-center font-bold text-primary text-5xl h-20 pt-4"
                >
                    Order-List
                </h1>
            </div>
            <div
                class="justify-evenly max-w-7xl mx-auto flex items-center Order"
            >
                <div class="container text-white flex justify-evenly">
                    <div class="hh5 text-bold">Original Price:</div>
                    <div class="hh5 text-bold">Discount:</div>
                    <div class="hh5 text-bold">Total Price:</div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto mt-4">
                <div class="flex justify-evenly">
                    <h4 class="fw-bold fss-4">Product Name</h4>
                    <h4 class="text-bold fss-4">Actual Price</h4>
                    <h4 class="text-bold fss-4">80% Offer</h4>
                    <h4 class="text-bold fss-4">Price</h4>
                    <h4 class="text-bold fss-4">Quantity</h4>
                    <h4 class="text-bold fss-4">Total</h4>
                </div>

                <!-- old -->
                <!-- <div class="mt-1" v-for="category in categories">
            <div class="flex max-w-7xl mx-auto bg-[#281a3bcf] h-20 justify-around items-center container-fact" onclick="myFunction(this)" data-bs-toggle="collapse" href="#multiCollapseExample" role="button" aria-expanded="false" aria-controls="multiCollapseExample">
                <a data-bs-toggle="collapse" href="#multiCollapseExample" role="button" aria-expanded="false" aria-controls="multiCollapseExample">
                    <div class="container-fact" onclick="myFunction(this)">
                        <div class="bar-1"></div>
                        <div class="bar-2"></div>

                    </div>
                </a>
                <h4 class="text-white hh4 ">{{ category.category }}</h4>
                <a data-bs-toggle="collapse" href="#multiCollapseExample" role="button" aria-expanded="false" aria-controls="multiCollapseExample">

                </a>
            </div>

             <div class="collapse multi-collapse" id="multiCollapseExample" >
                    <div class="flex justify-around items-center"   v-for="product in category.products">
                        <div class="flex items-center wrapper mt-4">
                        <div class=" ">
                            <img v-bind:src="'storage/' +product.image " class="w-20"/>
                        </div>&nbsp;
                        <div class="fss-5 ">
                            {{ product.name }}
                        </div>
                        </div>

                        <div class="fss-5">
                            {{ product.price }}
                        </div>
                        <div class="fss-5">
                            <span class="strike actual_price">₹ 320</span>
                        </div>
                        <div class="fss-5 text-green-600">
                            ₹ 80 
                        </div>
                        <div class = "purchase-info" >
                            <input type = "number" min = "0" value = "0">
                        </div>
                        <div class = "fss-5" >
                            total
                        </div>
                    </div>
                    


                 

            </div> 
        </div>  -->
                <!-- old -->

                <!-- new -->
                <!-- <section class="smart_accordian-section my-5 min-height-400">
            <div class="container">
                <h2 class="sec_title mt-4">FREQUENTLY ASKED QUESTIONS</h2>
                <div class="accourdian" >
                    <div class="accordian-item item1" v-for="product in category.products" >
                        <div  class="accordian-link "
                        >
                        <img v-bind:src="'storage/' +product.image " class="w-20"/>
                            <i class="icon ion-md-add"></i>
                        </div>
                        <div class="answer">
                            <p>
                                 {{ product.name }}
                            </p>
                        </div>
                        <div class="answer">
                            <p>
                                 {{ product.name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
                <!-- new -->

                <!-- CODEPEN-->
                <div class="container2">
                    <div
                        class="mt-1 accordion-contianer2"
                        v-for="category in categories"
                    >
                        <button class="text-center accordion2 bg-[#281a3bcf]">
                            {{ category.category }}
                        </button>
                        <div>
                            <div
                                class="panel2 flex justify-around items-center"
                                v-for="product in category.products"
                            >
                                <!-- <p>{{ product.name }}</p> -->
                                <div class="flex items-center wrapper mt-4">
                                    <div class="fss-5">
                                        <img
                                            v-bind:src="
                                                'storage/' + product.image
                                            "
                                            class="w-20"
                                        />
                                    </div>
                                    &nbsp;
                                    <div class="fss-5">
                                        {{ product.name }}
                                    </div>
                                </div>

                                <div class="fss-5">
                                    {{ product.price }}
                                </div>
                                <div class="fss-5">
                                    <span class="strike actual_price"
                                        >₹ 320</span
                                    >
                                </div>
                                <div class="fss-5 text-green-600">₹ 80</div>
                                <!-- <div class = "purchase-info" >
                            <input type = "number" min = "0" value = "0">
                        </div> -->
                                <div class="addbtn">
                                    <button
                                        class="minusBtn qty"
                                        type="button"
                                        value="-"
                                    >
                                        -</button
                                    >&nbsp;
                                    <button class="mainBtn qty" value="0">
                                        ADD</button
                                    >&nbsp;
                                    <button
                                        class="plusBtn qty"
                                        type="button"
                                        value="+"
                                    >
                                        +
                                    </button>
                                </div>
                                <div class="fss-5">total</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->

                <!--new order-->
                <section>
                    <div class="container2">
                        <div class="cards">
                            <div
                                class="grid justify-around items-center grid-item"
                                style="grid-template-columns: 4fr 1fr"
                            >
                                <div
                                    class="justify-around items-center container-product  lg:grid-cols-9 md:grid-cols-6 card2"
                                >
                                    <div class=" mt-4 text-red-200 font-bold ">
                                        7 cm Electric Sparklers
                                    </div>
                                    <div class="">₹ 400.00</div>
                                    <div class="">
                                        <span class="strike actual_price"
                                            >₹ 320</span
                                        >
                                    </div>
                                    <div
                                        class=" text-success price fw-bold"
                                    >
                                        ₹ 80
                                    </div>
                                </div>
                                <div class="purchase-info lg:grid-cols-3 md:grid-cols-6">
                                    <div>
                                        <a
                                            class="link-photo"
                                            data-lightbox="img"
                                            href="images/c3.jpg"
                                        >
                                            <img
                                                id="imageGallery"
                                                src="images/c3.jpg"
                                                alt=""
                                                class="imageproduct"
                                            />
                                        </a>
                                    </div>
                                    <div class="addbtn">
                                        <button
                                            class="minusBtn qty"
                                            type="button"
                                            value="-"
                                        >
                                            -</button
                                        >&nbsp;
                                        <button class="mainBtn qty" value="0">
                                            ADD</button
                                        >&nbsp;
                                        <button
                                            class="plusBtn qty"
                                            type="button"
                                            value="+"
                                        >
                                            +
                                        </button>
                                    </div>
                                    <!-- <a href="#about" class="get-started-btn scrollto" style="margin-left: 0;" >Add</a> -->
                                    <!-- <input type = "number" min = "0" value = "0"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>

                <!---->

                <div
                    class="my-14 lg:my-16 xl:my-20 px-0 pb-2 max-w-screen mx-auto flex flex-col md:flex-row w-full"
                >
                    <div
                        class="md:w-full lg:w-2/5 2xl:w-2/6 flex flex-col h-full"
                    >
                        <div class="mb-6 flex flex-col ps-3 2xl:ps-4 lg:p-7">
                            <h4
                                class="text-3xl md:text-lg font-bold text-heading text-primary pb-7 md:pb-10 lg:pb-6 -mt-1"
                            >
                                Total Amount
                            </h4>
                            <div class="flex pb-1 gap-4">
                                <div
                                    class="flex flex-shrink-0 justify-center items-center p-1.5"
                                >
                                    <div
                                        class="text-1xl text-primary font-bold"
                                    >
                                        Net Total:
                                    </div>
                                </div>
                                <div class="flex flex-col ps-3 2xl:ps-4">
                                    <a
                                        class="text-1xl text-primary font-bold mt-2"
                                        href="/"
                                        >Rs.0</a
                                    >
                                </div>
                            </div>
                            <br />
                            <div class="flex pb-1 gap-4">
                                <div
                                    class="flex flex-shrink-0 justify-center items-center p-1.5"
                                >
                                    <div
                                        class="text-1xl text-primary font-bold"
                                    >
                                        Discount Total:
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="flex pb-1 gap-4">
                                <div
                                    class="flex flex-shrink-0 justify-center items-center p-1.5"
                                >
                                    <div class="font-bold text-primary">
                                        Sub Total:
                                    </div>
                                </div>
                                <div class="flex flex-col ps-3 2xl:ps-4">
                                    <a
                                        class="text-sm text-primary mt-0"
                                        href="/"
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="md:w-full lg:w-3/5 2xl:w-4/6 flex h-full md:ms-7 flex-col lg:ps-7 mt-10 mb-10"
                    >
                        <form
                            class="w-full mx-auto flex flex-col justify-center"
                            novalidate=""
                        >
                            <div class="w-full">
                                <label
                                    for="name"
                                    class="block text-gray-600 font-semibold text-primary text-sm leading-none mb-3 cursor-pointer"
                                    >Your Name (required)</label
                                ><input
                                    id="name"
                                    name="name"
                                    type="text"
                                    placeholder="Enter Your Name"
                                    class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-xs lg:text-sm font-body placeholder-body min-h-12 transition duration-200 ease-in-out bg-white border-gray-300 focus:outline-none focus:border-heading h-11 md:h-12 rounded-md"
                                    autocomplete="off"
                                    spellcheck="false"
                                    aria-invalid="false"
                                />
                            </div>
                            <div class="relative mt-4">
                                <label
                                    for="email"
                                    class="block text-gray-600 font-semibold text-sm text-primar leading-none mb-3 cursor-pointer"
                                    >Your Email (required)</label
                                ><input
                                    id="subject"
                                    name="subject"
                                    type="text"
                                    placeholder="Enter Your Email"
                                    class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-xs lg:text-sm font-body placeholder-body min-h-12 transition duration-200 ease-in-out bg-white border-gray-300 focus:outline-none focus:border-heading h-11 md:h-12 rounded-md"
                                    autocomplete="off"
                                    spellcheck="false"
                                    aria-invalid="false"
                                />
                            </div>
                            <div class="relative mt-4">
                                <label
                                    for="message"
                                    class="block text-gray-600 font-semibold text-primary text-sm leading-none mb-3"
                                    >Message</label
                                ><textarea
                                    id="message"
                                    name="message"
                                    class="px-4 py-3 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-heading text-sm focus:outline-none focus:ring-0 bg-white border border-gray-300 focus:shadow focus:outline-none focus:border-heading placeholder-body"
                                    autocomplete="off"
                                    spellcheck="false"
                                    rows="4"
                                    placeholder="Write your message here"
                                ></textarea>
                            </div>
                            <div class="relative mt-4">
                                <button
                                    data-variant="flat"
                                    class="bg bg__new bg-blue-900 text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent placeholder-white focus-visible:outline-none focus:outline-none rounded-md bg-heading text-white px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-[#FF52B4] hover:shadow-cart h-12 lg:h-14 mt-1 text-sm text-primary lg:text-base w-full sm:w-auto"
                                    style="
                                        background-image: linear-gradient(
                                            60deg,
                                            #02306d,
                                            #ff52b4
                                        );
                                    "
                                    type="submit"
                                >
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </HomeLayout>
</template>
