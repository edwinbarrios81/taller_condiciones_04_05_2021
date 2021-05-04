
<?php



    $edad = (int) $_REQUEST["edad"];
    if($edad <= 0){
      echo <<<NoHaNacido
     segun su edad No ha nacido <3
    NoHaNacido;




  }elseif($edad > 0 && $edad <= 3){
      echo <<<RecienNacido
      Es un recien nacido su edad es: $edad
RecienNacido;





  }elseif($edad >= 4 && $edad <= 10){
      echo <<<Niñoa
      Es un niño su edad es: $edad
Niñoa;




  }elseif($edad >= 11 && $edad <= 17){
      echo <<<Adolecente
      Es un adolescente su edad es: $edad
Adolecente;




  }elseif($edad >= 18 && $edad <= 25){
      echo <<<MayorDeEdad
      Usted es mayor de edad: $edad
MayorDeEdad;




  }elseif($edad >= 26 && $edad <= 50){
      echo <<<Señora
      Es un adulto productivo cuide su prostata, su edad es : $edad
Señora;




  }elseif($edad >= 51 && $edad <= 99){
      echo <<<Ancianoa
      Es un adulto mayor, su edad es : $edad
Ancianoa;



  }else{
      echo <<<ConDiositoSanto
      es duro pero, Usted ya se murio o es muy longevo:) 
ConDiositoSanto;

  }




  echo "<br> <br> <a href='index.html'> Regresar </a>"

?>