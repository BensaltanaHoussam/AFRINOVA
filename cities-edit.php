<?php  

require('./db_connection.php');


if (isset($_GET['id_city']) && isset($_GET['id_pays']) ) {
  $id_pays = $_GET['id_pays'];
  $id = $_GET['id_city'];
  $sql = "SELECT * FROM city WHERE id_city = '$id'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
  } else {
      echo "Pays introuvable.";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $city_name = $_POST['city_name'];
  $city_description = $_POST['city_description'];
  $Type = $_POST['Type'];
  $city_img = $_POST['city_img'];



  $sql = "UPDATE city SET city_name='$city_name', city_description='$city_description', Type='$Type', city_img='$city_img' WHERE id_city='$id'";

  if ($conn->query($sql) === TRUE) {
   
      header("Location: cities.php?id_pays=$id_pays");
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
    <a href="/AFRINOVA_PROJECT"><img  class="w-[120px]" src="./img/logo.png" alt="logo"></a>
      <div>
        <a href="#" class="text-white text-lg border-2 rounded-3xl py-1 px-4 hover:text-green-950 hover:bg-white hover:border-white transform duration-300">Contact Us</a>
      </div>
    </div>

    <h1 class="font-bold text-black  text-2xl py-4 text-center mt-4 mb-4 ">Add City Information</h1>
    
    <section class="pb-20">
    <form class="flex flex-col gap-4  mx-auto w-full md:w-1/2 bg-gray-50 p-8  rounded shadow" method="POST">
      <label for="city-name" class="font-semibold">City Name:</label>
      <input type="text" name="city_name" id="city_name" value="<?php echo $row['city_name']; ?>" class="p-2 border border-green-900 rounded" placeholder="Enter city name">

      <label for="city-description" class="font-semibold">Description:</label>
      <textarea type="text" rows="4" name="city_description" value="<?php echo $row['city_description']; ?>"  id="city_description" class="p-2 border border-green-900 rounded " placeholder="Enter a description"></textarea>

      <label for="Type" class="font-semibold">Type(Capital or City) :</label>
      <input type="text" name="Type" value="<?php echo $row['type']; ?>" id="Type" class="p-2 border border-green-900 rounded" placeholder="Enter city type">

      <label for="city-img" class="font-semibold">City Image URL:</label>
      <input type="text" name="city_img" value="<?php echo $row['city_img']; ?>" id="city-img" class="p-2 border border-green-900 rounded" placeholder="Enter image URL">

      

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
