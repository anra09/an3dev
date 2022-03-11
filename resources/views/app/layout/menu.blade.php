        <div class="main-footer-bottom d-block text-center">
            <ul>
                <li>
                    <a href="/" >
                        <img src="assets/img/icon/svg/home.svg" alt="icon">
                        <br>
                        <font size="1">Home</font>
                    </a>
                </li>
                <li class="shop-btn">
                    <a class="menu-bar" data-bs-toggle="modal" data-bs-target="#lengkapidatadiri">
                        <img src="assets/img/icon/plus_kecil.png" alt="img">
                    </a>
                </li>
                <li>
                    <a href="/profile">
                        <img src="assets/img/icon/svg/profile1.svg" alt="img">
                        <br>
                        <font size="1">Profile</font>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Form Pop Up Data Diri-->
<div class="modal fade" id="lengkapidatadiri" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center">
          <h4 class="mb-1">Silahkan Pilih Layanan</h4>
          <p></p>
        </div>
        <form class="row gy-1 pt-75" action="/daftar">
          <div class="col-12 col-md-12 mt-3">
            <label class="form-label" for="penyedia_layanan_id">Layanan</label>
              <select class="form-select" aria-label="Default select example" name="penyedia_layanan_id">
                <option selected>Pilih Penyedia Layanan</option>
                @foreach ($penyedia_layanans as $penyedia_layanan )
                <option value="{{ $penyedia_layanan->id }}">{{ $penyedia_layanan->nama_penyedia }}</option>
                @endforeach
              </select>
          </div>
              <div class="col-12 text-center mt-3 pt-20">
                  <button type="submit" class="btn btn-base we-100">Selanjutnya</button>
                  <br>
                  <br>
                  <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Keluar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@include('sweetalert::alert')

    <!-- all plugins here -->
    <script src="assets/js/jquery.3.6.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imageloded.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/slick-slider.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>

    <!-- main js  -->
    <script src="assets/js/main.js"></script>

</body>
</html>
