<script>
$("#login").validate({
    rules:{
        username :{
            require : true
        },
        password:{
            require : false
        }
    },
    messages:{
        username:{
            require : "กรุณาลงชื่อ"
        },
        password : {
            require : "กรุณาใส่รหัสผ่าน"
        }
    }
});

$("#login").submit(function(){
    login();
})

function login(){
    event.preventDefault();
    var isValid = $("#login");

    if(isValid){
        var data = {
            "username":("#username").val(),
            "password":("#password").val()
        }
        
        $.post(base_url+ "Api/Auth/login", data
        function (data,textStatus,jqXHR) {
            var message = data.message;
        });
    }
}
//ตรวจสอบsubmitใช้สำหรับปุ่มsubmit
// login.submit(function(event){
//     event.preventDefault();
//     var isValid = login.valid();
//     if(isValid){
//         var data = login.serialize();
//         errorMessage.hide();
//         $.post(base_url+ "Api/Auth/login", data
//         function (data,textStatus,jqXHR) {
//             var message = data.message;
//             if(data.message == true){
//                 if(status == 1){
//                     alert("ลงชื่อเข้าใช้สำเร็จ"+admin)
                    
//                 }
//                 if(status== 2){
//                     alert("ลงชื่อเข้าใช้ไม่สำเร็จ"+teacher)
//                 }
//             }else{
//                 alert("ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณาลงชื่อเข้าใช้ใหม่");
//             }
            
//         });
//         )
//     }
// });

    


</script>