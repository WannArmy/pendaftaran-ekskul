<?php include "../luar.php" ?>

<div class="row">
    <div class="card col-11" style="margin-left:3em;margin-top:1em;">
        <div class="d-flex align-items-end">
            <div class="col-12">
                <div class="card-header">
                    <h2>Form Saran</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="#">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <br>
                        <tr>
                            <td>Kelas</td>
                            <br>
                            <select name='kelas' class="form-control">
                                <option value='X'>X</option>
                                <option value='XI'>XI</option>
                                <option value='XII'>XII</option>
                            </select>
                        </tr>
                        <br>
                        <div class="form-group">
                            <label>Pilih Ekstrakurikuler</label>
                            <select class="form-control">
                                <option>Musik</option>
                                <option>Pramuka</option>
                                <option>Paskibra</option>
                                <option>Basket</option>
                                <option>Futsal</option>
                                <option>Peduli Lingkungan Hidup</option>
                                <option>Badminton</option>
                                <option>Jurnalistik</option>
                                <option>Paduan Suara</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Saran</label>
                            <textarea name="pesan" class="form-control" cols="30" rows="7"></textarea>
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" value="POST">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "../footer.php" ?>