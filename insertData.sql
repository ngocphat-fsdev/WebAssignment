USE WebDatabase;

INSERT INTO user(UserID, UserName, Sex, AccountName, Password, UserLevel)
VALUES(
    1,
    'xxx',
    1,
    'abc@gmail.com',
    '123456',
    1
);
INSERT INTO user(UserID, UserName, Sex, AccountName, Password, UserLevel)
VALUES(
    2,
    'Cà phê giá sỉ',
    1,
    'uuukkk@gmail.com',
    '123456',
    1
);
INSERT INTO user(UserID, UserName, Sex, AccountName, Password, UserLevel)
VALUES(
    3,
    'foodee_c95b0cfd',
    1,
    'afcsda@gmail.com',
    '123456',
    1
);
INSERT INTO user(UserID, UserName, Sex, AccountName, Password, UserLevel)
VALUES(
    4,
    'Bơ sáp',
    0,
    'afgsdd@gmail.com',
    '123456',
    1
);


INSERT INTO restaurant(ResID, Address, Name, Rating, WorkTime, PictureRes) 
VALUES (
    1,
    '30 Huỳnh Tịnh Của, Quận 3, TP. HCM',
    'The Coffee House',
    8.4,
    '07:00-23:00',
    './images/coffee-house.jpg'
);
INSERT INTO restaurant(ResID, Address, Name, Rating, WorkTime, PictureRes) 
VALUES (
    2,
    '29/24 Nguyễn Gia Trí (Đường D2), P. 25, Quận Bình Thạnh, TP.HCM',
    'Highland Fruits',
    8.4,
    '08:00-22:30',
    './images/highland-fruit.jpg'
);

INSERT INTO reviews(
    ID, 
    Title, 
    ReviewerName, 
    ReviewContent, 
    ReviewerAvatar, 
    ReviewPoint, 
    ReviewPicture, 
    ResID
)
VALUES (
    1,
    'None',
    'Minh Phạm',
    'Tch ở đây rộng rãi. Nhân viên nhiệt tình. Nước ổn, thích ngồi ở đây làm',
    './images/dog-avatar.jpg',
    8.1,
    NULL,
    1
);

INSERT INTO reviews(
    ID, 
    Title, 
    ReviewerName, 
    ReviewContent, 
    ReviewerAvatar, 
    ReviewPoint, 
    ReviewPicture, 
    ResID
)
VALUES (
    2,
    'None',
    'Vinh Lê',
    'The Coffee House thì quá quen thuộc với hầu hết mọi người rồi nhưng TCH đang có chương trình khuyến mãi đặc biệt',
    './images/cat-avatar.jpg',
    8.9,
    NULL,
    1
);

INSERT INTO reviews(
    ID, 
    Title, 
    ReviewerName, 
    ReviewContent, 
    ReviewerAvatar, 
    ReviewPoint, 
    ReviewPicture, 
    ResID
)
VALUES (
    3,
    'None',
    'Edra Mode',
    'Mình có dịp ghé qua quán do người bạn giới thiệu, mình là tín đồ của sầu riêng, và thế là như vớ được vàng :)))',
    './images/3-avatar.jpg',
    7.5,
    NULL,
    2
);

INSERT INTO reviews(
    ID, 
    Title, 
    ReviewerName, 
    ReviewContent, 
    ReviewerAvatar, 
    ReviewPoint, 
    ReviewPicture, 
    ResID
)
VALUES (
    4,
    'None',
    'Kiều Kiều',
    'Mình hay uống nước ép vì nguyên chất và không hề có đường, quán có món sinh tố Bơ sầu riêng thì siêu ngon',
    './images/4-avatar.jpg',
    9,
    NULL,
    2
<<<<<<< HEAD
=======
);

