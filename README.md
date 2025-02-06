# PlanIt

PlanIt is a simple web application for managing courses and assignments. It allows users to add, list and delete courses and assignments.

---

## Project Structure

```
bootstrap.php
config.php
controllers/
Core/
models/
public/
views/

```
### Key Directories and Files

- **controllers/**: Contains the php files for handling different actions like adding, deleting and listing courses and assignments.
- **Core/**: Contains core classes like `App`, `Container`, `Database` and `Validator`.
- **models/**: Contains the models for `Assignments` and `Courses`.
- **public/**: Contains the public-facing files including the main entry point `index.php` and `assets`.
- **views/**: Contains the view files for rendering HTML.

----

## Core Components

`public/index.php`

The main entry point of the application. It sets up the base path and autoloads classes.

`Core/App.php`

Manages the application container and resolves dependencies.

`Core/Database.php`

Handles database connections and queries.

`Core/Container.php`

A simple dependency injection container.

`Core/functions.php`

Contains helper functions like `base_bath` and `view`.

`Core/Validator.php`

Provides methods for validating input data.

`models/Assignment.php`

Model for handling assignment-related database operations.

`models/Courses.php`

Model for handling course-related database operations.

## Views
- `views/assignment_list.view.php`: Displays the list of assignments.
- `views/course_list.view.php`: Displays the list of courses.
- `views/error.view.php`: Displays error messages.
- `views/partials/`: Contains partials view files like header and footer

---

## Features 

- **Course Management**: Add, list and delete courses.
- **Assignment Management**: Add, list and delete assignments.
- **Database Integration**: Uses a database to store courses and assignments.
- **Autoloading**: Automatically loads required classes.
- **Validation**:  Validates input data using the `Validator` class.
- **Error Handling**: Displays error messages for invalid operations.
- **Modular Structure**: Organized into controllers, models, and views for easy maintenance and scalability.

---

## Template Usage

This project uses an HTML and CSS template from the following repository: 
[https://github.com/gitdagray/mvc_assignment_tracker.git](https://github.com/gitdagray/mvc_assignment_tracker.git).
