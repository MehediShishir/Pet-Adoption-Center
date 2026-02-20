<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Adopt Pets</title>

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
    <form action="\pet_adoption/backendadopt/backendadopt.php" method="post">

        <div class="column ">
            <div class="column is-offset-4">
                <label for="pet_id" class="is-size-5 has-text-primary">Pet ID</label><br>
                <input type="text" class="input is-outlined column is-6" name="pet_id"><br>

                <label for="pet_seeker_id" class="is-size-5 has-text-primary">Pet Seeker ID</label><br>
                <input type="text" class="input is-outlined column is-6" name="pet_seeeker_id"><br>

                
                <div class="mt-5">
                    <button class="button is-primary" type="submit" name="sub">Submit</button>
                    
                </div>
            </div>
            
        </div>
    </form>







</body>
</html>