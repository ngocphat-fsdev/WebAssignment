USE WebDatabase;

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
)

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
)

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
)

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
)

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
)