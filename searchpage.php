<?php 
 
$result= $_POST['fname'];
$result= strtolower($result);

if ($result=="alumni"){
header('Location: alumni.php');
}
else if ($result=="fakultetet"){

    header('Location: fakultetet.php');

 }
else if ($result=="organet e universitetit"){

     header('Location:organet_e_universitetit1.php');

    }
 else if ($result=="lajme"){

    header('Location:Lajme.php');

 }
 else if ($result=="regjistrohu"){
    
    header('Location: regjistrohu.php');
 
}
else {

echo "No results found for this search";

}
?> 
 