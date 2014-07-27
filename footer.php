      </div> <!-- /container -->
      </div>    

      <footer>
      	<div class="container">
      	<div class="row footer-widgets">
      			<div class="col-xs-6 col-sm-4 col-md-3 col-md-offset-1">
      				<div class="footer-1">
      					
      					<?php if ( !dynamic_sidebar( 'footer-left' ) ) : ?>
						<h3>Footer Widget 1</h3>
						<p class="alert alert-danger">Put Text Widget Here</p>
      					<?php endif; ?>
      					
      				</div>
      			</div>
      			<div class="col-xs-6 col-sm-4 col-md-3">
      				<div class="footer-2">
      					
      					<?php if ( !dynamic_sidebar( 'footer-center' ) ) : ?>
      					<h3>Footer Widget 2</h3>
      					<p class="alert alert-danger">Put Text Widget Here</p>
      					<?php endif; ?>
      					
      				</div>
      			</div>
      			<div class="col-xs-12 col-sm-4 col-md-5">
      				<div class="footer-3">
      					
      					<?php if ( !dynamic_sidebar( 'footer-right' ) ) : ?>
      					<h3>Quick Message</h3>
      					<p class="alert alert-danger">Put Contact Form 7 Widget Here</p>
      					<?php endif; ?>
      					
      				</div>
      			</div>
      		</div>
      	</div>
      	<p class="copyright">All Rights Reserved @ W&amp;OD Trails</p>
      </footer>



      <div class="modal fade" id="contactForm">
      	<div class="modal-dialog">
      		<div class="modal-content">
      			<div class="modal-header">
      				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      				<h4 class="modal-title">Contact Us</h4>
      			</div>
      			<div class="modal-body">
      				<?php 

      				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }

      				?>
      			</div>
      			<div class="modal-footer">
      				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			</div>
      		</div><!-- /.modal-content -->
      	</div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


      <?php wp_footer(); ?>

  </body>
  </html>