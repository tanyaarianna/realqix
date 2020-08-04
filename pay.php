<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>ADD MONEY</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	
</head>

<body>
<div class="image-container set-full-height" style="background-image:url('assets/img/wizard.jpg')">
	

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card"  data-color="blue" id="wizardProfile">
                    <form action="pay2pal.php" method="POST">
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>ENTER</b> DETAILS<br>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							            <ul>
	                            <li><a href="#about" data-toggle="tab"></a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            
                                  <div class="col-sm-8 col-sm-offset-2">

                                  	  <div class="form-group">
                                        <label>Mobile Number <small>*</small></label>
                                        <input name="mobNo" type="Number" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label>Amount <small>*</small></label>
                                        <input name="amnt" type="Number" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label>Password <small>*</small></label>
                                        <input name="pass" type="Password" class="form-control">    
                                      <div class="col-sm-6 col-sm-offset-3">
                                        <br>
                                      <a href = "paytm.html"><input type="submit" class="btn btn-info btn-block btn-primary active" value="PAY"></a>
                                      </div>

                                  </div>

                        </div>
                       
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div> 
        </div>
        </div>
    </div> 

 

</div>

</body>


	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>

</html>
