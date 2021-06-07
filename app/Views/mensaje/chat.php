<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
      <link rel="stylesheet" href="<?=base_url()?>/css/chat.css">
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
              <i class="fas fa-ellipsis-v">
              </i>
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
            <a href="<?=base_url('/mensaje/chat/'.$row->_id)?>" class="list-group-item list-group-item-action list-group-item-light rounded-0">
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
                <i class="far fa-smile">
                </i>
              </a>
              <a type="submit" class="btn btn-default">
                <i class="fas fa-paperclip">
                </i>
              </a>
              </div>
              <textarea type="text"placeholder="Escribir mensaje"></textarea>
              <button class="btn btn-primary" type="submit">
                <i class="fas fa-paper-plane">
                </i>
              </button>

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
