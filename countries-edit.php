<?php  

require('./db_connection.php');


if (isset($_GET['id_pays'])) {
  
  $id = $_GET['id_pays'];
  $sql = "SELECT * FROM pays WHERE id_pays = '$id'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
  } else {
      echo "Pays introuvable.";
      exit;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $country_name = $_POST['country_name'];
  $country_location = $_POST['country_location'];
  $country_population = $_POST['country_population'];
  $key_cities = $_POST['key_cities'];
  $country_languages = $_POST['country_languages'];
  $country_img = $_POST['country_img'];


  $sql = "UPDATE pays SET country_name='$country_name', country_location='$country_location', country_population='$country_population', key_cities='$key_cities', country_languages='$country_languages',country_img='$country_img' WHERE id_pays='$id'";

  if ($conn->query($sql) === TRUE) {
   
      header("Location: index.php");
      exit;
  } else {
      echo "Erreur : " . $conn->error;
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
      <img  href="index.php?"   class="w-[120px]" src="./img/logo.png" alt="logo">
      <div>
        <a href="#" class="text-white text-lg border-2 rounded-3xl py-1 px-4 hover:text-green-950 hover:bg-white hover:border-white transform duration-300">Contact Us</a>
      </div>
    </div>

    <h1 class="font-bold text-black  text-2xl py-4 text-center mt-4 mb-4 ">Add Country Information</h1>

<section class="pb-20">
<form class="flex flex-col gap-4  mx-auto w-full md:w-1/2 bg-gray-50 p-8  rounded shadow" method="POST">
  <label for="country-name" class="font-semibold">Country Name:</label>
  <input type="text" name="country_name" id="country-name" value="<?php echo $row['country_name']; ?>" class="p-2 border border-green-900 rounded" placeholder="Enter country name">

  <label for="country-location" class="font-semibold">Country Location:</label>
  <input type="text" name="country_location" id="country-location" value="<?php echo $row['country_location']; ?>" class="p-2 border border-green-900 rounded " placeholder="Enter country location">

  <label for="country-population" class="font-semibold">Country Population :</label>
  <input type="number" name="country_population" id="country-population" value="<?php echo $row['country_population']; ?>" class="p-2 border border-green-900 rounded" placeholder="Enter population">

  <label for="key-cities" class="font-semibold">Key Cities:</label>
  <input type="text" name="key_cities" id="key-cities" value="<?php echo $row['key_cities']; ?>" class="p-2 border border-green-900 rounded" placeholder="Enter key cities">

  <label for="country-languages" class="font-semibold">Country Languages:</label>
  <input type="text" name="country_languages" id="country-languages" value="<?php echo $row['country_languages']; ?>" class="p-2 border border-green-900 rounded" placeholder="Enter languages">

  <label for="country-img" class="font-semibold">Country Image URL:</label>
  <input type="text" name="country_img" id="country-img" value="<?php echo $row['country_img']; ?>" class="p-2 border border-green-900 rounded" placeholder="Enter image URL">

  <button href="index.php?" type="submit" name="submit" class="mt-4 bg-green-950 text-white py-2 px-4 rounded hover:bg-green-700 transform duration-300">Add Country</button>
</form>

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
