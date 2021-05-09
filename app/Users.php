<?php


class Users extends Database
{
    protected $table = 'users';


    public function friendsByUser($id)
    {
        $this->query("SELECT
                  users.firstname,
                  users.surname,
                  friends.user2
                  FROM users
                  INNER JOIN friends
                  ON users.id = friends.user1
                  WHERE users.id = '$id'                               
                    ");
        return $this->resultSet();
    }



}