<?php  

require('./db_connection.php');

if (isset ($_POST['submit'])){

  $country_name = $_POST['country_name'];
  $country_location = $_POST['country_location'];
  $country_population = $_POST['country_population'];
  $key_cities = $_POST['key_cities'];
  $country_languages = $_POST['country_languages'];
  $country_img = $_POST['country_img'];

  $query = mysqli_query($conn, "INSERT INTO pays (country_name, country_location, country_population, key_cities, country_languages, country_img) VALUES ('$country_name', '$country_location', '$country_population', '$key_cities', '$country_languages', '$country_img')");

  if($query) {
    header('Location: index.php');
  }else{
    echo "<script>alert('There is an error');</script>";
  }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFRINOVA</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
  <section class="landingPage h-full">
    <div class="flex justify-between cursor-pointer items-center py-4 px-4 md:px-24 bg-gradient-to-r from-green-950/80 to-black/70">
      <img  class="w-[120px]" src="./img/logo.png" alt="logo">
      <div>
        <a href="#" class="text-white text-lg border-2 rounded-3xl py-1 px-4 hover:text-green-950 hover:bg-white hover:border-white transform duration-300">Contact Us</a>
      </div>
    </div>


    <section>
    <div class="flex flex-col h-screen">
	<div class="relative flex flex-col md:flex-row  md:space-y-0 rounded-xl mt-4 ml-2 shadow-lg p-3 s md:max-w-3xl border border-white bg-white">
		<div class="w-full md:w-1/3 bg-white grid place-items-center">
			<img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="picture" class="rounded-xl " />
         </div>
			<div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
				
				<h3 class="font-black text-gray-800 md:text-3xl text-xl">Casablanca</h3>
				<p class="md:text-lg text-gray-500 text-base">Casablanca is Morocco's largest city and economic hub, located on the Atlantic coast. Known for the iconic Hassan II Mosque and vibrant culture, it combines modern architecture with historical sites like the Habous Quarter. The city also has a busy port, lively nightlife, and is a key business and tourism destination.</p>
				<p class="text-xl font-black text-gray-800">
				   Capital
				</p>
			</div>
		</div>
	</div>

    
    </section>

  
    
   

    
  </section>



     <!-- FOOTER -->
     <footer class="bg-slate-100">
      <div
        class="container flex justify-around items-center p-8 flex-col md:flex-row"
      >
    
      <div class="bg-green-950 p-4 flex flex-col items-center">
        <img
        class="w-40 pb-2 "
        src="./img/logo.png"
        alt="logo"
      />
      <p class="text-xs w-32 text-center text-white">Thank you for visiting our website! We appreciate your time and support. If you have any questions or feedback, feel free to reach out. We look forward to having you back soon!</p>
      
      </div>
       
      
        <div class="flex gap-28 text-green-950 md:flex-row">
          <div class="mb-4">
            <h1 class="text-xl font-medium pb-2">Quick Links</h1>
            <ul>
              <li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"> <a href="#">Home</a></li>
              <li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"><a href="#">About Us</a></li>
              <li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"><a href="#">Services</a></li>
              <li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"><a href="#">Account</a></li>
              <li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"><a href="#">Team</a></li>
            </ul>
          </div>
      
          <div class="mb-4">
            <h1 class="text-xl font-medium pb-2">Social Media</h1>
            <ul>
              <li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"><i class="fa-brands fa-facebook pr-2"></i><a href="#">Facebook</a></li>
              <a href="#"><li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"><i class="fa-brands fa-instagram pr-2"></i><a href="#">Instagram</a></li>
              <a href="#"><li class="pb-1 hover:underline transition-all duration-400 hover:cursor-pointer"><i class="fa-brands fa-twitter pr-2"></i><a href="#">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <p class="text-green-950 flex justify-end text-xs p-4">
        2024 Codeshogun. All rights reserved
      </p>
    </footer>
</body>
</html>
