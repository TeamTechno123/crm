<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Party Information</h1>
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
                <h3 class="card-title">Add Party</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post">
                <div class="card-body row">

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Party Type</label>
                    <select class="form-control select2" name="group_name" id="group_name" data-placeholder="Select Party Type" required>
                      <option value="">Select Party Type</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Party Level</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Party Level" required>
                      <option value="">Select Party Level</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Name of Party</label>
                    <input type="text" class="form-control required title-case text" name="user_name" id="user_name" value="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Enter Name of Party" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Address</label>
                    <textarea class="form-control" name="solution" rows="3" cols="100" placeholder="Enter Address"> </textarea>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Select Country</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Country" required>
                      <option value="">Select Country</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>


                  <div class="form-group col-md-4 select_sm">
                    <label>Select State</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select State" required>
                      <option value="">Select State</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>


                  <div class="form-group col-md-4 select_sm">
                    <label>Select City</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select City" required>
                      <option value="">Select City</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-6">
                    <label>Mobile No. 1</label>
                    <input type="number" class="form-control form-control-sm" name="user_mob1" id="user_mob1" value="<?php if(isset($user_mob1)){ echo $user_mob1; } ?>" placeholder="Mobile No. 1" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Mobile No. 2 </label>
                    <input type="number" class="form-control form-control-sm" name="user_mob2" id="user_mob2" value="<?php if(isset($user_mob2)){ echo $user_mob2; } ?>" placeholder="Mobile No. 2">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Email Id</label>
                    <input type="email" class="form-control form-control-sm" name="company_email" id="company_email" value="<?php if(isset($company_email)){ echo $company_email; } ?>" placeholder="Email" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Contact Person Name</label>
                    <input type="text" class="form-control form-control-sm" name="company_website" id="company_website" value="<?php if(isset($company_website)){ echo $company_website; } ?>" placeholder="Contact Person Name">
                  </div>



                  <div class="form-group col-md-6">
                    <label>PAN No.</label>
                    <input type="text" class="form-control form-control-sm" name="pan_no" id="pan_no" value="<?php if(isset($pan_no)){ echo $pan_no; } ?>" placeholder="PAN No." required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>GST No.</label>
                    <input type="text" class="form-control form-control-sm" name="adhar_no" id="adhar_no" value="<?php if(isset($adhar_no)){ echo $adhar_no; } ?>" placeholder="GST No.">
                  </div>

                  <div class="form-group col-md-6">
                    <label>Date Of Birth</label>
                    <input type="text" class="form-control form-control-sm" name="user_dob" id="user_dob" value="<?php if(isset($user_dob)){ echo $user_dob; } ?>" placeholder="Date Of Birth" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Anniversary On</label>
                    <input type="text" class="form-control form-control-sm" name="anniversary_date" id="anniversary_date" value="<?php if(isset($anniversary_date)){ echo $anniversary_date; } ?>" placeholder="Anniversary On">
                  </div>

                  <div class="form-group col-md-4">
                    <label>Bank Name</label>
                    <input type="text" class="form-control form-control-sm" name="bank_name" id="bank_name" value="<?php if(isset($bank_name)){ echo $bank_name; } ?>" placeholder="Bank Name">
                  </div>

                  <div class="form-group col-md-4">
                    <label>Account No.</label>
                    <input type="text" class="form-control form-control-sm" name="account_no" id="account_no" value="<?php if(isset($account_no)){ echo $account_no; } ?>" placeholder="Account No.">
                  </div>
                  <div class="form-group col-md-4">
                    <label>IFSC Code</label>
                    <input type="text" class="form-control form-control-sm" name="ifsc_code" id="ifsc_code" value="<?php if(isset($ifsc_code)){ echo $ifsc_code; } ?>" placeholder="IFSC Code">
                  </div>

                  <div class="form-group col-md-4">
                    <label>Credit Limit On </label>
                    <input type="text" class="form-control form-control-sm" name="bank_name" id="bank_name" value="<?php if(isset($bank_name)){ echo $bank_name; } ?>" placeholder="Credit Limit On ">
                  </div>

                  <div class="form-group col-md-4">
                    <label>Bill Limit On </label>
                    <input type="text" class="form-control form-control-sm" name="account_no" id="account_no" value="<?php if(isset($account_no)){ echo $account_no; } ?>" placeholder="Bill Limit On ">
                  </div>
                  <div class="form-group col-md-4">
                    <label>pyment Terms </label>
                    <input type="text" class="form-control form-control-sm" name="ifsc_code" id="ifsc_code" value="<?php if(isset($ifsc_code)){ echo $ifsc_code; } ?>" placeholder="pyment Terms ">
                  </div>



                  <div class="form-group col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                          <label for="composition_scheme" class="custom-control-label">Disable This Party</label>
                        </div>
                      </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
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
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
// Check Mobile Duplication..
  var user_mobile1 = $('#user_mobile').val();
  $('#user_mobile').on('change',function(){
    var user_mobile = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"user_mobile",
             "column_val":user_mobile,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#user_mobile').val(user_mobile1);
          toastr.error(user_mobile+' Mobile No Exist.');
        }
      }
    });
  });

// Check Email Duplication..
  var user_email1 = $('#mobile').val();
  $('#user_email').on('change',function(){
    var user_email = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"user_email",
             "column_val":user_email,
             "table_name":"user"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#user_email').val(user_email1);
          toastr.error(user_email+' Email Id Exist.');
        }
      }
    });
  });
</script>



</body>
</html>
