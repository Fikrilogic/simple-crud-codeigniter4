<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <h1>Update Data</h1>
            <form method="post" action="/update/change/<?= $student['id']?>">
                <?= csrf_field()?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Siswa</label>
                    <input name="name" type="text" class="form-control" id="name" value="<?= $student['name']?>">
                </div>
                <div class="col-auto">
                    <label for="birth" class="form-label">Tanggal Lahir</label>
                    <input name="birth" type="date" class="form-control" id="birth" value="<?= $student['birth']?>">
                </div>
                <div class="col-auto">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="<?= $student['email']?>">
                </div>
                <div class="col-auto">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input name="phone" type="number" class="form-control" id="phone" value="<?= $student['phone']?>">
                </div>
                <div class="col-auto">
                    <label name="status" for="status" class="form-label">Status Siswa</label>
                    <select class="form-select" id="status">
                        <option selected value="<?= $student['status']?>"><?= $student['status']?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Cuti">Cuti</option>
                        <option value="Dropout">Dropout</option>
                        <option value="Skorsing">Skorsing</option>
                    </select>
                </div>

                <button class="btn btn-primary mt-4" type="submit">Update</button>
            </form>
        </div>
    </div>

</div>

<?= $this->endSection();?>