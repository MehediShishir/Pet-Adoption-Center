<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>LOG IN</title>

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
    <form action="\pet_adoption/backendlogin/backendlogin.php" method="post">
        <div class="columns">
            <div class="column is-offset-4">
                <label for="username" class="is-size-5 has-text-primary">username</label>
                <input type="text" class="input is-primary column is-5" placeholder="username" name="username"> <br>

                <label for="password" class="is-size-5 has-text-primary">password</label>
                <input type="password" class="input is-primary column is-5" placeholder="password" name="password"> <br>

                <div class="mt-5">
                    <button class="button is-primary" type="submit" name="sub">Login</button>
                </div>

            </div>
        </div>
    </form>
</body>
</html>