<?php 
include 'data-menu.php';
?>
<div class="top">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col">
    				<p class="social d-flex">
    					<a href="https://facebook.com/Océna-Immo-HMMH-105643415520085"><span class="icon-facebook"></span></a>
                        <!--
    					<a href="#"><span class="icon-twitter"></span></a>
    					<a href="#"><span class="icon-google"></span></a>
							<a href="#"><span class="icon-pinterest"></span></a>
-->
    				</p>
    			</div>
    			<div class="col d-flex justify-content-end">
    				<p class="num"><span class="icon-phone"></span> +261 34 09 08 389</p>
    			</div>
    		</div>
    	</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">
        <img src="images/tm-logo/logo1.png" alt="Trano Meublé">
            </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			  <?php
			 	foreach($data as $v) {
					$active = isset($v[2])?'active':'';
					$url = $v[1];
					$nom_menu = $v[0];
					echo "<li class=\"nav-item $active\"><a href=\"$url\" class=\"nav-link\">$nom_menu</a></li>";
				}
			  ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->