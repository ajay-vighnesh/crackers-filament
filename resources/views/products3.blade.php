
@include('partials/nav')

<section>
<div class = "card-wrapper">
  <div class = "card">
    <!-- card left -->
    <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
          <img src = "images/s5.png" alt = "crackers">
          <img src = "images/s6.png" alt = "crackers">
          <img src = "images/s7.png" alt = "crackers">
          <img src = "images/s8.png" alt = "crackers">
        </div>
      </div>
      <div class = "img-select">
        <div class = "img-item">
          <a href = "#" data-id = "1">
            <img src = "images/s5.png" alt = "crackers">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "2">
            <img src = "images/s6.png" alt = "crackers">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "3">
            <img src = "images/s7.png" alt = "crackers">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "4">
            <img src = "images/s8.png" alt = "crackers">
          </a>
        </div>
      </div>
    </div>
    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title ">Crackers</h2>
      <a href = "#" class = "product-link">visit Gokul Traders</a>
    
      <div class = "product-price">
        <p class = "last-price">Old Price: <span>$257.00</span></p>
        <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
      </div>

      <div class = "product-detail">
        <h2 class="text-2xl">about this item: </h2>
        <p class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
        <p class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
        <ul>
          <li class="text-2xl">Available: <span>in stock</span></li>
          <li class="text-2xl">Shipping Area: <span>India</span></li>
          <li class="text-2xl">Shipping Fee: <span>Free</span></li>
        </ul>
      </div>

      <div class = "purchase-info">
        <input type = "number" min = "0" value = "1">
        <button type = "button" class = "btn bg bg__new" style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);">
          Add to Cart <i class = "fas fa-shopping-cart" ></i>
        </button>
      </div>

      <div class = "social-links ">
        <p>Share At: </p>
        <a href = "#">
          <i class = "fab fa-facebook-f"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-instagram"></i>
        </a>
        <a href = "#">
          <i class = "fab fa-whatsapp"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</section>

<section>
  <div class="">
  <div class="mx-auto  py-16 px-4 sm:py-10 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-center  text-primary">Customers also purchased</h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
          <img src="images/s3.png" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-primary">
              <a href="products1.php">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-primary">Black</p>
          </div>
          <p class="text-sm font-medium text-primary">$35</p>
        </div>
      </div>

      <div class="group relative">
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
          <img src="images/s4.png" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-primary">
              <a href="products2.php">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-primary">Black</p>
          </div>
          <p class="text-sm font-medium text-primary">$35</p>
        </div>
      </div>

      <div class="group relative">
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
          <img src="images/s5.png" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-primary">
              <a href="products3.php">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-primary">Black</p>
          </div>
          <p class="text-sm font-medium text-primary">$35</p>
        </div>
      </div>

      <div class="group relative">
        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
          <img src="images/s6.png" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-primary">
              <a href="products4.php">
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              </a>
            </h3>
            <p class="mt-1 text-sm text-primary">Black</p>
          </div>
          <p class="text-sm font-medium text-primary">$35</p>
        </div>
      </div>

    </div>
  </div>
  </div>

  @include('partials/footer')
<script src="js/index.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>

