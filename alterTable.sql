ALTER DATABASE webdatabase CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;

ALTER TABLE reviews DROP COLUMN ReviewPlaceName;
ALTER TABLE reviews DROP COLUMN AddressOfReviewPlace;

