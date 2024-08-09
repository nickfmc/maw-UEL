  <footer class="o-section c-page-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
  <div class="c-page-footer-topper">
      <div class="o-wrapper-wide">
        <div class="c-page-footer-topper--intro">
        <p><strong>ASME-certified</strong> 
         We manufacture and design pressure vessels, modules, piping, heat exchangers, and steel and stainless-steel tanks, ensuring every product meets rigorous certification requirements.
        </p>
        </div>
          <div class="c-page-footer-topper-cert">
            <?php if( have_rows('certifications', 'options') ): ?>
              
             <?php while( have_rows('certifications', 'options') ): the_row(); ?>
            <div>
            <?php
            $image = get_sub_field('certification', 'options');
            $size = 'full';
            if($image){
             echo wp_get_attachment_image($image, $size);
            }
            ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        
      </div>
    </div>

    <div class="c-page-footer-upper">
      <div class="o-wrapper-wide">
      <div class="grid-x">
          <div class="cell  medium-3">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
              <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php endif; ?>
          </div>
          <div class="cell  medium-3">
          <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
          <?php endif; ?>
          </div>
          <div class="cell  medium-3">
          <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <?php dynamic_sidebar( 'footer-3' ); ?>
          <?php endif; ?>
          </div>
          <div class="cell  medium-3">
          <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
            <?php dynamic_sidebar( 'footer-4' ); ?>
          <?php endif; ?>
          </div>
        </div>
        <!-- /.c-footer-widgets -->
        
        <!-- /.c-logo-copy-wrap -->
      </div>
      <!-- /.o-wrapper-wide -->
    </div>
    <div class="c-page-footer-lower">
      <div class="o-wrapper-wide">
        <div class="">
            <div class="c-copywrite">
              &copy; <?php echo date('Y'); ?> Ralmax Group of Companies. All Rights Reserved.
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /.c-page-footer --> 


  <div class="c-ralmax-wrapper">
    <div class="c-ralmax-group">
        <a href="#" target="_blank">
        <img src="<?php bloginfo( 'template_url' ) ?>/img/Ralmax-Group-logo_centered_colour.svg" alt="Ralmax Logo" />
        </a>
      </div>
    
      <div class="c-ralmax-links">
        <div><a href="https://ralmax.com" target="_blank">
        <img src="<?php bloginfo( 'template_url' ) ?>/img/ralmax-logo-full.svg" alt="Ralmax Logo" />
        </a><p><a href="https://ralmax.com" target="_blank">Ralmax Group of Companies</a> is a diversified group of local industrial businesses focused in and around Victoria's working harbour. The Ralmax Group is also a partner in Salish Sea Industrial Services Ltd. with the Songhees and Esquimalt Nations.</p>
      </div>
    </div>
  </div>


  <?php // get_template_part( 'template-part/navigation/nav-modal' ); ?>

  <!-- all js scripts are loaded in lib/gdt-enqueues.php -->
  <?php wp_footer(); ?>

</body>
</html>
