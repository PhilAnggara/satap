// Image Preview
const inpFile = document.getElementById("gambar");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".ip-image");
const previewDefaultText = previewContainer.querySelector(".ip-default-text");

previewContainer.addEventListener("click", function() {
  console.log("Di klik");
  inpFile.click();
});

inpFile.addEventListener("change", function() {
  const file = this.files[0];
  console.log(file);
  
  if (file) {
    const reader = new FileReader();

    previewDefaultText.style.display = "none";
    previewImage.style.display = "block";

    reader.addEventListener("load", function() {
      console.log(this);
      previewImage.setAttribute("src", this.result);
    });

    reader.readAsDataURL(file);
  } else {
    previewDefaultText.style.display = null;
    previewImage.style.display = null;
    previewImage.setAttribute("src", "");
  }
});

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

// DataTable
let table1 = document.querySelector('#table1');
let dataTable = new simpleDatatables.DataTable(table1, {
  sortable: false,
  perPageSelect: false,
  labels: {
    placeholder: "Cari...",
    perPage: "{select} data per halaman",
    noRows: "Data tidak ditemukan",
    info: "Menampilkan {start} - {end} dari {rows} data",
  }
});


// ToolTip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})