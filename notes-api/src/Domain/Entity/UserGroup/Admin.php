<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 11/10/15
 * Time: 7:18 PM
 */

namespace Domain;


class Admin implements UserGroupInterface
{
    private $users;

    /**
     * @return List of Users belonging to  the Admin group
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User object to add
     * @return List of Users
     */
    public function addUser($user)
    {
        array_push($this->users, $user);
    }

    /**
     * @param User object to delete
     * @return List of Users
     */
    public function deleteUser($user)
    {
        if(in_array($user, $this->users))
        {
            unset($this->users[$user]);
            var_dump($this->users);
        }
        return $this->users;
    }

}