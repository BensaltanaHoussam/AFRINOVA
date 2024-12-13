

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AFRINOVA</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>

</head>
<body>

<!-- FIRST SECTION -->
    <section class="landingPage h-[530px]">
      <div class="flex  justify-between items-center py-4 px-4 md:px-24 bg-gradient-to-r from-green-950/80 to-black/70 "> 
      
          <img href="./index.php" class="w-[120px]" src="./img/logo.png" alt="logo">
        
        <div>
          <a href="#" class="text-white text-lg border-2 rounded-3xl py-1 px-4 hover:text-green-950 hover:bg-white hover:border-white transform duration-300  ">Contact Us</a>
        </div>

      </div>

      <div class="text-center mt-12">
        <h1 class="text-6xl bg-green-900/20 py-4  text-white">AFRINOVA</h1>
        <h3 class="text-white font-extralight ">Join us and explore the heart of Africa!</h3>
        <p class="text-gray-100 px-4 md:px-44 pt-4 font-normal text-xl">Africa is an experience like no other. From stunning landscapes and vibrant cultures to awe-inspiring wildlife, every moment is unforgettable. Whether you’re on a thrilling safari or discovering hidden gems .</p>
        <div class="mt-8">
          <a href="#" class="text-white text-lg border-2 rounded-3xl py-1 px-8 hover:text-green-950 hover:bg-white hover:border-white transform duration-300 drop-shadow-2xl ">Visit Africa <i class="ri-skip-down-line ml-4"></i></a>
        </div>

        
      </div>
     
      

    </section>

<!-- AFRICA INFO -->
    <section class=" bg-slate-100 ">

      <div class=" flex md:justify-evenly flex-col md:flex-row py-8">
        <div class="my-12 border-r-2 border-green-950  justify-center flex flex-col items-center px-4 md:pr-24">
          <h1 class="text-green-950 text-4xl font-bold md:self-start pb-2">ABOUT AFRICA</h1>
          <p class=" md:w-[400px] pb-1"><span class="font-semibold">Second Largest Continent:</span> Africa covers 30.37 million km², about 20% of Earth's land area.</p>
          <p class=" md:w-[400px]  pb-1"><span class="font-semibold">Population:</span> Over 1.4 billion people live in Africa, representing diverse cultures and languages.</p>
          <p class=" md:w-[400px]  pb-1"><span class="font-semibold">Countries:</span> Africa has 54 recognized countries, each with unique histories and traditions.</p>
          <p class=" md:w-[400px]  pb-1"><span class="font-semibold">Natural Resources:</span> The continent is rich in oil, gold, diamonds, and other valuable resources.</p>
          <p class=" md:w-[400px]  pb-1"><span class="font-semibold">Sahara Desert:</span> The world's largest hot desert is located in Africa.</p>
          <p class=" md:w-[400px]  "><span class="font-semibold">Cultural Diversity:</span> Africa is home to over 2,000 languages and countless traditions.</p>
        </div>
        <img class="w-[230px] md:w-[400px] mt-4 flex self-center" src="./img/africaMap.png" alt="">
  

      </div>



      
    </section>

    <!-- COUNTRIES SECTION -->
    <section class=" landingPages">

      <div class=" py-8  ">
        <div class="flex items-center gap-4">
          <div>
            
             <h1 class="bg-slate-100/15 text-white px-2 ml-16 py-1">Countrys :</h1>
         

          </div>
       
        <div>
          <a href="/AFRINOVA_PROJECT/countries-form.php" class="text-white text-sm border-2  px-2 py-1 hover:text-green-950 hover:bg-white hover:border-white transform duration-300 drop-shadow-2xl ">Add Countries <i class="ri-add-line"></i></a>
        </div>
        
        </div>
        <P class="text-white font-light ml-16 pt-1 ">This is the best 3 Countrys on africa :</P>

      


      
      </div>

   


      <div class="">
        <div class="pt-4 pb-16">
          <div class="flex justify-around flex-wrap gap-4 px-2">

          <?php
require('./db_connection.php');

$sql = "SELECT * FROM pays";
$allCountries = $conn->query($sql);

if ($allCountries->num_rows > 0) {
    while($row = $allCountries->fetch_assoc()) {
        ?>
        <div class="relative w-[400px] hover:bg-black/30">
            <img class="w-full rounded-lg" src="<?php echo $row['country_img']; ?>" alt="<?php echo $row['country_name']; ?>">
            <div class="absolute bottom-0 w-full h-[100px] text-white text-xl font-bold bg-black/30 rounded-b-lg px-4">
                <h1><?php echo $row['country_name']; ?></h1>
                <p class="text-xs font-light">
                    <?php echo $row['country_name']; ?>, located in <?php echo $row['country_location']; ?>, has a population of <?php echo $row['country_population']; ?> million people. 
                    Its key cities include <?php echo $row['key_cities']; ?>. The official languages are <?php echo $row['country_languages']; ?>.
                </p>
                <a 
                    class="text-xs font-normal flex justify-end hover:text-gray-200" 
                    href="cities.php?id_pays=<?php echo $row['id_pays']; ?>">
                    Explore more
                </a>
            </div>
        </div>
        <?php
    }
} else {
    // If no data found, display a message
    echo "No countries found!";
}
?>

           
           
            
         
          </div>
        
        </div>
      </div>

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
