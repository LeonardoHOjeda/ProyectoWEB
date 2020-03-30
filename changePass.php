<?php
  $conn = mysqli_connect("localhost","userTEST","1234","test");

  if($conn){
    //$clave = rand()%1000; //Generar clave aleatoria del 0 al 999.
    $clave="";
    $letras ="ABCDEFGHJKLMNPQRSTUVWXYZ2345678923456789";
    for($index=0; $index<10; $index++){
      $clave.=$letras[rand()%strlen($letras)]; //El punto lo que hace es agregar
    }
    echo $clave;
    

    include("class.phpmailer.php");
    include("class.smtp.php");

    $mail = new PHPMailer();
    $mail->IsSMTP();

     $mail->Host="smtp.gmail.com"; //mail.google
     $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
     $mail->Port = 465;     // set the SMTP port for the GMAIL server
     $mail->SMTPDebug  = 1;  // enables SMTP debug information (for testing)
                               // 1 = errors and messages
                               // 2 = messages only
     $mail->SMTPAuth = true;   //enable SMTP authentication

     $mail->Username =   "17031277@itcelaya.edu.mx"; // SMTP account username
     $mail->Password = "Machinimador";  // SMTP account password
     $mail->From="";
     $mail->FromName="";
     $mail->Subject = "Nueva contrasena";
     $mail->MsgHTML("<h1>Esta es tu nueva contrasena: ".$_POST['nombre']." ".$_POST['apellidos']."</h1><h2> tu nueva clave de acceso es : ".$clave."</h2>");
     $mail->AddAddress($_POST['emailRec']);
     //$mail->AddAddress("admin@admin.com");
     if($conn){
      $bloque = mysqli_query($conn,"SELECT * FROM usuario WHERE email='".$_POST['emailRec']."'");
      $num_tuplas = mysqli_num_rows($bloque);
      if($num_tuplas){
        echo $num_tuplas;
        echo "Hay usuarios existentes";
        //header("location: index.php?E=15");
        //header("location: home.php");
      } else {
        //echo "SELECT * FROM usuario WHERE email='".$_POST['email']."' and clave = password('".$_POST['pwd']."');";
        header ("location: index.php?E=25");
      }
      //mysqli_close($conn);
    }
     if (!$mail->Send())
      echo  "Error: " . $mail->ErrorInfo;
     else {
      $queryy= "UPDATE usuario set clave = PASSWORD('".$clave."') WHERE email='".$_POST['emailRec']."'";
      echo "Esta es la consulta ".$queryy;
       $result=mysqli_query($conn,$queryy);
      //mysqli_error($conn,$queryy);
    mysqli_close($conn);
       //header("location: index.php?E=15"); 
      }
  }
?>