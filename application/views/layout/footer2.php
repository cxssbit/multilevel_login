      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="#" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="#" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?=base_url('assets2/js/core/jquery.min.js')?>"></script>
  <script src="<?=base_url('assets2/js/core/popper.min.js')?>"></script>
  <script src="<?=base_url('assets2/js/core/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('assets2/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="<?=base_url('assets2/js/plugins/chartjs.min.js')?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url('assets2/js/plugins/bootstrap-notify.js')?>"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url('assets2/js/black-dashboard.min.js')?>"></script>
  <script src="<?=base_url('assets2/js/myjs.js')?>"></script>

  <?=validation_errors()?>
  <?php if (!empty($this->session->flashdata('info'))) {
    echo "<script>notify('".$this->session->flashdata('info')."')</script>";
  }?>
</body>

</html>