<?php 
$id = "";
$username = "";
$password = "";
if($op=="edit"){
  foreach ($sql->result() as $value) {
    $op = "edit";
    $id = $value->id;
    $username = $value->username;
    $password = $value->password;
    }
  }

?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
					<div class="page-content">
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->
					</div><!-- /.page-content -->


						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="<?php echo base_url();?>produk/simpan" method="POST">
								<input type="hidden"  id="op" name="op" value="<?php echo $op; ?>" class="col-sm-2 control-label">
    							<input type="hidden"  id="id" name="id" value="<?php echo $id; ?>" class="col-sm-2 control-label">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Produk </label>
										<div class="col-sm-9">
											<input type="text" id="nama_produk" name="nama_produk" placeholder="Nama Produk" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Merk </label>
										<div class="col-sm-9">
											<input type="text" id="merk" name="merk" placeholder="Merk" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode Produk </label>
										<div class="col-sm-9">
											<input type="text" id="kode_produk" placeholder="Kode Produk" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi </label>
										<div class="col-sm-9">
											<input type="text" id="deskripsi" placeholder="Deskripsi" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga </label>
										<div class="col-sm-9">
											<input type="text" id="harga" placeholder="Harga" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Discount </label>
										<div class="col-sm-9">
											<input type="text" id="discount" placeholder="Discount" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Harga Discount </label>
										<div class="col-sm-9">
											<input type="text" id="harga_discount" placeholder="Harga Discount" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gambar 1 </label>
											<div class="col-sm-3">
												<label class="ace-file-input"><input type="file" id="gambar1">
												<span class="ace-file-container" data-title="Choose">
												<span class="ace-file-name" data-title="No File ...">
												<i class=" ace-icon fa fa-upload"></i></span></span>
												<a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
												</label>
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gambar 2 </label>
											<div class="col-sm-3">
												<label class="ace-file-input"><input type="file" id="gambar2">
												<span class="ace-file-container" data-title="Choose">
												<span class="ace-file-name" data-title="No File ...">
												<i class=" ace-icon fa fa-upload"></i></span></span>
												<a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
												</label>
											</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gambar 3 </label>
											<div class="col-sm-3">
												<label class="ace-file-input"><input type="file" id="gambar3">
												<span class="ace-file-container" data-title="Choose">
												<span class="ace-file-name" data-title="No File ...">
												<i class=" ace-icon fa fa-upload"></i></span></span>
												<a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a>
												</label>
											</div>
									</div>

									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>
									<div class="col-xs-3">
										<label>
											<input name="status" id="status" class="ace ace-switch ace-switch-6" type="checkbox">
											<span class="lbl"></span>
										</label>
									</div>	
									</div>				
												
									<div class="clearfix form-actions">
    									<div class="col-md-offset-3 col-md-9">
      									<button type="submit" class="btn btn-info">
											<i class="ace-icon fa fa-check bigger-110"></i>Submit
      									</button>
      									<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>Cancel
											</button>
    									</div>
  									</div>


								</form>

							</div><!-- /.col -->
						</div><!-- /.row -->
							

				</div>
			</div><!-- /.main-content -->