<div class="container">
	<h3>Select Employee</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>

	<!-- <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Confirm Delete</h4>
	      </div>
	      <div class="modal-body">
	        	Do you want to delete this record?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
	      </div>
	    </div>
	  </div>
	</div>-->



	

	<div class="form-group">
    		<form id="myFormSearch" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtId" value="0">
        		    <label for="exampleInputEmail1">Search Employee</label>
    			<input type="email" class="form-control" name="searchData" aria-describedby="emailHelp" placeholder="Enter email">
    				
        	</form>
        	<button type="button" id="searchButton" class="btn btn-primary">Search</button>

  </div>

	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td>ID</td>
				<td>Employee Name</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>
</div>


<div id="myModalEdit" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>

      <div class="modal-body">
        	<form id="myFormEdit" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtId" value="0">
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Employee ID</label>
        			<div class="col-md-8">
        				<input type="text" disabled name="txtId" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="name"  class="label-control col-md-4">Employee Name</label>
        			<div class="col-md-8">
        				<input type="text" disabled name="txtEmployeeName" class="form-control">
        			</div>
        		</div>
        		
        	</form>
        	<button id="btnAddRecordDetail" class="btn btn-success">Add New Record</button>
        	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
				<thead>
					<tr>
						<td>ID</td>
						<td>POSITION</td>
						<td>DATE HIRED</td>
						<td>DATE RESIGNED</td> 
						<td>STATUS</td>
						<td>ACTION</td>
					</tr>
				</thead>
				<tbody id="showDataDetail">
					
				</tbody>
			</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" id="btnSave" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 

<div id="myModalServiceRecord" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	<form id="myFormDetail" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtServiceRecordId" value="0">
        		<input type="hidden" name="txtId">
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Position</label>
        			<div class="col-md-8">
        				<input type="text" name="txtPosition" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="address" class="label-control col-md-4">Date Hired</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtDateHired"></textarea>
        			</div>
				</div>
				<div class="form-group">
        			<label for="address" class="label-control col-md-4">Date Resigned</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtDateResigned"></textarea>
        			</div>
				</div><div class="form-group">
        			<label for="address" class="label-control col-md-4">Status</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtStatus"></textarea>
        			</div>
			</form>	
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSaveServiceRecord" class="btn btn-primary">Save</button> 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        	Do you want to delete this record?
	      </div>
	    
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" id="btnDelete" class="btn btn-primary">Save</button> 
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->




