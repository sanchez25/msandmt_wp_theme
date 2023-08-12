    <footer>
      <div class="container">
        <div class="footer-top">
          <span>Plan. Control. Optimize</span>
        </div>
        <?php
          $footer = get_field('footer');
        ?>
        <?php
          if ($footer) {?>
            <div class="footer-copyright">
              <span><?php echo $footer; ?></span>
            </div>
          <?php } ?>
      </div>
    </footer>

    <div class="over-block">
      <div class="modal">
          <div class="modal-wrapper">
              <div class="modal-wrapper-back"></div>
                <div class="modal-window">
                  <div class="modal-window-content">
                    <div class="modal-window-head">
                      <div class="close-modal"></div>
                    </div>
                    <form action="form-message.php" class="contact-form" method="POST">
                      <span class="modal-window-title">Contact us</span>
                      <div class="form-item">
                        <input name="fio" type="text" class="form-item__input" placeholder="NAME *" required>
                        <div class="contact-form__error contact-form__error_name"></div>
                      </div>    
                      <div class="form-item">
                        <input name="email" type="email" class="form-item__input" placeholder="E-MAIL *" required>
                        <div class="contact-form__error contact-form__error_tel"></div>
                      </div>
                      <div class="form-item">
                        <input name="tel" type="tel" class="form-item__input" placeholder="PHONE NUMBER *" required>
                        <div class="contact-form__error contact-form__error_tel"></div>
                      </div>
                      <div class="form-item">
                        <textarea name="text" class="form-item_text" placeholder="YOUR MESSAGE"></textarea>
                      </div>
                      <button class="form-button" type="submit">Sent</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>