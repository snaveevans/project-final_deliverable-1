<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 11/10/15
 * Time: 8:51 PM
 */

use Domain\Admin;
use Domain\User;

describe('Admin', function (){
    describe('->__construct()', function(){
        it('should return a Admin object', function(){
            $actual = new Admin();

            expect($actual)->to->be->instanceof('Domain\Admin');
        });
    });

    describe('->addUser($user)', function(){
        it('should return a user with the value of $user',function(){
            $value = new User();
            $actual = new Admin();
            $actual->addUser($value);

            expect(count($actual->getUsers()))->equal(1);
        });
    });

    describe('->getUsers()', function(){
        it('should return a user with the value of $user',function(){
            $value = new User();
            $actual = new Admin();
            $actual->addUser($value);

            expect(count($actual->getUsers()))->equal(1);
        });
    });
});