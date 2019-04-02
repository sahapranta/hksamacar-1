<div id="wrapper" class="col-md-2 col-xl-2">
  <!-- Sidebar -->

    <div class="col-sm-12 col-lg-12 text-center mt-2">
        <p><img src="front_images/hklogo.gif" height="100" width="100" alt="HKS"></p>
        <!-- <h5 style="font-family: 'Leckerli One', cursive; color: white;" > Hare Krishna Samacar</h5> -->

    </div>



    <div id="accordion">

    <div class="card">
      <div class="card-header">
        <a class="card-link" href="hks_dashboard.php"> Dashboard</a>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo"> Agents  </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_agent_new.php" > New Agent </a> <br>
			<a href="hks_agent_book.php" > Agent Book </a>
        </div>
      </div>
    </div>

	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse3"> Subscribers  </a>
      </div>
      <div id="collapse3" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_subs_new.php"> New Subscriber </a> <br>
			<a href="hks_subs_book.php"> Subscriber Book </a>
		</div>
      </div>
    </div>




    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse57">  Products </a>
      </div>
      <div id="collapse57" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_products.php" > Products </a> <br>
			<a href="cob_month.php" > Monthly COB</a>
        </div>
      </div>
    </div>





	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse5"> Cash Memo  </a>
      </div>
      <div id="collapse5" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_cash_retail.php" > Retail Sale </a> <br>
			<a href="hks_cash_post.php" > Courier & Post Office </a>
        </div>
      </div>
    </div>

	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link"  href="hks_send_newspaper.php"> Send Newspaper  </a>
      </div>
    </div>

	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="hks_acc_summ.php"> Accounts  </a>
      </div>
    </div>


    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="#collapse9"> Settings    </a>
      </div>
    </div>

  </div> <!-- End of Accordion -->

<div class='text-center mt-2' style="position: relative; bottom: 0;">
    <?php include "hks_user.php";?>
    <p style= "color: yellow;" > Powered by <br> <a href="https://www.facebook.com/hksamacar/" target="_blank" style="color: white;" >@HareKrishnaSamacarIT</a></p>
</div>


</div>