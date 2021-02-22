<?php include('header.php');?>
<br>
<main>
<div class="container">
	<?php if( $error = $this->session->flashdata('response') ):?>
	<div class="alert alert-dismissible alert-success">
		<?php echo $error; ?>
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col">
			<h3>Student Details</h3>
		</div>
		<div class="col-offset-sm-12" class ="">
			<td><?php echo anchor("home/create",'create',['class'=>'btn btn-primary text-right'])?></td>	
		</div>
		
	</div>
	<br>
	<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">Student Name</th>
			<th scope="col">Branch</th>
			<th scope="col">College Name</th>
			<th scope="col">Address</th>
			<th scope="col" colspan="2" style="text-align:center;">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php if( count($records) ): ?>
		<?php foreach( $records as $record){ ?>
			<tr>
				<td><?php echo $record->student_name; ?></td>
				<td><?php echo $record->student_branch; ?></td>
				<td><?php echo $record->student_college; ?></td>
				<td><?php echo $record->student_address; ?></td>
				<td><?php echo anchor("home/edit/{$record->id}",'Update',['class'=>'btn btn-success'])?></td>
				<td><?php echo anchor("home/delete/{$record->id}",'Delete',['class'=>'btn btn-danger'])?></td>
			</tr>
		<?php } ?>
		<?php else: ?>
			<tr>NO Records Found</tr>
		<?php endif; ?>
	</tbody>
	</table>
</div>
</main>

<?php include('footer.php');?>