
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
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Produk</th>
													<th>Merk</th>
													<th>Kode Produk</th>
													<th>Deskripsi</th>
													<th>Harga</th>
													<th>Discount</th>
													<th>Harga Discount</th>
													<th>Gambar1</th>
													<th>Gambar2</th>
													<th>Gambar3</th>
													<th>Status</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
											  <?php
  											$no=0;
  											foreach ($sql1->result() as $value) {
  												$no++;
  												?>
  												<tr>
													<td><?php echo $no; ?></td>
													<td><?php echo $value->nama_produk; ?></td>
													<td><?php echo $value->merk; ?></td>
													<td><?php echo $value->kode_produk; ?></td>
													<td><?php echo $value->deskripsi; ?></td>
													<td><?php echo $value->harga; ?></td>
													<td><?php echo $value->discount; ?></td>
													<td><?php echo $value->harga_discount; ?></td>
													<td><?php echo $value->gambar1; ?></td>
													<td><?php echo $value->gambar2; ?></td>
													<td><?php echo $value->gambar3; ?></td>

													<td class="hidden-480">
														<span class="label label-sm label-warning"><?php echo $value->status; ?></span>
													</td>

													<td>
												<div class="hidden-sm hidden-xs action-buttons">
																<a class="green" href="<?php echo base_url(); ?>users/edit/<?php echo $value->id; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="javascript:if(confirm('Anda yakin ingin menghapus??')){document.location='<?php echo base_url();?>users/hapus/<?php echo $value->id; ?>';}">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

													</td>
												</tr>
  												<?php
  												}
  												?>
												
											</tbody>

										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
							

				</div>
			</div><!-- /.main-content -->