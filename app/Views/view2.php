<?= $this->extend("layout/web") ?>

<?= $this->section("styles") ?>
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/view2.css">
<?= $this->endSection() ?>

<?= $this->section("content") ?>
  <div class="row-fluid" id="navbar_visuales" data-mostrar_herramientas="" style="display:none"> 
    <div class="container">
      <div class="row font-changer internal print">
          <div title="Herramientas de accesibilidad web" class="col-md-2">
            <i class="fa fa-universal-access fa-2x"></i>&nbsp; Accesibilidad Web
          </div>
          <div class="col-sm-10">
            <div class="row">
            <!-- <div class="col-md-12 text-center">Herramientas de accesibilidad web</div> -->
              <div class="col-md-2 options_visuales cursor" title="Aumentar tamaño de la página">
                <div class="aumentarFont"><i class="fa fa-font fa-2x">a+</i><br/>Aumentar tamaño</div>
              </div>
              <div class="col-md-2 options_visuales cursor" title="Disminuir tamañao de la página">
                <div class="disminuirFont"><i class="fa fa-font fa-2x">a-</i><br/>Disminuir tamaño</div>
              </div>
              <div title="Aplicar alto contraste" id="pantalla_mod" data-tipo="" class="col-md-2 cursor options_visuales" onclick="ActivaModoNocturno()">
                <i class="fa fa-adjust fa-2x"></i><br/><span>Alto contraste</span>
              </div>
              <div title="" class="col-md-2 options_visuales cursor" id="estado_narrador">
                <i class="fa fa-play fa-2x"></i><br/> <span>Narrador (Desactivado)<span>
              </div>
              <div title="Ampliar las imagenes al pasar sobre ellas" class="col-md-2 options_visuales cursor" onclick="AmpliarImagen()">
                <i class="fa fa-image fa-2x"></i><br/> Ampliar imagen
              </div>
              <a title="Reestablecer herramientas" onclick="ActivaModoRestablecer()" target="_blank" style="color:#fff !important"  class="col-md-2 options_visuales cursor">
                <i class="fa fa-refresh fa-2x"></i><br/> Restablecer
              </a>
            </div>
          </div>
      </div>
    </div>	
  </div>
  <!---
  <div class="container">
      <input type="text" placeholder="Texto to Speech" id="text" value="hola">
      <div class="conversation"></div>
      <div class="container-button">
        <select id="voices"></select>
        <button id="btnSave"><i class="fas fa-upload"></i>Save text</button>
        <button id="btnLoad" disabled><i class="fas fa-download"></i>Load text</button>
        <button id="btnPlay" disabled><i class="fas fa-play-circle"></i>Play text</button>
      </div>
    </div>
  --->  <!-- nav container -->
      <div id="GobNavbar" class="container-fluid navbar-container-pu op GobNavbar"> 
    

        <div class="container">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-center" href="https://www.col.gob.mx/">
        <!-- <i class="fa fa-home fa-2x" style="color:#fff;"></i>    nav-image-colima-estado -->
          <img src="https://openapis.col.gob.mx/API_PU/img/logomin.jpg" class="img-fluid" title="Ir al portal" alt="colima estado"> 
        </a> 
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
                  <li class="nav-item active">
              <a class="nav-link cursor denuncia-menu" target="_blank" href="https://www.col.gob.mx/coronavirus" >CORONAVIRUS</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.col.gob.mx/Portal/Tramites">Tr&aacute;mites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gobierno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.col.gob.mx/Portal/#sec_atencion" >Cont&aacute;ctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link cursor" target="_blank" href="https://www.col.gob.mx/DatosAbiertos" >Datos</a>
            </li>
            <!-- <li class="nav-item">
              <a href="https://www.col.gob.mx/transparencia" class="nav-link cursor" target="_blank">Transparencia</a>
            </li> -->
          <li class="nav-item">
              <a href="https://www.col.gob.mx/Portal/contenido/NDYzMDY=" class="nav-link cursor" target="_blank">Transparencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link cursor denuncia-menu" href="https://www.col.gob.mx/index.php/Portal/denuncia" >DENUNCIA</a>
          </li>
            <li class="nav-item" >
              <a class="nav-link" id="navbar-search-li-first" href="#" onclick="ocultar(this)"><i alt="Buscar" title="Buscar" class="fa fa-search" aria-hidden="true"></i></a>
            </li>
              
            <form id="formBusqueda" method="GET" action="https://www.col.gob.mx/Portal/detalle_busqueda" class="nav-item display-none" id="navbar-search-li-second">
              <div class="input-group" id="navbar-input-search">
              <input type="text" name="q" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">
                <i alt="Buscar" title="Buscar" class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
            </form>
              
                    </ul>
        </div>
      </nav>
        </div>
    </div> 
  </div>
  <a href="#" class="scrollToTop" id="ScrollTop"></a>
  <script type="text/javascript">	
    function ocultar(elem){
      var id = elem.id;		
      document.getElementById(id).style.display = "none";
      //document.getElementById("navbar-search-li-second").style.display = "inline";
      document.getElementById("formBusqueda").style.display = "inline";
    }

  </script>      
      </div>
    <script type="text/javascript">var controller = "juventud";
  </script>
  <div class="container-fluid navbar-secondary-container">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light navbar-secondary">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavSecondary" aria-controls="navbarNavSecondary" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand color-gray-black" href="https://www.col.gob.mx/juventud">
              <i title="Inicio" class="fa fa-home"></i>
            </a>
            <div class="collapse navbar-collapse" id="navbarNavSecondary">
                            <ul class="navbar-nav secondary-navbar" style="margin-left: 20%;">
                                    <li class="nav-item active">
                      <a class="nav-link page-scroll" title="" href="https://www.col.gob.mx/juventud/#destacados">Destacados <span class="sr-only">(current)</span></a>
                    </li>
                                    <!-- <li class="nav-item">
                                    <a class="nav-link" title="" href="">Multimedia</a>
                                  </li> -->
                                                    <li class="nav-item">
                      <a class="nav-link" title="" href="https://www.col.gob.mx/juventud/#quienes_somos">¿Quiénes somos?</a>
                    </li>
                                                    <li class="nav-item">
                      <a class="nav-link" title="Transparencia" href="https://www.col.gob.mx/juventud/contenido/NDY1Njg=">Transparencia</a>
                    </li>
                                                    <li class="nav-item">
                      <a class="nav-link" title="" href="https://www.col.gob.mx/juventud/#programas">Programas</a>
                    </li>
                                                    <li class="nav-item">
                      <a class="nav-link" title="" href="https://www.col.gob.mx/juventud/#noticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" title="" href=""><button class="btn" style="background-color: #B69664; color: white;">Registrate</button></a>
                    </li>
                                                  
                </ul>
                        </div>
          </nav>
        </div>
      </div>
    </div>
  </div>      
  <div class="container no-padding-pu border-separador ">
    <div class="row mx-2">
      <div class="col-lg-4 pt-3">
        <span class="font-weight-bold"> SUBSECRETARÍA DE LAS JUVENTUDES </span>
      </div>
      <div class="col-lg-8">
        <ol class='breadcrumb pull-right'><li class='breadcrumb-item'><a href='https://www.col.gob.mx/' title='Gobierno del estado de colima'><img class='bread-pbc' src='https://www.col.gob.mx/assets/img/escudo_breadcrum.png' alt='Gobierno colima'>col.gob.mx</a></li><li class='breditem-pt2 breadcrumb-item active'><a href='' title=''>Juventudes</a></li></ol>		</div>
    </div>
  </div>                  
          
  <section class="container-fluid mt-3">

    <div class="row justify-content-center">
      <div class="col-auto">
      <h1 class="padding-left">Credencial Juventudes</h1>    
      </div>
      
      <div class="col-12 separador-secciones-dark-2-pu"></div>
      <span class="col-1 separador-secciones-dark-1-pu"></span>
      
    </div>
    
    <div class="row">
      
    </div>

    <div class="row mt-3">
      <div class="img-from col-lg-2 col-md-2 m-0 p-0">
        <img src="<?= base_url() ?>/assets/images/2-02-02.jpg" class="img-fluid mh-100" alt="img">

      </div>
      <div class="col">
        <form class="needs-validation" novalidate>
          <div class="row mb-3">
            <label for="" class="col-form-label col-sm-3">CURP: </label>
            <div class="col-sm-9">
              <div class=" input-group d-flex has-validation">
                <input type="text" name="" id="curp" class="form-control col" aria-describedby="btn1" required>
              
                <button class="btn" style="background-color: transparent;" id="btn1"><i class="bi bi-search fw-bold" style="color: #612233; font-size: 1rem; font-weight: 500;"></i></button>
                <!-- <p class="mb-0 pt-2 fs-4 text-danger" id="  "></p> -->
                
                <div class="invalid-feedback">
                  Por favor ingresa tu CURP.
                </div>
              </div>
            </div>
                          
            
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Nombre: </label>
              <div class="col-sm-9">  
                <input type="text" name="" id="" class="form-control col" disabled>
              </div>
              
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Apellido paterno: </label>
              <div class="col-sm-9">
                  <input type="text" name="" id="" class="form-control col" disabled>
              </div>
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Apellido materno: </label>
              <div class="col-sm-9">
                  <input type="text" name="" id="" class="form-control col" disabled>
              </div>
              
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Lugar de nacimiento: </label>
              <div class="col">
                  <input type="text" name="" id="" class="form-control" disabled>
              </div>
              
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Municipio de recidencia: </label>
              <div class="col">
                <select class="form-select" aria-label="Default select example">
                  <option value="Armería">Armería</option>
                  <option value="Colima">Colima</option>
                  <option value="Comala">Comala</option>
                  <option value="Coquimatlán">Coquimatlán</option>
                  <option value="Cuauhtémoc">Cuauhtémoc</option>
                  <option value="Ixtlahuacán">Ixtlahuacán</option>
                  <option value="Manzanillo">Manzanillo</option>
                  <option value="Minatitlán">Minatitlán</option>
                  <option value="Tecomán">Tecomán</option>
                  <option value="Villa de Álvarez">Villa de Álvarez</option>
                </select>
              </div>
              
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Fecha de nacimiento:</label>
              <div class="col">
                  <input type="date" name="" id="" class="form-control" disabled>
              </div>
          </div>
          <div class="row mb-3">

              <label for="" class="col-form-label col-sm-3">Correo electronico:</label>
              <div class="col has-validation">
                <input type="email" name="" id="" class="form-control" required>
                <div class="invalid-feedback">
                  Por favor ingresa un correo electronico.
                </div>
              </div>
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Numero de celular:</label>
              <div class="col">
                  <input type="text" name="" id="" class="form-control">
              </div>
          </div>
          <div class="row mb-3">
              <label for="" class="col-form-label col-sm-3">Nombre de padre o tutor:</label>
              <div class="col ">
                  <input type="text" name="" id="" class="form-control">
              </div>

              <fieldset class="row mx-0 my-3 p-0">
                <div class="col-3 pe-0">
                  <label class="co-form-label" style="font-size: 17px;">Interés</label>
                </div>
                <div class="col ps-4">
                  <div class="row justify-content-between">
                    <div class="col-sm-2 p-0">
                      <div class=" form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Educación
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Salud
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                          Deportes
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                        <label class="form-check-label" for="gridRadios5">
                          Promociones
                        </label>
                      </div>
                      
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios4" value="option3">
                        <label class="form-check-label" for="gridRadios4">
                          Cultura
                        </label>
                      </div>
                      
                    </div>
                    <div class="col-sm-3 ml-5 p-0">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                          Economía y negocios
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                        <label class="form-check-label" for="gridRadios5">
                          Empleo
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                        <label class="form-check-label" for="gridRadios5">
                          Cultura política
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                        <label class="form-check-label" for="gridRadios5">
                          Jóvenes
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                        <label class="form-check-label" for="gridRadios5">
                          Migrantes
                        </label>
                      </div>
                        
                    </div>
                    <div class="col-sm-3 p-0 mw-auto" style="max-width: 167px;">
                      <div class=" form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Seguridad
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Proteccion Civil
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                          Capacitacion
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                        <label class="form-check-label" for="gridRadios5">
                          Tics
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                        <label class="form-check-label" for="gridRadios5">
                          Desarrollo Social
                        </label>
                        
                      </div>
                    </div>
                  </div>
                </div>

  
              </fieldset>
          </div>

          <div class="row mb-3">
            <div class="col-3">
              <label for="" class="col-form-label">Ocupación:</label> 
            </div>
            <div class="col">
              <select class="form-select" aria-label="Default select example">
                <option value="1">Estudio</option>
                <option value="2">Trabajo</option>
                <option value="3">Nada</option>
              </select>
            </div>
            
          </div>
          <fieldset class="row mb-3 mx-2 justify-content-between">
              <div class="col p-0" style="max-width: 192px;">
                <label class="co-form-label" style="font-size: 17px;">Interés</label>
              </div>
              <div class="col-lg-2 p-0">
                <div class=" form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Educación
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Salud
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                  <label class="form-check-label" for="gridRadios3">
                    Deportes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                  <label class="form-check-label" for="gridRadios5">
                    Promociones
                  </label>
                </div>
                
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios4" value="option3">
                  <label class="form-check-label" for="gridRadios4">
                    Cultura
                  </label>
                </div>
                
              </div>
              <div class="col-lg-3 ml-5 p-0">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                  <label class="form-check-label" for="gridRadios3">
                    Economía y negocios
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                  <label class="form-check-label" for="gridRadios5">
                    Empleo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                  <label class="form-check-label" for="gridRadios5">
                    Cultura política
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                  <label class="form-check-label" for="gridRadios5">
                    Jóvenes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                  <label class="form-check-label" for="gridRadios5">
                    Inclusión
                  </label>
                </div>
                  
              </div>
              <div class="col-lg-3 p-0 mw-auto" style="max-width: 167px;">
                <div class=" form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Seguridad
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Proteccion Civil
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                  <label class="form-check-label" for="gridRadios3">
                    Capacitacion
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                  <label class="form-check-label" for="gridRadios5">
                    Tics
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option3">
                  <label class="form-check-label" for="gridRadios5">
                    Desarrollo Social
                  </label>
                  
                </div>
              </div>
              
              
          </fieldset>

          <div class="row justify-content-center">
            <div class="col-1">
              <button class="btn text-white" style="background-color: #B69664;" type="submit">Enviar</button>
            </div>
              
            
          </div>  
            
        </form>
      </div>
      <div class="img-from col-lg-2 col-md-2 m-0 p-0">
        <img src="<?= base_url() ?>/assets/images/3-03.jpg" class="img-fluid" alt="img">
      </div>
    </div>
      
    </div>


  </section>
<?= $this->endSection() ?>

