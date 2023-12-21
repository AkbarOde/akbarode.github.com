<?php if(@$_SESSION['out']){ ?>
<script>
  Swal.fire({
    icon: 'success',
    title: 'Sukses',
    // text: 'Data Berhasil Di Hapus',
    timer: 3000,
    showConfirmButton: false
  })
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['out']); } ?>


<!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
<script>
  $('.alertOut').on('click', function () {
    var getLink = $(this).attr('href');
    Swal.fire({
      title: "Are You Sure?",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      confirmButtonText: 'Ya',
      cancelButtonColor: '#3085d6',
      cancelButtonText: "No"

    }).then(result => {
      //jika klik ya maka arahkan ke delete.php
      if (result.isConfirmed) {
        window.location.href = getLink
      }
    })
    return false;
  });
</script>