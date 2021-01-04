<footer class="footer footer-black  footer-white mb-5">
  <div class="container">
    <div class="row">
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="" target="_blank">NAMA WEBSITE</a>
          </li>
        </ul>
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          @nama website
        </span>
      </div>
    </div>
  </div>
</footer>

<!-- js  -->
<script src="<?= site_url('assets/lpage/js/core/jquery.min.js'); ?>"></script>
<script src="<?= site_url('assets/lpage/js/core/popper.min.js'); ?>"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="<?= site_url('assets/lpage/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?= site_url('assets/lpage/js/paper-kit.js'); ?>" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script type="text/javascript">
  $(document).ready(function() { 
    $("#tahun_ajaran").select2({ width: '100%' });           
  });
  $(document).ready(function() { 
    $("#kelas").select2({ width: '100%' });           
  });
  $(document).ready(function() { 
    $("#pelajaran").select2({ width: '100%' });           
  });
</script>

<script type="text/javascript">
  $(document).ready(function() { 
    $("#tahun_ajaran").select2({ width: '100%' });           
  });
  $(document).ready(function() { 
    $("#kelas").select2({ width: '100%' });           
  });
  $(document).ready(function() { 
    $("#pelajaran").select2({ width: '100%' });           
  });
</script>

<script>
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("lala");
  var sticky = header.offsetTop;

  function myFunction() {
    var winTop = $(window).scrollTop();
    if(winTop >= 50){
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
</script>

<script>
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("lolo");
  var sticky = header.offsetTop;

  function myFunction() {
    var winTop = $(window).scrollTop();
    if(winTop >= 1350){
      header.classList.add("papa");
    } else {
      header.classList.remove("papa");
    }
  }
</script>

<script>
  $(document).ready(function () {
    $(".basicDate").flatpickr({
      enableTime: false,
      dateFormat: "Y-m-d",
    });
  });
</script>

<script>
  $('.scroll').on('click', function (e) {
    var tujuan = $(this).attr('href');
    var elemenTujuan = $(tujuan);
    $('html , body').animate({
      scrollTop: elemenTujuan.offset().top - 68
    });
    e.preventDefault();
  });
</script>

<script type="text/javascript">

  function scroll_to_class(chosen_class) {
    var nav_height = $('nav').outerHeight();
    var scroll_to = $(chosen_class).offset().top - nav_height;

    if($(window).scrollTop() != scroll_to) {
      $('html, body').stop().animate({scrollTop: scroll_to}, 1000);
    }
  }
</script>
<!-- end js  -->

</body>

</html>