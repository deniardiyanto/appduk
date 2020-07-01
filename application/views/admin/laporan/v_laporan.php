<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
        <!-- Sarat Section Start -->
        <section id="services" class="services section-padding">
          <div class="container">
            <h2 class="section-title wow flipInX" data-wow-delay="0.4s">Jumlah Permohonan dan Kritik Saran sampai saat ini</h2><br><br>
          </div>
          <div class="wrapper">
            <div class="counter col_fourth">
              <i class="fas fa-fw fa-list-alt"></i>
              <div class="card bg-light text-dark">
                <h1 class="timer count-title count-number" data-to=<?php print_r($jumt['jum_pentot']) ?> data-speed="2000"></h1></div>
                <h3 class="count-text ">Jumlah Permohonan sampai saat ini</h3>
              </div>

              <div class="counter col_fourth">
                <i class="fas fa-comments"></i>
                <div class="card bg-light text-dark">
                  <h1 class="timer count-title count-number" data-to=<?php print_r($jumk['jum_kritot']) ?> data-speed="2000"></h1></div>
                  <h3 class="count-text ">Total Kritik dan Saran</h3>
                </div>
              </div>
            </section><br><br>
            <!-- Services Section End -->

            <!-- daftar Section Start -->
            <section id="about" class="section-padding">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                    </div>
                  </div> 
                  <div class="col-md-12 col-sm-12 text-center">
                    <div class="section-title wow flipInX" data-wow-delay="0.3s">
                      <h3>Detail Laporan Permohonan Pindah Penduduk Kab.Sleman dan Laporan Kritik Saran via Appduk</h3>
                      <a href="<?php echo site_url("admin/lap_pemohon"); ?>" class="btn btn-info"><i class="fas fa-fw fa-list-alt"></i> Cek Permohonan Pindah</a>
                      <a href="<?php echo site_url("admin/lap_kritik"); ?>" class="btn btn-danger"><i class="fas fa-comments"></i> Cek Kritik dan Saran!</a>
                    </div>
                  </div>   
                </div>
              </div>
            </section><br><br><br><br><br>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

          </div>
          <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->


        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>


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