<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashborad</title>
        <link rel="stylesheet" href="dashboard.css">
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="container">
        <nav class="row d-flex align-items-center justify-content-center nav">
            <div class="col-4 p-3">
                <img src="./logos/logo.png" alt="" class="logo">
            </div>
            <div class="col-4 d-flex justify-content-center">
                <input type="search" class="input-search" id="" placeholder=" Busca aquí usando palabras clave">
            </div>
            <div class="col-4 d-flex justify-content-end">
                <div class="dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center btn-dropdown" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="./logos/astronauta.png" class="dropdown-img pe-3">
                      <p class="mb-0 pe-3">Juan Sebastian</p>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item text" href="#"><i class="fa-solid fa-user-astronaut pe-3"> </i> Información del perfil</a></li>
                      <li><a class="dropdown-item text" href="#"><i class="fa-solid fa-star pe-3"></i> Favoritos</a></li>
                      <li><a class="dropdown-item text" href="#"><i class="fa-solid fa-person-walking-arrow-right pe-3"></i> Cerrar sesión</a></li>
                    </ul>
                  </div>
            </div>
        </nav>
    </section>
    <main>
        <div class="row w-100">
                <span class="banner"></span>
        </div>
    </main>
    <section class="container">
        <div class="row">
            <div class="col-md-4 pt-5">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <h3 class="text-acordeon">Productos</h3>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body d-flex flex-column">
                          <a href="" class="product-ancla">Camisas</a>
                          <a href="" class="product-ancla">Chaquetas</a>
                          <a href="" class="product-ancla">Pantalotenas</a>
                          <a href="" class="product-ancla">Sudaderas</a>
                          <a href="" class="product-ancla">Morrales</a>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class="text-acordeon">Preguntas Frecuentes</h3>
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p class="mb-0 descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate est modi iure reprehenderit laborum quod eos accusamus libero hic ut, quis ipsam nostrum magni enim maxime tempore temporibus aliquam nihil.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="text-acordeon">Lorem ipsum dolor.</h3>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p class="mb-0 descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem quidem exercitationem repudiandae nam tempora eos debitis officiis expedita quisquam blanditiis! Facilis nam laborum aperiam obcaecati, dolores illum sapiente alias praesentium!</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-7">
                <div class="row py-5 ps-4">
                    <div class="col-4">
                        <img src="./img/maraton.png" alt="Maraton" class="w-100"> 
                    </div>
                    <div class="col-8 ps-4">
                        <h4 class="title-cards mb-4">
                            Documentación
                        </h4>
                        <p class="descripcion-cards mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, est laboriosam numquam veniam tenetur fugit odio. Exercitationem ipsa illum nostrum natus perspiciatis! Recusandae, mollitia vero! Unde veritatis ipsa ex quasi!</p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-6 col-md-4">
                        <div>
                            <img src="https://authenticfeet.vteximg.com.br/arquivos/ids/227467-1000-1000/Camiseta-Puma-Big-Logo-Masculina-Branco.jpg" alt="" class="mb-4 img-cards">
                            <span class="precio ps-2">$110.000</span>
                            <p class="titulo-cards ps-2">Camisa Puma</p>
                            <p class="descripcion ps-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vitae, soluta quam aspernatur quas adipisci, obcaecati doloremque, quia labore cumque nesciunt architecto itaque ut distinctio id perspiciatis iste cupiditate laudantium!</p>
                            <button class="btn-cards">Agregar</button>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div>
                            <img src="https://deportescaneda.com/uploads/photo/image/2167/gallery_017630_1.JPG" alt="" class="mb-4 img-cards">
                            <span class="precio ps-2">$110.000</span>
                            <p class="titulo-cards ps-2">Camisa Puma</p>
                            <p class="descripcion ps-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vitae, soluta quam aspernatur quas adipisci, obcaecati doloremque, quia labore cumque nesciunt architecto itaque ut distinctio id perspiciatis iste cupiditate laudantium!</p>
                            <button class="btn-cards">Agregar</button>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div>
                            <img src="https://www.deportestrisport.com/uploads/photo/image/1901/gallery_014209_1.JPG" alt="" class="mb-4 img-cards">
                            <span class="precio ps-2">$167.000</span>
                            <p class="titulo-cards ps-2">Chaqueta Nike</p>
                            <p class="descripcion ps-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vitae, soluta quam aspernatur quas adipisci, obcaecati doloremque, quia labore cumque nesciunt architecto itaque ut distinctio id perspiciatis iste cupiditate laudantium!</p>
                            <button type="button" class="btn-cards">Agregar</button>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="my-4">
                            <img src="https://www.traininn.com/f/13748/137483373/nike-chaqueta-con-capucha-sportswear-swoosh-woven.jpg" alt="" class="mb-4 img-cards">
                            <span class="precio ps-2">$167.000</span>
                            <p class="titulo-cards ps-2">Chaqueta Nike</p>
                            <p class="descripcion ps-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vitae, soluta quam aspernatur quas adipisci, obcaecati doloremque, quia labore cumque nesciunt architecto itaque ut distinctio id perspiciatis iste cupiditate laudantium!</p>
                            <button type="button" class="btn-cards">Agregar</button>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="my-4">
                            <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1925271750fb4a479f53ad9e012145bf_9366/Morral_Power_VI_Negro_HB1324_05_hover_standard.jpg" alt="" class="mb-4 img-cards">
                            <span class="precio ps-2">$155.000</span>
                            <p class="titulo-cards ps-2">Morral Adidas</p>
                            <p class="descripcion ps-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vitae, soluta quam aspernatur quas adipisci, obcaecati doloremque, quia labore cumque nesciunt architecto itaque ut distinctio id perspiciatis iste cupiditate laudantium!</p>
                            <button type="button" class="btn-cards">Agregar</button>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="my-4">
                            <img src="https://www.venta-de.com.co/sh-img/adidas-x15_guayos%2Badidas%2Bcopa%2Bmundo.jpg" alt="" class="mb-4 img-cards">
                            <span class="precio ps-2">$120.000</span>
                            <p class="titulo-cards ps-2">Guayos Adidas</p>
                            <p class="descripcion ps-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vitae, soluta quam aspernatur quas adipisci, obcaecati doloremque, quia labore cumque nesciunt architecto itaque ut distinctio id perspiciatis iste cupiditate laudantium!</p>
                            <button type="button" class="btn-cards">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
                <div class="row d-flex align-items-center justify-content-between footer">
                    <div class="col-6 ps-3">
                        <i class="fa-solid fa-font-awesome"></i><a href="#" class="footer-error"> Informar de un Error</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <p class="footer-info mb-0">STP Networks S.A.S. © 2021 — Todos los derechos reservados</p>
                    </div>
                </div>
        </footer>
    </section>



    <!-- JavaScript-->
  <script src="main.js"></script>
  <!-- Bootstrap 5-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
