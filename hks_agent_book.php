<?php include 'Layout/header.php'; ?>
<?php include "session_check.php";  ?>
<script>
  // $('document').ready(function() {
    // function agBookSearch() {
    //   document.querySelector("#ag_submit").submit(); 
    // }
  // });
</script>
<body>

<div class="container-fluid">
  <div class="row" style= "height: 100%;" >
    <?php include 'Layout/sidebar.php'; ?>
    <div class="col-md-10 col-xl-10">
      <div id="page-content-wrapper">
        <div class="page-content inset">
          <div class="row">
            <div class="col-md-12">
              <p class="well lead mt-5 text-center"> Agent Book </p>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 contact-form">
                    <form id="ag_submit" method="post" class="form" role="form" target='iframe_ag_book'  action="ag_book_search.php">
                      <div class="input-group" style="text-aling: right; padding: 0px 0px 0px 0px">
                        <input class="form-control" id="ag_input" name="ag_search" placeholder="Type to Search" type="text"/>
                        <input type="hidden" name="type" value="All" id="status_type"/>
                        <span class="input-group-btn">
                          <input class="btn btn-primary " type="submit" value="Active" > 
                          <input class="btn btn-danger" type="submit" value="Inactive" >
                          <input class="btn btn-warning" type="submit" value="All" >
                        </span>
                      </div>
                    </form>
                  </div> <!-- fim div da direita -->
                </div> <!-- fim div da esquerda -->
              </div>
              <iframe  class='mt-1' name='iframe_ag_book' height=135% width=100%   style="border:0"></iframe> 
              <hr>
              <iframe   name='iframe_ag_book_individual_summary' height="300px" width=100%   style="border:0"></iframe> 
            </div>
          </div> <!-- end of row -->
        </div>
      </div>
    </div> <!--end of col-md-10 col-xl-10 -->
  </div> <!-- end of row -->
</div> <!-- end of container -->
  <iframe
    name='ag_book_action_mod_update_data'
    height="0"
    width="0"
    scrolling="no"
    style="border:0"
  >
  </iframe>
<?php include 'Layout/footer.php'; ?>
<script>
$(document).ready(function(){
  $('#ag_submit input[name="ag_search"]').on('keyup', function(){
    $('#ag_submit').submit();
  });
  $('#ag_submit input[type="submit"]').on('click', function(){
    $('#ag_submit input[name="type"]').val(this.value);
  });
});
</script>