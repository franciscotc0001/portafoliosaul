<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body style="background-color: #1f2e3d">


  <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #1f2e3d;">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">MI PORTAFOLIO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sobre-mi">Sobre mí</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#proyectos">Proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#habilidades">Habilidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid" style="height: 100vh;">
    <div class="row h-100">
      <div class="col-5 d-flex align-items-center justify-content-center" style="height: 100vh; background-color:#1f2e3d">
        <img src="{{asset('images/foto.jpeg')}}" class="img-fluid w-100 h-100 rounded-5">
      </div>
      <div class="col-6 mt-3">
        <h1 class="text-white text-start mb-3">👋¡Bienvenido! </h1>
        <h2 class="mb-3 text-white">😎 Hola , soy saul toaza</h2>
        <h3 class="mb-3 text-white">💻 Tecnólogo Superior en Desarrollo de Software</h2>
        <p class="mb-3 text-white fs-5">
          Me apasiona convertir ideas en soluciones digitales que funcionan. Disfruto enfrentando desafíos y aprendiendo nuevas tecnologías que me ayudan a crecer cada día como programador.
        </p>
        <blockquote class="blockquote text-white fst-italic fs-5 mt-4">
          "El software no tiene limites , solo nuevos retos."
        </blockquote>
        <div class="container">
         <a href="{{asset('files/CVToaza.pdf')}}" download class="btn btn-outline-light me-2">📄 Descargar CV</a>
        </div>
      </div>

      <section id="sobre-mi" class="py-5 text-white" style="background-color: #263544;">

          <div class="container">
            <h2 class="text-start mb-4">Sobre mi</h2>
            <div class="row">
              <div class="col-md-6">
                  <p>
                    Mi pasión por la programación comenzó en el colegio, donde me gradué como Técnico en Servicios Informáticos. Más tarde me formé como Tecnólogo Superior en Desarrollo de Software. Desde entonces, he desarrollado aplicaciones, sitios web, videojuegos y más. Programar me hace sentir como si tuviera un superpoder: el de crear soluciones que impactan.
                  </p>
                  <p>
                    Desde mis inicios desarrollé un juego en C# por cuenta propia, y eso marcó mi camino. Me apasiona aprender nuevas tecnologías, actualizarme constantemente y enfrentar retos sabiendo que los voy a superar.
                  </p>
              </div>
              <div class="col-md-6">
                <h3 class="mt-1">💪 Fortalezas personales:</h5>
                <ul>
                    <li>Persistente hasta alcanzar mis objetivos</li>
                    <li>Resolución ágil de problemas lógicos</li>
                    <li>Altamente investigativo y curioso</li>
                    <li>Siempre doy lo mejor de mí en cualquier proyecto</li>
                    <li>Tomo la iniciativa y ayudo sin esperar a que me lo pidan</li>
                    <li>Trabajo excelente en equipo y suelo asumir el rol de liderazgo</li>
                </ul>
              </div>

            </div>
            <div class="row mt-3">
              <div class="col">
                <h3 class="text-center">🛠 Tecnologías favoritas:</h2>
                <div class="d-flex flex-wrap gap-5 mt-4 justify-content-center">
                  <img src="{{asset('images/logopy.png')}}" class="tech-icon rounded-circle" alt="imagenpython">
                  <img src="{{asset('images/laravel.jpg')}}" class="tech-icon rounded-circle" alt="imagenlaravel">
                  <img src="{{asset('images/logophp.png')}}" class="tech-icon rounded-circle" alt="iamgenphp">
                  <img src="{{asset('images/logomysql.png')}}" class="tech-icon rounded-circle" alt="imagenmysql">
                  <img src="{{asset('images/logoandroidstudio.png')}}" class="tech-icon rounded-circle" alt="imagenandroidstudio">
                  <img src="{{asset('images/logobootstrap.jpg')}}" class="tech-icon rounded-circle" alt="imagenbootstrap">
                  <img src="{{asset('images/logogithub.jpg')}}" class="tech-icon rounded-circle" alt="imagengithub">
                </div>

              </div>
            </div>
          </div>
      </section>
      <section id="proyectos" class="bg-light py-5">
        <div class="container-fluid ">
          <h3 class="mb-4">🚀 Proyectos</h3>
          <div class="row gx-5">
            <!--primera tarjeta de presentacion-->
            <div class="col-md-4 mb-4">
              <div class="card shadow-lg h-100">
              <img src="{{asset('images/webuno.jpeg')}}" class="card-img-top object-fit-cover" style="cursor: pointer;"
              data-bs-toggle="modal" data-bs-target="#modalImagen1">
              <div class="card-body" style="height: 460px;">
                <h4 class="card-title text-primary">AppBookIstgweb</h5>
                <h5 class="card-title">Descripcion:</h5>
                <p class="card-text">Este proyecto fue una biblioteca virtual desarrollada para el Instituto Superior Tecnológico Guayaquil, específicamente en su versión web (para computadoras de escritorio).
                con el objetivo de facilitar el acceso a la biblioteca a aquellos estudiantes que no podían asistir de forma presencial.</p>
                <h5 class="card-tittle mb-2">🔧 Framework Utilizado:</h5>
                <p>Laravel</p>
                <h5 class="card-tittle mb-2">💻 Lenguaje de programacion:</h5>
                <p>PHP</p>
              </div>
            </div>
            </div>
            <!--segunda tarjeta de presentacion-->
            <div class="col-md-4 mb-4">
              <div class="card shadow-lg h-100">
                <img src="{{asset('images/pantallasandroid.png')}}" class="card-img-top object-fit-cover;"style="cursor: pointer;"
                data-bs-toggle="modal" data-bs-target="#modalImagen2" >
                <div class="card-body">
                  <h4 class="card-title text-primary">AppBookIstg</h4>
                  <h5 class="card-title">Descripcion:</h5>
                  <p class="card-text">El proyecto consistió en una biblioteca virtual que desarrollé en el IDE Android Studio para dispositivos Android, permitiendo que todos los estudiantes del Instituto Superior Tecnológico Guayaquil tengan acceso a los recursos sin necesidad de asistir de manera presencial</p>
                  <h5 class="card-title mb-1">🔧 Ide De Desarrollo:</h5>
                  <p>Android studio</p>
                  <h5 class="card-title mb-1">💻 Lenguaje de programacion:</h5>
                  <p>Java</p>
                  <h5 class="card-title mb-1">🌐 Link:</h5>
                  <a href="https://play.google.com/store/apps/details?id=istg.edu.ec.appbooks" style="text-decoration: none;">👉 Haz click aqui </a>
                </div>

              </div>
            </div>
            <!--tercer tarjeta de presentacion-->
            <div class="col-md-4 mb-4">
              <div class="card shadow-lg h-100">
                <img src="{{asset('images/generadorqr.png')}}" class="card-img-top object-fit-cover;" style="cursor: pointer;"
                data-bs-toggle="modal" data-bs-target="#modalImagen3">
                <div class="card-body">
                  <h4 class="card-title text-primary">Generado QR</h4>
                  <h5 class="card-title mb-1">Descripcion:</h5>
                  <p class="card-text mb-1">Esta aplicación de escritorio fue desarrollada con Python, utilizando tkinter y ttkbootstrap para una interfaz moderna y responsive. Permite generar y guardar códigos QR personalizados con una experiencia visual elegante, ideal para usuarios que buscan rapidez y claridad.</p>
                  <h5 class="card-title mb-1">🔧 Ide de desarrollo:</h5>
                  <p>Visual Studio Code</p>
                  <h5 class="card-title mb-1">💻 Lenguaje de programacion:</h5>
                  <p>Python</p>
                </div>
              </div>
            </div>

          </div>

          </div>


      </section>
      <div class="modal fade" id="modalImagen1" tabindex="-1" aria-labelledby="modalImagen1Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
              <div class="modal-body text-center p-0">
                <img src="{{ asset('images/webuno.jpeg') }}" class="img-fluid" alt="Imagen grande">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalImagen2" tabindex="-1" aria-labelledby="modalImagen2Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
              <div class="modal-body text-center p-0">
                <img src="{{ asset('images/pantallasandroid.png') }}" class="img-fluid" alt="Imagen grande">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalImagen3" tabindex="-1" aria-labelledby="modalImagen3Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
              <div class="modal-body text-center p-0">
                <img src="{{ asset('images/generadorqr.png') }}" class="img-fluid" alt="Imagen grande">
              </div>
            </div>
          </div>
        </div>


      <!--seccion de habilidades , use varios div y la clase progress y progress-bar-->
      <section id="habilidades" class="py-5 text-white" style="background-color: #1f2e3d;">
        <div class="container">
          <h2 class="mb-4 text-start">📚 Habilidades</h2>
          <!--Frontend-->
          <div class="row">
            <div class="col-md-4 mb-4">
              <h4 class="text-info">Fronted</h4>
              <p>Html</p>
              <div class="progress mb-3">
                <div class="progress-bar bg-info" style="width: 100%;">100%</div>
              </div>
              <p>Bootstrap</p>
              <div class="progress mb-3">
                <div class="progress-bar bg-warning" style="width: 85%;">85%</div>
              </div>
              <p>Css</p>
              <div class="progress mb-3">
                <div class="progress-bar" style="width: 80%; background-color:black;">80%</div>
              </div>

            </div>
            <!--Backend-->
            <div class="col-md-4 mb-4">
              <h4 style="color:greenyellow;">Backend</h4>
              <p>Python</p>
              <div class="progress mb-3">
                <div class="progress-bar bg-success" style="width:100%;">100%</div>
              </div>
              <p>PHP</p>
              <div class="progress mb-3">
                <div class="progress-bar bg-secondary" style="width:75%;">75%</div>
              </div>
              <p>Laravel</p>
              <div class="progress mb-3">
                <div class="progress-bar bg-warning" style="width: 100%;">100%</div>
              </div>
              <p>MySQL</p>
              <div class="progress mb-3">
                <div class="progress-bar bg-primary" style="width:100%;">100%</div>
              </div>

            </div>
            <!--herramienta-->
            <div class="col-md-4 mb-4">
              <h4 class="text-warning">Herramientas</h4>
              <p>Github</p>
              <div class="progress mb-3">
                <div class="progress-bar" style="width:100%; background-color:red;">100%</div>
              </div>
              <p>Postman</p>
              <div class="progress mb-3">
                <div class="progress-bar" style="width: 80%; background-color:blue;">80%</div>
              </div>
              <p>Kanban Flow</p>
              <div class="progress mb-3">
                <div class="progress-bar" style="width: 100%; background-color:indigo;">100%</div>
              </div>
            </div>

          </div>

        </div>
      </section>
      <footer class="text-white py-4" style="background-color:rgba(2, 2, 2, 0.76);" id="contacto">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
              <h5 class="mb-2">🌐 Desarrollado por Francisco Toaza</h5>
              <p class="mb-0">Todos los derechos reservados © 2025</p>
            </div>
            <div class="col-md-6">
              <h5 class="mb-2">Sígueme en</h5>
              <a href="https://github.com/franciscotc0001" target="_blank" class="text-white me-3" style="text-decoration: none;">
                <i class="bi bi-github"></i> 🐙 GitHub
              </a>
              <a href="https://www.linkedin.com/in/saul-toaza-15752b244/" target="_blank" class="text-white me-3" style="text-decoration: none;">
                <i class="bi bi-linkedin"></i>   💼 LinkedIn
              </a>
              <a href="toazacastillof@gmail.com" class="text-white" style="text-decoration: none;">
                <i class="bi bi-envelope"></i>  ✉️ Correo
              </a>
            </div>

          </div>
        </div>
      </footer>


  </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <style>
    .tech-icon {
      width: 70px;
      height: 70px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .tech-icon:hover {
      transform: scale(1.2);
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
      z-index: 2;

    }
  </style>
  <script>
      (() => {
        'use strict'; // Modo estricto para prevenir errores comunes

        const forms = document.querySelectorAll('.needs-validation');
        // Selecciona todos los formularios que tienen la clase .needs-validation

        Array.from(forms).forEach(form => {
          // Recorre todos los formularios seleccionados

          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              // Si el formulario NO es válido...

              event.preventDefault(); // Detiene el envío
              event.stopPropagation(); // Detiene la propagación del evento
            }

            form.classList.add('was-validated');
            // Añade clase para que Bootstrap muestre los mensajes de error
          }, false);
        });
      })();
    </script>



</body>
</html>