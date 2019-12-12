<?php
include("connectDB.php");
include("../Models/Blog.php");
include("../Models/User.php");
$response_str = "";
if (isset($_GET["BlogID"])) {
    $queryString = 'SELECT COUNT(*) FROM blog WHERE BlogID =' . $_GET["BlogID"];
    $result = mysqli_query($conn, $queryString) or die(mysql_error());
    $row = mysqli_fetch_array($result) or die(mysql_error());
    if ($row['COUNT(*)'] == 1) {
        $queryString = 'SELECT * FROM blog WHERE BlogID =' . $_GET["BlogID"];
        $result = mysqli_query($conn, $queryString) or die(mysql_error());
        $blog = mysqli_fetch_array($result) or die(mysql_error());

        $queryString = 'SELECT * FROM user WHERE UserID =' . $blog["UserID"];
        $result = mysqli_query($conn, $queryString) or die(mysql_error());
        $user = mysqli_fetch_array($result) or die(mysql_error());

        $u = new User(
            $user['UserID'],
            $user['UserName'],
            $user['Sex'],
            $user['AccountName'],
            $user['Password'],
            $user['UserLevel']
        );

        $b = new Blog(
            $blog["BlogID"],
            $blog["Title"],
            $blog["Content"],
            $blog["Time"],
            $blog["LikeCount"],
            $blog["Rating"],
            $u,
            $blog["Avatar"]
        );
        $response_str .= '
            <h1 class="mt-4">' . $b->getTitle() . '</h1>

            <div class="lead">
                <div class="row">
                    <p>Đăng bởi &nbsp;</p>
                    <img src="images/male-avatar.jpg" class="avatar" alt="">
                    <a href="#" class="name-reviewer">' . $b->getUser()->getName() . '</a>
                    <p>- lúc ' . $b->getTime() . '</p>
                </div>
            </div>
            <hr>' . $b->getContent() . '            
            <blockquote class="blockquote author">
                <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">' . $b->getUser()->getName() . '</cite>
                </footer>
            </blockquote>';
    }
}
echo $response_str;

'<p class="content-text-intro">Bạn đã bao giờ tới những quán cafe kết hợp với shop thời trang chưa?
                Vừa được thưởng
                thức những đồ uống ngon lành, trong không gian thật tuyệt lại thỏa thích mua sắm những món đồ
                cực chất, tại sao
                lại không nhỉ?</p>

            <h2 class="mt-3" style="color: red">1. L\'Usine cafe</h2>
            <p class="content-text-para">Nếu ai đã từng ghé L\'Usine cafe có lẻ sẽ khá hài lòng với không gian
                nơi này. Không
                gian ở đây khá yên tĩnh, đây là nơi phù hợp để các bạn trẻ có thể làm việc và học tập. Sau khi
                thưởng thức đồ ăn
                và thức uống tại đây, bạn có thể tham quan và mua sắm ở khu quần áo, có rất nhiều món hàng phụ
                kiện và thời trang
                đặc sắc, tuy giá hơi cao nhưng bạn sẽ khó tìm được những món đồ tương tự ở nơi khác.</p>
            <img class="img-fluid rounded" src="images/photo-post-1.jpg" alt="" width="700">
            <p class="description-img mt-1">Bạn sẽ tìm được những món đồ cực chất tại tầng trệt của quán</p>
            <p>Xem chi tiết tại: <a href="#">http://www.</a></p>

            <h2 class="mt-3" style="color: red">2. Khanh Casa</h2>
            <p class="content-text-para">Khanh Casa có nhiều chi nhánh, và tất cả đều nằm ngay trung tâm quận 1.
                Quán có không
                gian rộng rãi, thoáng mát, trang trí khá đẹp, hài hòa theo phong cách cổ điển. Có rất nhiều cây
                xanh xung quanh
                cả trong và ngoài quán, tạo cảm giác dễ chịu, gần gũi với thiên nhiên. Khanh Casa thiết kế một
                khu riêng dành để
                trưng bày và bán những bộ bình ly, chén đĩa được làm bằng gốm, sứ, thủy tinh đặc sắc.</p>
            <img class="img-fluid rounded" src="images/photo-post-2.jpg" alt="" width="700">
            <p class="description-img mt-1">Bạn sẽ tìm được những bộ bình ly tuyệt đẹp tại đây</p>
            <p>Xem chi tiết tại: <a href="#">http://www.</a></p>

            <h2 class="mt-3" style="color: red">3. Simple Workshop & Drink</h2>
            <p class="content-text-para">Quán là sự kết hợp giữa shop quần áo và tiệm cafe. Ấn tượng
                nhất có thể
                nói là không gian đẹp, quần áo, giày dép của khá đẹp, đây chính là nơi hẹn hò lí
                tưởng cho những
                tín đồ thời trang.</p>
            <img class="img-fluid rounded" src="images/photo-post-3.jpg" alt="" width="700">
            <p class="content-text-para">Bật mí cho các bạn rằng quán đang áp dụng thẻ E card của
                Foody nha, chỉ cần
                trình E card bạn sẽ được giảm từ 10% - 20% đó.</p>
            <p>Xem chi tiết tại: <a href="#">http://www.</a></p>

            <p class="content-text-para">*** Ngoài các quán trên, tại Sài Gòn có rất nhiều chuỗi coffee bán
                những món đồ đặc
                trưng của shop như: Hollys, Phúc Long, Bene, Starbucks. Bạn có thể đến đây tìm mua những chiếc
                cốc xinh xắn hay
                những túi cafe mang thương hiệu riêng của những nhãn hàng.</p>';
?>