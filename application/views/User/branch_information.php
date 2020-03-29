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
            <h1>Branch Information</h1>
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
                <h3 class="card-title">Branch Information</h3>
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

                  <div class="form-group col-md-12 select_sm">
                    <label>Select Parent Company</label>
                    <select class="form-control select2" name="country_id" id="country_id" data-placeholder="Select Parent Company" required>
                      <option value="">Select Parent Company</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Branch Name</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" value="<?php if(isset($company_name)){ echo $company_name; } ?>" placeholder="Enter Branch Name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Address</label>
                    <textarea class="form-control form-control-sm" rows="3" name="company_address" id="company_address" placeholder="Enter Branch Address" required><?php if(isset($company_address)){ echo $company_address; } ?></textarea>
                  </div>
                  <div class="form-group col-md-4 select_sm">
                    <label>Select Country</label>
                    <select class="form-control select2" name="country_id" id="country_id" data-placeholder="Select Country" required>
                      <option value="">Select Country</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-4 select_sm">
                    <label>Select State</label>
                    <select class="form-control select2" name="state_id" id="state_id" data-placeholder="Select State" required>
                      <option value="">Select State</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Statecode</label>
                    <input type="number" class="form-control form-control-sm" name="company_statecode" id="company_statecode" value="<?php if(isset($company_statecode)){ echo $company_statecode; } ?>" placeholder="Statecode">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Mobile No. 1</label>
                    <input type="number" class="form-control form-control-sm" name="company_mob1" id="company_mob1" value="<?php if(isset($company_mob1)){ echo $company_mob1; } ?>" placeholder="Mobile No. 1" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Mobile No. 2 / Landline No.</label>
                    <input type="number" class="form-control form-control-sm" name="company_mob2" id="company_mob2" value="<?php if(isset($company_mob2)){ echo $company_mob2; } ?>" placeholder="Mobile No. 2">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Email Id</label>
                    <input type="email" class="form-control form-control-sm" name="company_email" id="company_email" value="<?php if(isset($company_email)){ echo $company_email; } ?>" placeholder="Email" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Website</label>
                    <input type="text" class="form-control form-control-sm" name="company_website" id="company_website" value="<?php if(isset($company_website)){ echo $company_website; } ?>" placeholder="Website">
                  </div>
                  <div class="form-group col-md-6">
                    <label>PAN No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_pan_no" id="company_pan_no" value="<?php if(isset($company_pan_no)){ echo $company_pan_no; } ?>" placeholder="Pan No.">
                  </div>
                  <div class="form-group col-md-6">
                    <label>GST No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_gst_no" id="company_gst_no" value="<?php if(isset($company_gst_no)){ echo $company_gst_no; } ?>" placeholder="GST No.">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Enter CIN No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_lic1" id="company_lic1" value="<?php if(isset($company_lic1)){ echo $company_lic1; } ?>" placeholder="Enter CIN No.">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Enter IEC Code No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_lic2" id="company_lic2" value="<?php if(isset($company_lic2)){ echo $company_lic2; } ?>" placeholder="Enter IEC Code No.">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Branch Logo</label>
                    <input type="file" name="company_logo" value="">
                    </div>
                    <div class="col-md-6">

                    </div>
                  <div class="form-group col-md-6">
                    <label>Admin Email Id</label>
                    <input type="email" class="form-control form-control-sm" name="company_email" id="company_email" value="<?php if(isset($company_email)){ echo $company_email; } ?>" placeholder="Email" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Admin Password</label>
                    <input type="password" class="form-control form-control-sm" name="admin_password" id="admin_password" value="<?php if(isset($admin_password)){ echo $admin_password; } ?>" placeholder="Password" required>
                  </div>

                  <?php if(isset($update)){ }else{ ?>
                    <div class="form-group col-md-6">
                      <label>Branch Logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="company_logo" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Browse Logo</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      No file selected.
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email Id</label>
                      <input type="email" class="form-control form-control-sm" name="admin_email" id="admin_email" placeholder="Admin Email" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <input type="password" class="form-control form-control-sm" name="admin_password" id="admin_password" placeholder="Admin Password" required>
                    </div>
                  <?php } ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button type="submit" class="btn btn-primary">Update Branch</button>
                  <?php }else{ ?>
                    <button type="submit" class="btn btn-success">Create Branch</button>
                  <?php } ?>
                  <a href="<?php echo base_url(); ?>/User/branch_information_list" class="btn btn-default ml-4">Cancel</a>
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
