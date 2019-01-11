<!DOCTYPE html>
<html>
<head>
	<title>Todolist app</title>

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<!-- popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<!-- bootstrap js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<form>
				  <div class="form-group">
				    <label>Task name:</label>
				    <input type="email" class="form-control" id="newtask" name="newtask">
				    <button type="submit" class="btn btn-primary">Add task</button>
				  </div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<td>Task</td>
							<td>Created</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sample Task 1</td>
							<td>5 mins ago</td>
							<td>
								<button type="button" class="btn btn-danger" onclick="openDeleteModal()" data-toggle="modal">Delete</button>
								<button type="button" class="btn btn-primary" onclick="openEditModal()" data-toggle="modal">Edit</button>
							</td>
						</tr>
						<tr>
							<td>Sample Task 2</td>
							<td>5 mins ago</td>
							<td>
								<button type="button" class="btn btn-danger" onclick="openDeleteModal()" data-toggle="modal">Delete</button>
								<button type="button" class="btn btn-primary" onclick="openEditModal()" data-toggle="modal">Edit</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- delete modal form -->
	<!-- Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="deleteModalLabel">Delete this task?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Do you want to delete this task?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- edit modal form -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="editModalLabel">Edit this task?</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        	<form>
	        		<label>Task:</label>
	        		<input type="text" name="editedtask"></input>
	        		<button type="submit" class="btn btn-primary">Save changes</button>
	        	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

<script type="text/javascript">
	function openDeleteModal(){
		$("#deleteModal").modal("show");
	}
	function openEditModal(){
		$("#editModal").modal("show");
	}

</script>
</body>
</html>