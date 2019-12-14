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
            var addaddr = $("#data3").text();
            var addrating = $("#data4").text();
            var addwork = $("#data5").text();
            var addpic = $("#data6").text();
            $.ajax({
                type: "GET",
                url: "./insert.php",
                data: {
                    id: addid,
                    name: addname,
                    addr: addaddr,
                    rating: addrating,
                    work: addwork,
                    pic: addpic
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
            var caddr = $(tr + " .addr-data").text();
            var crating = $(tr + " .rating-data").text();
            var cwork = $(tr + " .work-data").text();
            var cpic = $(tr + " .pic-data").text();
            $.ajax({
                type: "GET",
                url: "./edit.php",
                data: {
                    id: id,
                    cid: cid,
                    cname: cname,
                    caddr: caddr,
                    crating: crating,
                    cwork: cwork,
                    cpic: cpic
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
                    //alert("Data was succesfully deleted");
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