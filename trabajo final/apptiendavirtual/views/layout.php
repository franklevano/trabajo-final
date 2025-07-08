<!DOCTYPE html>
<html lang="en">
<head>
  <title>TIENDAONLINE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
     <title>Tienda en linea</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Menu de navegación -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Tienda Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarTop" aria-controls="navBarTop" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navBarTop">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Catalogo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://codigosdeprogramacion.com/contacto" target="_blank">Contacto</a>
                    </li>
                </ul>
                
                

                <a href="checkout.php" class="btn btn-primary btn-sm me-2">
                    <i class="fas fa-shopping-cart"></i> Carrito <span id="num_cart" class="badge bg-secondary">0</span>
                </a>

                                    <a href="login.php" class="btn btn-success btn-sm"><i class="fas fa-user"></i> Ingresar</a>
                
            </div>
        </div>
    </nav>
</header>
    <!-- Contenido -->
    <main class="flex-shrink-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                                    <div class="col mb-2">
                        <div class="card shadow-sm h-100">

                                                        <a href="details.php?id=1&token=026a8089ff9ce1c296464138aad4080fe96bd25e">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/61YlnB8rpzL._AC_SL1177_.jpg"
                                width="300" height="300" >
                            </a>

                            <div class="card-body">
                                <p class="card-title">BICICLETA BMX</p>
                                <p class="card-text"><strong>$ 200.00</strong></p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="details.php?id=1&token=026a8089ff9ce1c296464138aad4080fe96bd25e" class="btn btn-primary">Detalles</a>
                                    </div>
                                    <a class="btn btn-success" onClick="addProducto(1, '026a8089ff9ce1c296464138aad4080fe96bd25e')">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col mb-2">
                        <div class="card shadow-sm h-100">

                                                        <a href="details.php?id=2&token=6bef09442476435df6e73be9a94543ac9851af1d">
                                <img src="https://pg-cdn-a2.datacaciques.com/00/MTAzNTMz/20/09/01/8604iebk2l99w6jv/5dc6361e6dc0c05f.png" 
                                width="300" height="300">
                            </a>

                            <div class="card-body">
                                <p class="card-title">Manivela, Aluminio Bicicleta Bielas Bcd 130mm </p>
                                <p class="card-text"><strong>$ 150.00</strong></p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="details.php?id=2&token=6bef09442476435df6e73be9a94543ac9851af1d" class="btn btn-primary">Detalles</a>
                                    </div>
                                    <a class="btn btn-success" onClick="addProducto(2, '6bef09442476435df6e73be9a94543ac9851af1d')">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="col mb-2">
                        <div class="card shadow-sm h-100">

                                                        <a href="details.php?id=3&token=491729fc9f89d4e67a0612624afc970c510872b4">
                                <img src="https://th.bing.com/th/id/OIP.AlE-ManLpdSqJ4Qr78VHZAHaDt?w=350&h=175&c=7&r=0&o=5&pid=1.7" >
                            </a>

                            <div class="card-body">
                                <p class="card-title">PEDALS - BIKE TRIAL. THALASSA</p>
                                <p class="card-text"><strong>$ 200.00</strong></p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="details.php?id=3&token=491729fc9f89d4e67a0612624afc970c510872b4" class="btn btn-primary">Detalles</a>
                                    </div>
                                    <a class="btn btn-success" onClick="addProducto(3, '491729fc9f89d4e67a0612624afc970c510872b4')">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
        </div>
    </main>

</body>
</html>
