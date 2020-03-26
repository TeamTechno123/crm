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
            <h1>Service Information</h1>
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
                <h3 class="card-title">Add Service Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">

                  <div class="form-group col-md-12 select_sm">
                    <label>Select Type Of Service / Product Type</label>
                    <select class="form-control select2" name="task_type" id="task_type" data-placeholder="Select Type Of Service / Product Type" required>
                      <option value="">Select Service Type</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Enter Service / Product Name</label>
                    <input type="text" class="form-control form-control-sm" name="service_name" id="service_name" value="<?php if(isset($service_name)){ echo $service_name; } ?>" placeholder="Enter Service / Product Name" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Enter Description</label>
                    <textarea class="form-control" name="service_description" rows="3" cols="100" placeholder="Enter Description"> </textarea>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter HSN Code</label>
                    <input type="text" class="form-control form-control-sm" name="hsn_code" id="hsn_code" value="<?php if(isset($hsn_code)){ echo $hsn_code; } ?>" placeholder="Enter HSN Code" required>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Select GST %</label>
                    <select class="form-control select2" name="gst_id" id="gst_id" data-placeholder="Select GST %" required>
                      <option value="">Select GST %</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>



                  <div class="form-group col-md-6 select_sm">
                    <label>Select Unit</label>
                    <select class="form-control select2" name="unit_id" id="unit_id" data-placeholder="Select Unit" required>
                      <option value="">Select Unit</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6 select_sm">
                    <label>Renewal After</label>
                    <select class="form-control select2" name="renewal_after" id="renewal_after" data-placeholder="Renewal After" required>
                      <option value="">Renewal After</option>
                      <!-- <?php if(isset($item_group_list)){ foreach ($item_group_list as $list) { ?>
                      <option value="<?php echo $list->item_group_id; ?>" <?php if(isset($item_group_id) && $item_group_id == $list->item_group_id){ echo 'selected'; } ?>><?php echo $list->item_group_name; ?></option>
                      <?php } } ?> -->
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label>MRP</label>
                    <input type="text" class="form-control form-control-sm" name="mrp" id="mrp" value="<?php if(isset($mrp)){ echo $mrp; } ?>" placeholder="MRP" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Sale Rate</label>
                    <input type="text" class="form-control form-control-sm" name="sale_rate" id="sale_rate" value="<?php if(isset($sale_rate)){ echo $sale_rate; } ?>" placeholder="Sale Rate" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Min Rate</label>
                    <input type="text" class="form-control form-control-sm" name="min_rate" id="min_rate" value="<?php if(isset($min_rate)){ echo $min_rate; } ?>" placeholder="Min Rate" required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Max Rate</label>
                    <input type="text" class="form-control form-control-sm" name="max_rate" id="max_rate" value="<?php if(isset($max_rate)){ echo $max_rate; } ?>" placeholder="Max Rate" required>
                  </div>

                  <div class="form-group col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="composition_scheme" id="composition_scheme" value="1">
                          <label for="composition_scheme" class="custom-control-label">Does This Item requires Stock </label>
                        </div>
                      </div>
                      <div class="col-md-6">

                      </div>

                      <div class="form-group col-md-6">
                        <label>Opening Stock</label>
                        <input type="text" class="form-control form-control-sm" name="opening_stock" id="opening_stock" value="<?php if(isset($opening_stock)){ echo $opening_stock; } ?>" placeholder="Opening Stock" required>
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
