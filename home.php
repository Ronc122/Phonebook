<!-- Link for connecting to database and other PHP query -->
<?php include_once 'server.php';?>
<?php
	/* Query for fetching all contact in a specific user */
	if(isset($_GET['username'])){
		$user = $_GET['username'];
		$sql = "SELECT * FROM account,users_account WHERE account.username='$user' AND users_account.username='$user' ORDER BY firstname ASC ";
		$result	= mysqli_query($db, $sql);

	$updated = isset($_GET['updated']);// setting up for successful update
	$deleted = isset($_GET['deleted']);// setting up for successful delete
	$added 	 = isset($_GET['added']);// setting up for successful adding
?>
<!DOCTYPE html>
<html>
<head>
  <title>Phonebook</title>
	<!-- Head Links in a separate file -->
	<?php include 'template/header.php';?>
</head>
<body>
	<!-- Navigation Bar in a separate file -->
	<?php include 'template/navbar.php'; ?>

	<section class="jumbotron">
		<div align="right">
			<!-- Modal button for adding contacts -->
			<button type="button" data-toggle="modal" data-target=".bd-example-modal-lg" style="position: absolute; margin-left:-90px ; border-radius:30px;" class="btn btn-warning"><img  src='images/add-user.png' width="40" height="30" /></button>
			<?php include 'add.php';?>
		</div>

			<div class="container3 w-75 rounded border-dark" id="account_table" style="align-items:center; padding-top: 20px; margin: auto;">

				<?php include 'alert.php'?>

				<table class="table w-100 table-striped table-dark border-0" style="align-items: center; margin-right: auto;margin-left: auto;" method="post">
					<thead>
						<tr>
							<th scope="row" colspan="2"><h4><strong>My Contacts</strong></h4></th>
							<th scope="row"><input style="width:200px; float:right;" class="form-control" id="myInput" type="text" placeholder="Search.."></th>
						</tr>
						<tr>
							<th scope="col">Names</td>
							<th scope="col">Phone Number</td>
							<th scope="col">Action</td>
						</tr>
					</thead>
					<tbody class="table-striped bg-light text-dark" id="myTable">
						<!-- Showing data from database on the table -->
						<?php 
							if (mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_assoc($result)){
				  		?>
						<tr>
							<td><?php 
									echo $row['firstname'];
									echo "&nbsp";
									echo $row['lastname'];
								?></td>
							<td><?php 
									echo $row['number'];
								?></td>
							<td>
								<a name="edit" title="Edit" style='font-size:12px; border-radius:12px : ' value="Edit" href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-xs">Edit</a>
								<input type="button" name="view" value="View" style='font-size:12px;' id="<?php echo $row['id'];?>" class="btn btn-success btn-xs view_data">
								<input type="button" name="delete" title="Delete" value="Delete" style='font-size:12px;' data-id="<?php echo $row['id'];?>"  class="delete btn btn-danger btn-xs" data-toggle="#deleteModal" title="Delete">
						</tr>
						<?php
								} 
							}else{ 
								echo "<tr><td></td><td><p style='color:red;'>No data available!</p></td>";
								echo "<td></td>";
								echo "</tr>";
							}
						}?>
					</tbody>
				</table>
	</section>
	<!-- Script for filtering fethed data or searching data -->
	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
	<!-- Footer Link -->
	<?php include 'template/footer.php'; ?>
</body>
</html>

<!-- Modal for showing data from database -->
<div id="dataModal" class="modal fade bd-example-modal-md" data-backdrop="static" data-keyboard="false">  
	<div class="modal-dialog modal-md"  role="document">  
		<div class="modal-content">   
		<div class="modal-body d-inline" id="Contact_Details"></div> 
			<div class="modal-footer"> 
				<input type="button" class="btn btn-default btn-danger" data-dismiss="modal" value="Okay">   
			</div>  
	   </div>  
	</div>  
</div>

<!-- Confirmation Modal for deleting data from database -->
<div id="deleteModal" class="modal fade" data-backdrop="static" data-keyboard="false">  
	<div class="modal-dialog" role="document">  
		<div class="modal-content">
			<form action="delete.php" method="GET">
		   		<div class="modal-header" style="background-color:#F44336;"> 
					<h3>Delete!</h3>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		   		</div>
				<div class="modal-body">
					<p>Are you sure you want to delete this Information?</p>
					<p><small>This action cannot be undoned.</small></p>
				</div> 
				<div class="modal-footer">
					<input type="hidden" name="id" value="" />
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<button class="btn btn-danger" type="submit">Delete</button>  
				</div>
			</form>  
		</div>  
	</div>  
</div>


<script>
	/* function for activating delete modal when click */
	$(function(){
		$('input.delete').click(function(e){
			e.preventDefault();
			var link = this;
			var deleteModal = $("#deleteModal");
			deleteModal.find('input[name=id]').val(link.dataset.id);
			deleteModal.modal();
		});
	});
	
 	$(document).ready(function(){
	/* function for activating modal to show data when click using ajax */
	$(document).on('click', '.view_data', function(){  
		var id = $(this).attr("id");  
		if(id != ''){  
			$.ajax({  
				url:"select.php",  
				method:"POST",  
				data:{id:id},  
				success:function(data){  
					$('#Contact_Details').html(data);  
					$('#dataModal').modal('show');  
				}  
			});  
		}            
	});   
 });  
 </script>
