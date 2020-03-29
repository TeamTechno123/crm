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
            <h1>Project Contract Information</h1>
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
                <h3 class="card-title">Add Contract Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Type </label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Select Type " required>
                      <option value="">Select Type </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Type Of Contract</label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Select Type Of Contract" required>
                      <option value="">Select Type Of Contract</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Party</label>
                    <select class="form-control select2" name="party_id" id="party_id" data-placeholder="Select Party" required>
                      <option value="">Select Party</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select Lead</label>
                    <select class="form-control select2" name="party_id" id="party_id" data-placeholder="Select Lead" required>
                      <option value="">Select Lead</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Contract No.</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Contract No." required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Contract Date</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Contract Date" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Title Of Project Contract</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Title Of Project Contract" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Start Date</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Start Date" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>End Date</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="End Date" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Actual End Date</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Actual End Date" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Target Budget</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Target Budget" required>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Assign To </label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Assign To " required>
                      <option value="">Assign To </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Select Status </label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Select Status " required>
                      <option value="">Select Status </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>


                  <div class="form-group col-md-4 select_sm">
                    <label>Select Progress</label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Select Progress" required>
                      <option value="">Select Progress</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Select Priority </label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Select Priority " required>
                      <option value="">Select Priority </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-4 select_sm">
                    <label>Renewal After </label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Renewal After " required>
                      <option value="">Renewal After </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Description Details</label>
                    <textarea class="form-control" name="solution" rows="3" cols="100" placeholder="Enter Description Details"> </textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Enter Contract Terms</label>
                    <textarea class="form-control" name="solution" rows="3" cols="100" placeholder="Enter Contract Terms"> </textarea>
                  </div>


                  <div class="form-group col-md-6 select_sm">
                    <label>Select Product Service </label>
                    <select class="form-control select2" name="contract_type" id="contract_type" data-placeholder="Select Product Service " required>
                      <option value="">Select Product Service </option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Quantity</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Quantity" required>
                  </div>

                  <div class="form-group col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="user_status" id="user_status" value="1">
                          <label for="composition_scheme" class="custom-control-label">Disable This </label>
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
                    <a href="<?php echo base_url() ?>User/contract_information_list" class="btn btn-default ml-4">Cancel</a>
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
