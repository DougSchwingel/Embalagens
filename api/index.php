<?php
    $date = date('Y');
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aline Embalagens</title>
    <link rel="shortcut icon" href="./assets/ico.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <header class="navbar-expand-lg">
        <nav class="navbar bg-navbar-color fixed-top">
            <div class="container-fluid px-2">
                <a class="navbar-brand" href="#"><img class="my-0 py-0" style="height: 60px;" src="./assets/logo.png"
                        alt="Logo da Empresa Aline Embalagens"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="./assets/logo.png"
                                alt="Logo da Empresa Aline Embalagens"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="fw-bold nav-link fs-5 active" aria-current="page" href="#">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="fw-bold nav-link fs-5" href="#">Embalagens</a>
                            </li>
                            <li class="nav-item">
                                <a class="fw-bold nav-link fs-5" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"
                class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 img-fluid d-md-none" src="assets/Mobile/banner1-mobile.svg" alt=" ">
                <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="assets/Tablet/banner1-tablet.svg" alt=" ">
                <img class="w-100 img-fluid d-none d-xl-block" src="assets/Desktop/banner1-desktop.svg" alt=" ">
                <div class="carousel-caption position-absolute coord">
                    <h5 class="fs-2 fw-bold bg-text-color my-0 py-3" style="color: black; opacity: 0.6;">Titulo Chamativo</h5>
                    <p class="fs-4 fw-semibold bg-text-color my-0 py-3" style="color: black; opacity: 0.6;">Descrição Chamativa</p>
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img class="w-100 img-fluid d-md-none" src="assets/Mobile/banner2-mobile.svg" alt=" ">
                <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="assets/Tablet/banner2-tablet.svg" alt=" ">
                <img class="w-100 img-fluid d-none d-xl-block" src="assets/Desktop/banner2-desktop.svg" alt=" ">
                <div class="carousel-caption position-absolute coord">
                <h5 class="fs-2 fw-bold bg-text-color my-0 py-3" style="color: black; opacity: 0.6;">Titulo Chamativo</h5>
                    <p class="fs-4 fw-semibold bg-text-color my-0 py-3" style="color: black; opacity: 0.6;">Descrição Chamativa</p>
                </div>
            </div>
            <div class="carousel-item position-relative">
                <img class="w-100 img-fluid d-md-none" src="assets/Mobile/banner3-mobile.svg" alt=" ">
                <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="assets/Tablet/banner3-tablet.svg" alt=" ">
                <img class="w-100 img-fluid d-none d-xl-block" src="assets/Desktop/banner3-desktop.svg" alt=" ">
                <div class="carousel-caption position-absolute coord">
                    <h5 class="fs-2 fw-bold bg-text-color my-0 py-3" style="color: black; opacity: 0.6;">Titulo Chamativo</h5>
                    <p class="fs-4 fw-semibold bg-text-color my-0 py-3" style="color: black; opacity: 0.6;">Descrição Chamativa</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <section>
        <h2 class="text-center my-3 my-xl-5">Empresa</h2>
        <p class="text-justify mx-auto fs-5" style="width: 80%; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at dolor felis. Pellentesque molestie arcu ac justo interdum, eu egestas quam congue. Quisque lacinia sem quis placerat congue. Maecenas nec risus dictum, condimentum purus eget, mattis orci. Nunc non sollicitudin mauris, vitae pharetra orci. Pellentesque mattis vehicula nibh et convallis. Curabitur at eros quis justo varius facilisis a non justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales ligula quis eros vehicula consectetur. Proin ac erat a lorem volutpat viverra. Duis consequat gravida ultricies. Nulla semper ut est et tempus.

Duis vitae elementum urna. Curabitur tincidunt lacinia auctor. Mauris porttitor lacus vel cursus placerat. Morbi a nibh eu quam commodo congue quis non metus. Sed efficitur ipsum ut leo tempor posuere. Proin laoreet mi nec lectus vestibulum, sed vehicula eros viverra. Aenean elementum ac nulla a vehicula.

