<!DOCTYPE html>
<html>
<head>
  <title>Tutorías</title>

  <style>
    .button {
      background-color: #008CBA; /* blue */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
    }

    .botonAgregar {
      background-color: #4CAF50; /* blue */
      border: none;
      color: white;
      padding: 15px 30px;
      margin-bottom: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
    }

    .botonModificar {
      background-color: #008CBA; /* blue */
      border: none;
      color: white;
      padding: 15px 32px;
      margin-bottom: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
    }

    .botonEliminar {
      background-color: #f44336; /* blue */
      border: none;
      color: white;
      padding: 15px 32px;
      margin-bottom: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
    }

    input[type=text], select, input[type=email], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    nav{
      position:relative;
      margin:auto;
      width:100%;
      height:auto;
      background:black;
    }

    nav ul{
      position:relative;
      margin:auto;
      width:100%;
      text-align: center;
    }

    nav ul li{
      display:inline-block;
      width:10%;
      line-height: 50px;
      list-style: none;
    }

    nav ul li a{
      color:white;
      text-decoration: none;
    }

    section{
      position: relative;
      margin: auto;
      width:90%;
    }

    section h3{
      position: relative;
      margin: auto;
      padding:10px;
      text-align: center;
    }

    section form{
      position:relative;
      margin:auto;
      width:500px;
    }

    section form input{
      display:inline-block;
      padding:10px;
      width:95%;
      margin:5px;
    }

    section form input[type="submit"]{
      position:relative;
      margin:20px auto;
      width:500px;
    }

    table {
      background: #FFFFFF;
      border: solid 1px #DDDDDD;
      margin-bottom: 1.25rem;
      table-layout: auto; 
    }

    table thead {
      background: #F5F5F5; 
    }
    table thead tr th,
    table thead tr td {
      color: #222222;
      font-size: 0.875rem;
      font-weight: bold;
      padding: 0.5rem 0.625rem 0.625rem; 
    }
    table tbody tr td{
      padding: 0.5rem 0.625rem 0.625rem; 
    }
  </style>

</head>

<body>

<?php include "modules/navegacion.php"; ?>


<section>

<?php 
$mvc = new MvcController();
$mvc -> enlacesPaginasController();
?>

</section>
  
</body>

</html>

