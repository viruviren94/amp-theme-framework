</div> <!-- .amp-wrapper -->
<footer class="footer container">
        <?php
          global $allowed_html;
          global $redux_builder_amp;
          echo wp_kses($redux_builder_amp['amp-translator-footer-text'],$allowed_html) ;
          if($redux_builder_amp['amp-footer-link-non-amp-page']=='1') { ampforwp_view_nonamp(); } 
          ?>
</footer>