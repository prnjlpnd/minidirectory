
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function store(){

var x=document.getElementById("Password").value;
var y=document.getElementById("UserName").value;

 db = openDatabase('webdbtutorial', '1.0', 'ScanItems', 2000);
    db.transaction(function(tx) {
    	var x=document.getElementById("Password").value;
var y=document.getElementById("UserName").value;
      tx.executeSql("CREATE TABLE if not exists Items1 (ID INTEGER PRIMARY KEY,ScannedData TEXT)",[], function(tx){}, null);
        tx.executeSql('insert into Items1 (ID, ScannedData) values (?,?)',[x,y]);});

window.location.href="websql.html";
 alert("Record added Succesfully")

}
    function store1(){

    	var y=document.getElementById("UserName").value;
document.getElementById("inputlabel").innerHTML="Name: "+y;
    }
     function store2(){

    	var x=document.getElementById("Password").value;
document.getElementById("inputlabel1").innerHTML="Phone No.: "+x;
    }
   
    
    

    </script>
<link rel="stylesheet" href="adminstyles.css">
<style>
	.fieldinfo{
		color: rgb(251,174,44);
		font-family: Bitter,Georgia,"Times New Roman",Times,seriff;
		font-size: 1.2em;
	}
	body{
		background-color: #ffffff;
	}
	.blogpost{
	background-color: #f5f5f5;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 10px;
	overflow: hidden;

}
</style>
</head>
<body>
	<div style="height: 10px; background: #27aae1;"></div>
	<nav class="navbar navbar-inverse role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Blog.php"><img style="margin-top: -12px" src="Images/images.jpg" width=250; height=50; ></a>

			</div>
			<div class="collapse navbar-collapse" id="collapse">
</div>
</div>
</nav>
<div style="height: 10px; background: #27aae1; margin-top: -20px;"></div>
<div class="container-fluid">
<div class="row">
	
	<div class="col-sm-offset-4 col-sm-4">
		<br><br><br><br>
		<div class="blogpost">
		<h2 style="font-family: cursive; ">Hello There!</h2>
		

		<div>
      <form action="addsub.php" method="post" enctype="multipart/form-data">
       	<fieldset>
       		<div class="form-group">
       			
       	<label for="UserName"><span class="fieldinfo">UserName:</span></label>
       	<div class="input-group input-group-lg">
       				<span class="input-group-addon">
       					<span class="glyphicon glyphicon-user text-primary"></span>
       				</span>
       	<input onkeyup="store1()" class="form-control"  type="text" name="UserName" id="UserName" placeholder="Name" required>
       	</div>
</div>
       	<div class="form-group">
       	<label for="Password"><span class="fieldinfo">Phone No.:</span></label>
       	  	<div class="input-group input-group-lg">
       	  		<span class="input-group-addon">
       	  				<span class="glyphicon glyphicon-th text-primary"></span>
       				</span>
       	<input class="form-control" onkeyup="store2()" type="number" name="Password" id="Password" placeholder="Kindly Enter only Numerical  Values:)" required>
       	</div>
       </div>
       	<P>-------------------------------------------------------------------------------------------------</p>
      
       	<p><b>Subscriber to be added</b></p>
       	
       		<p style="font-family: cursive;" id="inputlabel">Name:</p>
            <p style="font-family: cursive;" id="inputlabel1">Phone No.:</p>
       	<br>
       	<button style="width: 100%"  onclick="store()" class ="btn btn-info btn-block" type="button" name="Submit"><span style="color: #ffffff" >ADD</a></span></button>
        
       	</fieldset>
       	<br>
       	</form>
		</div>
		
	</div>

</div>
</div>
</div>

</body>
</html>