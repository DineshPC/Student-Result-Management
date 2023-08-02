## SRMS (Student Result Management System)

### Introduction :- 
Student Result Management is web-based application that mainly focuses on providing the results to the student and the faculty (teacher , staffs etc.)

---
### Software Requirement :-
For running this project we need,

- Browser (Google Chrome, Firefox , Microsoft Edge, etc.)
- IDE  (VSCode,  Sublime Text, etc.)
- XAMPP server (or Wamp Server)
- Composer (package management tool in PHP)

----

### Environment Setup and Running
to run this project follow the following steps (run commands one by one)

1. Create a new folder SRMS
```bash
mkdir SRMS
cd ./SRMS
```

2. Clone the repository
```bash
git clone https://github.com/DineshPC/Student-Result-Management.git
cd Student-Result-Management/
```
3. Install Laravel framework for backend 
(make sure you have installed composer)
```bash
composer global require laravel/installer
```
- it will install laravel framework globally in your system , now you can use laravel framework anywhere in your system.

4. Now we will install dependencies of our project
- make sure when running this command you are in the "Student-Result-Management" directory
```bash
composer install
```
- This command will install all dependencies use in our project 
- after installing it will create a vender folder (similar to node_modules folder)

5. Now rename .env.example file to .env
```bash
mv .env.example .env
```

6. create you key and clear cache
```bash
php artisan key:generate
```
- after key generated clear cache
```bash
php artisan cache:clear 
php artisan config:clear
```

7. now start php artisan server
```bash
php artisan serve
```

- after all this steps your frontend will run at [http://127.0.0.1:8000]


### now we connect to backend server 