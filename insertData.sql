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