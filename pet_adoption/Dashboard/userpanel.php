<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT']. '\pet_adoption/connection/conn.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WELCOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
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

  <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary mr-6" href="\PET_ADOPTION/pet_page/homepage.php">
            <strong>Log Out</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>



<div class="columns">
	<h1 class="title column is-offset-4-desktop pt-5 has-text-white">Pet Adoption Center</h1>
</div>


<div class="columns ml-4">
	<div class="card mt-6">
		<header class="card-header title is-size-6">Profile Details</header>
		<div class="card-content">
			<p class="is-size-5  pr-3">USER NAME :  <?php  echo $_SESSION['username'];?></p>
			<p class="is-size-5  pr-3">USER ID :  <?php  echo $_SESSION['userID'];?></p>
		</div>
	</div>


</div>
<nav>
<div class="coloumns mr-6">
    <div class="coloum">
        <div class="class">
            <header class="card-header title"> </header>
            <div class="card-content">
                <p>
					Adopt or provide to make the world bright<br>
                    Your best friend is waiting for you! <br>
                </p>
            </div>
            <form action="">
                <button class="button is-success is-outlined ml-4" formaction="\PET_ADOPTION/adopt_provide_page/provide.php">Provide pet</button>

                <button class="button is-success is-outlined ml-4" formaction="\PET_ADOPTION/adopt_provide_page/adopt.php">Adopt pet</button>
                
                <button class="button is-success is-outlined ml-4" formaction="\PET_ADOPTION/adopt_provide_page/pets.php">All pets</button>
                
                <button class="button is-success is-outlined ml-4" formaction="\PET_ADOPTION/adopt_provide_page/history.php">History</button>
                
                <button class="button is-success is-outlined ml-4" formaction="\PET_ADOPTION/adopt_provide_page/review.php">Give a Review</button>

				<button class="button is-success is-outlined ml-4" formaction="\PET_ADOPTION/adopt_provide_page/update.php">Update pet info</button>

            </form>
            <img src="im2.jpg" alt="description of image">
    </div>

</div>
</nav>




</body>
</html>