CREATE TABLE `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar (255) NOT NULL
    )

    INSERT INTO `users`(`name`, `username`, `email`, `password`) VALUES
    ('olsa', 'olsapireva1', 'olsa1@gmail.com', '123456'),
    ('hihi', 'hihi123', 'hihi.hi@gmail.com', '123456');



    CREATE TABLE `books`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `book_title` varchar(255) NOT NULL,
    `book_author` varchar(255) NOT NULL,
    `book_desc` varchar(255) NOT NULL,
    `book_genre` varchar (255) NOT NULL,
    `year_published` int(11) NOT NULL
    )

    INSERT INTO `books`(`book_title`, `book_author`, `book_desc`, `book_genre`, `year_published`, `book.image`) VALUES
    ('The Song of Achilles', 'Madeline Miller', 'The book Is set during the Greek Heroic Age, it is a retelling of the Trojan War as told from the perspective of Patroclus.', 'Historical', '2011', 'achille.png')

    CREATE TABLE `borrowings`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(11) NOT NULL,
    `book_id` int(11) NOT NULL,
    `borrow_date` varchar(255) NOT NULL,
    `return_date` varchar (255) NOT NULL
    )

    INSERT INTO `borrowings` (`user_id`,`book_id`,`borrow_date`,`return_date`) VALUES (1,1,'02-05-2025','07-05-2025');