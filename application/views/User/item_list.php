<!DOCTYPE html>
<html>
<style>
  td{ padding:2px 10px !important; }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 mt-1">
            <h4>Items</h4>
          </div>
          <div class="col-sm-6 mt-1 text-right">
            <a href="item" class="btn btn-sm btn-primary">Add Items</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card-body p-0">
              <table id="example1" class="table table-bordered tbl_list">
                <thead>
                <tr>
                  <th class="wt_50">#</th>
                  <th>Name</th>
                  <th>Unit</th>
                  <th>Type</th>
                  <th>HSN</th>
                  <th>SKU/Barcode</th>
                  <th>Categories</th>
                  <th>Modified Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($item_list as $list) {
                    $i++;
                    $unit_info = $this->User_Model->get_info_arr_fields('unit_name','unit_id', $list->unit_id, 'unit');
                    $item_category = $this->User_Model->get_info_arr_fields('item_category_name','item_category_id', $list->item_category_id, 'item_category');
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $list->item_name; ?></td>
                    <td><?php echo $unit_info[0]['unit_name']; ?></td>
                    <td><?php echo $list->item_type; ?></td>
                    <td><?php echo $list->item_hsn; ?></td>
                    <td><?php echo $list->item_barcode; ?></td>
                    <td><?php echo $item_category[0]['item_category_name']; ?></td>
                    <td><?php echo $list->item_update_date; ?></td>
                    <td>
                      <a href="<?php echo base_url(); ?>User/edit_item/<?php echo $list->item_id; ?>"> <i class="fa fa-edit"></i> </a>
                      <a href="<?php echo base_url(); ?>User/delete_item/<?php echo $list->item_id; ?>" onclick="return confirm('Delete this Item');" class="ml-2 text-danger"> <i class="fa fa-trash"></i> </a>
                    </td>
                  <?php } ?>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          <!-- </div> -->
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
  <script type="text/javascript">
    <?php if($this->session->flashdata('save_success')){ ?>
      $(document).ready(function(){
        toastr.success('Saved successfully');
      });
    <?php } ?>
    <?php if($this->session->flashdata('update_success')){ ?>
      $(document).ready(function(){
        toastr.info('Updated successfully');
      });
    <?php } ?>
    <?php if($this->session->flashdata('delete_success')){ ?>
      $(document).ready(function(){
        toastr.error('Deleted successfully');
      });
    <?php } ?>
  </script>
</body>
</html>
