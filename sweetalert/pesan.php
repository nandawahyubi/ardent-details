<?php 
if (@$_SESSION['sukses']) { ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'Center',
            icon    : 'success',
            title   : 'Selamat',
            text    : '<?php echo $_SESSION['sukses']; ?>',
            showConfirmButton: false,
            timer   : 1500
            })
    </script>
    <?php unset($_SESSION['sukses']); ?>

<?php }
elseif (@$_SESSION['error']) { ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'Center',
            icon    : 'error',
            title   : 'Maaf',
            text    : '<?php echo $_SESSION['error']; ?>',
            showConfirmButton: true
    })
    </script>
    <?php unset($_SESSION['error']); ?>

<?php }
elseif (@$_SESSION['info']) { ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'Center',
            icon    : 'info',
            title   : 'Info',
            text    : '<?php echo $_SESSION['info']; ?>',
            showConfirmButton: true
    })
    </script>
    <?php unset($_SESSION['info']);} ?>