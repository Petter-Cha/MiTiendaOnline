<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/header.css">
    <title>MiTienda</title>

</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="icon-laptop">MiTienda</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="<?php echo RUTA.'close.php'?>">Cerrar Sesion</a>
                <a href="">Administrar Categorias</a>
                <a href="#">Principal</a>
                <a href="">Electronicos</a>
                <a href="">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="banner">
            <img src="img/play.jpg">
            <div class="contenedor">
                <h2>Por cual vas?</h2>
                <p>Una batalla sin presedentes, como nuna antes...</p>
                <a href="#">Leer más</a>
            </div>
        </section>
        <section id="Bienvenidos">
                <h2>CATEGORIAS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat! Ut odio qui expedita dolore dolorem,
                laudantium enim quas ea!</p>
            </section>
            <section id="Categorias">
                
                <div class=contenedor>
                    <article>
                        <a href="">
                            <h4>Mixtos</h4>
                        </a>
                    </article>
                    <article>
                        <a href="">
                            <h4>Hombres</h4>
                        </a>
                    </article>
                    <article>
                        <a href="">
                            <h4>Mujeres</h4>
                        </a>
                    </article>
                    </div>
            </section>
            <section id="info">
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam, doloremque!</h3>
                <div class="contenedor">
                    <div class="info-cat">
                        <img src="img/cel.jpg">
                        <h4>iphone X</h4>
                    </div>
                    <div class="info-cat">
                        <img src="img/beats.jpg">
                        <h4>Beats White</h4>
                    </div>
                    <div class="info-cat">
                        <img src="img/lap.jpg">
                        <h4>Laptop Sony</h4>
                    </div>
                    <div class="info-cat">
                        <img src="img/lapt.jpg">
                        <h4>Huawei</h4>
                    </div>
                </div>
            </section>
    </main>
    <footer>
        <div class="contenedor">
            <p class="pie"> MiTienda &copy; 2018</p>
            <div class="redes">
                <a class="icon-facebook" href=""></a>
                <a class="icon-linkedin" href=""></a>
                <a class="icon-twitter" href=""></a>
                <a class="icon-github-circled" href=""></a>
            </div>
        </div>
    </footer>
</body>

</html>
        