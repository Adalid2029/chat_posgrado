<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/chat.css">

  </head>
  <body>
  <?php
  $session = session(); ?>
    <header>
      <section class="menu">
        <div class="seccion-Perfil">
        <div class="usuario">
            <div class="avatar">
              <img src="../public/icono1.jpg">
            </div>

            </div>
          </div>
      </section>
      <section class="men">
        <div class="seccion-chat">
          <div class="usuario-seleccionado">
            <div class="usuario">
              <div class="avatar">
               <img src="../public/icono2.jpg">
              </div>
            </div>
              <div class="cuerpo">
                  <span><?=$session->nombre?></span>
                  <span>Activo - Escribiendo...</span>
              </div>

            <a type="submit" class="btn btn-secondary">
             <svg class="bi bi-three-dots-vertical" fill="currentColor"  viewBox="0 0 16 16">
             <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
            </a>
            <div class="action_menu">
            <ul>
              <li>View profile</li>
              <li>Add to close friends</li>
              <li>Add to grou</li>
              <li>Cerrar Sesion</li>
            </ul>
          </div>
						</div>
            </div>
      </section>
    </header>
    <main>
      <section class="buscador">
        <div class="seccion-buscar">
           <div class="input-buscar">
               <input type="search" placeholder="Buscar usuario">
               <i class="fas fa-search"></i>
           </div>
       </div>
      </section>
      <section class="mensaje">
      <?php foreach($user as $row) : ?>
            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
              <div class="media"><img src="../public/icono2.jpg"height="50" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                  <span><?= $row->nombre ?></span><small class="small font-weight-bold">14 Dec</small>
                  </div>
                  <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>
                </div>
              </div>
            </a>
            
              <?php endforeach; ?>
      </section>
      
    </main>
    <nav>
      <section class="mens">
        <div class="mesgs">
        <div class="msg_history">
        <div class="incoming_msg">
        <div class="received_msg">
          <div class="received_withd_msg">
            <p>Hola jsgdhgsjhdgsbhds hdsfudfd mjhsdfjdsfs hdsgfhdgf hsdgfdhgfdjsj mdnf</p>
          </div>
        </div>
        <div class="outgoing_msg">
          <div class="sent_msg">
          <p>que tal como tas wjhhdjbdnvbxc xhsdhgsdhsgdhsvx hndhsnvcgshv</p>
        </div>
        </div>
        </div>

      </section>
      <section class="mas">
        <div class="panel-escritura">
          <form class="textarea">
              <div class="opcines">
              <a type="submit" class="btn btn-default">
              <svg class="bi bi-emoji-smile" fill="currentColor"viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
              </svg>
              </a>
                  <a type="submit" class="btn btn-default">
                  <svg class="bi bi-link-45deg"fill="currentColor"viewBox="0 0 16 16">
                  <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                  <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                  </svg>
                  </a>
              </div>
              <textarea type="text"placeholder="Escribir mensaje"></textarea>
              <button class="btn btn-success" type="submit">enviar</button>

          </a>
          </form>
      </div>
      </section>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('#formulario-envio').on('submit', function(e) {
      e.preventDefault();
      $.post('', $(this).serialize(), function(r) {

      })
    })
  })
</script>
  </body>
</html>
