<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<div class="container">
    <div class="col-xs-12 mt-5">
    <table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Birth</th>
				<th scope="col">Email</th>
				<th scope="col">Phone</th>
				<th scope="col">Status</th>
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
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
    </div>
</div>

<?= $this->endSection();?>