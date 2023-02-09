# National Population Commission

## Introduction

Company XYZ was invited by the NPC (National Population Commission) to developa web application platform for record storage of citizens acrosswards in the country, and  for retrievalof  these  records  via  web  browsers,  REST  APIs  for  systems integration.


## Table of Contents
1. <a href="#how-it-works">How it works</a>
2. <a href="#technology-stack">Technology Stack</a>
3. <a href="#functionalities">Functionalities</a>
4. <a href="#routes">Routes</a>
5. <a href="#setup">Setup</a>


## Technology Stack
  - [PHP](https://www.php.net)
  - [Laravel](https://laravel.com)
  - [MySQL](https://www.mysql.com/)

## Functionalities
* Create and run the migration files and populate tables with few data for NPC database.
* Build a Laravel/Phplogin, where admin can register new citizen records and a simple blade  view  with  a  search  input  and  submit  button  that  displays  list  of  citizens  (id, name, gender) on a table. On clicking on any of the citizen’s name it displays citizen full record.
* Build a Laravel/Php.jsREST API with Sanctum Authentication or any LaravelREST API package  of  your  choice  with  an  authentication  mechanism,  to  enable  third-party applications fetch and consume those citizen records using API endpoints. You can test will Postman.

## Routes

### Base URL = http://127.0.0.1:8300/
Available routes and guide
Method | Route | Description | Payload
--- | --- | ---|---
`POST` | `/api/citizen` | add new citizen | full_name, gender, address, phone and ward_id
`GET` | `/api/citizens` | get all citizens | 
`GET` | `/api/citizen/{citizen_id}` | get a particular citizen | citizen_id
`POST` | `/api/register` | register new admin user | name, email, password and password_confirmation
`POST` | `/api/login` | login an admin user | email and password
`POST` | `/api/logout` | logout an admin user | 

## Setup
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

  #### Getting Started
  - Open terminal and run the following commands
    ```
    $ git clone https://github.com/iJosef/snapnet-test-app.git
    $ cd snapnet-test-app
    $ composer install
    ```
    - copy .env.example and paste in .env file

    ```
    $ php artisan key:generate
    $ php artisan migrate --seed
    $ php artisan serve --port=8300
    ```
    If all goes well 
  - Visit http://127.0.0.1:8300 on your browser to view laravel home
  
  if Seeding goes well, you should be able to start testing endpoints with Postman

