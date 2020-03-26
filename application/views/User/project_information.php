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
            <h1>Project Information</h1>
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
                <h3 class="card-title">Add Project Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">


                  <div class="form-group col-md-6">
                    <label>Enter Project No.</label>
                    <input type="text" class="form-control form-control-sm" name="project_no" id="project_no" value="<?php if(isset($project_no)){ echo $project_no; } ?>" placeholder="Enter Project No." required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Project Date</label>
                    <input type="text" class="form-control form-control-sm" name="project_date" id="project_date" value="<?php if(isset($project_date)){ echo $project_date; } ?>" placeholder="Enter Project Date" >
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Project Name</label>
                    <input type="text" class="form-control form-control-sm" name="project_name" id="project_name" value="<?php if(isset($project_name)){ echo $project_name; } ?>" placeholder="Enter Project Name" >
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


                  <div class="form-group col-md-6 select_sm">
                    <label>Select Status</label>
                    <select class="form-control select2" name="project_status" id="project_status" data-placeholder="SelectStatus" required>
                      <option value="">Select Status</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
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



                  <div class="form-group col-md-4">
                    <label>Start Date</label>
                    <input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="<?php if(isset($s_date)){ echo $s_date; } ?>" placeholder="Start Date" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>End Date</label>
                    <input type="text" class="form-control form-control-sm" name="e_date" id="e_date" value="<?php if(isset($e_date)){ echo $e_date; } ?>" placeholder="End Date" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Actual End Date</label>
                    <input type="text" class="form-control form-control-sm" name="ae_date" id="ae_date" value="<?php if(isset($ae_date)){ echo $ae_date; } ?>" placeholder="Actual End Date" required>
                  </div>


                  <div class="form-group col-md-6 select_sm">
                    <label>Select Deal Name</label>
                    <select class="form-control select2" name="deal_name" id="deal_name" data-placeholder="SelectDeal Name" required>
                      <option value="">Select Deal Name</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-6 select_sm">
                    <label>Select Source Name</label>
                    <select class="form-control select2" name="source_name" id="source_name" data-placeholder="Select Source Name" required>
                      <option value="">Select Source Name</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-6">
                    <label>Target Budget</label>
                    <input type="text" class="form-control form-control-sm" name="target_budget" id="target_budget" value="<?php if(isset($target_budget)){ echo $target_budget; } ?>" placeholder="Target Budget" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Project URL</label>
                    <input type="text" class="form-control form-control-sm" name="project_date" id="project_date" value="<?php if(isset($project_date)){ echo $project_date; } ?>" placeholder="Project URL" >
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select  Priority</label>
                    <select class="form-control select2" name="priority" id="priority" data-placeholder="Select Priority" required>
                      <option value="">Select  Priority</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-6 select_sm">
                    <label>Select Progress</label>
                    <select class="form-control select2" name="source_name" id="source_name" data-placeholder="Select Progress" required>
                      <option value="">Select Progress</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Description</label>
                    <textarea class="form-control" name="project_description" rows="3" cols="100" placeholder="Enter Description"> </textarea>
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
