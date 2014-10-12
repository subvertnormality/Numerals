## Roman Numerals

View the application running at http://quiet-beach-8520.herokuapp.com/ .

The tests are written in PHPUnit and can be run in the usual manner. The application code is independent of Laravel, sits in app/lib and is hooked up inside a Laravel controller.

The application consists of composed components which implement interfaces: processors parse values, validators validate input and generators tie the two components together. The components are loosely coupled and can be combined and composed at construction time. This means it should be trivial to implement new generators for different types of numerals.

Laravel essentially just provides an API which the javascript client interacts with.


### Things that could be improved given more time

* Core mode
* Acceptance tests/tests for laravel controllers
* Client side javascript testing
* More validators/parsers/generators for different types of numerals (Attic numerals, Etruscan numerals etc).