Morbi suscipit libero aliquet venenatis commodo. Nulla consequat fringilla purus et condimentum. Etiam tellus augue, pretium ac aliquam eu, auctor sit amet arcu. Cras at posuere enim. Morbi id interdum nibh. Duis vitae metus mi. Duis imperdiet, felis non placerat ultrices, arcu nulla consequat sapien, eget rutrum turpis est a mauris. Vestibulum blandit at dolor sed hendrerit. Aenean tincidunt erat ac risus porttitor, vitae sollicitudin quam consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla eleifend libero lectus, at maximus turpis ultricies non. Curabitur auctor, lectus in tristique lobortis, leo metus scelerisque mauris, quis vulputate felis enim vel eros. Donec pretium ante id enim suscipit, ac auctor justo viverra. Sed auctor erat non odio consequat, sed ornare enim finibus. Ut dignissim ex eget est ornare, eget tempor diam consectetur.</p>
    </section>

    <section>
        <h2 class="text-center my-3 my-xl-5">Tipos de Embalagem</h2>
        <div class="d-flex justify-content-evenly row g-5 m-0">
            <div class="col-12 col-md-12 col-xl-5 col-xxl-5">
                <div class="card mb-3 mx-5 rounded-0">
                    <div class="row g-0">
                        <div class="col-5 my-auto">
                            <img src="./assets/modelo_embalagem.svg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-7">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title fs-4 fw-bold">Título Item</h5>
                                    <p class="card-text fs-5">Descrição do Item</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary bg-button-color fs-5 rounded-0 border-0">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-5 col-xxl-5">
                <div class="card mb-3 mx-5 rounded-0">
                    <div class="row g-0">
                        <div class="col-5 my-auto">
                            <img src="./assets/modelo_embalagem.svg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-7">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title fs-4 fw-bold">Título Item</h5>
                                    <p class="card-text fs-5">Descrição do Item</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary bg-button-color fs-5 rounded-0 border-0">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-5 col-xxl-5">
                <div class="card mb-3 mx-5 rounded-0">
                    <div class="row g-0">
                        <div class="col-5 my-auto">
                            <img src="./assets/modelo_embalagem.svg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-7">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title fs-4 fw-bold">Título Item</h5>
                                    <p class="card-text fs-5">Descrição do Item</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary bg-button-color fs-5 rounded-0 border-0">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-5 col-xxl-5">
                <div class="card mb-3 mx-5 rounded-0">
                    <div class="row g-0">
                        <div class="col-5 my-auto">
                            <img src="./assets/modelo_embalagem.svg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-7">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title fs-4 fw-bold">Título Item</h5>
                                    <p class="card-text fs-5">Descrição do Item</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary bg-button-color fs-5 rounded-0 border-0">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-5 col-xxl-5">
                <div class="card mb-3 mx-5 rounded-0">
                    <div class="row g-0">
                        <div class="col-5 my-auto">
                            <img src="./assets/modelo_embalagem.svg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-7">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title fs-4 fw-bold">Título Item</h5>
                                    <p class="card-text fs-5">Descrição do Item</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary bg-button-color fs-5 rounded-0 border-0">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-5 col-xxl-5">
                <div class="card mb-3 mx-5 rounded-0">
                    <div class="row g-0">
                        <div class="col-5 my-auto">
                            <img src="./assets/modelo_embalagem.svg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-7">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title fs-4 fw-bold">Título Item</h5>
                                    <p class="card-text fs-5">Descrição do Item</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-primary bg-button-color fs-5 rounded-0 border-0">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="">
            <h2 class="text-center my-3 my-xl-5">Contato</h2>
            <p class="my-0 mx-5 fs-5">Fixed bottom</p>
        </div>
    </section>

    <footer class="bg-button-color text-center">
        <p class="my-0 mx-5 fs-6"><?php echo('Desenvolvido por Douglas Schwingel - ') .$date ?> </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>