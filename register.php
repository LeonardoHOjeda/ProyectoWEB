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
     $mail->Subject = "Registro completo";
     $mail->MsgHTML("<h1>BIENVENIDO ".$_POST['nombre']." ".$_POST['apellidos']."</h1><h2> tu clave de acceso es : ".$clave."</h2>");
     $mail->AddAddress($_POST['email']);
     //$mail->AddAddress("admin@admin.com");
     $bloques = mysqli_query($conn,"SELECT * FROM usuario WHERE email='".$_POST['email']."'");
     $num_tuplas = mysqli_num_rows($bloques);
     if (!$mail->Send())
      echo  "Error: " . $mail->ErrorInfo;
      else if($num_tuplas){
      header("location: index.php?E=10"); 
    } else {
      $queryy= "INSERT INTO usuario set email='".$_POST['email']."', nombre='".$_POST['nombre']."',apellidos='".$_POST['apellidos']."', fecha_ingreso='".date("Y-d-m")."', clave=password('".$clave."'), id_tipo_usuario = 7";
      echo "Esta es la consulta ".$queryy;
      $result=mysqli_query($conn,$queryy);
      //mysqli_error($conn,$queryy);
      mysqli_close($conn);
      header("location: index.php?E=7");
      }

     /*if (!$mail->Send())
      echo  "Error: " . $mail->ErrorInfo;
     else {
      $queryy= "INSERT INTO usuario set email='".$_POST['email']."', nombre='".$_POST['nombre']."',apellidos='".$_POST['apellidos']."', fecha_ingreso='".date("Y-d-m")."', clave=password('".$clave."'), id_tipo_usuario = 7";
      echo "Esta es la consulta ".$queryy;
       $result=mysqli_query($conn,$queryy);
      //mysqli_error($conn,$queryy);
    mysqli_close($conn);
       header("location: index.php?e=7"); 
      }*/
  }
?>