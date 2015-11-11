<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 11/10/15
 * Time: 8:51 PM
 */

use Domain\Owner;
use Domain\User;

describe('Owner', function (){
    describe('->__construct()', function(){
        it('should return a Owner object', function(){
            $actual = new Owner();

            expect($actual)->to->be->instanceof('Domain\Owner');
        });
    });

    describe('->addUser($user)', function(){
        it('should return a user with the value of $user',function(){
            $value = new User();
            $actual = new Owner();
            $actual->addUser($value);

            expect(count($actual->getUsers()))->equal(1);
        });
    });

    describe('->getUsers()', function(){
        it('should return a user with the value of $user',function(){
            $value = new User();
            $actual = new Owner();
            $actual->addUser($value);

            expect(count($actual->getUsers()))->equal(1);
        });
    });
});