<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Search Coupan</title>
   
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" >

</head>
<body>

<div class="wrap">
<div class="search">Search coupan code by number</div>

<div class="search">
   <input type="text" class="searchTerm" placeholder="Please enter your 10 digit mobile number" style="height:40px;" maxlength="10">
   <button type="submit" class="searchButton">
	 <i class="fa fa-search"></i>
  </button>
</div>
</div>
</body>
</html>