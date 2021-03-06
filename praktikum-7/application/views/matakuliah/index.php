<!DOCTYPE html>
<html lang="en">
<head>
<title>Mata Kuliah</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<div class="container">
  <div class="row">
      <h3 class="text-center">Daftar Matakuliah</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>SKS</th>
            <th>Dosen</th>
            <th>Predikat</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($list_matakuliah as $matakuliah) :
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $matakuliah->kode ?></td>
              <td><?= $matakuliah->nama ?></td>
              <td><?= $matakuliah->sks ?></td>
              <td><?= $matakuliah->dosen ?></td>
              <td><?= $matakuliah->predikat() ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>