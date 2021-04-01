$(document).ready(function() { 
    // alert('Hi');
    $("#form").submit(function(e){
        e.preventDefault();
        $('#exampleModal').modal('show');
    });

});