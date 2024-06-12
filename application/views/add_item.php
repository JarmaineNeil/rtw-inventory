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
				<div class="card">
          <form action="<?php echo base_url();?>item/submit_item" method="POST">
		 
						<div class="form-group">
              <label class="form-control-label">Product Name</label>
              <input name="description" required placeholder="Enter product name..." class="form-control" type="text">
            </div>
						<div class="form-group">
              <label class="form-control-label">Category</label>
              <select name="category_id" class="form-control">
                <option value="">Choose category...</option>
                <?php if(!empty($category)){?>
                  <?php foreach($category as $key => $ctgry){?> 
                    <option value="<?php echo $ctgry['category_id'];?>"><?php echo $ctgry['category'];?></option>
                <?php } } ?>
              </select>
            </div>
            <div class="form-group">
              <label class="form-control-label">Size</label>
              <input name="size" placeholder="Enter size..." class="form-control" type="text">
            </div>
            <div class="form-group">
              <label class="form-control-label">Color</label>
              <input name="color" placeholder="Enter color..." class="form-control" type="text">
            </div>
						<div class="form-group">
              <label class="form-control-label">Product Base Price</label>
              <input name="base_price" required placeholder="Enter base price..." class="form-control" type="number" step="0.01">
            </div>
						<div class="form-group">
              <label class="form-control-label">Selling Price</label>
              <input name="selling_price" required placeholder="Enter selling price..." class="form-control" type="number" step="0.01">
            </div>
						<div class="form-group">
              <label class="form-control-label">Supplier</label>
			  <select name="supplier_id" class="form-control">
        <option value="">Choose supplier...</option>
        <?php if(!empty($suppliers)){?>
            <?php foreach($suppliers as $supplier){?> 
                <option value="<?php echo $supplier['supplier_id'];?>"><?php echo $supplier['supplier_name'];?></option>
            <?php } } ?>
    </select>
            </div>
						<div class="form-group">
              <label class="form-control-label">Brand Name</label>
              <input name="brand_name" required placeholder="Enter brand name..." class="form-control" type="text">
            </div>
						<div class="text-right">
							<a href="<?php echo base_url();?>add_item" class="btn btn-secondary">
								Reset
							</a>
              <button type="submit" class="btn btn-info">
								Save
							</button>
						</div>
            </form>
					</div>
				</div>
				<!-- /#add-category -->
			</div>
			<!-- .animated -->
		</div>
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
