  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-12">
            <h4>Instansi Terkait</h4>
              <div class="d-inline-flex p-2"  data-aos-delay="100" data-aos="fade-up">
                <div class="justify-content-between flex-wrap">
                  <a href="https://bkpm.go.id/" target="_blank" class="m-3"><img class="p-2" src="{{ asset('assets/img/logo-instansi/Logo_Kementerian_Investasi_dan_Hilirisasi_BKPM.png') }}" alt="BKPM" style="width: 150px;"></a>
                  <a href="https://www.menpan.go.id/site/" target="_blank" class="m-3"><img class="p-2" src="{{ asset('assets/img/logo-instansi/Logo_PANRB.png') }}" alt="PANRB" style="width: 150px;"></a>
                  <a href="https://oss.go.id//" target="_blank" class="m-3"><img class="p-2" src="{{ asset('assets/img/logo-instansi/OSS-LOGO.svg') }}" alt="OSS" style="width: 150px;"></a>
                  <a href="https://metrokota.go.id/" target="_blank" class="m-3"><img class="p-2" src="{{ asset('assets/img/logo-instansi/LOGO_KOTA_METRO COLOR.png') }}" alt="Pemerintah Kota Metro" style="width: 150px;"></a>
                  <a href="https://mpp.metrokota.go.id/" target="_blank" class="m-3"><img class="p-2" src="{{ asset('assets/img/logo-instansi/LOGO MPP.png') }}" alt="MPP Kota Metro" style="width: 150px;"></a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ '/' }}" class="d-flex align-items-center">
            <span class="sitename"><img src="{{ asset('assets/img/logo-ptsp.png') }}" alt="" style="width: 25%"></span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Kyai Haji Arsyad No.7, Imopuro,</p>
            <p>Kec. Metro Pusat, Kota Metro, Lampung 34125</p>
            <p class="mt-3"><strong>Phone:</strong> <span>(0725) 49638</span></p>
            <p><strong>Email:</strong> <span>pmptspmetrokota@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          {{-- <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul> --}}
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          {{-- <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul> --}}
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti Kami</h4>
          <p>Ikuti Social Media kami untuk mendapatkan Informasi Terkini</p>
          <div class="social-links d-flex">
            {{-- <a href=""><i class="bi bi-twitter-x"></i></a> --}}
            <a href="https://www.facebook.com/people/Mal-Pelayanan-Publik-Kota-Metro/100091939137004/"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/dpmptspmetro/"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@DPMPTSPKotaMetroLampung"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p> © <span>Copyright</span> 2025 <strong class="px-1 sitename">DPMPTSP Kota Metro.</strong> <span>All Rights Reserved</span></p>
      {{-- <div class="credits">
        Designed by <a href="">Robby Satya Wicaksana</a>
      </div> --}}
    </div>

  </footer>

</body>

</html>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  {{-- Data Tables --}}
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>

  <script type="text/javascript">
      $(function () {
          var table = $('#myTable').DataTable({
              processing: true,
              serverSide: true,
          });
      });
  </script>
