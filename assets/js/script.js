$(document).ready(function(){
    $('.checkBox').checked(function(){
        
    });
    $('#btnToAddNewTask').click(function(){
        $('#floatingFormContainer').show();
    });
    $('#btnToCancel').click(function(){
        $('#floatingFormContainer').hide();
    });
});