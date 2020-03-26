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
            <h1>Task Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add Task Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Enter Task Name</label>
                    <input type="text" class="form-control form-control-sm" name="task_name" id="task_name" value="<?php if(isset($task_name)){ echo $task_name; } ?>" placeholder="Enter Task Name" required>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Assign To</label>
                    <select class="form-control select2" name="employee_id" id="employee_id" data-placeholder="Assign To" required>
                      <option value="">Assign To</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Estimate Time</label>
                    <input type="text" class="form-control form-control-sm" name="task_name" id="task_name" value="<?php if(isset($task_name)){ echo $task_name; } ?>" placeholder="Enter Estimate Time" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Due Date & Time</label>
                    <input type="text" class="form-control form-control-sm" name="task_name" id="task_name" value="<?php if(isset($task_name)){ echo $task_name; } ?>" placeholder="Enter Due Date & Time" required>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Stage</label>
                    <select class="form-control select2" name="stage" id="stage" data-placeholder="Select Stage" required>
                      <option value="">Select Stage</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Priority</label>
                    <select class="form-control select2" name="priority" id="priority" data-placeholder="Select Priority" required>
                      <option value="">Select Priority</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Party Name </label>
                    <select class="form-control select2" name="stage" id="stage" data-placeholder="Select Party Name " required>
                      <option value="">Select Party Name </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Project / Contract No.</label>
                    <select class="form-control select2" name="contract_no" id="contract_no" data-placeholder="Select Project / Contract No." required>
                      <option value="">Select Project / Contract No.</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>


                  <div class="form-group col-md-6 select_sm">
                    <label>Select Task Type</label>
                    <select class="form-control select2" name="task_type" id="task_type" data-placeholder="Select Task Type" required>
                      <option value="">Select Task Type</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Task Amount</label>
                    <input type="text" class="form-control form-control-sm" name="task_name" id="task_name" value="<?php if(isset($task_name)){ echo $task_name; } ?>" placeholder="Enter Task Amount" required>
                  </div>


                  <div class="form-group col-md-12">
                    <label>Enter Description</label>
                    <textarea class="form-control" name="solution" rows="3" cols="100" placeholder="Enter Description"> </textarea>
                  </div>

                  <div class="form-group col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="composition_scheme" id="composition_scheme" value="1">
                          <label for="composition_scheme" class="custom-control-label">Disable This</label>
                        </div>
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
