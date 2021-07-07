<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <h1>Insert Data</h1>
            <form id="form" action="/insert/save" method="post">
            <?= csrf_field()?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-auto">
                    <label for="birth" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="birth" name="birth">
                </div>
                <div class="col-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-auto">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="col-auto">
                    <label for="status" class="form-label">Nama Siswa</label>
                    <select class="form-select" id="status" name="status">
                        <option selected>...pilih</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Cuti">Cuti</option>
                        <option value="Dropout">Dropout</option>
                        <option value="Skorsing">Skorsing</option>
                    </select>
                </div>
                <button class="btn btn-primary mt-4" type="submit">submit</button>
            </form>
        </div>
    </div>
</div>
<script>
   $(document).ready(function(){
        $("#form").submit(function(event){
            event.preventDefault();

            let form = $(this);
            let url = form.attr('action');
            let method = form.attr('method');
            
            $.ajax({
                type: method,
                url: url,
                data: form.serialize(),
                success: function(data) {
                    alert('success');
                },
                error: () => {
                    alert('failed');
                }
            })

            $("input[name='name']",this).val('');
            $("input[name='birth']",this).val('');
            $("input[name='email']",this).val('');
            $("input[name='phone']",this).val('');
            $("input[name='status']",this).val('');
            
        });
   });
</script>

<?= $this->endSection();?>