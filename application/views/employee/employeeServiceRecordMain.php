<div class="container">
	<h3>Employee Service Record Main</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>


	<form id="myFormEdit" action="" method="post" class="form-horizontal">
        		<!--<input type="hidden" name="txtId" value="0">-->
        		<input type="hidden" name="txtId" value="<?php echo $row->id;?>" >
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Employee ID</label>
        			<div class="col-md-8">
        				<input type="text" disabled name="txtId" value="<?php echo $row->id;?>" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="name"  class="label-control col-md-4">Employee Name</label>
        			<div class="col-md-8">
        				<input type="text" disabled name="txtEmployeeName" value="<?php echo $row->employee_name;?>" class="form-control">
        			</div>
        		</div>
        		
        	</form>


        	<button   id="btnAddRecordDetail" class="btn btn-default">Add New Records</button>
        	<a href="<?php echo base_url('ServiceRecord/ExportToExcelEmployeeRecord');?>/<?php echo $row->id;  ?>">
        		<button   id="btnExportExcelDetail" class="btn btn-default">Export to Excel</button>
        	</a>
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
					<!-- <?php foreach ($record as $row2){ ?>
					<tbody>
						<tr>
						<th scope="row"><?php echo $row2->ID; ?></th>
						<td><?php echo $row2->POSITION; ?></td>
						<td><?php echo $row2->DATEHIRED; ?></td>
						<td><?php echo $row2->DATERESIGNED; ?></td>
						<td><?php echo $row2->STATUS; ?></td>
						<td>
						<a  data-toggle="modal" data-target="#myModalServiceRecord">Edit</a> | 
						<a>Delete</a>
						</td>
						</tr>
						<?php }?>
					</tbody>-->


					</tbody>
			</table>
			
		</table>
			
</div>




<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">

        	<form id="myFormDetailEdit" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtServiceRecordIdEdit" >
   
        		<input type="hidden" name="txtId" value="<?php echo $row->id;?>" >
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Position</label>
        			<div class="col-md-8">
        				<input type="text" name="txtPositionEdit" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="address" class="label-control col-md-4">Date Hired</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtDateHiredEdit"></textarea>
        			</div>
				</div>
				<div class="form-group">
        			<label for="address" class="label-control col-md-4">Date Resigned</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtDateResignedEdit"></textarea>
        			</div>
				</div>
				<div class="form-group">
        			<label for="address" class="label-control col-md-4">Statusss</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtStatusEdit"></textarea>
        			</div>
        		</div>
			</form>	
		
	      </div> <!-- id="btnSaveEditedServiceRecord" -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	<button type="button" id="btnSaveUpdatedServiceRecord" class="btn btn-primary">Save</button> 
	      </div>
    </div>
  </div>
</div>

<div id="deleteRecord" class="modal fade" tabindex="-1" role="dialog">
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
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
 


 


	<div id="addModal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Add new record</h4>
	      </div>
	      <div class="modal-body">
        	<form id="myFormDetail" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtServiceRecordId" value="0">
        		<!--<input type="hidden" name="txtId"> -->
        		<input type="hidden" name="txtId" value="<?php echo $row->id;?>" >
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







<script>
	$(function(){

		showAllEmployeeDetail();
		//Add New

		$('#btnAddRecordDetail').click(function(){
			$('#addModal').modal('show');
			$('#addModal').find('.modal-title').text('Add New Employee Record');
			$('#addModal').attr('action', '<?php echo base_url() ?>ServiceRecord/addEmployeeRecord');
		});

		//function show employee RECORDS detail
		function showAllEmployeeDetail(){
		//var id = $(this).attr('data');
		

					//var url = $('#myFormSearch').attr('action');
			var data = $('#myFormEdit').serialize();
			//var id = $('input[name=txtId]');
			var id = $('input[name=txtId]').val();

			//alert(id+' ko');
			//console.log(id.name);
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>ServiceRecord/showAllEmployeeRecord',
				method: 'get',
				async: false,
				data:{'id':id},
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
					//alert('success');
					$('#showDataDetail').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
			//alert('wee');
		}


		$('#btnSaveServiceRecord').click(function(){
			//alert('TEST');
			alert('Saving Service Record');
			var url = $('#myFormDetail').attr('action');
			alert(url);
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
					url: '<?php echo base_url() ?>ServiceRecord/addEmployeeRecord',
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#addModal').modal(	'hide');
							$('#myFormDetail')[0].reset();
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}

							$('.alert-success').html('Employee Record '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployeeDetail();
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




		$('#btnSaveUpdatedServiceRecord').click(function(){
			//alert('TEST');
			alert('Saving Service Record');
			var url = $('#myFormDetailEdit').attr('action');
			console.log(url);
			var data = $('#myFormDetailEdit').serialize();
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
					//url: '<?php echo base_url() ?>ServiceRecord/addEmployeeRecord',
					url: '<?php echo base_url('ServiceRecord/updateEmployeeRecord') ?>',
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#editModal').modal(	'hide');
							$('#myFormDetailEdit')[0].reset();
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}

							$('.alert-success').html('Employee Record updated successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployeeDetail();
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




		//delete- 
		$('#showDataDetail').on('click', '.item-delete', function(){
			var id = $(this).attr('data');
			$('#deleteRecord').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>ServiceRecord/deleteEmployeeRecord',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteRecord').modal('hide');
							$('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							//showAllEmployee();
							showAllEmployeeDetail();
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

		//edit
		$('#showDataDetail').on('click', '.item-edit', function(){
			var id = $(this).attr('data');
			//alert(id);
			//showAllEmployeeDetail(id);
			$('#editModal').modal('show');
			$('#editModal').find('.modal-title').text('Edit Employee Service Records');
			$('#myFormDetailEdit').attr('action', '<?php echo base_url() ?>ServiceRecord/updateEmployeeRecord');
			
			$.ajax({
				type: 'ajax',
				method: 'get',
				//url: '<?php echo base_url() ?>EmployeeRecord/editEmployee',
				/*url: '<?php echo base_url() ?>ServiceRecord/editEmployee',*/
				url: '<?php echo base_url('ServiceRecord/editEmployeeRecord') ?>',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					
							$('input[name=txtServiceRecordIdEdit]').val(data[0].ID);
							$('input[name=txtPositionEdit]').val(data[0].POSITION);
							$('textarea[name=txtDateHiredEdit]').val(data[0].DATEHIRED);
							$('textarea[name=txtDateResignedEdit]').val(data[0].DATERESIGNED);
							$('textarea[name=txtStatusEdit]').val(data[0].STATUS);					
					
				},
				error: function(){
					alert('Could not Edit Datass');
				}
			});
		});


	});

</script>


	