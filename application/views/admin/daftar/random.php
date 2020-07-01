<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main2.css"); ?>">
</head>
<body id="page-top">

	<body id="page-top" style="background-image:url(<?php echo site_url("assets/img/background/bg1.jpg")?>">

		<?php $this->load->view("admin/_partials/navbar.php") ?>
		<div id="wrapper">

			<?php $this->load->view("admin/_partials/sidebar.php") ?>

			<div id="content-wrapper">

				<div class="container-fluid">

					<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="card" style="width: 80rem;">
									<table align="center">
										<tbody>
											<tr>
												<td>
													<img src="<?php echo base_url('assets/img/daftarico.png') ?>" alt="Card image cap" width="150px" height="100px">
												</td>
												<td>
													<div class="card-body">
														<h4 class="card-title">Daftar Masuk Terbaru Permohonan SKP</h4>
													</td>
													<td>
														<table align="center">
															<tbody>
																<tr>
																	<td>
																		<h3>&nbsp;&nbsp;&nbsp;Masuk&nbsp;&nbsp;&nbsp;&nbsp;</h3>
																		<div class="card bg-info text-white">
																			<h1 class="timer count-title count-number" data-to=<?php print_r($jummasuk['jum_statusmasuk']) ?> data-speed="1000"></h1></div>
																		</div>
																	</td>
																	<td>
																		<h3>&nbsp;&nbsp;&nbsp;Dalam Proses&nbsp;&nbsp;&nbsp;&nbsp;</h3>
																		<div class="card bg-warning text-white">
																			<h1 class="timer count-title count-number" data-to=<?php print_r($jum['jum_status']) ?> data-speed="1000"></h1></div>
																		</div>
																	</td>
																	<td>
																		<h3>&nbsp;&nbsp;&nbsp;&nbsp;Jadi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
																		<div class="card bg-success text-white">
																			<h1 class="timer count-title count-number" data-to=<?php print_r($jumjadi['jum_statusjadi']) ?> data-speed="1000"></h1></div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td colspan="3">
																		<a class="btn btn-primary" href="<?php echo site_url('admin/daftar_admin/list') ?>"><i class="fa fa-list"></i> Tampilkan Semua</a><br>
																	</td>
																</tr>
															</tbody>
														</table><br>	
													</td>
												</tr>
											</tbody>
										</table>	
										<div class="row">
											<?php
											foreach($pendaftar as $pencari) {
												?>
												<div class="col-md-6">
													<table class="table table-hover table-striped" align="center">
														<tr>
															<td rowspan="4" width="1">
																<img class="img-circle"
																src="<?php echo base_url('upload/daftar/'.$pencari->image) ?>"
																alt="Bukti foto" width="140" height="140">
															</td>
															<td width="100">
																Nama
															</td>
															<td width="1">:</td>
															<td>
																<?php echo $pencari->nama; ?>
															</td>
														</tr>
														<tr>
															<td>
																Email
															</td>
															<td width="1">:</td>
															<td>
																<?php echo $pencari->email; ?>
															</td>
														</tr>
														<tr>
															<td>
																Tanggal
															</td>
															<td width="1">:</td>
															<td>
																<?php echo $pencari->tanggal; ?>
															</td>
														</tr>
													</table>
												</div>
												<?php } ?>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- /.content-wrapper -->
		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>
<script>
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
            	from:            $(this).data('from'),
            	to:              $(this).data('to'),
            	speed:           $(this).data('speed'),
            	refreshInterval: $(this).data('refresh-interval'),
            	decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
            	clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
            	value += increment;
            	loopCount++;

            	render(value);

            	if (typeof(settings.onUpdate) == 'function') {
            		settings.onUpdate.call(self, value);
            	}

            	if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    
                    if (typeof(settings.onComplete) == 'function') {
                    	settings.onComplete.call(self, value);
                    }
                }
            }

            function render(value) {
            	var formattedValue = settings.formatter.call(self, value, settings);
            	$self.html(formattedValue);
            }
        });
	};

	$.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
    	return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  	formatter: function (value, options) {
  		return value.toFixed(options.decimals).replace(/B(?=(?:d{3})+(?!d))/g, ',');
  	}
  });

  // start all the timers
  $('.timer').each(count);  

  function count(options) {
  	var $this = $(this);
  	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  	$this.countTo(options);
  }
});
</script>
</body>

</html>