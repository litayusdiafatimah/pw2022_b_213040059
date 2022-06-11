// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// ditambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // Buat objek ajax
  var xhr = new XMLHttpRequest();

  //   cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/film.php?keyword=" + keyword.value, true);
  xhr.send();
});
