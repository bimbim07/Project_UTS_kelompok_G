<?php
 include '../component/sidebar.php'
?>
 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
 <h4 >PESAN KAMAR</h4>
 <hr>
 <form action="../process/createMahasiswaProcess.php" method="post">
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Tanggal Check-In</label>
 <input class="form-control" type="date" id="cekin" name="cekin" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Tanggal Check-Out</label>
 <input class="form-control" type="date" id="cekout" name="cekout" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Jumlah Kamar</label>
 <input class="form-control" type="number" id="jumlah" name="jumlah" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Jumlah Orang Dewasa</label>
 <input class="form-control" type="number" id="dewasa" name="dewasa" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Jumlah Anak-Anak</label>
 <input class="form-control" type="number" id="anak" name="anak" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Jumlah Kasur Tambahan</label>
 <input class="form-control" type="number" id="kasur" name="kasur" aria-describedby="emailHelp">
 </div>
 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
 <select class="form-select" aria-label="Default select example" name="tipe" id="tipe">
 <option value="Suite Presidential">Suite Presidential</option>
 <option value="Superior Twin">Superior Twin</option>
 <option value="Deluxe Double">Deluxe Double</option>
 <option value="Junior Suite">Junior Suite</option>
 <option value="Superior Double">Superior Double</option>
 </select>
 </div>


 <div class="d-grid gap-2">
 <button type="submit" class="btn btn-primary" name="register">Pesan Kamar</button>
 </div>
 </form>
 </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>