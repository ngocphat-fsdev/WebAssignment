<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        form p {
            display: inline-block;
            width: 50px;
        }
    </style>
    <script src="./jquery-1.9.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "display.php",
                dataType: "html",
                success: function(result) {
                    $("#display").html(result);
                }
            });
        });
        $(document).on("click", "#add", function() {
            var addid = $("#data1").text();
            var addname = $("#data2").text();
            var addpic = $("#data3").text();
            var addprice = $("#data4").text();
            var addres = $("#data5").text();
            $.ajax({
                type: "GET",
                url: "./insert.php",
                data: {
                    id: addid,
                    name: addname,
                    pic: addpic,
                    price: addprice,
                    res: addres
                },
                success: function(data) {
                    //alert("Data was succesfully added");
                    fetch_table();
                }
            })
        })

        $(document).on("click", ".edit", function() {
            var id = $(this).attr("id");
            var tr = "#tr" + id;
            var cid = $(tr + " .id-data").text();
            var cname = $(tr + " .name-data").text();
            var cpic = $(tr + " .pic-data").text();
            var cprice = $(tr + " .price-data").text();
            var cres = $(tr + " .resid-data").text();
            $.ajax({
                type: "GET",
                url: "./edit.php",
                data: {
                    id: id,
                    cid: cid,
                    cname: cname,
                    cpic: cpic,
                    cprice: cprice,
                    cres: cres
                },
                success: function(data) {
                    //alert("Data was succesfully edited");
                    fetch_table();
                }
            })
        })

        $(document).on("click", ".delete", function() {
            var id = $(this).attr("id");
            $.ajax({
                type: "GET",
                url: "./delete.php",
                data: {
                    id: id
                },
                success: function(data) {
                    fetch_table();
                    alert("Data was succesfully deleted");
                }
            })
        })

        function fetch_table() {
            $.ajax({
                type: "GET",
                url: "display.php",
                dataType: "html",
                success: function(result) {
                    $("#display").html(result);
                }
            });
        }
    </script>
</head>

<body>
    <div id="display"></div>
</body>

</html>