     <!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	    
	<?php
include_once("connection.php");
if(isset($_POST["btnAdd"]))
{
    $id = mysqli_real_escape_string($conn, $_POST["txtID"]);
    $name = mysqli_real_escape_string($conn, $_POST["txtName"]);
    $des = mysqli_real_escape_string($conn, $_POST["txtDes"]);
    $err = "";

    if($id == ""){
        $err .= "<li>Enter Category ID, please</li>";
    }
    if($name == ""){
        $err .= "<li>Enter Category Name, please</li>";
    }
    if($err != ""){
        echo "<ul>$err</ul>";
    }
    else{
        $sql = "SELECT * FROM category WHERE Cat_ID='$id' OR Cat_Name='$name'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 0)
        {
            $insertSql = "INSERT INTO category (Cat_ID, Cat_Name, Cat_Des) VALUES ('$id','$name','$des')";
            if(mysqli_query($conn, $insertSql)){
                echo '<meta http-equiv="refresh" content="0;URL=index.php?page=category_management&message=Category added successfully"/>';
            }
            else{
                echo "Error: " . mysqli_error($conn);
            }
        }
        else{
            echo "<li>Duplicate category ID or Name</li>";
        }
    }
}
?>

<div class="container">
	<h2>Adding Category</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Category ID(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Categoryy ID" value='<?php echo isset($_POST["txtID"])?($_POST["txtID"]):"";?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Category Name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Category Name" value='<?php echo isset($_POST["txtName"])?($_POST["txtName"]):"";?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Description(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Description" value='<?php echo isset($_POST["txtDes"])?($_POST["txtDes"]):"";?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnAdd" id="btnAdd" value="Add new"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='index.php'" />
                              	
						</div>
					</div>
				</form>
	</div>