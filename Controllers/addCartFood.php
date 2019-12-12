<?php
    include ("connectDB.php");
?>
<script type="text/javascript" charset="UTF-8">

    var listCookies = document.cookie.split(';');
    if (listCookies!=""){
        for(var i = 0; i<listCookies.length; i++){
            var pos = listCookies[i].indexOf("=");
            var value_cookie = listCookies[i].substring(pos+1,listCookies[i].length);
            if(value_cookie == "added"){
                var name_cookie = listCookies[i].substring(0,pos).split('_');
                $("#btn_add_"+name_cookie[1]).hide();
                $("#added_"+name_cookie[1]).show();
                $("#added_"+name_cookie[1]).html("Đã thêm");
            }
        }
    }

    function discount(){
        var code = $("#code").val();
        if(code == "abc123"){
            var total = (57 - 57*0.1)*1000;
            $("#total").html(total+"đ");
        }
    }

    $("#myCart").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:9, nameFood: "Cô Út-Bún Chả Cá miền Trung", linkImage:"bunchaca.jpg", price:"42.000đ", amount:1, totalprice: "42.000đ" ,status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#myCart").text(response);
                }   
            }
        });
        document.cookie="food_9 = added";
    });

    $("#btn_add_1").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:1, nameFood: "Bún Chả Cá", linkImage:"bunchaca_small.jpg", price:"15.000đ", amount:1, totalprice: "15.000đ" ,status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_1").hide();
                    $("#added_1").show();
                    $("#added_1").html(response);
                }   
            }
        });
        document.cookie="food_1 = added";
    });

    
    $("#btn_add_2").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:2, nameFood: "Bánh Canh Chả Cá", linkImage:"banhcanhchaca.jpg", price:"20.000đ", amount:1, totalprice:"20.000đ",status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_2").hide();
                    $("#added_2").show();
                    $("#added_2").html(response);
                }   
            }
        });
        document.cookie="food_2 = added";
    });

    
    $("#btn_add_3").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:3, nameFood: "Bún chả cá + cá cờ + sứa", linkImage:"bunchaca_cosua.jpg", price:"30.000đ", amount:1, totalprice:"30.000đ",status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_3").hide();
                    $("#added_3").show();
                    $("#added_3").html(response);
                }   
            }
        });

        document.cookie="food_3 = added";
    });

    
    $("#btn_add_4").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:4, nameFood: "Bún chả cá + trứng cá ngừ", linkImage:"bunchaca_cangu.jpg", price:"32.000đ", amount:1, totalprice:"32.000đ",status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_4").hide();
                    $("#added_4").show();
                    $("#added_4").html(response);
                }   
            }
        });

        document.cookie="food_4 = added";
    });

    
    $("#btn_add_5").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:5, nameFood: "Bánh canh Xương", linkImage:"banhcanhxuong.jpg", price:"26.000đ", amount:1, totalprice:"26.000đ",status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_5").hide();
                    $("#added_5").show();
                    $("#added_5").html(response);
                }   
            }
        });

        document.cookie="food_5 = added";
    });

    
    $("#btn_add_6").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:6, nameFood: "Yaourt", linkImage:"yaourt.jpg", price:"7.000đ", amount:1, totalprice:"7.000đ",status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_6").hide();
                    $("#added_6").show();
                    $("#added_6").html(response);
                }   
            }
        });

        document.cookie="food_6 = added";
    });

    
    $("#btn_add_7").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:7, nameFood: "Chả cá chiên (1kg)", linkImage:"chacachien.jpg", price:"150.000đ", amount:1, totalprice:"150.000đ",status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_7").hide();
                    $("#added_7").show();
                    $("#added_7").html(response);
                }   
            }
        });

        document.cookie="food_7 = added";
    });

    
    $("#btn_add_8").click(function(){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleAdd.php",
            dataType: "json",   
            data: {"Add": "add", id:8, nameFood: "Chả cá hấp (1kg)", linkImage:"chacahap.jpg", price:"150.000đ", amount:1, totalprice:"150.000đ",status:"Đã thêm"},        
            success: function(response){
                //alert(response.localeCompare("no account"));
                if(response == "no account"){
                    window.location.replace("http://localhost/BTL2/WebAssignment-master/Views/Login/Login.php");
                }
                else{
                    $("#btn_add_8").hide();
                    $("#added_8").show();
                    $("#added_8").html(response);
                }   
            }
        });

        document.cookie="food_8 = added";
    });

</script>