INSERT INTO blog(
    BlogID,
    Title,
    Content,
    Time,
    LikeCount,
    Rating,
    UserID,
    Avatar
) 
VALUES(
    1, 
    '(HCM) Top 10 Coffee shop cực chất khiến các tín đồ shopping điên đảo',
    '<p class="content-text-intro">Bạn đã bao giờ tới những quán cafe kết hợp với shop thời trang chưa? Vừa được thưởng
          thức những đồ uống ngon lành, trong không gian thật tuyệt lại thỏa thích mua sắm những món đồ cực chất, tại sao
          lại không nhỉ?</p>

        <h2 class="mt-3" style="color: red">1. L\'Usine cafe</h2>
        <p class="content-text-para">Nếu ai đã từng ghé L\'Usine cafe có lẻ sẽ khá hài lòng với không gian nơi này. Không
          gian ở đây khá yên tĩnh, đây là nơi phù hợp để các bạn trẻ có thể làm việc và học tập. Sau khi thưởng thức đồ ăn
          và thức uống tại đây, bạn có thể tham quan và mua sắm ở khu quần áo, có rất nhiều món hàng phụ kiện và thời trang
          đặc sắc, tuy giá hơi cao nhưng bạn sẽ khó tìm được những món đồ tương tự ở nơi khác.</p>
        <img class="img-fluid rounded" src="images/photo-post-1.jpg" alt="" width="700">
        <p class="description-img mt-1">Bạn sẽ tìm được những món đồ cực chất tại tầng trệt của quán</p>
        <p>Xem chi tiết tại: <a href="#">http://www.</a></p>

        <h2 class="mt-3" style="color: red">2. Khanh Casa</h2>
        <p class="content-text-para">Khanh Casa có nhiều chi nhánh, và tất cả đều nằm ngay trung tâm quận 1. Quán có không
          gian rộng rãi, thoáng mát, trang trí khá đẹp, hài hòa theo phong cách cổ điển. Có rất nhiều cây xanh xung quanh
          cả trong và ngoài quán, tạo cảm giác dễ chịu, gần gũi với thiên nhiên. Khanh Casa thiết kế một khu riêng dành để
          trưng bày và bán những bộ bình ly, chén đĩa được làm bằng gốm, sứ, thủy tinh đặc sắc.</p>
        <img class="img-fluid rounded" src="images/photo-post-2.jpg" alt="" width="700">
        <p class="description-img mt-1">Bạn sẽ tìm được những bộ bình ly tuyệt đẹp tại đây</p>
        <p>Xem chi tiết tại: <a href="#">http://www.</a></p>

        <h2 class="mt-3" style="color: red">3. Simple Workshop & Drink</h2>
        <p class="content-text-para">Quán là sự kết hợp giữa shop quần áo và tiệm cafe. Ấn tượng nhất có thể
          nói là không gian đẹp, quần áo, giày dép của khá đẹp, đây chính là nơi hẹn hò lí tưởng cho những
          tín đồ thời trang.</p>
        <img class="img-fluid rounded" src="images/photo-post-3.jpg" alt="" width="700">
        <p class="content-text-para">Bật mí cho các bạn rằng quán đang áp dụng thẻ E card của Foody nha, chỉ cần
          trình E card bạn sẽ được giảm từ 10% - 20% đó.</p>
        <p>Xem chi tiết tại: <a href="#">http://www.</a></p>

        <p class="content-text-para">*** Ngoài các quán trên, tại Sài Gòn có rất nhiều chuỗi coffee bán những món đồ đặc
          trưng của shop như: Hollys, Phúc Long, Bene, Starbucks. Bạn có thể đến đây tìm mua những chiếc cốc xinh xắn hay
          những túi cafe mang thương hiệu riêng của những nhãn hàng.</p>',
    '14:38 02/06/2018',
    36,
    5,
    1,
    'images/photo-post-1.jpg'          
);

