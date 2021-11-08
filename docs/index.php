<?php include('nav.php') ?>

 
 <!--- backkground and all 3 functions at middle of page --->
  <div class="bg" >
    <div class="center">
        <a href="all_users.php" style="color:#fa4f16;"><span>View All Customers</span></a>
        <a href="transfer_money.php" style="color:#fa4f16;"><span>Trasnfer Money</span></a>
        <a href="transaction_history.php" style="color:#00158d;"><span>View Transaction History</span></a>
    </div>
	
	
<!--- About us section and left image --->
 </div>
 <div class="py-5">
 <h1 >About Us</h1>
 </div>
 <div class="container-fluid">
 <div class ="row">
<div  class="col-lg-6 col-md-6 col-12">
      <img data-aos="zoom-out"src="img/bank-building.png" class="img-fluid">
      </div>
      <div  class="col-lg-6 col-md-6 col-12">
      <h1 data-aos="zoom-in">TSF Bank</h1>
      <p1  style="color:#164cce;"> <font face = "Times New Roman" size = "5">TSF Bank is a part of The Spark Foundation.It was established by the Co-Founder of this bank 'Shubham Bhalerao' in 1992. It is one of best leading private banks and was among the first to receive approval from the Central bank of India to set up a private sector bank in 1992 .
          Today, TSF Bank has a banking network of more than 5,000 branches and 16,087 ATM's in more than 3,000 cities/towns. TSF Bank offers a diverse range of financial products and banking services to customers through a growing branch and ATM network and digital channels such as Netbanking, Phonebanking and MobileBanking.
          We assure you that TSF bank will be top ranking bank in upcoming 5 to 6 years.We will provide the best facilities online and as well as offline,fully advanced features in mobileapps and many more.
	  </p1>
        </div>  
    </div>
	
	
  <!--- Social Media links  --->
  <div data-aos="zoom-in">
  <section>
  <div class="color"></div>
  <div class="color"></div>
  <div class="color"></div>
  <ul >
  <li><a href="https://www.facebook.com/thesparksfoundation.info/" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <li><a href="https://twitter.com/SparkFdn" target="_blank"><i class="fa fa-twitter" ></i></a></li>
  <li><a href="https://www.instagram.com/thesparksfoundation.info/" target="_blank"><i class="fa fa-instagram"></i></a></li>
  <li><a href="https://in.linkedin.com/company/the-sparks-foundation" target="_blank"><i class="fa fa-linkedin"></i></a></li>
  <li><a href="https://www.thesparksfoundationsingapore.org/" target="_blank"><i class="fa fa-globe " aria-hidde="true"></i></a></li>
  </ul>
  </section>
  <div>
  <?php include('footer.php') ?>
  
  
  <!--- Initializing Script for animation on scroll--->
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
 AOS.init({offset:300});
 </script>
 <!-- Scripting of Creative Page Scroll Progress Bar -->
 <script type="text/javascript">
	    let progress = document.getElementById('progressbar');
	    let totalheight=document.body.scrollHeight - window.innerHeight;
		window.onscroll = function(){
			let progressHeight = (window.pageYOffset / totalheight)*100;
			progress.style.height = progressHeight + "%";
		}
	</script>
</body>
</html>
