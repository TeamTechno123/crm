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
            <h1>Contract Information</h1>
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




                  <div class="form-group col-md-6">
                    <label>Enter Contract No.</label>
                    <input type="text" class="form-control form-control-sm" name="contract_no" id="contract_no" value="<?php if(isset($contract_no)){ echo $contract_no; } ?>" placeholder="Enter Contract No." required>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Enter Contract Date</label>
                    <input type="text" class="form-control form-control-sm" name="contract_date" id="contract_date" value="<?php if(isset($contract_date)){ echo $contract_date; } ?>" placeholder="Enter Contract Date" >
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
                    <label>Select Lead</label>
                    <select class="form-control select2" name="lead" id="lead" data-placeholder="SelectLead" required>
                      <option value="">Select Lead</option>
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

                  <div class="form-group col-md-12 text-right">
                    <button type="button" id="add_row" class="btn btn-sm btn-primary">Add Row</button>
                  </div>
                  <div class="form-group col-md-12">
                    <table id="myTable" class="table table-bordered tbl_list">
                      <thead>
                      <tr>
                        <th>Select Type Of Service Product</th>
                        <th class="wt_150">Enter Qty</th>
                        <th>Start Date</th>
                        <th class="wt_100">Renewal Period</th>
                        <th class="wt_100">closed</th>
                        <th class="wt_50"></th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Type Of Service Product">
                              <option value="">Select Type Of Service Product</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>
                          <td class="wt_150">
                            <input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Enter Qty" required>
                          </td>
                          <td class="wt_150">
                            <input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="" placeholder="Start Date" required>
                          </td>
                          <td>
                            <select class="form-control form-control-sm" name="renewal_period" id="renewal_period" data-placeholder="Renewal Period">
                              <option value="">Renewal Period</option>
                              <option >1</option>
                              <option >2</option>
                              <option >3</option>
                            </select>
                          </td>
                          <td class="wt_150">
                            <input type="text" class="form-control form-control-sm" name="status" id="status" value="" placeholder="Project Status" required>
                          </td>

                          <td class="wt_50"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="form-group col-md-6 select_sm">
                    <label>Enter Contract Terms</label>
                    <textarea class="form-control form-control-sm" name="contract_terms" id="" rows="4"><?php if(isset($contract_terms)){ echo $contract_terms; } ?></textarea>
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
        '<select class="form-control form-control-sm" name="stock_type_id" id="stock_type_id" data-placeholder="Select Type Of Service / Product ">'+
          '<option value="">Select Type Of Service / Product </option>'+
          '<option >1</option>'+
          '<option >2</option>'+
          '<option >3</option>'+
        '</select>'+
      '</td>'+
      '<td class="wt_150">'+
        '<input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Enter Qty" required>'+
      '</td>'+
      '<td class="wt_150">'+
        '<input type="text" class="form-control form-control-sm" name="s_date" id="s_date" value="" placeholder="Start Date" required>'+
      '</td>'+
      '<td>'+
        '<select class="form-control form-control-sm" name="renewal_period" id="renewal_period" data-placeholder="Renewal Period">'+
          '<option value="">Renewal Period</option>'+
          '<option >1</option>'+
          '<option >2</option>'+
          '<option >3</option>'+
        '</select>'+
      '</td>'+
      '<td class="wt_150">'+
        '<input type="text" class="form-control form-control-sm" name="status" id="status" value="" placeholder="Project Status" required>'+
      '</td>'+
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
