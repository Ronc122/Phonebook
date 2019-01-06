<!--
	separating header links
-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<script src="js/bootstrap.min.js"></script>
<link href="css/mystyle.css" type="text/css" rel="stylesheet"/>
<link rel = "icon" type = "image/png" sizes = "180x180" href = "images/phonebook.png">
<script src="css/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		
<style type="text/css">
	* {
		margin: 0px;
		padding: 0px;
	}
	html,body{
  		background-color: grey;
  		height: 100%;
  	}
  	body::after{
  		content: "";
		background-image: url("images/background.jpg");
	  	}
  	.grid{
  		min-height: 100%;
	}
	.main{
		overflow: auto;
		padding-bottom: 100px;
	}
	footer{
		position: relative;
		height: 70px;
  		padding-top: -100px;
  		clear: both;
	}
	img[id="social_link"]{
		width: 20px;
		height: 20px;
	}
	h5{
		font-size: 10px;
	}
  	@media (max-width: 420px) { 
		h1{
			position: absolute;
			visibility:hidden;
		}
	}
	@media( max-width: 386px){
			h4{
				font-size: 15px;
			}
			input[class=form-control]{
				width: 100px;
				height: 30px;
				margin-right: 30px;
			}
			th[class="column-text"]{
				font-size: 10px;
			}
			td[class="row-text"]{
				font-size: 9px;
				font-weight: bold;
			}
			a[class="btn"],input[class="btn"]{
				font-size: 9px;
			}
		}
</style>