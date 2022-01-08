// SweetAlert
$(document).ready(function() {

  $('.btn-hapus').click( function() {

    var id = $(this).attr('data-id');
    var title = $(this).attr('data-title');

    Swal.fire({
      title: 'Hapus Data',
      text: "Yakin ingin menghapus "+ title +"?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#435EBE',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $(`#hapus-${id}`).submit();
      }
    });

  });
  
  $('.hapus-gbr').click( function() {

    var id = $(this).attr('data-id');
    var title = $(this).attr('data-title');

    Swal.fire({
      title: 'Hapus Gambar',
      text: "Yakin ingin menghapus gambar untuk "+ title +"?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#435EBE',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $(`#hapus-gbr-${id}`).submit();
      }
    });

  });

});

// ToolTip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})