<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>404 Error Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">404 Error Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
          <textarea id="myTextArea" style="background-color: transparent;color: green; width: 100%; height:350px;" row="25"></textarea>
       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
  $(document).ready(function() {
$("#myTextArea").html(">_");

setInterval(function(){
removeAndAppendBlickWraper();
},2000);
	
});

function removeAndAppendBlickWraper(){
		removeAndAppendBlick(function(){
		
				var text = $("#myTextArea").val(),
				withCursortext =text+">_";
				$("#myTextArea").val(withCursortext);
		
		});
}
function removeAndAppendBlick(callback){
var text = $("#myTextArea").val();
 var witoutCursor = text.substr(0,text.lastIndexOf(">_"));
 $("#myTextArea").val(witoutCursor);
 setTimeout(function(){
 callback();
 },1500);
 
}

  </script>