<?php

class Book
{
  public $id;
  public $title;
  public $description;
  public $author;
  public $image;
  public $votes;
  public $publication_year;
  public $user_id;
  public $evaluation;
  public $number_of_votes;

  public function query($where, $params)
  {

    $database = new Database(config('database'));

    return $database->query(

      query: "
    
        select

            b.id,
            b.title,
            b.author,
            b.image,
            b.description,
            b.publication_year,
            sum(v.grade) / count(v.id) as evaluation,
            count(v.id) as number_of_votes
        from

            books b

        left join votes v on v.book_id = b.id

        where

            $where

        group by

            b.id,
            b.title,
            b.author,
            b.image,
            b.description,
            b.publication_year;

    ",

      class: self::class,

      params: $params

    );
  }

  public static function get($id)
  {

    return (new self)->query('b.id = :id', ['id' => $id])->fetch();
  }

  public static function all($filter)
  {

    return (new self)->query('b.title like :filter', ['filter' => "%$filter%"])->fetchAll();
  }

  public static function my($user_id)
  {

    return (new self)->query('b.user_id = :user_id', ['user_id' => $user_id])->fetchAll();
  }
}
