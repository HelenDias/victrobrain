 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>VictroBrain Installer</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="install/view/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="install/view/css/styles.css" rel="stylesheet">

	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">     
            <center><img src="install/view/img/victrobrain-white.png" width="190" style="margin:5px;"></center>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
 
        <div class="col-sm-12">

           

            <div class="row">
                <!-- center left-->
                
                <!--/col-->
                <div class="col-md-6 col-md-offset-3">
                    
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="fa fa-wrench pull-right"></i>
                                <h4>Install - Finish</h4>
				<div class="progress">
                                	<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="panel-body" style="text-align: center;">
                            <form class="form form-vertical" method="post">
                        
                                <p>Everything is ready!</p>
                                <p>Use VictroBrain as your own brain, just be CREATIVE</p>
                                
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <center><button type="submit" name="check" class="btn btn-lg btn-success">
                                            Done
                                        </button></center>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/panel content-->
                    </div>
             
                </div>
                <!--/col-span-6-->

            </div>
            <!--/row-->

           
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->
<footer style="position: absolute; bottom: 0px; margin-left: -15px; width: 100%; border-top: 3px solid #00a5eb;">.<font style="position: absolute; left:20px;">
    
    <?php if(date('Y') > 2016 ){ ?>
    Copyright &#xa9; 2016 - <?php echo date('Y'); ?> <a href="http://victrobrain.com">VictroBrain</a>
    <?php } else { ?>
        Copyright &#xa9; 2016 <a href="http://victrobrain.com">VictroBrain</a>
    <?php } ?>
        </font>
        <font style="position: absolute; right:20px;">Version <?php echo $victro_version; ?></font>
</footer>

	<!-- script references -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="install/view/js/bootstrap.min.js"></script>
		<script src="install/view/js/scripts.js"></script>
	</body>
</html>