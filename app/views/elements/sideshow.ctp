<link rel="stylesheet" href="<?php echo DOMAIN;?>/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo DOMAIN;?>/css/nivo-slider.css" type="text/css" media="screen" />
<div id="content_sileshow">
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
		<?php $Quangcao = $this->requestAction("/advs/index_home");?>
		<?php foreach($Quangcao as $Quangcao){ ?>
			<img src="<?php echo DOMAIN;?>/<?php echo $Quangcao['Adv']['images'];?>" />
		<?php } ?>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo DOMAIN;?>/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo DOMAIN;?>/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</div>