<script>
	$(function(){
		showAllEmployee();

		//Add New
		$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New Employee');
			$('#myForm').attr('action', '<?php echo base_url() ?>employee/addEmployee');
		});


		$('#btnAddRecordDetail').click(function(){
			$('#myModalServiceRecord').modal('show');
			$('#myModalServiceRecord').find('.modal-title').text('Add New Employee Record');
			$('#myFormDetail').attr('action', '<?php echo base_url() ?>EmployeeRecord/addEmployeeRecord');
		});



		$('#btnSave').click(function(){
			alert('test');
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//validate form
			var empoyeeName = $('input[name=txtEmployeeName]');
			var address = $('textarea[name=txtAddress]');
			var result = '';
			if(empoyeeName.val()==''){
				empoyeeName.parent().parent().addClass('has-error');
			}else{
				empoyeeName.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(address.val()==''){
				address.parent().parent().addClass('has-error');
			}else{
				address.parent().parent().removeClass('has-error');
				result +='2';
			}

			if(result=='12'){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#myModal').modal(	'hide');
							$('#myForm')[0].reset();
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}
							$('.alert-success').html('Employee '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployee();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				});
			}
		});


		$('#btnSaveServiceRecord').click(function(){
			alert('Saving Service Record');
			var url = $('#myFormDetail').attr('action');
			var data = $('#myFormDetail').serialize();
			var empoyeeID = $('input[name=txtId]');
			//alert(empoyeeID);
			//validate form
			/*var empoyeeName = $('input[name=txtEmployeeName]');
			var address = $('textarea[name=txtAddress]');
			var result = '';
			if(empoyeeName.val()==''){
				empoyeeName.parent().parent().addClass('has-error');
			}else{
				empoyeeName.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(address.val()==''){
				address.parent().parent().addClass('has-error');
			}else{
				address.parent().parent().removeClass('has-error');
				result +='2';
			}

			if(result=='12'){*/
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#myModalServiceRecord').modal(	'hide');
							$('#myFormDetail')[0].reset();
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}

							$('.alert-success').html('Employee Record '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployeeDetail(employeeID.val());
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				}); 
			//}
		});

		//edit
		$('#showdata').on('click', '.item-edit', function(){
			var id = $(this).attr('data');
			alert(id);
			//showAllEmployeeDetail(id);
			/*$('#myModalEdit').modal('show');
			$('#myModalEdit').find('.modal-title').text('Edit Employee Service Records');
			$('#myForm').attr('action', '<?php echo base_url() ?>employee/updateEmployee');*/
			
			$.ajax({
				type: 'ajax',
				method: 'post',
				//url: '<?php echo base_url() ?>EmployeeRecord/editEmployee',
				/*url: '<?php echo base_url() ?>ServiceRecord/editEmployee',*/
				url: '<?php echo base_url('ServiceRecord/editEmployee') ?>',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					/*$('input[name=txtEmployeeName]').val(data.employee_name);
					$('textarea[name=txtAddress]').val(data.address);
					$('input[name=txtId]').val(data.id);*/
				},
				error: function(){
					alert('Could not Edit Datass');
				}
			});
		});

		//delete- 
		$('#showDataDetail').on('click', '.item-delete', function(){
			var id = $(this).attr('data');
			$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>EmployeeRecord/deleteEmployeeRecord',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployee();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
		});



		//function
		function showAllEmployee(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>employee/showAllEmployee',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html +='<tr>'+
									'<td>'+data[i].id+'</td>'+
										'<td>'+data[i].employee_name+'</td>'+
										/*'<td>'+data[i].address+'</td>'+
										'<td>'+data[i].created_at+'</td>'+*/
										/*'<td>'+
											'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">EditOL</a>'+
										'</td>'+*/
										/*'<td>'+
											'<a href="<?php echo site_url('ServiceRecord/editEmployee');?>/"'+data[i].id+'>Edit</a>'+
										'</td>'+*/
										/*<?php echo $row->ID; ?>*/
										'<td>'+
											'<a href="<?php echo site_url('ServiceRecord/editEmployee');?>/'+data[i].id+'">Editss</a>'+
										'</td>'+
							    '</tr>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}


		//function show employee RECORDS detail
		function showAllEmployeeDetail(id){
		//alert(id);
		$.ajax({
			type: 'ajax',
			url: '<?php echo base_url() ?>EmployeeRecord/showAllEmployeeRecord',
			method: 'get',
			async: false,
			data:{id:id},
			dataType: 'json',
			success: function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html +='<tr>'+
								'<td>'+data[i].ID+'</td>'+
								'<td>'+data[i].POSITION+'</td>'+
								'<td>'+data[i].DATEHIRED+'</td>'+
								'<td>'+data[i].DATERESIGNED+'</td>'+
								'<td>'+data[i].STATUS+'</td>'+
								'<td>'+
									'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].ID+'">Edit</a>'+
									'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].ID+'">Delete</a>'+
								'</td>'+
							'</tr>';
				}
				$('#showDataDetail').html(html);
			},
			error: function(){
				alert('Could not get Data from Database');
			}
		});
			//alert('wee');
		}


	});



	/*************************************************************************/

	$(document).ready(function(){

	$('#searchButton').click(function(){

			var url = $('#myFormSearch').attr('action');
			var data = $('#myFormSearch').serialize();
			//validate form
			var empoyeeName = $('input[name=searchData');
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					url: '<?php echo base_url() ?>EmployeeRecord/showAllEmployeeDetail',
					dataType: 'json',
					success: function(data){
						var html = '';
						var i;
						for(i=0; i<data.length; i++){
							html +='<tr>'+
										'<td>'+data[i].id+'</td>'+
										'<td>'+data[i].employee_name+'</td>'+
										/*'<td>'+data[i].address+'</td>'+
										'<td>'+data[i].created_at+'</td>'+*/
										'<td>'+
											'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">EditOLD</a>'+
										'</td>'
										/*'<td>'+
											'<a href="<?php echo site_url('ServiceRecord/editEmployee');?>/"'+data[i].id+'>Edit</a>'+
										'</td>'+*/
										/*'<td>'+
											'<a href="<?php echo site_url('ServiceRecord/editEmployee');?>">Editss</a>'+
										'</td>'+
								    '</tr>'*/




										;
						}
						$('#showdata').html(html);
					},
					error: function(){
						alert('Could not get Data from Database');
					}
				});
		});
	});





</script>