<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="../js/demo/chart-area-demo.js"></script>
<script src="../js/demo/chart-pie-demo.js"></script>

<!-- Script datepicker for only years -->
<script src="../library/datepicker/js/moment.min.js"></script>
<script src="../library/datepicker/js/custom.js"></script>
<script src="../library/datepicker/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Script and Link for datepicker. disable past date and disable sunday -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Script fancybox -->
<!-- Photo -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script>
var scroll = new SmoothScroll('a[href*="#"]');
</script>

<script>$(document).ready(function() {
$(".fancybox-thumb").fancybox({
    prevEffect	: 'none',
    nextEffect	: 'none',
    helpers	: {
    title	: {
        type: 'outside'
    },
    thumbs	: {
        width	: 50,
        height	: 50
    }
    }
});
});</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>

<!-- Script disable past date  -->
<script>
  $(document).ready(function(){
    var dateToday = new Date();
    var day       = dateToday.getDate();
    var month     = dateToday.getMonth()+1;
    var year      = dateToday.getFullYear();

    if(month < 10)
       month  = '0' + month.toString();
    if(day < 10)
       day    = '0' + day.toString();

    var maxDate   = year + '-' + month + '-' + day;

    $('#dateControl').attr('min', maxDate);
  })
</script>

<!-- datepicker disable sunday and past date -->
<script>
    $(document).ready(function () {
        $("#datePicker").datepicker({
            minDate: new Date(), //disable past date
            beforeShowDay:function(date){ //disable sunday
            var day = date.getDay();
                if (day==0 || day==7){
                return[false];
                } else {
                return[true];
                }
            }
        });
    });
</script>

<!-- Script sweetalert2 for logout -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  const btn_logout = document.getElementById('btn-logout');
  btn_logout.addEventListener('click', function(){
    Swal.fire({
      title: 'Are You Sure ?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      confirmButtonText: 'Yes',
      cancelButtonColor: '#3085d6',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location='../logout.php';
      }
    })
  });
</script>

<!-- Script Custom Upload Profile -->
<script src="../js/app.js"></script>

<!-- Script Sweetalert -->
<?php include "../sweetalert/pesan.php"; ?>