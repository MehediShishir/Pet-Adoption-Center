<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>SIGN UP</title>

</head>
<body>
<style>
    body{

        background-image: linear-gradient(to right top, #050506, #272c37, #3d5469, #4c819d, #54b2cf);
    }
</style>

<div class="coloumns">
<div class="column">
        <h1 class="Title has-text-white">Pet adoption center</h1>
    </div>

</div>
    <form action="\pet_adoption/backend_signup/backendsignup.php" method="post">

        <div class="columns ">
            <div class="column is-offset-4">
                <label for="username" class="is-size-5 has-text-primary">username</label><br>
                <input type="text" class="input is-outlined column is-6" name="username"><br>

                <label for="password" class="is-size-5 has-text-primary">password</label><br>
                <input type="text" class="input is-outlined column is-6" name="password"><br>

                <label for="user_type" class="is-size-5 has-text-primary">user-type(adopter/provider)</label><br>
                <input type="text" class="input is-outlined column is-6" name="user_type"><br>

                <label for="email" class="is-size-5 has-text-primary">email</label><br>
                <input type="text" class="input is-outlined column is-6" name="email"><br>

                <label for="phone_number" class="is-size-5 has-text-primary">phone number</label><br>
                <input type="text" class="input is-outlined column is-6" name="phone_number"><br>

                <div class="mt-5">
                    <button class="button is-primary" type="submit" name="sub">Sign UP</button>
                    <button class="button is-inverted" formaction="\PET_ADOPTION/login_and_signup/login.php">Log In</button>
                </div>
            </div>
            
        </div>
    </form>







</body>
</html>