INSERT INTO blog(
    BlogID,
    Title,
    Content,
    Time,
    LikeCount,
    Rating,
    UserID,
    Avatar
) 
VALUES(
    2, 
    'Top 3 địa điểm trên cao ngắm pháo hoa cực hot đêm giao thừa',
    '<p class="content-text-intro">Nếu bạn không muốn phải chen lấn giữa dòng người đông đúc, bạn có thể 
    lựa chọn ngồi ở các quán cà phê trên cao, vừa thu vào tầm mắt toàn bộ cảnh đêm huyền ảo của Hà Nội,
    vừa dễ dàng ngắm nhìn những chùm pháo hoa sáng rực trên nền trời vào thời khắc giao thừa. 
    Foody gợi ý cho bạn 10 địa điểm trên cao để bạn có thể ngắm pháo hoa cùng người thương nha!</p>
    <img class="img-fluid rounded" src="images/photo-post2-1.jpg" alt="" width="700">

    <h2 class="mt-3" style="color: red">1. Top of Ha Noi</h2>

    <p class="content-text-para">Nằm trên tầng cao nhất của toà nhà Lotte Hanoi Centre 65 tầng là Top of Hanoi - nơi đảm bảo tầm nhìn không giới hạn của bạn ra toàn thành phố. Hãy thưởng thức các món ăn hiện đại, tận hưởng bầu không khí trẻ trung, và thả mình vào không gian thoáng đãng đến choáng ngợp của Hà Nội về đêm tại Top of Hanoi.</p>
    
    <img class="img-fluid rounded" src="images/photo-post2-2.jpg" alt="" width="700">
    <img class="img-fluid rounded" src="images/photo-post2-3.jpg" alt="" width="700">

    <p class="content-text-para">Từ độ cao 270m, bạn có thể ngắm ôm trọn vẹn nhiều khu, kiến trúc như: Hồ Tây, Lăng Chủ tịch Hồ Chí Minh, tòa nhà Keangnam.</p>
    <img class="img-fluid rounded" src="images/photo-post2-4.jpg" alt="" width="700">
    <p class="content-text-para">Với toàn bộ sàn, tường, trần đều là kính đem đến cho du khách trải nghiệm như đang lơ lửng từ trên cao.</p>
    <img class="img-fluid rounded" src="images/photo-post2-5.jpg" alt="" width="700">

    <h2 class="mt-3" style="color: red">2. 6 Degree Cafe</h2>
    <p class="content-text-para">6 Degrees Cafe nằm ở tầng 2 và 8 địa chỉ số 189 Nghi Tàm, Tây Hồ, Hà Nội. Với thiết kế trẻ trung và lãng mạn, bạn có thể choáng ngợp với không gian quán ban đầu, nhưng sẽ dần dần cảm thấy ấm cúng và thân thiện bởi ánh đèn vàng ấm áp tràn ngập.</p>
    
    <img class="img-fluid rounded" src="images/photo-post2-6.jpg" alt="" width="700">
    <p class="content-text-para">6 Degrees có thể hạ gục bạn ngay từ lần hẹn hò đầu tiên bởi tay nghề của những đầu bếp. Đã thế, tầm nhìn trên cao ngay tại phố Nghi Tàm – Hồ Tây lộng gió thôi cũng đã đủ đẹp khi đèn lên.</p>
    <p class="content-text-para">Chủ quán đã hướng tới phong cách phương Tây từ thiết kế quán cafe, không gian từ bên ngoài và bên trong đến lên cao, rồi đến từng món ăn đều thể hiện hương vị Tây Âu rất đậm. Các món ăn được chế biến khá cầu kì, đẹp mắt. Nhưng đa phần mọi người vẫn thường lui tới đây để thưởng thức cafe, cocktail,… và các món tráng miệng hấp dẫn trong một khung cảnh Hà Nội lung linh, đầy mê hoặc.</p>
    
    <img class="img-fluid rounded" src="images/photo-post2-7.jpg" alt="" width="700">
    <h2 class="mt-3" style="color: red">3. Summit Lounge</h2>
    <p class="content-text-para">Nằm trên tầng 20 của khách sạn Sofitel Plaza, Summit Lounge có tầm nhìn đẹp bậc nhất tại Hà Nội. Quán chỉ mở cửa từ 16h mỗi ngày.</p>
    <img class="img-fluid rounded" src="images/photo-post2-8.jpg" alt="" width="700">
    <p class="content-text-para">Nếu muốn thưởng thức trà hay cà phê, bạn nên đến trước 20h vì sau khoảng thời gian đó, quán sẽ chỉ phục vụ các loại rượu và cocktail. </p>
    ',
    '10:17 10/12/2019',
    20,
    5,
    1,
    'images/photo-post2-1.jpg'          
);

INSERT INTO blogcomment(
    CommentID,
    BlogID,
    UserID,
    Content,
    Time,
    LikeCount
)
VALUES(
    1,
    1,
    2,
    'hấp dẫn thật... good',
    '16:44 02/06/2018',
    10
);

INSERT INTO blogcomment(
    CommentID,
    BlogID,
    UserID,
    Content,
    Time,
    LikeCount
)
VALUES(
    2,
    1,
    3,
    'Bên mình chuyên cung cấp hạt cà phê rang xay nguyên chất 100% giá cả cạnh tranh, giao hàng tận nơi trên toàn quốc, tham khảo web: amajarocoffee.com, 0903674401',
    '23:22 05/06/2018',
    1
);

INSERT INTO blogcomment(
    CommentID,
    BlogID,
    UserID,
    Content,
    Time,
    LikeCount
)
VALUES(
    3,
    1,
    4,
    'thêm 1 quán Cafe đẹp độc cho buôn làng nè https://www.youtube.com/watch?v=EzkXq0QYGaE&t=69s',
    '19:37 04/06/2018',
    4
>>>>>>> aee382cb45600a2a0d7e3840a2903a3592c41d7c
);