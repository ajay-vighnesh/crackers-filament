<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import HomeLayout from '@/Layouts/HomeLayout.vue';
import { ref, onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';

onMounted(() => {


});

defineProps({
  products: Object
})

</script>
 
<template>
    <Head title="Products" />

    <HomeLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Products</h2>
        </template>

        <section>
  <div class="">
  <div class="mx-auto py-16 px-4 sm:py-10 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-center  text-primary">Customers also purchased</h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 md:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" >
      <div class="group relative" v-for="product in products">
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80" >
          <!-- <img src="images/s3.png" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full "> -->
          <img v-bind:src="'storage/' +product.image " class="h-full w-full object-center lg:h-full lg:w-full" />
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-2xl text-primary">
              <a href="/products1">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ product.name }}
              </a>
            </h3>
            <p v-html="product.description"></p>
          </div>
          <p class="text-1xl font-medium text-primary">₹.{{ product.price }}</p>
        </div>
      </div>


      <!-- More products... -->
    </div>
  </div>
</div>
</section>

    </HomeLayout>
</template>
