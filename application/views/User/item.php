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
            <h1>Item Details</h1>
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
                <h3 class="card-title">Item Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="m-0 input_form" id="form_action" role="form" action="" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label>Item Name*</label>
                    <input type="text" class="form-control form-control-sm" name="item_name" id="item_name" value="<?php if(isset($item_info)){ echo $item_info['item_name']; } ?>" placeholder="" required>
                  </div>
                  <div class="form-group col-md-3 select_sm">
                    <label>Type</label>
                    <select class="form-control select2" name="item_type" id="item_type" data-placeholder="Select Type">
                      <option value="">Select Type</option>
                      <option <?php if(isset($item_info) && $item_info['item_type'] == 'Goods'){ echo 'selected'; } ?>>Goods</option>
                      <option <?php if(isset($item_info) && $item_info['item_type'] == 'Services'){ echo 'selected'; } ?>>Services</option>
                    </select>
                  </div>
                  <div class="col-md-6 pt-2 mb-2 px-3 div_left">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="in_sales" id="in_sales" value="1" <?php if(isset($item_info) && $item_info['in_sales'] == 1){ echo 'checked'; } elseif (!isset($item_info)){ echo 'checked'; } ?>>
                          <label for="in_sales" class="custom-control-label">In Sales</label>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Rate</label>
                        <input type="text" class="form-control form-control-sm" name="item_sale_rate" id="item_sale_rate" value="<?php if(isset($item_info)){ echo $item_info['item_sale_rate']; } ?>" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Discount</label>
                        <input type="text" class="form-control form-control-sm" name="item_sale_discount" id="item_sale_discount" value="<?php if(isset($item_info)){ echo $item_info['item_sale_discount']; } ?>" placeholder="%" required>
                      </div>
                      <div class="form-group col-md-12">
                        <textarea class="form-control form-control-sm" name="item_sale_desc" id="item_sale_desc" placeholder="Description" required><?php if(isset($item_info)){ echo $item_info['item_sale_desc']; } ?></textarea>
                      </div>
                      <div class="form-group col-md-12 select_sm">
                        <label>Account</label>
                        <select class="form-control select2" name="sale_account_id" id="sale_account_id" data-placeholder="Select Account">
                          <option value="">Select Account</option>
                          <?php if(isset($item_account_list)){ foreach ($item_account_list as $list) { ?>
                          <option value="<?php echo $list->item_account_id; ?>" <?php if(isset($item_info) && $item_info['sale_account_id'] == $list->item_account_id){ echo 'selected'; } ?>><?php echo $list->item_account_name; ?></option>
                          <?php } } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 pt-2 mb-2 px-3 div_right">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="in_purchase" id="in_purchase" value="1" <?php if(isset($item_info) && $item_info['in_purchase'] == 1){ echo 'checked'; } elseif (!isset($item_info)){ echo 'checked'; } ?>>
                          <label for="in_purchase" class="custom-control-label">In Purchase</label>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Rate</label>
                        <input type="text" class="form-control form-control-sm" name="item_purchase_rate" id="item_purchase_rate" value="<?php if(isset($item_info)){ echo $item_info['item_purchase_rate']; } ?>" placeholder="" required>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="item_purchase_itc" id="item_purchase_itc" value="1" <?php if(isset($item_info) && $item_info['item_purchase_itc'] == 1){ echo 'checked'; } elseif (!isset($item_info)){ echo 'checked'; } ?>>
                          <label for="item_purchase_itc" class="custom-control-label">ITC</label>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <textarea class="form-control form-control-sm" name="item_purchase_desc" id="item_purchase_desc" placeholder="Description" required><?php if(isset($item_info)){ echo $item_info['item_purchase_desc']; } ?></textarea>
                      </div>
                      <div class="form-group col-md-12 select_sm">
                        <label>Account</label>
                        <select class="form-control select2" name="purchase_account_id" id="purchase_account_id" data-placeholder="Select Account">
                          <option value="">Select Account</option>
                          <?php if(isset($item_account_list)){ foreach ($item_account_list as $list) { ?>
                          <option value="<?php echo $list->item_account_id; ?>" <?php if(isset($item_info) && $item_info['purchase_account_id'] == $list->item_account_id){ echo 'selected'; } ?>><?php echo $list->item_account_name; ?></option>
                          <?php } } ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group col-md-3 select_sm" >
                    <label>Unit</label>
                    <select class="form-control select2" name="unit_id" id="unit_id" data-placeholder="Select Unit">
                      <option value="">Select Unit</option>
                      <?php if(isset($unit_list)){ foreach ($unit_list as $list) { ?>
                      <option value="<?php echo $list->unit_id; ?>" <?php if(isset($item_info) && $item_info['unit_id'] == $list->unit_id){ echo 'selected'; } ?>><?php echo $list->unit_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label>SKU/Barcode</label>
                    <input type="text" class="form-control form-control-sm" name="item_barcode" id="item_barcode" value="<?php if(isset($item_info)){ echo $item_info['item_barcode']; } ?>" placeholder="" required>
                  </div>
                  <div class="form-group col-md-3 select_sm">
                    <label>Tax</label>
                    <select class="form-control select2" name="tax_id" id="tax_id" data-placeholder="Select Tax">
                      <option value="">Select Tax</option>
                      <option value="28">GST 28%</option>
                      <option value="18">GST 18%</option>
                      <option value="12">GST 12%</option>
                      <option value="5">GST 5%</option>
                      <option value="0">GST 0%</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label>HSN Code</label>
                    <input type="text" class="form-control form-control-sm" name="item_hsn" id="item_hsn" value="<?php if(isset($item_info)){ echo $item_info['item_hsn']; } ?>" placeholder="" required>
                  </div>

                  <div class="form-group col-md-12 select_sm">
                    <label>Category</label>
                    <select class="form-control select2" name="item_category_id" id="item_category_id" data-placeholder="Select Category">
                      <option value="">Select Category</option>
                      <?php if(isset($item_category_list)){ foreach ($item_category_list as $list) { ?>
                      <option value="<?php echo $list->item_category_id; ?>" <?php if(isset($item_info) && $item_info['item_category_id'] == $list->item_category_id){ echo 'selected'; } ?>><?php echo $list->item_category_name; ?></option>
                      <?php } } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="item_track_inv" id="item_track_inv" value="1" <?php if(isset($item_info) && $item_info['item_track_inv'] == 1){ echo 'checked'; } elseif (!isset($item_info)){ echo 'checked'; } ?>>
                      <label for="item_track_inv" class="custom-control-label">Track Inventory</label>
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label>Stock Alert Level</label>
                    <input type="text" class="form-control form-control-sm" name="stock_alert_level" id="stock_alert_level" value="<?php if(isset($item_info)){ echo $item_info['stock_alert_level']; } ?>" placeholder="" required>
                  </div>

                </div>
                <div class="card-footer row">
                  <div class="col-md-6">
                    <div class="custom-control custom-checkbox ml-2">
                      <input class="custom-control-input" type="checkbox" name="item_status" id="item_status" value="1" <?php if(isset($item_info) && $item_info['item_status'] == 1){ echo 'checked'; } elseif (!isset($item_info)){ echo 'checked'; } ?>>
                      <label for="item_status" class="custom-control-label">Active</label>
                    </div>
                  </div>
                  <div class="col-md-6 text-right">
                    <?php if(isset($update)){ ?>
                      <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                    <?php } else{ ?>
                      <button id="btn_save" type="submit" class="btn btn-success px-4">Save</button>
                    <?php } ?>
                    <a href="<?php echo base_url() ?>User/supplier_list" class="btn btn-default ml-4">Cancel</a>
                  </div>
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

</script>
</body>
</html>
