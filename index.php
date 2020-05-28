
<!DOCTYPE html>
<html>
<head>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Position - Image Cycler</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  body {
    margin: 0;
  }
  #container {
    overflow: hidden;
    position: relative;
    height: 400px;
  }
 
  img {
    position: absolute;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    function left( element, using ) {
      element.position({
        my: "right middle",
        at: "left+25 middle",
        of: "#container",
        collision: "none",
        using: using
      });
    }
    function right( element, using ) {
      element.position({
        my: "left middle",
        at: "right-25 middle",
        of: "#container",
        collision: "none",
        using: using
      });
    }
    function center( element, using ) {
      element.position({
        my: "center middle",
        at: "center middle",
        of: "#container",
        using: using
      });
    }
 
    left( $( "img:eq(0)" ) );
    center( $( "img:eq(1)" ) );
    right( $( "img:eq(2)" ) );
 
    function animate( to ) {
      $( this ).stop( true, false ).animate( to );
    }
    function next( event ) {
      event.preventDefault();
      center( $( "img:eq(2)" ), animate );
      left( $( "img:eq(1)" ), animate );
      right( $( "img:eq(0)" ).appendTo( "#container" ) );
    }
    function previous( event ) {
      event.preventDefault();
      center( $( "img:eq(0)" ), animate );
      right( $( "img:eq(1)" ), animate );
      left( $( "img:eq(2)" ).prependTo( "#container" ) );
    }
    $( "#previous" ).on( "click", previous );
    $( "#next" ).on( "click", next );
 
    $( "img" ).on( "click", function( event ) {
      $( "img" ).index( this ) === 0 ? previous( event ) : next( event );
    });
 
    $( window ).on( "resize", function() {
      left( $( "img:eq(0)" ), animate );
      center( $( "img:eq(1)" ), animate );
      right( $( "img:eq(2)" ), animate );
    });
  } );
  </script>
</head>

<style type="text/css">
  
footer{
  border:10px groove lavender;
   background: white;
    bottom:0; 
    color:pink;
   float:relative;
  
  width:97em ;
  height:10em;
  margin-right:1em}

</style>

<body style="background: grey">


 

<div id="container">
  <img src="imagenes01/hd1.jpg" width="458" height="308" alt="Random">
  <img src="imagenes01/hd2.jpg" width="450" height="300" alt="buscar">
  <img src="imagenes01/hd3.jpg " width="500" height="350" alt="computador">
 
  <a id="previous" href="#">|   Anterior  |</a>
  <a id="next" href="#">   |   Siguiente  |</a>
</div>
 


  <nav class="nave">
<table >
<tr>

<td><a href=index.php><p style="font-size: 1.6em; background-color:white;font-family:Bernard MT Condensed;">|INICIO|</p></td>


<td><a href=4SSantiagoGutierrezWendy17.html><p style=" font-size: 1.2em; background-color:white;font-family:Bernard MT Condensed;">|T&eacute;cnicas De Pintura|</p></td>


<td><a href=4SSantiagoGutierrezWendy18.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">|Buscador|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy19.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">|Deslizar|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy20.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">|Delfines|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy21.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Suculentas|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy22.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Colorear|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy23.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Elefantes|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy24.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Futbol|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy25.html><p style="font-size: 1.2em;background-color:white;font-family:Bernard MT Condensed;">
|Tim Burton|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy26.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Valor|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy27.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Anuncio|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy28.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Video|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy29.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">
|Descarga|</p></a></td>

<td><a href=4SSantiagoGutierrezWendy30.html><p style="font-size: 1.6em;background-color:white;font-family:Bernard MT Condensed;">|Galery|</p></a></td>



</tr>
</table>
</nav>

<br><br><br><br><br><br><br><br>


<h1 style="text-align: center; font-family: Bernard MT Condensed; color: white;"> Esta p&aacute;gina contiene diversos temas algo RANDOM</h1>

<div align="center">
 <footer ><br><br><br>
 |
 <span>  Wendy Santiago Gutierrez 🤓</span>
 |
 <span>Programaci&oacuten 🖥️ </span>
 |
 <span> Mayo,2020</span>
 </footer>
 </div>
</body>

</html>