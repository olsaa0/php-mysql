CREATE TABLE `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar (255) NOT NULL
    )

    CREATE TABLE `books`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `book_title` varchar(255) NOT NULL,
    `book_author` varchar(255) NOT NULL,
    `book_desc` varchar(255) NOT NULL,
    `book_genre` varchar (255) NOT NULL,
    `year_published` int(11) NOT NULL
    )

    CREATE TABLE `borrowings`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(11) NOT NULL,
    `book_id` int(11) NOT NULL,
    `borrow_date` varchar(255) NOT NULL,
    `return_date` varchar (255) NOT NULL
    )