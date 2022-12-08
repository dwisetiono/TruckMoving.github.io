    <footer class="footer">
      <div class="container">
        <div class="row">
           <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
            </ul>
          </div> 
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2022 TRUCK<strong style="color: green;">MOVING</strong>
                | Design by <a href="#">DS|Developer</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/assets_shop') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?= base_url('assets/assets_shop') ?>/js/custom.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/owl.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/slick.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/isotope.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //tetapkan bendera yang dihapus untuk setiap bidang
      function clearField(t){                   //mendeklarasikan array di luar
      if(! cleared[t.id]){                      // fungsi membuatnya statis dan global
          cleared[t.id] = 1;  // Anda dapat menggunakan benar dan salah, tetapi itu lebih banyak mengetik
          t.value='';         // dengan lebih banyak kemungkinan kesalahan ketik
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>