<?php
  class dataBase
  {
    var $conn;
    var $bloque;
    var $numRegister;
    
    function initialize ($servidor="localhost",$user="userTEST",$pass="1234",$dataBase="amoroso"){
      $this->conn = mysqli_connect($servidor,$user,$pass,$dataBase);
      if($this->conn==null){
        exit;
      }
    }

    function consulta($query){ //SELECT
      $this->initialize();
      $this->bloque = mysqli_query($this->conn,$query);
      
      if(strpos(strtoupper($query),"SELECT")!==false){
        $this->numRegister = mysqli_num_rows($this->bloque);
        return $this->numRegister;
      } else {
        // INSERT NECESITAMOS EL ID
      }
      $this->closeDatabase();
    }

    function saca_tupla($query){
      $this->consulta($query);
      return mysqli_fetch_object($this->bloque);
    }

    function closeDatabase(){
      mysqli_close($this->conn);
    }

    /*========FUNCION QUE DESPLIEGA LA TABLA======= */
    function despliegaTabla($query, $p_iconos=array(), $anchoCol=array(), $p_colorRenglon="table-dark"){
      
      $this->consulta($query);
      
      $resultado='<table class="table col-md-10 center">';
    /*========= CABECERAS ===========*/
      $resultado.='<tr>';
      for ($contadorCol=0; $contadorCol < mysqli_num_fields($this->bloque); $contadorCol ++){
        $campo = mysqli_fetch_field_direct($this->bloque,$contadorCol);
        $resultado.='<th width="'.$anchoCol[$contadorCol].'">'.$campo->name.'</th>';
      }
      $resultado.='</tr>';
    /*========= FIN DE LAS CABECERAS ==========*/

      for($contadorRow=0; $contadorRow < $this->numRegister ; $contadorRow++){
        $resultado.='<tr '.(($contadorRow%2)?'class="'.$p_colorRenglon.'"':"").'>';
        //Iconos de accion
        /*for($cont = 0; $cont< count($p_iconos); $cont++){
          $resultado.='<td><img src="" /></td>';
        }*/
        //Fin de los iconos de accion
        $tupla = mysqli_fetch_array($this->bloque);

        for ($contadorCol=0; $contadorCol < mysqli_num_fields($this->bloque); $contadorCol ++) { 
          $resultado.='<td>'.$tupla[$contadorCol].'</td>';// MOSTRAR LA INFORMACION DE LAS COLUMNAS
        }

        /*======== IMPRIME LOS ICONOS ======= */
        if(in_array("delete",$p_iconos))
        $resultado.='<td width="5%"><ul id="navlist"><li id="delete"><a href="index.php"></a></li></ul></td>';
        //$resultado.='<td width="5%"><img src="img/trash.png"/></td>';
        if(in_array("edit",$p_iconos))
        $resultado.='<td width="5%"><ul id="navlist"><li id="edit"><a href="index.php"></a></li></ul></td>';
        if(in_array("add",$p_iconos))
        $resultado.='<td width="5%"><ul id="navlist"><li id="add"><a href="index.php"></a></li></ul></td>';

        $resultado.='</tr>';
      }
      $resultado.='</table>';

      return $resultado;
    }

  }
  
  /*function hola(){
    echo "Hola";
  }*/

  $objeBD = new dataBase();
  //echo $objeBD->despliegaTabla("SELECT * from usuario");
  //echo despliegaTabla("SELECT * FROM usuario", array("edit"));
  //hola();
?>