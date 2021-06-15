<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= base_url() ?>/css/chat.css">
  <script src="<?= base_url() ?>/css/chat.js"></script>
  <script>
    const base_url='<?= base_url() ?>';
  </script>
</head>

<body>
  <?php
  $session = session(); ?>
  <header>
    <section class="menu">
      <div class="seccion-Perfil">
        <div class="usuario">
          <div class="avatar  d-flex justify-content-between">
            <img src="<?= base_url() ?>/public/icono1.jpg">
            <p><?= $session->nombre ?></p>
          </div>

        </div>
      </div>
    </section>
    <section class="men">
      <div class="seccion-chat">
        <div class="usuario-seleccionado">
          <div class="usuario">
            <div class="avatar">
              <img src="<?= base_url() ?>/public/icono2.jpg">
            </div>
          </div>
          <div class="cuerpo">
            <?php if (isset($contacto)) : ?>
              <span><?= $contacto->nombre ?></span>
              <span>Activo - Escribiendo...</span>
            <?php endif ?>
          </div>

          <a href="<?= base_url('/usuario/login'); ?>" class="btn btn-secondary">
            <i class="fas fa-power-off"></i>
          </a>
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
      <?php foreach ($user as $row) : ?>
        <a href="<?= base_url('/mensaje/chat/' . $row->_id) ?>" class="list-group-item list-group-item-action list-group-item-light rounded-0">
          <div class="media"><img src="<?= base_url() ?>/public/icono2.jpg" height="50" width="50" class="rounded-circle">
            <div class="media-body ml-4">
              <div class="d-flex align-items-center justify-content-between mb-1">
                <span><?= $row->nombre ?></span>

                <small class="small font-weight-bold">11 de junio</small>
              </div>
              <p class="font-italic text-muted mb-0 text-small">hsgdyas</p>
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
          <div class="incoming_msg" id="bandeja">
            <?php if (isset($contacto)) : ?>
              <?php foreach ($mensajes as $msj) : ?>
                <?php if ($msj->id_remitente == $session->_ideuser) : ?>
                  <!-- llenar datos  -->
                  <div class="outgoing_msg">
                    <div class="sent_msg">
                      <p><?= $msj->mensaje ?><br><?=$msj->hora?></p>
                    
                    </div>
                  </div>
                  <!-- fin llenar datos -->
                <?php else : ?>
                  <!-- llenar datos  -->
                  <div class="received_withd_msg">
                    <div class="received_msg">
                      <p><?= $msj->mensaje ?><br><?=$msj->hora?></p>
                    </div>
                  </div>
                  <!-- fin llenar datos -->
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </section>
    <section class="mas">
      <div class="panel-escritura">
        <form class="textarea" method="POST" action="<?= base_url("mensaje/crearMensaje") ?>">
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
          <?php
          if (isset($contacto)) : ?>
            <textarea type="text" placeholder="Escribir mensaje" name="mensaje"></textarea>
            <input class="form-control" id="idcontacto" type="hidden" name="_idcontacto" value="<?= $contacto->_id ?>">
            <button class="btn btn-primary" type="submit">
              <i class="fas fa-paper-plane">
              </i>
            </button>
          <?php endif ?>

          </a>
        </form>
      </div>
    </section>
  </nav>
</body>

</html>