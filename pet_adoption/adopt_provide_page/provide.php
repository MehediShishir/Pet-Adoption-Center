<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Provide Pets</title>

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
    <form action="\pet_adoption/backendprovide/backendprovide.php" method="post">

        <div class="column ">
            <div class="column is-offset-5">
                <label for="pet_name" class="is-size-5 has-text-primary">Pet Name</label><br>
                <input type="text" class="input is-outlined column is-6" name="pet_name"><br>

                <label for="breed" class="is-size-5 has-text-primary">Breed</label><br>
                <input type="text" class="input is-outlined column is-6" name="breed"><br>

                <label for="age" class="is-size-5 has-text-primary">Age</label><br>
                <input type="text" class="input is-outlined column is-6" name="age"><br>

                <label for="pet_type" class="is-size-5 has-text-primary">Pet type</label><br>
                <input type="text" class="input is-outlined column is-6" name="pet_type"><br>

                <label for="provider_id" class="is-size-5 has-text-primary">Provider ID</label><br>
                <input type="number" class="input is-outlined column is-6" name="provider_id"><br>



                <div class="mt-5">
                    <button class="button is-primary" type="submit" name="sub">Submit</button>
                    
                </div>
            </div>
            
        </div>
    </form>







</body>
</html>