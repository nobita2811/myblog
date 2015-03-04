
					<?php $this->load->view('layout/pagination'); ?>
				</div>
                                <?php $this->load->view('layout/sidebar'); ?>
			</div>
                        <hr id="fixBottom">
			<div class="row clearfix">
				<div class="col-md-4 column">
					 <address> <strong>TRAN PHU, Inc.</strong><br /> 33 Ngõ Quỳnh - Bạch Mai<br /> Hai Bà Trưng - Hà Nội<br /> <abbr title="Phone">Điện thoại:</abbr> (097) 9930-752<br /> <abbr title="Email">Email:</abbr> svtxphu@gmail.com</address>
				</div>
				<div class="col-md-4 column">
					 <address> <strong>TRAN PHU, Inc.</strong><br /> 33 Ngõ Quỳnh - Bạch Mai<br /> Hai Bà Trưng - Hà Nội<br /> <abbr title="Phone">Điện thoại:</abbr> (097) 9930-752<br /> <abbr title="Email">Email:</abbr> svtxphu@gmail.com</address>
				</div>
				<div class="col-md-4 column">
                                    <strong>Copyright © <?= date('Y'); ?> PhuTX.INFO</strong><br>
                                    All Rights Reserved.<br>
                                    Địa chỉ IP của bạn: <?= $_SERVER['REMOTE_ADDR']; ?><br>
                                    <?= ip_info($_SERVER['REMOTE_ADDR'], "Address"); ?><br>
                                    Thời tiết: <?= get_weather($_SERVER['REMOTE_ADDR']); ?>
				</div>
			</div>
		</div>
		<div class="col-md-2 column">
		</div>
	</div>        
</div>
<!--<div class="navbar-fixed-bottom text-center alert-success">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></div>-->

<script src="<?= getJs('jquery.min') ?>"></script>
<script src="<?= getJs('jquery-ui.min') ?>"></script>
<script src="<?= getJs('affix') ?>"></script>

<script src="<?= getJs('bootstrap.min') ?>"></script>
<script src="<?= getJs('ckeditor/ckeditor'); ?>"></script>
<script src="<?= getJs('ckeditor/adapters/jquery'); ?>"></script>
<script src="<?= getJs('bootstrap-tokenfield'); ?>"></script>
<script src="<?= getJs('jquery-scrolltofixed-min'); ?>"></script>
<script src="<?= getJs('jquery.dataTables.min'); ?>"></script>
<script src="<?= getJs('jquery.bxslider.min'); ?>"></script>
<script src="<?= getJs('jquery.nicescroll.min'); ?>"></script>
<script src="<?= getJs('common') ?>"></script>
</body>

</html>