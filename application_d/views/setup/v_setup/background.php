<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Background</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Background</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">

          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(0,'#131212c9','#ffffff','0.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/0.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(1,'#131212c9','#ffffff','1.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/1.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(2,'#131212c9','#ffffff','2.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/2.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(3,'#131212c9','#ffffff','3.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/3.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(4,'#131212c9','#ffffff','4.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/4.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(5,'#131212c9','#ffffff','5.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/5.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(6,'#131212c9','#ffffff','6.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/6.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(7,'#131212c9','#ffffff','7.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/7.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(8,'#131212c9','#ffffff','8.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/8.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(9,'#131212c9','#ffffff','9.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/9.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(10,'#131212c9','#ffffff','10.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/10.jpg" alt="">
                </a>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" onclick="set_background(11,'#131212c9','#ffffff','11.jpg')" class="d-block mb-4 h-100">
                  <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>allassets/background/11.jpg" alt="">
                </a>
          </div>

        </div>
    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript">
  url_setbackground = '<?php echo $url_setbackground; ?>';

  function set_background(id, color, font, background) {
      $.ajax({
          url: url_setbackground,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: id,
              color: color,
              font:font,
              background: background
          },
          success: function (data) {
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }
</script>