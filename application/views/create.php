<?php include('header.php');?>
<br>
<main>
<div class="container bg">
    <div class="row justify-content-center">
      <div class="col-12  col-sm-5">
        <?php echo form_open('home/save', ['class'=>'form-container']); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Student Name</label>
            <?php echo form_input(['name'=>'student_name','class'=>'form-control','placeholder'=>'Enter StudentName','value'=>set_value('student_name')]); ?>
            <?php echo form_error('student_name'); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Branch</label>
            <?php echo form_input(['name'=>'student_branch','class'=>'form-control','placeholder'=>'Enter branch','value'=>set_value('student_branch')]); ?>
            <?php echo form_error('student_branch'); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">College Name</label>
            <?php echo form_input(['name'=>'student_college','class'=>'form-control','placeholder'=>'Enter collegename','value'=>set_value('student_college')]); ?>
            <?php echo form_error('student_college'); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <?php echo form_input(['name'=>'student_address','class'=>'form-control','placeholder'=>'Enter address','value'=>set_value('student_address')]); ?>
            <?php echo form_error('student_address'); ?>
          </div>
          <?php echo form_submit(['value'=>'Reset','class'=>'btn btn-primary']); ?>
          <?php echo form_submit(['value'=>'submit','class'=>'btn btn-secondary']); ?>
        </form>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  </main>

<?php include('footer.php');?>