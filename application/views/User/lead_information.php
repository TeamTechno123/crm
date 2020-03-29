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
            <h1>Lead Information</h1>
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
                <h3 class="card-title">Add Lead Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">

                  <div class="form-group col-md-4">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                          <label for="composition_scheme" class="custom-control-label">Existing Party</label>
                        </div>
                      </div>
                  <div class="form-group col-md-8 select_sm">
                    <label>Select Party Name</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Party Name" required>
                      <option value="">Select Party Name</option>
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
                    <label>Payment Terms </label>
                    <input type="text" class="form-control form-control-sm" name="ifsc_code" id="ifsc_code" value="<?php if(isset($ifsc_code)){ echo $ifsc_code; } ?>" placeholder="Payment Terms ">
                  </div>


                  <div class="form-group col-md-12 text-right">
                    <button type="button" id="add_row" class="btn btn-sm btn-primary">Add Row</button>
                  </div>
                  <div class="form-group col-md-12">
                    <table id="myTable" class="table table-bordered tbl_list">
                      <thead>
                      <tr>
                        <th>Select Product / Service</th>
                        <th class="wt_150">Enter Qty</th>
                        <th>Approx Value</th>
                        <th class="wt_50"></th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Product / Service">
                              <option value="">Select Product / Service</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>
                          <td class="wt_150">
                            <input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Enter Qty" required>
                          </td>
                          <td class="wt_150">
                            <input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="" placeholder="Approx Value" required>
                          </td>
                          <td class="wt_50"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Additional Details</label>
                    <textarea class="form-control" name="solution" rows="3" cols="100" placeholder="Enter Additional Details"> </textarea>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Select Lead Source</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Lead Source" required>
                      <option value="">Select Lead Source</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>


                  <div class="form-group col-md-4 select_sm">
                    <label>Select Sales Stage</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Sales Stage" required>
                      <option value="">Select Sales Stage</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>


                  <div class="form-group col-md-4 select_sm">
                    <label>Select Probability</label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Probability" required>
                      <option value="">Select Probability</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-4">
                    <label>Expected Closed Date</label>
                    <input type="text" class="form-control form-control-sm" name="lead_no" id="lead_no" value="<?php if(isset($lead_no)){ echo $lead_no; } ?>" placeholder="Expected Closed Date" required>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Select Lead Status </label>
                    <select class="form-control select2" name="role_id" id="role_id" data-placeholder="Select Lead Status " required>
                      <option value="">Select Lead Status </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Assign To</label>
                    <select class="form-control select2" name="lead_type" id="lead_type" data-placeholder="Assign To" required>
                      <option value="">Assign To</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Appointment Date</label>
                    <input type="text" class="form-control form-control-sm" name="lead_no" id="lead_no" value="<?php if(isset($lead_no)){ echo $lead_no; } ?>" placeholder="Appointment Date" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Appointment Time</label>
                    <input type="text" class="form-control form-control-sm" name="lead_no" id="lead_no" value="<?php if(isset($lead_no)){ echo $lead_no; } ?>" placeholder="Appointment Time" required>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Remind Me After </label>
                    <select class="form-control select2" name="lead_type" id="lead_type" data-placeholder="Remind Me After " required>
                      <option value="">Remind Me After </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                </div>
                <div class="card-footer row">

                  <div class="col-md-12 text-center">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/task_information_list" class="btn btn-default ml-4">Cancel</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
// Check Mobile Duplication..
  var issue_name1 = $('#issue_name').val();
  $('#issue_name').on('change',function(){
    var issue_name = $(this).val();
    $.ajax({
      url:'<?php echo base_url(); ?>User/check_duplication',
      type: 'POST',
      data: {"column_name":"issue_name",
             "column_val":issue_name,
             "table_name":"item_account"},
      context: this,
      success: function(result){
        if(result > 0){
          $('#issue_name').val(issue_name1);
          toastr.error(issue_name+' Account Name Exist.');
        }
      }
    });
  });
</script>

<script type="text/javascript">
  // Add Row...
  <?php if(isset($update)){ ?>
  var i = <?php echo $i-1; ?>
  <?php } else { ?>
  var i = 1;
  <?php } ?>

  $('#add_row').click(function(){
    i++;
    var row = ''+
    '<tr>'+
      '<td>'+
        '<select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Product / Service">'+
          '<option value="">Select Product / Service</option>'+
          '<option >1</option>'+
          '<option >2</option>'+
          '<option >3</option>'+
        '</select>'+
      '</td>'+
      '<td class="wt_150">'+
        '<input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Enter Qty" required>'+
      '</td>'+
      '<td class="wt_150">'+
        '<input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="" placeholder="Approx Value" required>'+
      '</td> '+
      '<td class="wt_50"><a class="rem_row"><i class="fa fa-trash text-danger"></i></a></td>'+
    '</tr>';
    $('#myTable').append(row);
  });

  $('#myTable').on('click', '.rem_row', function () {
    $(this).closest('tr').remove();
  });

</script>
</body>
</html>
