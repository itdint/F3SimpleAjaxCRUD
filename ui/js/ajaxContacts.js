$(document).ready(function () {  //executes everything enclosed upon document load
  //go ahead and load the data into the table upon page load
  $.ajax({
      url: '../../ajax/getallcontacts',
      dataType: 'json',
      type: 'post',
      success: function (data) {
          $('#ajaxload').html('');
          $.each (data, function (element) {
            var tablerow =  '<tr id="row_'+data[element].id+'" name="row_'+data[element].id+'">\
              <td id="fname_'+data[element].id+'" name="fname_'+data[element].id+'">'+data[element].fname+'</td>\
              <td id="lname_'+data[element].id+'" name="lname_'+data[element].id+'">'+data[element].lname+'</td>\
              <td id="email_'+data[element].id+'" name="email_'+data[element].id+'">'+data[element].email+'</td>\
              <td nowrap>\
              <a href="#" class="btn-sm btn-info" name="edit" id="'+data[element].id+'" ><i class="fa fa-edit fa-lg"></i> edit</a>\
              <a href="#" class="btn-sm btn-warning" id="'+data[element].id+'" name="delete" ><i class="fa fa-remove fa-lg"></i> delete</a>\
              </td>\
              </tr>';
            $('#contactTable').append(tablerow);
          });
      },
      error: function(data) {
        console.log('err');
      }
  });

  // Handle the Add and Edit contact form processing
    $('#addContact').submit(function(e){
      e.preventDefault();
      // setup the write vars
      var $fname = $('#fname');
      var $lname = $('#lname');
      var $email = $('#email');
      var $action = $('#action');
      var $id = $('#contactID');
      // Action is Add
      if ($action.val() == 'add') {
        // adding the contact
        var $tr = $(this).closest('tr');
        $.ajax({
          url: '../../ajax/newcontact',
          dataType: 'json',
          type: 'post',
          data: {
              fname: $fname.val(),
              lname: $lname.val(),
              email: $email.val()
            },
          success: function(data) {
            var $newID = data.lastID;
            console.log(data.lastID);
            //$textbox.val('');
              // contact is added, get the last ID and read the new contact into the DOM
              $.ajax({
                url: '../../ajax/getcontact/'+$newID,
                dataType: 'json',
                type: 'post',
                success: function (newrow) {
                  console.log(newrow);
                  var tablerow =  '<tr>\
                    <td>'+newrow.fname+'</td>\
                    <td>'+newrow.lname+'</td>\
                    <td>'+newrow.email+'</td>\
                    <td>\
                    <a href="#" class="btn-sm btn-info" name="edit" id="'+newrow.id+'" ><i class="fa fa-edit fa-lg"></i> edit</a>\
                    <a href="#" class="btn-sm btn-warning" id="'+newrow.id+'" name="delete" ><i class="fa fa-remove fa-lg"></i> delete</a>\
                    </td>\
                    </tr>';

                  $('#contactModal').modal('hide');
                  //alert($tr);
                  $('table tr:last').after($(tablerow).hide().fadeIn(1000));
                  //$tr.prepend(tablerow).hide().fadeIn(1000);
                },
                error: function (data) {
                  console.log('err');
                }
              });
            },
            error: function(data) {
              console.log('error');
            }
        });
      }

      // Action is Edit
      if ($action.val() == 'edit') {
        // adding the contact
        var $contactID = $('#contactID').val();

        $.ajax({
          url: '../../ajax/updatecontact/'+$contactID,
          dataType: 'json',
          type: 'post',
          data: {
              fname: $fname.val(),
              lname: $lname.val(),
              email: $email.val()
            },
          success: function(data) {
            $('#contactModal').modal('hide');
            $('#fname_'+$contactID).fadeOut(500, function() {
              $('#fname_'+$contactID).text($('#fname').val());
              $('#fname_'+$contactID).fadeIn(500);
            });
            $('#lname_'+$contactID).fadeOut(500, function() {
              $('#lname_'+$contactID).text($('#lname').val());
              $('#lname_'+$contactID).fadeIn(500);
            });
            $('#email_'+$contactID).fadeOut(500, function() {
              $('#email_'+$contactID).text($('#email').val());
              $('#email_'+$contactID).fadeIn(500);
            });

            },
            error: function(data) {
              console.log('error');
            }
        });
      }

    });

    // Handle the Edit and Delete clicks
    $('#contactTable').on("click", "a", function(e){
      e.preventDefault();
      var $tr = $(this).closest('tr');
      var $id = this.id;
      console.log(this.id);
      // delete button was clicked
      if (this.name == "delete") {
        $.ajax({
            url: '../../ajax/delcontact/'+$id,
            dataType: 'json',
            type: 'post',
            success: function (data) {
              console.log(data.id);
              $tr.find('td').fadeOut(1000,function(){
                  $tr.remove();
              });
            },
            error: function (data) {
              console.log('err');
            }
        });
      }
      // edit button was clicked
      if (this.name == "edit") {
        $('#action').val('edit');
        $('#contactID').val(this.id);
        $('#contactSubmit').val('Update Contact');
        $('#fname').val($('#fname_'+this.id).text());
        $('#lname').val($('#lname_'+this.id).text());
        $('#email').val($('#email_'+this.id).text());
        $('#contactModal').modal('show');
      }
      //alert('You are trying to '+this.name+' contact #'+this.id);
    });

    //This just clears out the modal form since we use the same form to edit and add

		$('#newContact').click(function(){
      $('#fname').val('');
      $('#lname').val('');
      $('#email').val('');
    });
}); //close primary function
