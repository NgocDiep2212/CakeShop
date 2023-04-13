function exituser(){
    var option = confirm('Bạn có chắc chắn muốn đăng xuất không?');
        if(!option) return;
        $.post('ajax.php',{
            'action': 'exit'
        },function(data){
            location.href = "../login.php";
        })
 }