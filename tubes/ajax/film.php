<?php 
require '../functions.php';
$keyword = $_GET["keyword"];
$query =  "SELECT * FROM film join genre on genre.id_genre = film.genre WHERE
            judul LIKE '%$keyword%' OR
            genre LIKE '%$keyword%'OR
            durasi LIKE '%$keyword%'OR
            sutradara LIKE '%$keyword%'OR
            pemeran LIKE '%$keyword%'OR
            sinopsis LIKE '%$keyword%'
            ";
$film = query($query);
?>


<table class="table">
    <thead>
            <tr>
                 <th>No.</th>
                 <th>Poster</th>
                 <th>Judul</th>
                 <th>Genre</th>
                 <th>Durasi</th>
                 <th>Sutradara</th>
                 <th>Pemeran</th>
                 <th>Sinopsis</th>
                 <th>Aksi</th>
            </tr>
    </thead>
 <tbody>
      <?php $i = 1; ?>
          <?php foreach( $film as $row): ?>
               <tr>
                  <td><?= $i; ?></td>
                  <td><img src="img/<?php echo $row["poster"]; ?>" class="img-thumbnail" width="300"></td>
                  <td><?= $row["judul"]; ?></td>
                  <td><?= $row["nama_genre"]; ?></td>
                  <td><?= $row["durasi"]; ?></td>
                  <td><?= $row["sutradara"]; ?></td>
                  <td><?= $row["pemeran"]; ?></td>
                  <td><?= $row["sinopsis"]; ?></td>
                 <td>
                   <a href="ubah.php?id=<?= $row["id"]?>"><i class="fa-solid fa-pen"></i></a>
                   <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                          </tbody>
                        </table>
                  