<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php $this->load->view('template/meta.php');  ?>
    <?php $this->load->view('template/css.php');  ?>
</head>

<body>
    <?php $this->load->view('template/sidebar-left');  ?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php $this->load->view('template/header');  ?>
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><?php echo $page_title; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="inventory">Dashboard</a></li>
                                    <li><a href="#"><?php echo $page_title; ?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <?php echo $this->session->flashdata('message');?>
                <!-- /#event-modal -->
                <div class="card text-left">
                    <div class="text-right mt-3 mr-4">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addSupplierModal">
                            <i class="fas fa-plus"></i> Add Supplier
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="supplier_table">
                            <thead>
                                <tr>
                                    <th>Supplier ID</th>
                                    <th>Supplier Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($suppliers)){ ?>
                                <?php foreach($suppliers as $supplier){ ?> 
                                <tr>
                                    <td><?php echo $supplier['supplier_id'];?></td>
                                    <td><?php echo $supplier['supplier_name'];?></td>
                                    <td>
									<a href="#" data-target="#EditModal" data-toggle="modal" class="text-info edit-supplier" id="<?php echo $supplier['supplier_id'] ?>"><i class="fa fa-edit"></i></a> |  
                                        <a href="<?php echo base_url('supplier/delete_supplier/'.$supplier['supplier_id']); ?>" onclick="return confirm('Are you sure you want to delete this supplier?')" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
		
		
		
		<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Supplier</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          <div class="modal-body">
            <div class="container-fluid">
              <form action="<?php echo base_url('delivery/edit_supplier/'.$supplier['supplier_id']);?>" method="POST">
                <input name="supplier_id" class="form-control" type="hidden" value="">
                <input name="supplier_name" class="form-control" type="text" value="" placeholder="Input Supplier" required="">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- Add Supplier Modal -->
        <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="<?php echo base_url('delivery/submit_supplier'); ?>" method="POST">
                                <div class="form-group">
                                    <label for="supplierName">Supplier Name</label>
                                    <input name="supplier_name" id="supplierName" class="form-control" type="text" placeholder="Enter Supplier Name" required>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Supplier Modal -->


        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <?php $this->load->view('template/footer'); ?>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <?php $this->load->view('template/js.php');  ?>

</body>

</html>
