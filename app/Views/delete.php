<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <h1>Delete Data</h1>
        </div>
    </div>
    
    <div class="row m-3 d-inline-flex">
        <div class="col-sm-7 mt-3">
            <span>Name: </span>
            <div><?= $student['name']?></div>
        </div>
        <div class="col-sm-7 mt-3">
            <span>Tanggal Lahir: </span>
            <div><?= $student['birth']?></div>
        </div>
        <div class="col-sm-7 mt-3">
            <span>Email: </span>
            <div><?= $student['email']?></div>
        </div>
        <div class="col-sm-7 mt-3">
            <span>Nomor Telepon: </span>
            <div><?= $student['phone']?></div>
        </div>
        <div class="col-sm-7 mt-3">
            <span>Status: </span>
            <div><?= $student['status']?></div>
        </div>
        <form action="/delete/<?= $student['id'];?>" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger mt-3">Delete</button>
        </form>
    </div>
</div>

<?= $this->endSection();?>