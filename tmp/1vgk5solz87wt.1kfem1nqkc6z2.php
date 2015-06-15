<h1><?php echo $page_head; ?></h1>
<hr>
<div class="row">
  <div class="col-lg-8">

    <!-- Primary data table -->
    <div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Manage Email Contacts</h3>
	</div>
	<div class="panel-body">
	    <table id="contactTable" width="600" cellpadding="5" class="table table-hover table-striped">
	        <thead>
	        <tr>
	            <th scope="col">First</th>
	            <th scope="col">Last</th>
	            <th scope="col">Email</th>
	            <th scope="col">Action</th>
	        </tr>
	        </thead>
	        <tbody>
	        </tbody>
	    </table>
	    <div class="centerme">
	      <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#contactModal" id="newContact">
	        <i class="fa fa-plus fa-lg"></i>  Add New Contact
	      </button>
	    </div>
	</div>
    </div>
  </div>
  <div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">AJAX Contact List Example</h3>
			</div>
		<div class="panel-body">
			<p></p>
		</div>
		</div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title centerme" id="myModalLabel">Add / Edit Contacts</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <form id="addContact" class="form" method="POST">
              <div class="form-group">
                <label for="fname">First Name:</label>
                <input type='text' name='fname' id='fname' class='form-control' placeholder='John' />
              </div>
              <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type='text' name='lname' id='lname' class='form-control' placeholder='Doe' />
              </div>
              <div class="form-group">
                <label for="email">Email Address:</label>
                <input type='text' name='email' id='email' class='form-control' placeholder='jdoe@email.com' />
              </div>
              <input type='hidden' name='contactID' id='contactID' value='' />
              <input type='hidden' name='action' id='action' value='add' />
              <input type='submit' id='contactSubmit' class='btn btn-success btn-block' value='Add Contact' />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
