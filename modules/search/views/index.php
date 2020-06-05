<html> 
<head>     
	<title>Search with Ajax CI</title>          
	<script>     
		var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js     
	</script> 
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">    
	<script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->     
	<script src="<?php echo base_url("js/config.js"); ?>"></script> <!-- Load file process.js --> 
</head> 
<body> 

 
<input type="text" id="keyword"> 
<button type="button" id="btn-search">Search</button> 
<a href="<?php echo base_url(); ?>">Reset</a> 
<br> 
 
<div id="view">   
	<?php $this->load->view('view', array('tbl_produk'=>$tbl_produk)); // Load file view.php dan kirim data siswanya ?> 
</div> 
 
</body> 
</html>