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
            <h1>Ticket Support Information</h1>
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
                <h3 class="card-title">Add Ticket Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-4">
                    <label>Enter Ticket No.</label>
                    <input type="text" class="form-control form-control-sm" name="ticket_no" id="ticket_no" value="<?php if(isset($ticket_no)){ echo $ticket_no; } ?>" placeholder="Enter Ticket No." readonly>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Enter Ticket Date</label>
                    <input type="text" class="form-control form-control-sm" name="ticket_date" id="ticket_date" value="<?php if(isset($ticket_date)){ echo $ticket_date; } ?>" placeholder="Enter Ticket Date" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Enter Ticket Time</label>
                    <input type="text" class="form-control form-control-sm" name="ticket_time" id="ticket_time" value="<?php if(isset($ticket_time)){ echo $ticket_time; } ?>" placeholder="Enter Ticket Time" required>
                  </div>

                  <div class="form-group col-md-7 select_sm">
                    <label>Select Party</label>
                    <select class="form-control select2" name="employee_id" id="employee_id" data-placeholder="Select Party" required>
                      <option value="">Select Party</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-2  offset-md-2">
                    <button id="btn_save" type="submit" class="btn btn-success mt-3">Add Party</button>
                  </div>


                  <div class="form-group col-md-4 select_sm">
                    <label>Select Reporting Type</label>
                    <select class="form-control select2" name="reporting_type" id="reporting_type" data-placeholder="Select Reporting Type" required>
                      <option value="">Select Reporting Type</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Select Contract No.</label>
                    <select class="form-control select2" name="contract_no" id="contract_no" data-placeholder="Select Contract No." required>
                      <option value="">Select Contract No.</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-4">
                    <label>Contract Type</label>
                    <input type="text" class="form-control form-control-sm" name="contract_type" id="contract_type" value="<?php if(isset($contract_type)){ echo $contract_type; } ?>" placeholder="Contract Type" readonly>
                  </div>


                  <div class="form-group col-md-6">
                    <label>Enter Contract Start Date</label>
                    <input type="text" class="form-control form-control-sm" name="con_sdate" id="con_sdate" value="<?php if(isset($con_sdate)){ echo $con_sdate; } ?>" placeholder="Enter Contract Start Date" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Contract End Date</label>
                    <input type="text" class="form-control form-control-sm" name="con_edate" id="con_edate" value="<?php if(isset($con_edate)){ echo $con_edate; } ?>" placeholder="Enter Contract End Date" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label> Reporting Person Name</label>
                    <input type="text" class="form-control form-control-sm" name="reporting_person" id="reporting_person" value="<?php if(isset($reporting_person)){ echo $reporting_person; } ?>" placeholder="Reporting Person Name" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Reporting Person Contact No.</label>
                    <input type="text" class="form-control form-control-sm" name="reporting_mobile" id="reporting_mobile" value="<?php if(isset($reporting_mobile)){ echo $reporting_mobile; } ?>" placeholder="Reporting Person Contact No." required>
                  </div>




                  <div class="form-group col-md-6 select_sm">
                    <label>Select Issue</label>
                    <select class="form-control select2" name="priority" id="priority" data-placeholder="Select Issue" required>
                      <option value="">Select Issue</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-2  offset-md-3">
                    <button id="btn_save" type="submit" class="btn btn-success mt-3">Add More</button>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter details</label>
                    <textarea name="ticket_details" rows="3" class="form-control" cols="90"></textarea>
                  </div>


                  <div class="form-group col-md-6">                  
                    <input class="form-control" type="file" name="ticket_image" value="">
                    </div>

                    <div class="form-group col-md-2  offset-md-3">
                      <button id="btn_save" type="submit" class="btn btn-success mt-3">Add More</button>
                    </div>


                  <div class="form-group col-md-6 select_sm">
                    <label>Select Ticket Status</label>
                    <select class="form-control select2" name="ticket_status" id="ticket_status" data-placeholder="Select Ticket Status" required>
                      <option value="">Select Ticket Status</option>
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
</body>
</html>
