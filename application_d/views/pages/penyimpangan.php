    <!-- /.info-box -->
    <div class="info-box mb-3 bg-warning">
    <span class="info-box-icon">
    <a href="javascript:;" onclick="ToController('e01/approve')" style="color:#fff;">
    <i class="fas fa-bullhorn"></i></a>
    </span>

    <div class="info-box-content">
    <span class="info-box-text">Approve <span class="badge badge-danger right"><?php echo $notifapprove ?></span></span>
    <span class="info-box-number"><?php echo $total_Approve ?></span>
    </div>
    <!-- /.info-box-content -->
 </div>
<!-- /.info-box -->

 <div class="info-box mb-3 bg-like">
    <span class="info-box-icon">
    <a href="javascript:;" onclick="ToController('e01/Analisis')" style="color:#fff;">
    <i class="fas fa-file-contract"></i></a>
    </span>
    <!-- /.info-box -->
    <div class="info-box-content">
    <span class="info-box-text">Analisis </span>
    <span class="info-box-number"><?php echo $total_ana ?></span>
    </div>
    <!-- /.info-box-content -->
 </div>
    <!-- /.info-box -->
   <script type="text/javascript">
      session = '<?php echo $this->session->userdata('ses_KodeSeksi') == 'IT'; ?>
                 <?php echo $this->session->userdata('ses_KodeSeksi') == 'QA'; ?>';

      if (session == true) {
            $("#accesssession").show();
         } else {
            $("#accesssession").hide();
         }

   </script>