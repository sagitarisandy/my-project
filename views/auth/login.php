<!-- views/auth/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-4">Admin Login</h2>
        <form method="POST" action="">
            <label for="username" class="block mb-2">Username:</label>
            <input type="text" id="username" name="username" class="w-full p-2 mb-4 border rounded" required>
            
            <label for="password" class="block mb-2">Password:</label>
            <input type="password" id="password" name="password" class="w-full p-2 mb-4 border rounded" required>
            
            <button type="submit" class="w-full bg-red-700 text-white py-2 rounded">Login</button>
        </form>
        <?php if (isset($error)) { echo "<p class='text-red-500'>$error</p>"; } ?>
    </div> -->

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://p7.hiclipart.com/preview/609/808/901/sony-playstation-4-slim-playstation-3-video-game-consoles-ps4-icon.jpg" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Tatang Play Station Admin</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Username:</label>
                <div class="mt-2">
                <input type="text" id="username" name="username" class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-800 sm:text-sm/6" required>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                <div class="text-sm">
                    <a href="#" class="font-semibold text-sky-600 hover:text-sky-800">Forgot password?</a>
                </div>
                </div>
                <div class="mt-2">
                <input id="password" name="password" type="password" class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-800 sm:text-sm/6" required>
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-sky-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-sky-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-800">Sign in</button>
            </div>
        </form>
        <?php if (isset($error)) { echo "<p class='text-red-500'>$error</p>"; } ?>

        <!-- <p class="mt-10 text-center text-sm/6 text-gray-500">
        Not a member?
        <a href="#" class="font-semibold text-sky-600 hover:text-sky-800">Start a 14 day free trial</a>
        </p> -->
    </div>
    </div>

</body>
</html>
