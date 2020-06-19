

<html>  
<head>
<title>Farmer Intermediate Page</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
 body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#policy .container #policy-row #policy-column #policy-box {
  margin-top: 20px;
  max-width: 600px;
  height:200px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#policy .container #policy-row #policy-column #policy-box #policy-form {
  padding: 20px;
}
#policy .container #policy-row #policy-column #policy-box #policy-form {
  margin-top: -80px;
}

#policy .container #policy1-row #policy1-column #policy1-box {
  margin-top: 20px;
  max-width: 600px;
  height:220px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#policy .container #policy1-row #policy1-column #policy1-box #policy1-form {
  padding: 20px;
}
#policy .container #policy1-row #policy1-column #policy1-box #policy1-form {
  margin-top: 5px;
}
#policy1-link {
 text-align: center;
padding-top: 30px;
 padding-bottom: 20px;
}
#policy2-link {
 text-align: center;
}
#view
{
padding-top: 10px;
}

</style>
</head>
<body>

    <div style="padding-top: 30px;">

        <center><a href="logout.php" class="btn btn-danger btn-sm">Log Out</a></center>

    </div>

    <div id="policy">
        <div class="container">
            <div id="policy-row" class="row justify-content-center align-items-center">
                <div id="policy-column" class="col-md-6">
                    <div id="policy-box" class="col-md-12">
                            <h3 class="text-center text-info" id="view" >View Government Policy</h3>
                            <div id="policy1-link">
                                <a href="https://pmfby.gov.in/farmerRegistrationForm" class="text-info">Pradhan mantri fasal bima yojna</a>
                            </div>
<div id="policy2-link">
                                <a href="https://pmkisan.gov.in/" class="text-info">PM-Kisan Samman Nidhi</a>
                            </div>
                            </div>
                    </div>
                </div>
            </div>

	<div class="container">
            <div id="policy1-row" class="row justify-content-center align-items-center">
                <div id="policy1-column" class="col-md-6">
                    <div id="policy1-box" class="col-md-12">
                            <form id="policy1-form" class="form" action="http://localhost/weather_update.php" method="post">
                            <h3 class="text-center text-info">View Weather Forecast</h3>
                    
                            <div class="form-group">
                                <label for="pincode" class="text-info">Pincode:</label><br>
                                <input type="text" name="pincode" id="pincode" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="View" class="btn btn-info btn-md" value="View">
                            </div>
                        </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>