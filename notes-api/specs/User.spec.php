<?php
/**
 * Created by PhpStorm.
 * User: tyler
 * Date: 11/10/15
 * Time: 7:54 PM
 */

use Domain\User;

describe('User', function (){
    describe('->__construct()', function(){
        it('should return a User object', function(){
            $actual = new User();

            expect($actual)->to->be->instanceof('Domain\User');
        });
    });

    describe('->setEmail("foo")', function(){
        it('should return an email with the value of "foo"',function(){
            $value = 'foo';
            $actual = new User();
            $actual->setEmail($value);

            expect($actual->getEmail())->equal($value);
        });
    });

    describe('->setFirstName("first")', function(){
        it('should return an email with the value of "first"',function(){
            $value = 'first';
            $actual = new User();
            $actual->setFirstName($value);

            expect($actual->getFirstName())->equal($value);
        });
    });

    describe('->setLastName("last")', function(){
        it('should return an email with the value of "last"',function(){
            $value = 'last';
            $actual = new User();
            $actual->setLastName($value);

            expect($actual->getLastName())->equal($value);
        });
    });

    describe('->setUsername("username")', function(){
        it('should return an email with the value of "username"',function(){
            $value = 'username';
            $actual = new User();
            $actual->setUsername($value);

            expect($actual->getUsername())->equal($value);
        });
    });
});