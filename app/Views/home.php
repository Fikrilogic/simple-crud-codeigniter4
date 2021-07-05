<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<div class="row">
	<div class="col-xs-12">
		<?php if(session()->getFlashData('delete')) :?>
        <div class="alert alert-success">
        <?= session()->getFlashData('delete')?>
        </div>
        <?php endif; ?>
	</div>
	<div class="col-xs-12">
		<?php if(session()->getFlashData('update')) :?>
        <div class="alert alert-success">
        <?= session()->getFlashData('update')?>
        </div>
        <?php endif; ?>
	</div>
</div>
<div class="container-sm mt-4">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Birth</th>
				<th scope="col">Email</th>
				<th scope="col">Phone</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($student as $s): ?>
			<tr>
				<th scope="row"><?= $s['id']?></th>
				<td><?= $s['name']?></td>
				<td><?= $s['birth']?></td>
				<td><?= $s['email']?></td>
				<td><?= $s['phone']?></td>
				<td><?= $s['status']?></td>
				<td class="d-flex justify-content-around">
					<form action="/update/<?= $s['id']?>" method="post">
						<a href="/update/<?= $s['id']?>" class="btn btn-warning">Edit</a>
					</form>
					<form action="/<?= $s['id']?>" method="post">
						<a href="/<?= $s['id']?>" class="btn btn-danger">delete</a>
					</form>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<?= $this->endSection();?>

