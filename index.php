<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina de Tipo responsiva HTML5 y CSS3 Tovar</title>
    <style type="text/css">
  *{
    margin: 0;
    padding: 0;
   }

   @font-face {
font-weight:normal;
font-style:normal;
}

body{
background: #FFF;
color:#F60;
font-family:Helvetica, Verdana;
font-size: 2em;
}

h1{
color:#F60;
margin:0.25em auto;
text-align:center;
text-shadow: 5px 5px 6px #FF0400;
text-shadow: 5px 5px 10px rgba(255,255,255,0.5em);
}

header,nav,footer {
background:#DEDEDE;
border-radius:0.5em;
margin: 0.5em auto;
max-width:960px;
padding:0.25em;
text-align:center;
}

section#contenedor{
margin:0.2em auto;
max-width:960px;
padding:0;
text-align:center;
}

section#principal, aside{
background:#F1F1F1;
border-radius:0.5em;
display: inline-block;
margin:0.25em auto;
max-width:960px;
min-height:200px;
padding:0.25em;
text-align:center;
vertical-align:top;
width:65%;
}

aside{
width:30%;
}

article{
background:#011E30;
border-radius: 0.5em;
min-height:140px;
padding:0.25em;
}
</style>
    
    </head>
    <body>
       <header>
            <h1>Esta es la cabecera de nuestro sitio web</h1>
        </header>
        <nav>
            Esta es nuestra botonera
        </nav>
        <section id="contenedor">
            <section id="principal">
                Esto es una seccion
                <article>
                    Esto es un article
                </article>
            </section>
            <aside>
                Esto es un aside
            </aside>
        </section>
        <footer>
            Este es el pie de nuestra página
        </footer>
 
    </body>
</html>
