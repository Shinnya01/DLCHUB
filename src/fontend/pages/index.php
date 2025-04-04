<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
  <title>DLC HUB</title>
</head>
<body>
  <div class="w-screen h-screen bg-[#FFF2F2] flex">
    <!-- LEFT SECTION -->
    <div class="w-[55%] h-full flex items-center justify-center text-6xl">
      DLC HUB
    </div>

    <!-- RIGHT SECTION -->
    <form class="w-[45%] h-full bg-[#800000] flex flex-col py-20 px-10 justify-around items-center rounded-l-3xl" method="post" action="/DLCHUB/src/backend/login_config.php">
      <!-- WELCOME MESSAGE -->
      <div class="text-white flex flex-col gap-4 items-center">
        <h1 class="text-7xl">Welcome</h1>
        <p class="text-2xl">Login to your account to continue</p>
      </div>

      <!-- INPUT BOXES -->
      <div class="w-[80%] flex flex-col gap-4">
      <?php 
        $error = $_GET['error'] ?? null;
        if ($error) {
          echo "<p class='text-white text-center'>Invalid username or password</p>";
        }
        ?>

        <input type="text" class="w-full h-12 bg-[#FFF2F2] outline-none pl-5" placeholder="Email" namespace="user_name" name="user_username">
        <input type="password" class="w-full h-12 bg-[#FFF2F2] outline-none pl-5" placeholder="Password" namespace="user_pass" name="user_password">

    

        <!-- REMEMBER ME & FORGOT PASSWORD -->
        <div class="flex justify-between text-white">
          <div>
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember Me</label>
          </div>
          <a href="forgot_pass.html" class="hover:underline">Forgot Password</a>
        </div>
      </div>

      <!-- LOGIN & SIGN UP -->
      <div class="w-[80%] flex flex-col gap-4 items-center">
        <button class="w-full h-10 bg-[#FFF2F2] text-black cursor-pointer">
          Login
        </button>
        <p class="text-white">
          Don't Have an account? 
          <a href="student_signUp.php" class="hover:underline">Sign Up</a>
        </p>
      </div>

    </form>


    </div>
  </div>
</body>
</html>
