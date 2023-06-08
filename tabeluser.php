<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <style>
      .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .button-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
  <div class="container">
    <div class="mt3">
      <h3 class="text-center"></h3>
    </div>

    <div class="mt3">
      <div class="card">
        <div class="card-header bg-primary text-white">Data Mahasiswa</div>
        <div class="card-body">
          <!-- Button trigger modal -->
          <!--<button type="button" class="btn btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#ModalTambah">
            Tambah Data
          </button>-->

          <table class="table table-bordered table-striped table-hover">
            <tr>
              <th>no</th>
              <th>NIM</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th>Jurusan</th>
              <!--<th>Aksi</th>-->
            </tr>
            <?php
            //tampil data
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs ORDER BY id_mhs DESC");
            while ($data = mysqli_fetch_array($tampil)):

              ?>


              <tr>
                <td>
                  <?= $no++ ?>
                </td>
                <td>
                  <?= $data['nim'] ?>
                </td>
                <td>
                  <?= $data['nama'] ?>
                </td>
                <td>
                  <?= $data['alamat'] ?>
                </td>
                <td>
                  <?= $data['prodi'] ?>
                </td>
                <!--<td>
                  <a href="#" class="btn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#ModalUpdate<?= $no ?>">Update</a>
                  <a href="#" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#ModalDelete<?= $no ?>">Hapus</a>
                </td>-->
              </tr>

              <!-- Awal Modal Update-->
              <div class="modal fade" id="ModalUpdate<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Form Update data
                      </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="aksi_crud.php" method="post">
                      <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">
                      <div class="modal-body">
                        <div class="mb-3">
                          <label class="form-label">NIM</label>
                          <input type="text" class="form-control" name="tnim" value="<?= $data['nim'] ?>"
                            placeholder="tuliskan NIM anda" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="tnama" value="<?= $data['nama'] ?>"
                            placeholder="tuliskan Nama Lengkap" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Alamat</label>
                          <input type="text" class="form-control" name="talamat" value="<?= $data['alamat'] ?>"
                            placeholder="tuliskan Email anda" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Prodi</label>
                          <select class="form-select" name="tprodi">
                            <option value="<?= $data['prodi'] ?>"><?= $data['prodi'] ?></option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - TIF">S1 - TIF</option>
                            <option value="S1 - Tekkom">S1 - Tekkom</option>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                          Batal
                        </button>
                        <button type="submit" class="btn btn-primary" name="bupdate">
                          Update
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Akhir Modal Update-->

              <!-- Awal Modal Delete-->
              <div class="modal fade" id="ModalDelete<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Konfirmasi
                      </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="aksi_crud.php" method="post">
                      <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">
                      <div class="modal-body">
                        <h5 class="text-center">Hapus data ini?
                          <br>
                          <span class="text-danger">
                            <?= $data['nim'] ?> -
                            <?= $data['nama'] ?>
                          </span>
                        </h5>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                          Batal
                        </button>
                        <button type="submit" class="btn btn-outline-primary" name="bdelete">
                          Hapus
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Akhir Modal Delete-->
            <?php endwhile; ?>
          </table>

          <!-- Awal Modal Tambah-->
          <div class="modal fade" id="ModalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Form tambah data
                  </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="aksi_crud.php" method="post">
                  <div class="modal-body">
                    <div class="mb-3">
                      <label class="form-label">NIM</label>
                      <input type="text" class="form-control" name="tnim" placeholder="tuliskan NIM anda" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="tnama" placeholder="tuliskan Nama Lengkap" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <textarea class="form-control" rows="3" name="talamat"
                        placeholder="tuliskan Alamat anda"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Prodi</label>
                      <select class="form-select" name="tprodi">
                        <option></option>
                        <option value="D3 - Manajemen Informatika">
                          D3 - Manajemen Informatika
                        </option>
                        <option value="S1 - TIF">S1 - TIF</option>
                        <option value="S1 - Tekkom">S1 - Tekkom</option>
                      </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                      Keluar
                    </button>
                    <button type="submit" class="btn btn-primary" name="bsimpan">
                      Simpan
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--Akhir Modal Tambah-->
        </div>
      </div>
    </div>
  </div>
  <div class="button-container">
        <form action="keluar.php" method="POST">
            <input type="submit" name="keluar" value="Keluar">
        </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>