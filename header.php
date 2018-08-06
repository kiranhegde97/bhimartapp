<header>	
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<div class= "col-lg-4 pull-left" >
				<!--<img id="profile-img" class="profile-img-card img-responsive" src="logo.jpg"/>-->
				 <img id="profile-img" src="images/logo.jpg" class="profile-img-card img-responsive" alt="bhimart logo" >
				</div>
				<div  class="col-lg-8 pull-right" >
				<div class="adj"> 
<span><?php  echo $username=$_SESSION['user']['username'];?>	 </span><br>
<span><?php  echo $role=$_SESSION['user']['role']; ?> </span>
<div sytle: align="center" id="logout">
<a href="logout.php" class="btn btn-danger pull-right">Logout</a>

 			
 	</div>	
 		</div>
	      	</div>            	
				</div>
					</div>
						</div>
							</div>

</header>
