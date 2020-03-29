<!DOCTYPE html>
<html>
<?php
  $page = "company_information";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Attendence Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 offset-md-1">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Attendence Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <?php if(isset($update)){ ?>
                <form action="<?php echo base_url(); ?>User/update_company" method="post" enctype="multipart/form-data" role="form">
                  <input type="hidden" name="company_id" value="<?php echo $company_id; ?>">
              <?php }else{ ?>
                <form action="<?php echo base_url(); ?>User/save_company" method="post" enctype="multipart/form-data" role="form">
              <?php } ?> -->
              <form class="input_form" action="" method="post" enctype="multipart/form-data">

                <div class="card-body row">



                  <div class="form-group col-md-12">
                    <label>Date</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Date" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Name Of Employee</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Enter Name Of Employee" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Office In Time</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Office In Time" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Lunch Time From</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Lunch Time From" required>
                  </div>


                  <div class="form-group col-md-6">
                    <label>Lunch Time To</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Lunch Time To" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Tea Time From </label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Tea Time From " required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Tea Time To</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Tea Time To" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Office Out Time</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Office Out Time" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Total Houres Worked Today</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Total Houres Worked Today" required>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update </button>
                  <?php }else{ ?>
                    <button type="submit" class="btn btn-success">Save </button>
                  <?php } ?>
                  <a href="<?php echo base_url(); ?>/User/attendence_list" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

</body>
</html>
