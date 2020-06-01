    <!-- * Formulario HTML * -->
    <form method="POST" name="sentMessage" id="contactForm" action="mail.php">
          <header>
              <h2>Titulo Principal</h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </header>

          <div class="group">    
              <input type="text" placeholder="Nome Completo" name="name" id="name">
          </div>

          <div class="group">    
              <input type="text" placeholder="Telefone" name="telefone" id="telefone">
          </div>

          <div class="group">
              <input type="email" placeholder="Email" name="email" id="email">
          </div>

          <div class="group">    
              <input type="text" placeholder="Mensagem" name="message" id="message">
          </div>

          <button type="submit" class="btn">Enviar</button>
      </form> 