function success_sweet(text, redirect){
  $(document).ready(function(){
    swal({
      title: 'Success!',
      text: text,
      type: 'success',
      showCancelButton: false,
      closeOnConfirm: false,
      showLoaderOnConfirm: false
    },
    function(){
      location.href=redirect;
    });
  });
}
function failed_sweet(text){
  $(document).ready(function(){
    swal('Failed!', text, 'error');
  });
}

function delete_sweet_dtt(button, redirect){
  $(document).ready(function(){
    $(document).delegate(button, 'click', function(ev){
      ev.preventDefault();
      var id = $(this).attr("data-id");
      var url = $(this).attr("data-url");
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: url
        }).done(function(data){
          //swal("Deleted!", "Your file was successfully deleted!", "success");
          if(data === "0"){
            swal("Failed", "Please delete files associated first!", "error");
          }else{
            swal({
              title: 'Deleted!',
              text: 'Your file was successfully deleted!',
              type: 'success',
              showCancelButton: false,
              closeOnConfirm: false,
              showLoaderOnConfirm: false
            },
            function(){
              location.href=redirect;
            });
          }
        }).error(function(data){
          swal("Oops", "We couldn't connect to the server!", "error");
        });
      });
    });
  });
}
function reset_sweet_dtt(button, redirect){
  $(document).ready(function(){
    $(document).delegate(button, 'click', function(ev){
      ev.preventDefault();
      var id = $(this).attr("data-id");
      var url = $(this).attr("data-url");
      swal({
        title: "Are you sure?",
        text: "Your password will be default!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, reset it!",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: url
        }).done(function(data){
          //swal("Deleted!", "Your file was successfully deleted!", "success");
          if(data === "0"){
            swal("Failed", "Please reset files associated first!", "error");
          }else{
            swal({
              title: 'Reset Default!',
              text: 'Your file was successfully reset!',
              type: 'success',
              showCancelButton: false,
              closeOnConfirm: false,
              showLoaderOnConfirm: false
            },
            function(){
              location.href=redirect;
            });
          }
        }).error(function(data){
          swal("Oops", "We couldn't connect to the server!", "error");
        });
      });
    });
  });
}