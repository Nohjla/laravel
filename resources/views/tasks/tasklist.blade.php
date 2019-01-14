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
				<form action="/newtask" method="POST">
					{{ csrf_field()}}
				  <div class="form-group">
				    <label>Task name:</label>
				    <input type="text" class="form-control" id="newtask" name="newtask">
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

						@foreach($tasks as $task)
						<tr>
							<td>
							{{
							$task->name
							}}
							</td>
							<td>
							{{$task->created_at}}
							</td>
							<td>
							<button type="button" class="btn btn-danger" onclick="openDeleteModal({{$task->id}},'{{$task->name}}')" data-toggle="modal">Delete</button>
							<button type="button" class="btn btn-primary" onclick="openEditModal({{$task->id}},'{{$task->name}}')" data-toggle="modal">Edit</button>
							</td>
						</tr>
						@endforeach
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
	      	<form id="deleteTask" method="POST">
	      	{{ csrf_field()}}
	      	{{ method_field('DELETE')}}
	      	<span id ="Taskdel">
	        Do you want to delete this task?
	      	</span>
	      	<button type="submit" class="btn btn-danger">Delete</button>
	      	</form>
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
	        	<form id="editTaskForm" method="POST">
	        		{{ csrf_field()}}
	      			{{ method_field('PUT')}}
	        		<label>Task:</label>
	        		<input type="text" name="editedtask" id="editedtask"></input>
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
	function openDeleteModal(id,name){
		$('#deleteTask').attr("action", "/taskdelete/"+id);
		$('#Taskdel').html('Do you want to delete task ' + name + '?');
		$("#deleteModal").modal("show");
	}
	function openEditModal(id,name){
		$('#editedtask').val(name);
		$("#editTaskForm").attr("action","taskupdate/"+id);
		$("#editModal").modal("show");
	}

</script>
</body>
</html>