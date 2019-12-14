<?php
    header('Content-Type: text/html; charset=UTF-8');
    include ("connectDB.php");
    $result = mysqli_query($conn, "SELECT * FROM cartfood ");
    $bill = mysqli_query($conn, "SELECT * FROM cartfood ");
?>
<script type="text/javascript" charset="UTF-8">
    function increment(id_number){
        var amountFood = $("#amount"+id_number).val();
        amountFood = parseInt(amountFood, 10);
        if(amountFood < 1000){
            amountFood += 1;
        }
        $("#amount"+id_number).val(amountFood);
        $("#amount"+id_number).html(amountFood);  
    }

    function decrement(id_number){
        var amountFood = $("#amount"+id_number).val();
        amountFood = parseInt(amountFood, 10);
        if(amountFood > 1){
            amountFood -= 1;
        }
        $("#amount"+id_number).val(amountFood);
        $("#amount"+id_number).html(amountFood);  
    }

    function discount(total){
        var code = $("#code").val();
        if(code == "abc123"){
            total = (total - total*0.1)*1000;
            $("#total").html(total+"đ");
        }
    }

    function saveFood(id_number){
        var amountFood = $("#amount"+id_number).val();
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleEdit_DeleteCart.php",
            data: {Edit: "edit" ,amount: amountFood, id: id_number},  
            dataType: "json",   //expect html to be returned               
            success: function(response){
                //alert(response);
            }
        });
        setTimeout(function(){
            window.location.reload();
        }, 1000);
         
    }

    function removeFood(id_number){
        $.ajax({    //create an ajax to request 
            type: "POST",
            url: "../../Controllers/handleEdit_DeleteCart.php",
            data: {Delete: "delete" , id: id_number},  
            dataType: "json",   //expect html to be returned               
            success: function(response){
                if(response == "delete"){                 
                    setTimeout(function(){
                        window.location.reload();
                    }, 1000);           
                }
                //alert(response);
            }
        });

        var listCookies = document.cookie.split(';');
        if (listCookies!=""){
            for(var i = 0; i<listCookies.length; i++){
                var pos = listCookies[i].indexOf("=");
                var name_cookie = listCookies[i].substring(0,pos).split('_');
                if(name_cookie[1] == id_number){
                    document.cookie=listCookies[i]+"; expires=Thu, 01 Jan 1970 00:00:00 UTC";
                }
            }  
        }
    }
</script>