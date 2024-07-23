<?php defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' ); ?>
<!-- Delete Profile Picture Modal ( User ): -->
<div class="modal" id="delete-ticket-feedback">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form class="z-form" action="<?php user_action( 'support/delete_ticket_feedback' ); ?>" method="post">
        <div class="modal-body">
          <div class="response-message"></div>
          <p class="mb-0"><?php echo lang( 'sure_delete_feedback' ); ?></p>
        </div>
        <!-- /.modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <small><i class="fas fa-times-circle me-2"></i> <?php echo lang( 'no' ); ?></small>
          </button>
          <button type="submit" class="btn btn-danger btn-wide">
            <small><i class="fas fa-check-circle me-2"></i> <?php echo lang( 'yes' ); ?></small>
          </button>
        </div>
        <!-- /.modal-footer -->
        
        <?php if ( ! empty( $security_key ) ) { ?>
          <input type="hidden" name="security_key" value="<?php echo html_escape( $security_key ); ?>">
        <?php } ?>
        
        <input type="hidden" name="id" value="<?php echo intval( $ticket->id ); ?>">
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->