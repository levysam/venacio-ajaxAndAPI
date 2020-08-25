<div class="newsletter">
	<div class="newsletter-dentro text-center">
		<h6>participe de nossas promoções e receba novidades por email ou whatsapp</h6>

		<!-- Button trigger modal -->
    <button type="button" data-toggle="modal" data-target="#modal-centralizado">Quero Me Cadastrar
    </button>
  </div>
</div>

<div class="newsletter-modal">
  <div class="newsletter-modal-dentro text-center">
    <!-- Modal -->
    <div class="modal fade" id="modal-centralizado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">

    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">


      <div class="modal-content">
        <div class="modal-body">
          <?php echo do_shortcode('[contact-form-7 id="1772" title="Newsletter"]'); ?>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

