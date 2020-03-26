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


                  <div class="form-group col-md-12 select_sm">
                    <label>Select Type Of Lead</label>
                    <select class="form-control select2" name="lead_type" id="lead_type" data-placeholder="Select Type Of Lead" required>
                      <option value="">Select Type Of Lead</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Lead No.</label>
                    <input type="text" class="form-control form-control-sm" name="lead_no" id="lead_no" value="<?php if(isset($lead_no)){ echo $lead_no; } ?>" placeholder="Enter Lead No." required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Lead Date</label>
                    <input type="text" class="form-control form-control-sm" name="lead_date" id="lead_date" value="<?php if(isset($lead_date)){ echo $lead_date; } ?>" placeholder="Enter Lead Date" >
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
                    <label>Select Type Of Service / Product</label>
                    <select class="form-control select2" name="project_status" id="project_status" data-placeholder="SelectType Of Service / Product" required>
                      <option value="">Select Type Of Service / Product</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                <div class="form-group col-md-4">
                    <label>Enter Quantity</label>
                    <input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="<?php if(isset($quantity)){ echo $quantity; } ?>" placeholder="Enter Quantity" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Enter Rate</label>
                    <input type="text" class="form-control form-control-sm" name="rate" id="rate" value="<?php if(isset($rate)){ echo $rate; } ?>" placeholder="Enter Rate" required>
                  </div>


                  <div class="form-group col-md-12">
                    <label>Enter Details</label>
                    <textarea class="form-control" name="project_description" rows="3" cols="100" placeholder="Enter Details"> </textarea>
                  </div>

                <div class="form-group col-md-6 select_sm">
                    <label>Assign To</label>
                    <select class="form-control select2" name="assign_to" id="assign_to" data-placeholder="Assign To" required>
                      <option value="">Assign To</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-6 select_sm">
                    <label>Select Status</label>
                    <select class="form-control select2" name="source_name" id="source_name" data-placeholder="Select Status" required>
                      <option value="">Select Status</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Remind Me After Days</label>
                    <input type="text" class="form-control form-control-sm" name="remind_days" id="remind_days" value="<?php if(isset($remind_days)){ echo $remind_days; } ?>" placeholder="Remind Me After Days" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Total Amount</label>
                    <input type="text" class="form-control form-control-sm" name="total_amount" id="total_amount" value="<?php if(isset($total_amount)){ echo $total_amount; } ?>" placeholder="Total Amount" >
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
