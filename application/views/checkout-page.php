<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Paytm Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<h1 class="text-center">PayTm</h1>
			<div class="card-body">
                <form action="<?= base_url('pay') ?>" autocomplete="off" class="form" method="POST" id="formLogin" name="formLogin" role="form">
                  <div class="form-group">
                    <label for="name">Name</label> 
						<input class="form-control" name="name" required="" type="text" value="K.K ADIL KHAN AJAD">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label> 
						<input name="email" class="form-control" required="" type="email" value="example@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="email">Mobile</label> 
						<input name="mobile" class="form-control" required="" type="text" value="1234567890">
                  </div>
                  <div class="form-group">
                    <label for="email">Amount</label> 
						<input name="amount" class="form-control" required="" type="number" value="10">
                  </div>
				  <div class="form-group text-center">
				  	<button class="btn btn-success btn-lg float-right" type="submit">Pay</button>
				  </div>
                </form>
              </div><!--/card-block-->
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
</html>