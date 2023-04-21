<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/funciones.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- background-image:url(https://cdn.pixabay.com/photo/2018/02/11/09/43/block-chain-3145376_960_720.jpg)-->

    <title>Mi pagina Web</title>
</head>
<body class="bg-dark " style="height: 100%;">



<nav class="navbar navbar-expand-lg bg-dark navbar-dark w-100">
  <div class="container-fluid w-100">
    <a class="navbar-brand" href="#"><img class="gradient-box img-fluid rounded rounded-circle" style="width:60px;text-align:right ; margin-top: 0;" src="assets/images/perfiladrian.png"  ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mt-5">
            <a class="nav-link mx-3" href="#">Acerca de mi</a>
            </li>
            <li class="nav-item mt-5">
            <a class="nav-link mx-3" href="#">Conocimientos</a>
            </li>
            <li class="nav-item mt-5">
            <a class="nav-link mx-3" href="#">Certificados</a>
            </li>
            <li class="nav-item mt-5">
            <a class="nav-link mx-3" href="#">Experiencia</a>
            </li>
            <li class="nav-item mt-5">
            <a class="nav-link mx-3" href="#">Proyectos</a>
            </li>
      </ul>
      <form class="d-flex mt-3">
        <input class="form-control me-2 mt-5 mx-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success mt-5 mx-3" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

    <div class=" bg-dark" style="height: 100%;" >

    </div>
    <div class="container bg-dark" style="height:fit-content">
        <div class="w-100 bg-dark" style="min-height: 700px;">
            <div class="row ">
                <h1 style="text-align: center; color:white; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><strong>Hola</strong></h1>
                <br>
                <p style="text-align: center; color:white; font-size: 25pt;">Mi nombre es  <strong>ADRIAN CRISTIAN RAYME</strong> </p>
                <div id="perfil" class=" text-center col-sm " > 
                    <div class=" p-1">
                        <br>
                        <img class="gradient-box img-fluid " style="  border-radius: 200pt;" src="assets/images/perfiladrian.png"  > 
                        <br>
                        <br>
                        <p style="text-align: center; color:white; font-size: larger;">Bachiller en ingenieria Informatica y de Sistemas</p>
                      
                        <button id="btnmasinfo" class="btn bg-info m-4 p-2 w-25" style="color: white;" onclick="masinfo()"> <strong> Mas</strong></button>
                    </div>
                </div>
                <div id="detalle" class="col-sm text-center m-auto" style="display: none;" >
                <div class="p-1 m-auto">
                    
                        <h1 style="text-align: center; color:white">Detalle</h1>
                        <br>
                        <p class=" m-4" style="text-align: justify; color:white; font-size:16pt">Estudie en la Universidad San Ignacio de Loyola,Lima-Peru, en el periodo de 2015-2020. Actualmente, trabajo en la empresa Dimos Peru como asistente de sistemas. 
                        En la cual mis principales funciones son el desarrollo de soluciones para puntos de venta (Ventas, compras, inventarios, reportes, base datos y facturacion electronica).</p>
                        <br>
                        <button id="btnmmenosinfo" class="btn bg-info m-4 p-2 w-25" style="color: white;" onclick="menosinfo()"><strong> Menos</strong></button>
                    </div>
                </div>
            </div>
            <br>
               <h1 style="text-align: center; color:white;text-decoration: underline gray;">Mis Conocimientos</h1> 
             <br>
           <div class="row">
         
             <br>
            <div class="col-sm-2 text-center"> <img src="https://d2vqpl3tx84ay5.cloudfront.net/tumblr_lsus01g1ik1qies3uo1_400.png" width="100px"> <button class="btn w-100 b-0" style="color: yellow;">Javascript</button></div>
            <div class="col-sm-2 text-center"> <img src="https://aspnetcoremaster.com/img/csharp.webp" width="100px"><button class="btn  w-100 b-0" style="color: blueviolet;">C#.Net</button></div>
            <div class="col-sm-2 text-center"> <img src="https://techcommunity.microsoft.com/t5/image/serverpage/image-id/283585i32E35734ADB2BDF9" width="100px"> <button class="btn  w-100 b-0" style="color: yellow;">SQL</button></div>
            <div class="col-sm-2 text-center"> <img src="https://ventiv.solutions/wp-content/uploads/2021/02/mySQL-logo.png" width="100px"><button class="btn  w-100 b-0" style="color: blueviolet;">MySql</button></div>
            <div class="col-sm-2 text-center"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/2048px-HTML5_logo_and_wordmark.svg.png" width="100px"> <button class="btn  w-100 b-0" style="color: yellow;">HTML</button></div>
            <div class="col-sm-2 text-center"> <img src="https://cdn-icons-png.flaticon.com/512/919/919826.png" width="100px"><button class="btn  w-100 b-0" style="color: blueviolet;">CSS</button></div>
            <div class="col-sm-2 text-center"> <img src="https://d2vqpl3tx84ay5.cloudfront.net/tumblr_lsus01g1ik1qies3uo1_400.png" width="100px"> <button class="btn w-100 b-0" style="color: yellow;">Javascript</button></div>
            <div class="col-sm-2 text-center"> <img src="https://aspnetcoremaster.com/img/csharp.webp" width="100px"><button class="btn  w-100 b-0" style="color: blueviolet;">C#.Net</button></div>
            <div class="col-sm-2 text-center"> <img src="https://techcommunity.microsoft.com/t5/image/serverpage/image-id/283585i32E35734ADB2BDF9" width="100px"> <button class="btn  w-100 b-0" style="color: yellow;">SQL</button></div>
            <div class="col-sm-2 text-center"> <img src="https://ventiv.solutions/wp-content/uploads/2021/02/mySQL-logo.png" width="100px"><button class="btn  w-100 b-0" style="color: blueviolet;">MySql</button></div>
            <div class="col-sm-2 text-center"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/2048px-HTML5_logo_and_wordmark.svg.png" width="100px"> <button class="btn  w-100 b-0" style="color: yellow;">HTML</button></div>
            <div class="col-sm-2 text-center"> <img src="https://cdn-icons-png.flaticon.com/512/919/919826.png" width="100px"><button class="btn  w-100 b-0" style="color: blueviolet;">CSS</button></div>

           </div>
           <br>
           <div class="">
            <h1 style="text-align: center; color:white;text-decoration: underline gray;">Mis Certificados</h1>
            <div class="row my-3 ">
                    <div class="col-sm-6">
                    <img src="https://www.dimosperu.com.pe/assets/images/main.PNG" alt="">
                    </div>
                    <div  class="col-sm-6">
                        <h3 style="color:white">Practicante de Sistemas Dimos Peru SAC</h3>
                        <p style="color:gray">Desde 4 enero de 2021 hasta 30 agosto 2021</p>
                        <p style="color:white">Diseño y Desarollo de Pagina Web y Sistema Punto de venta multisucursal(aplicacion de escritorio), con base de datos local y
                         nube con el lenguaje C# winforms (modelo de 3 capas) y MySql.</p>
                    </div>
                </div>
                <div class="row my-3 ">
                    <div class="col-sm-6">
                    <h3 style="color:white">Asistente de Sistemas Dimos Peru SAC</h3>
                    <p style="color:gray">Desde 30 de agosto de 2021 hasta presente</p>
                    <p style="color:white">Despliegue Sistema Punto de venta multisucursal(productos, compras, ventas, inventarios, clientes, proveedores, gastos, 
                        reportes gerenciales y administrativos, facturacion electronica, kardex, gestion de precios y descuentos), implementacion de facturacion electronica,capacitacion a personal,
                         soporte a tiendas y mejora de funcionalidades.</p>
                    </div>
                    <div  class="col-sm-6">
                        <img src="https://www.dimosperu.com.pe/assets/images/main.PNG" alt="">
                    </div>
                </div>

           </div>
           <br>
           <div class="">
            <h1 style="text-align: center; color:white ;text-decoration: underline gray;">Mi Experiencia</h1>
            <br>
                <div class="row my-3 ">
                    <div class="col-sm-6">
                    <img src="https://www.dimosperu.com.pe/assets/images/main.PNG" alt="">
                    </div>
                    <div  class="col-sm-6">
                        <h3 style="color:white">Practicante de Sistemas Dimos Peru SAC</h3>
                        <p style="color:gray">Desde 4 enero de 2021 hasta 30 agosto 2021</p>
                        <p style="color:white">Diseño y Desarollo de Pagina Web y Sistema Punto de venta multisucursal(aplicacion de escritorio), con base de datos local y
                         nube con el lenguaje C# winforms (modelo de 3 capas) y MySql.</p>
                    </div>
                </div>
                <div class="row my-3 ">
                    <div class="col-sm-6">
                    <h3 style="color:white">Asistente de Sistemas Dimos Peru SAC</h3>
                    <p style="color:gray">Desde 30 de agosto de 2021 hasta presente</p>
                    <p style="color:white">Despliegue Sistema Punto de venta multisucursal(productos, compras, ventas, inventarios, clientes, proveedores, gastos, 
                        reportes gerenciales y administrativos, facturacion electronica, kardex, gestion de precios y descuentos), implementacion de facturacion electronica,capacitacion a personal,
                         soporte a tiendas y mejora de funcionalidades.</p>
                    </div>
                    <div  class="col-sm-6">
                        <img src="https://www.dimosperu.com.pe/assets/images/main.PNG" alt="">
                    </div>
                </div>
           </div>
           <br>
           <div class="row">
            <h1 style="text-align: center; color:white ;text-decoration: underline gray;">Mis Proyectos</h1>
            <div class="row my-3 ">
                    <div class="col-sm-6">
                    <img src="https://www.dimosperu.com.pe/assets/images/main.PNG" alt="">
                    </div>
                    <div  class="col-sm-6">
                        <h3 style="color:white">Practicante de Sistemas Dimos Peru SAC</h3>
                        <p style="color:gray">Desde 4 enero de 2021 hasta 30 agosto 2021</p>
                        <p style="color:white">Diseño y Desarollo de Pagina Web y Sistema Punto de venta multisucursal(aplicacion de escritorio), con base de datos local y
                         nube con el lenguaje C# winforms (modelo de 3 capas) y MySql.</p>
                    </div>
                </div>
                <div class="row my-3 ">
                    <div class="col-sm-6">
                    <h3 style="color:white">Asistente de Sistemas Dimos Peru SAC</h3>
                    <p style="color:gray">Desde 30 de agosto de 2021 hasta presente</p>
                    <p style="color:white">Despliegue Sistema Punto de venta multisucursal(productos, compras, ventas, inventarios, clientes, proveedores, gastos, 
                        reportes gerenciales y administrativos, facturacion electronica, kardex, gestion de precios y descuentos), implementacion de facturacion electronica,capacitacion a personal,
                         soporte a tiendas y mejora de funcionalidades.</p>
                    </div>
                    <div  class="col-sm-6">
                        <img src="https://www.dimosperu.com.pe/assets/images/main.PNG" alt="">
                    </div>
                </div>
                

           </div>
           <br>

        </div>
    </div>
    <div class="jumbotron  bg-dark border border-white" style="margin-bottom:0">
    <div class="container bg-dark" style="color:white">
    <div class="row">
    <div class="col-sm m-auto text-center">
    <img class="gradient-box img-fluid rounded rounded-circle" style="width:60px;text-align:right ; margin-top: 0;" src="assets/images/perfiladrian.png"  >

    </div>

    <div class="col-sm"> 
        <div id="foder">
          <h3 id="fg" class="text-center">Mas Informacion</h3>
          <br>
                <ul>
                <li>
                    <h5>Correos:</h5> 
                    <a> adrian.rayme.ospina@gmail.com</a> <br>
                    <a> reyfn@hotmail.com</a> <br>
                    <a> reyfn21@gmail.com</a> 
                </li>
                <li>
                <h5>Contacto:</h5> 
                    <a> 975918915</a> 
                </li>
                <li>
                <h5>Ubicacion:</h5> 
                    <a> Lima,Peru</a> 
                </li>
                <li>
                    <h5>Horario:</h5> 
                    <a> De Lunes a Viernes,7:00 am a 9:00 pm y Sábado 7:00 am a 1:00 pm</a> 
                </li>
                </ul>               
        </div>
    </div>
    <div class="col-sm m-auto p-auto">    
    <div class="text-center m-auto p-auto">
                    <ul>
                        <li><a href="" ><img src ="https://content.linkedin.com/content/dam/me/business/en-us/amp/brand-site/v2/bg/LI-Bug.svg.original.svg" width="25"> -- Linkedin</a></li>
                        <li><a href="" ><img src ="https://w7.pngwing.com/pngs/639/449/png-transparent-computer-icons-website-icon-text-globe-symmetry-thumbnail.png" width="25"> -- Web</a></li>
                        <li><a href="" ><img src ="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width="25"> -- Github</a></li>
                    </ul>
                </div>
    </div>
    </div>
    <br><br>
    <footer id="footer" class="text-center" >
            <p id="foot1" class="m-auto">
            @Adrian Cristian Rayme Ospina
            </p>
        </footer>
    </div>
</body>
</html>
