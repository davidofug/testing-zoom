# Testing zoom
Tested zoom with Derrick Wammani to prepare for Ablestate online training

https://github.com/davidofug/testing-zoom.git

BDD: Behaviour Driven Development
Learn cucumber, used to write development in simple, human understandable language.

Login page
Given: Username and password
When: Submit button is clicked
Then: Verify login information and authenticate

TDD: Test Driven Development

Unit testing: It's testing small section or parts of your code. 

## SRS Software Development Specification

A software requirements specification (SRS) is a description of a software system to be developed. It lays out functional and non-functional requirements, and may include a set of use cases that describe user interactions that the software must provide.

1. Functional testing
2. Integration testing
3. Regression testing
4. Load testing
5. Performance testing
6. Stress testing
7. Automtted testing and the commonest tool used is Sellenium

# Unit testing sample

Example: https://github.com/davidofug/unit-testing-javascript-testing-with-jest

File functions.js

``` 
const sum = (num1, num2) => num1 + num2
```

File functions.test.js referred a test suite

```
test('Does @sum function exist', () => { expect(sum).toBeDefined() }) 
test('Adds 2 + 5 equals 7', () => { expect(sum(2,5).toBe(7)) })
```
In PHP you can start with PHPUnit

Design patterns such as SOLID
Software development principles

## Scrum
A framework where complex products are developed in a complex environment.
It is a powerful way of working that provides speed and energy.

## Teams are composed 3 major roles.
- Product owner: A key stakeholder, with the vision who provides direction to the team for each sprint.
- Scrum master: A facilitator who focuses completely on the process.
- Team: 3 to 9 dedicated professionals with various disciplines who are jointly responsible for the results. They estimate the size of work. 
Self driven
Maskteers

## Lists
Product backlog
List your ambitions and express how you intend to achieve them.

Sprint backlog
A shopping list of products you want to produce in the next sprint.

Definition of done: 
Indicates precisely what needs to be done by the end of the sprint.

Scrum board
Indicates all of the members' tasks which changes from to do to busy to done during a sprint.

There are 4 sprint meetings
 a. Sprint planing: What exactly are we going to achieve during the sprint and who is doing what?
 b. Sprint stand up: Is everything going according to plan and are we gonna make it.
 c. Sprint review: During which you deliver your results and receive feedback.
 d. Sprint retrospective: Look back on the sprint process and focus on what you can improve as a team for the next sprint.

# Object Orientated Programming in PHP
Our goal is to mimick MVC pattern

Writing modular code.

- Register and authenticate users(specific piece of code for handling the users)
- Submit blog posts (specific piece of code for handling the posts)
- But it will hard to maintain

## Programming paradigm
 - OOP
 - MVC
 - Procedural and functional

## [x] Class vs Object
## [x] Method vs Property
## [x] Access modifiers
## [ ] Inheritence/Extending
## [ ] Namespacing
## [ ] Composer