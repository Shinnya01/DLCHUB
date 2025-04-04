<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
  <title>DLC HUB</title>

  <script>
    function redirectToUrl(selectElement) {
        const selectedValue = selectElement.value;
        if (selectedValue) {
            window.location.href = selectedValue; // Redirect to the selected URL
        }
    }
</script>

</head>
<body>
  <div class="w-screen h-screen bg-[#FFF2F2] flex">
    <!-- LEFT SECTION -->
    <div class="w-[55%] h-full flex items-center justify-center text-6xl">
      DLC HUB
    </div>

    <!-- RIGHT SECTION -->
    <form class="w-[45%] h-full bg-[#800000] flex flex-col py-20 px-5 justify-between items-center rounded-l-3xl" method="POST" action="/DLCHUB/src/backend/login_config.php">
      <!-- WELCOME MESSAGE -->
      <div class="text-white flex flex-col gap-4 items-center">
        <h1 class="text-7xl">Welcome</h1>
        <p class="text-2xl">Login to your account to continue</p>
      </div>

      <!-- INPUT BOXES -->
      <div class="w-[80%] flex flex-col gap-5">

        <select name="" id="" class="w-full h-12 bg-[#FFF2F2] outline-none px-5" onchange="redirectToUrl(this)">
            <option value="student_signUp.php" >STUDENT</option>
            <option value="" selected>TEACHER</option>
        </select>

        <div class="grid grid-cols-2 gap-5">
            <input type="text" class="w-full h-12 bg-[#FFF2F2] outline-none px-5" placeholder="First Name">
            <input type="text" class="w-full h-12 bg-[#FFF2F2] outline-none px-5" placeholder="Last Name">
        </div>


        <input type="text" class="w-full h-12 bg-[#FFF2F2] outline-none px-5" placeholder="Email">
        <input type="password" class="w-full h-12 bg-[#FFF2F2] outline-none px-5" placeholder="Password">
        <input type="password" class="w-full h-12 bg-[#FFF2F2] outline-none px-5" placeholder="Retype Password">


      </div>

      <!-- LOGIN & SIGN UP -->
      <div class="w-[80%] flex flex-col gap-4 items-center">
        <button class="w-full h-10 bg-[#FFF2F2] text-black cursor-pointer">
          Sign Up
        </button>
        <p class="text-white">
          Already Have an account? 
          <a href="index.php" class="hover:underline">Sign in</a>
        </p>
      </div>
    </form>
  </div>
</body>
</html>
