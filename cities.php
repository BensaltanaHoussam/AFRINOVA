

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
<?php
require('./db_connection.php');

// Check if 'id_pays' is set in the URL
if (isset($_GET['id_pays'])) {
    $id = $_GET['id_pays'];
    $sql = "SELECT * FROM pays WHERE id_pays = $id";
    $allpays = $conn->query($sql);
    if ($allpays->num_rows > 0) {
        $row = $allpays->fetch_assoc();
        $paysName = $row['country_name'];
    } else {
      $paysName = 'country Not Found';
    }
} else {
  $paysName = 'Unknown country';
}
?>

<section class="bg-[url('<?php echo $row['country_img']; ?>')] bg-cover bg-center h-[350px]">
    <div class="flex justify-between cursor-pointer items-center  py-4 px-4 md:px-24 bg-gradient-to-r from-green-950/80 to-black/70">
        <a href="/AFRINOVA_PROJECT"><img  class="w-[120px]" src="./img/logo.png" alt="logo"></a>
        <div>
            <a href="#" class="text-white text-lg border-2 rounded-3xl py-1 px-4 hover:text-green-950 hover:bg-white hover:border-white transform duration-300">Contact Us</a>
        </div>
    </div>

    <div class="text-white bg-black/40 flex flex-col md:flex-row items-center px-4 py-8 md:px-20 gap-4 md:gap-20 mt-16">
        <h1 class="text-6xl text-start"><?php echo $paysName; ?></h1>
        <p class="text-start">
        <?php echo $row['country_name']; ?>, located in <?php echo $row['country_location']; ?>, has a population of <?php echo $row['country_population']; ?> million people. 
        Its key cities include <?php echo $row['key_cities']; ?>. The official languages are <?php echo $row['country_languages']; ?>.
        </p>
    </div>
</section>


  <section class="bg-white">  




  <div class=" py-8  ">
        <div class="flex items-center gap-4">
          <div>
            
             <h1 class="bg-slate-100/15 text-black px-2 ml-16 py-1">Cities :</h1>
         

          </div>
       
        <div>
          <a href="/AFRINOVA_PROJECT/cities-form.php?id_pays=<?php if (isset ($_GET['id_pays'])) {$id = $_GET['id_pays'];}; echo "$id"; ?>" class="text-black  text-sm border-2  px-2 py-1 hover:text-white hover:bg-green-950 hover:border-white transform duration-300 drop-shadow-2xl ">Add City <i class="ri-add-line"></i></a>
        </div>
        
        </div>
        <P class="text-white font-light ml-16 pt-1 ">This is the best 3 Countrys on africa :</P>

      


      
      </div>




      <?php
require('./db_connection.php');
if (isset ($_GET['id_pays'])) {$id = $_GET['id_pays'];

  $sql = "SELECT * FROM city WHERE id_pays=$id";
$allCities = $conn->query($sql);
 
if ($allCities->num_rows > 0) {
    while($row = $allCities->fetch_assoc()) {
        ?>
          <div class=" p-4 flex md:flex-row flex-col items-center md:justify-center border-2  border-slate-300 gap-20 w-[full]">
          <img  class="w-[300px] flex rounded-xl" src="<?php echo $row['city_img']; ?>" <?php echo $row['city_name']; ?>">
    <div>
      <div class="flex justify-between items-center">

      <h1 class="text-lg font-semibold pb-2"><?php echo $row['city_name']; ?></h1>

<div>
        <a  href="cities-edit.php?id_city=<?php echo $row['id_city']; ?>&id_pays=<?php echo $row['id_pays']; ?>"><i class="ri-edit-fill text-sm text-black  hover:text-green-900 transform duration-300"></i></a>
        <a href="delete_cities.php?id_city=<?php echo $row['id_city']; ?>&id_pays=<?php echo $row['id_pays']; ?>"><i class="ri-delete-bin-7-fill text-sm text-black  hover:text-green-900 transform duration-300"></i></a>
        </div>

      </div>
     
      <P class="text-lg pb-4 md:w-[600px]"><?php echo $row['city_description']; ?></P>
      <P><?php echo $row['type']; ?></P>
    </div>
  </div>
      
        <?php
    }
} else {
    // If no data found, display a message
    echo "No cities found!";
}

};
?>

    
  
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
