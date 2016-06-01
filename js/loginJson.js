$(document).ready(function() {
    console.log( "ready!" );
    $('#formSubmit').on('submit', function(){
    var that=$(this),
        contents=that.serialize();
        
            $.ajax({
               url: 'test.php',
               dataType: 'json',
               type: 'post',
               data: contents,
               success:function(data){
                alert('hello');
                   console.log('hello'+data);
                   console.log('hel'+ that);
                    console.log('username will'+ data.username + "password will"+data.password);
               }
            });
            return true;
});
});