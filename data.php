<?php

$books = [
  [
    'id' => 1,
    'title' => 'The Great Gatsby',
    'author' => 'F. Scott Fitzgerald',
    'description' => 'A novel set in the Roaring Twenties that tells the story of Jay Gatsby and his unrequited love for Daisy Buchanan.',
    'image' => 'great_gatsby.jpg',
    'rating' => 4.5,
    'votes' => 1200
  ],
  [
    'id' => 2,
    'title' => 'To Kill a Mockingbird',
    'author' => 'Harper Lee',
    'description' => 'A novel about the serious issues of rape and racial inequality, narrated by young Scout Finch.',
    'image' => 'to_kill_a_mockingbird.jpg',
    'rating' => 3.5,
    'votes' => 1500
  ],
  [
    'id' => 3,
    'title' => '1984',
    'author' => 'George Orwell',
    'description' => 'A dystopian novel that explores the dangers of totalitarianism and extreme political ideology.',
    'image' => '1984.jpg',
    'rating' => 4.0,
    'votes' => 2000
  ],
  [
    'id' => 4,
    'title' => 'Pride and Prejudice',
    'author' => 'Jane Austen',
    'description' => 'A romantic novel that critiques the British landed gentry at the end of the 18th century.',
    'image' => 'pride_and_prejudice.jpg',
    'rating' => 4.7,
    'votes' => 1100
  ],
  [
    'id' => 5,
    'title' => 'The Catcher in the Rye',
    'author' => 'J.D. Salinger',
    'description' => 'A novel about teenage rebellion and angst, narrated by the iconic character Holden Caulfield.',
    'image' => 'catcher_in_the_rye.jpg',
    'rating' => 4.2,
    'votes' => 900
  ],
  [
    'id' => 6,
    'title' => 'Harry Potter and the Sorcerer\'s Stone',
    'author' => 'J.K. Rowling',
    'description' => 'The first book in the Harry Potter series, introducing readers to the magical world of Hogwarts.',
    'image' => 'harry_potter_1.jpg',
    'rating' => 5.0,
    'votes' => 2500
  ],
  [
    'id' => 7,
    'title' => 'The Hobbit',
    'author' => 'J.R.R. Tolkien',
    'description' => 'A fantasy novel that follows the journey of Bilbo Baggins as he embarks on an adventure to reclaim a lost dwarf kingdom.',
    'image' => 'the_hobbit.jpg',
    'rating' => 4.9,
    'votes' => 1800,
  ],
  [
    'id' => 8,
    'title' => 'Crime and Punishment',
    'author' => 'Fyodor Dostoevsky',
    'description' => 'A psychological novel that explores the moral dilemmas of Rodion Raskolnikov, a poor ex-student in St. Petersburg who plans to kill a pawnbroker for her money.',
    'image' => 'crime_and_punishment.jpg',
    'rating' => 4.3,
    'votes' => 1300
  ],
  [
    'id' => 9,
    'title' => 'The Alchemist',
    'author' => 'Paulo Coelho',
    'description' => 'A philosophical novel that follows the journey of Santiago, a shepherd boy who dreams of finding a worldly treasure located somewhere in Egypt.',
    'image' => 'the_alchemist.jpg',
    'rating' => 4.6,
    'votes' => 1400
  ],
  [
    'id' => 10,
    'title' => 'War and Peace',
    'author' => 'Leo Tolstoy',
    'description' => 'An epic novel that intertwines the lives of several families against the backdrop of the Napoleonic Wars in Russia.',
    'image' => 'war_and_peace.jpg',
    'rating' => 5,
    'votes' => 800
  ],
];


function getRating($book)
{
  $fullStars = floor($book['rating']);
  $halfStar = ($book['rating'] - $fullStars) >= 0.5 ? 1 : 0;
  $emptyStars = 5 - $fullStars - $halfStar;

  return str_repeat('★', $fullStars) . str_repeat('⯪', $halfStar) . str_repeat('☆', $emptyStars);
}
