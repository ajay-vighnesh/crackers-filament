@include('partials/nav')

<div class="max-w-[80%] mx-auto">
<div class="md:flex justify-around">
<!--register form-->
    <div class="block lg:p-20 p-6">
        <h1 class="text-primary text-5xl  text-center">Returning Customer?</h1><br><br>
        <h1 class="text-[#FF52B4] text-3xl text-center">Sign-in Account</h1><br><br>
    <form>
    <div class="grid grid-cols-1 gap-4">
        <div class="form-group mb-6">
        <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Email address</label>
        <input type="email" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail2"
            aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group mb-6">
        <label for="exampleInputPassword2" class="form-label inline-block mb-2 text-gray-700">Password</label>
        <input type="password" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword2"
            placeholder="Password">
        </div>
    </div>
        <div class="flex justify-between items-center mb-6">
        <div class="form-group form-check">
            <input type="checkbox"
            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
            id="exampleCheck2">
            <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember me</label>
        </div>
        <a href="#!"
            class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out text-sm">Forgot
            password?</a>
        </div>
        <button type="submit" class="
        w-full
        px-6
        py-2.5
        bg-blue-900
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-[#FF52B4] hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out bg bg__new " style="background-image: linear-gradient(60deg,  #02306D, #FF52B4);" >Sign in</button>
        <p class="text-gray-800 mt-6 text-center">Not a member? <a href="sign-up.php"
            class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Register</a>
        </p>

    
    </form>
    </div>
    </div>
</div>


@include('partials/footer')

  <script src="js/index.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>