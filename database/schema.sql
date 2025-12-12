CREATE TABLE IF NOT EXISTS books  (
    id int NOT NULL AUTO_INCREMENT,
    title text NOT NULL,
    author text NOT NULL,
    description text NOT NULL,
    image text,
    publication_year int,
    votes int NOT NULL DEFAULT '0',
    user_id int DEFAULT NULL,
    PRIMARY KEY (id),
    CONSTRAINT books_chk_2 CHECK ((votes >= 0)),
    CONSTRAINT books_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS votes (
    id int NOT NULL AUTO_INCREMENT,
    evaluation text,
    grade int NOT NULL,
    book_id int DEFAULT NULL,
    user_id int DEFAULT NULL,
    PRIMARY KEY (id),
    KEY book_id (book_id),
    CONSTRAINT votes_ibfk_1 FOREIGN KEY (book_id) REFERENCES books (id),
    CONSTRAINT votes_ibfk_2 FOREIGN KEY (user_id) REFERENCES users (id)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;


  CREATE TABLE IF NOT EXISTS users (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY email (email)
  ) ENGINE = InnoDB AUTO_INCREMENT = 8 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

INSERT INTO books (id, title, author, description, image, publication_year, votes) VALUES
  (1, 'The Great Gatsby', 'F. Scott Fitzgerald', 'A novel set in the Roaring Twenties that tells the story of Jay Gatsby and his unrequited love for Daisy Buchanan.', 'great_gatsby.jpg', 1920, 1200),
  (2, 'To Kill a Mockingbird', 'Harper Lee', 'A novel about the serious issues of rape and racial inequality, narrated by young Scout Finch.', 'to_kill_a_mockingbird.jpg', 1960, 1500),
  (3, '1984', 'George Orwell', 'A dystopian novel that explores the dangers of totalitarianism and extreme political ideology.', '1984.jpg', 1949, 2000),
  (4, 'Pride and Prejudice', 'Jane Austen', 'A romantic novel that critiques the British landed gentry at the end of the 18th century.', 'pride_and_prejudice.jpg', 1813, 1100),
  (5, 'The Catcher in the Rye', 'J.D. Salinger', 'A novel about teenage rebellion and angst, narrated by the iconic character Holden Caulfield.', 'catcher_in_the_rye.jpg', 1951, 900),
  (6, 'Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', 'The first book in the Harry Potter series, introducing readers to the magical world of Hogwarts.', 'harry_potter_1.jpg', 1997, 2500),
  (7, 'The Hobbit', 'J.R.R. Tolkien', 'A fantasy novel that follows the journey of Bilbo Baggins as he embarks on an adventure to reclaim a lost dwarf kingdom.', 'the_hobbit.jpg', 1937, 1800),
  (8, 'Crime and Punishment', 'Fyodor Dostoevsky', 'A psychological novel that explores the moral dilemmas of Rodion Raskolnikov, a poor ex-student in St. Petersburg who plans to kill a pawnbroker for her money.', 'crime_and_punishment.jpg', 1866, 1300),
  (9, 'The Alchemist', 'Paulo Coelho', 'A philosophical novel that follows the journey of Santiago, a shepherd boy who dreams of finding a worldly treasure located somewhere in Egypt.', 'the_alchemist.jpg', 1988, 1400),
  (10, 'War and Peace', 'Leo Tolstoy', 'An epic novel that intertwines the lives of several families against the backdrop of the Napoleonic Wars in Russia.', 'war_and_peace.jpg', 1869, 800);
