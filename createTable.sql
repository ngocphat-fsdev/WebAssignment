CREATE DATABASE WebDatabase;
USE WebDatabase;

CREATE TABLE User (
    UserID          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserName        VARCHAR(255) NOT NULL,
    Sex         BOOLEAN,
    AccountName VARCHAR(255) NOT NULL,
    Password    VARCHAR(255) NOT NULL,
    UserLevel       INT NOT NULL   
);

CREATE TABLE Restaurant (
    ResID       INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Address     VARCHAR(255),
    Name        VARCHAR(255),
    Rating      FLOAT,
    WorkTime    VARCHAR(255),
    PictureRes  VARCHAR(255)
);

CREATE TABLE Agency (
    Location    VARCHAR(255) PRIMARY KEY,
    Address     VARCHAR(255),
    Phone       CHAR(10),
    Email       VARCHAR(255),
    Website     VARCHAR(255),
    WorkTime    VARCHAR(255)
);

CREATE TABLE Food (
    ID          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    PictureLink VARCHAR(255) NOT NULL,
    Name        VARCHAR(255) NOT NULL,
    Price       INT NOT NULL,
    ResID       INT UNSIGNED,
    FOREIGN KEY (ResID) REFERENCES Restaurant(ResID)
);

CREATE TABLE Blog (
    BlogID      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Title       VARCHAR(255) NOT NULL,
    Content     VARCHAR(20000) NOT NULL,
    Time        VARCHAR(255) NOT NULL,
    LikeCount   INT NOT NULL,
    Rating      INT UNSIGNED NOT NULL,
    UserID      INT UNSIGNED,
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    Avatar      VARCHAR(255) NOT NULL    
);

CREATE TABLE BlogComment(
    CommentID       INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    BlogID          INT UNSIGNED NOT NULL,
    FOREIGN KEY (BlogID) REFERENCES Blog(BlogID),
    UserID          INT UNSIGNED NOT NULL,
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    Content         VARCHAR(255) NOT NULL,
    Time            VARCHAR(255) NOT NULL,
    LikeCount       INT UNSIGNED
);

CREATE TABLE Reviews (
    ID          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Title       VARCHAR(255) NOT NULL,
    ReviewPlaceName         VARCHAR(255) NOT NULL,
    AddressOfReviewPlace    VARCHAR(255) NOT NULL,
    ReviewerName            VARCHAR(255) NOT NULL,
    ReviewContent           VARCHAR(255) NOT NULL,
    ReviewerAvatar          VARCHAR(255) NOT NULL,
    ReviewPoint             FLOAT NOT NULL,
    ReviewPicture           VARCHAR(255) NOT NULL,
    ReviewComment           VARCHAR(255),
    ResID       INT UNSIGNED,
    FOREIGN KEY (ResID) REFERENCES Restaurant(ResID)
);

CREATE TABLE Orders (
    UserID      INT UNSIGNED,
    ResID       INT UNSIGNED,
    PRIMARY KEY (UserID, ResID),
    FOREIGN KEY (UserID) REFERENCES User(UserID),
    FOREIGN KEY (ResID)  REFERENCES Restaurant(ResID)
);

CREATE TABLE CartFood (
    ID          INT UNSIGNED PRIMARY KEY,
    NameFood    VARCHAR(255) NOT NULL,
    LinkImage   VARCHAR(255),
    Price       VARCHAR(255),
    Amount      INT UNSIGNED,
    TotalPrice  VARCHAR(255),
    Status      VARCHAR(255) 
);

