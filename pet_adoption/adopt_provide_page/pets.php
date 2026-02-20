<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Pets list</title>

</head>
<body>
<style>
    body{

        background-image: linear-gradient(to right top, #050506, #272c37, #3d5469, #4c819d, #54b2cf);
    }
</style>

<nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <h1 class="title is-size-4 has-text-white">PET ADOPTION CENTER</h1>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
</nav>

<div class="coloumns">
<div class="column">
        <h1 class="Title has-text-white">Pet's List</h1>
    </div>

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Pet ID</th>
      <th scope="col">Pet Name</th>
      <th scope="col">Breed</th>
      <th scope="col">Age</th>
      <th scope="col">Pet Type</th>
      <th scope="col">Pet Provider ID</th>

    </tr>
  </thead>
  <tbody>

<?php
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';
  $sql = "SELECT * FROM pets where 1;";
  $result = mysqli_query($conn,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $pet_id = $row['pet_id'];
      $pet_name = $row['pet_name'];
      $breed = $row['breed'];
      $age = $row['age'];
      $pet_type = $row['pet_type'];
      $pet_provider_id = $row['pet_provider_id'];
      echo '<tr>
      <th scope="row">'.$pet_id.'</th>
      <td>'.$pet_name.'</td>
      <td>'.$breed.'</td>
      <td>'.$age.'</td>
      <td>'.$pet_type.'</td>
      <td>'.$pet_provider_id.'</td>

    </tr>';
    }
  }

?>





    
  </tbody>
</table>
    
<form action="">
                
                <button class="button is-success is-outlined ml-4" formaction="\PET_ADOPTION/Dashboard/userpanel.php?">Go Home</button>
                

 </form>


</body>
</html>