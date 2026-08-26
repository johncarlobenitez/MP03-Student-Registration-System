# Aurevian University Student Registration System

## Project Description

The Aurevian University Student Registration System is a web-based student registration application developed using Laravel.

The system allows students to submit their personal information, contact details, academic information, and profile picture through an online registration form. The submitted information is validated and stored in a MySQL database, then displayed through a student profile page.

The goal of this project is to provide a simple and organized digital solution for managing student registration records.

---

# Features

## Student Registration Form

The system allows students to register their information including:

- Student ID
- First Name
- Middle Name
- Last Name
- Email Address
- Mobile Number
- Date of Birth
- Gender
- Program
- Year Level
- Address
- Profile Picture


## Input Validation

The system includes validation to ensure accurate student information.

Validation includes:

- Required fields cannot be empty
- Student ID must be unique
- Student ID accepts numbers only
- Email address must follow a valid format
- Mobile number validation
- Profile picture file validation


## Profile Picture Upload

Students can upload their profile picture during registration.

Supported formats:

- JPG
- JPEG
- PNG

Maximum file size:

- 2MB


## Student Profile Display

After successful registration, the system displays the student's complete information:

- Student ID
- Full Name
- Email Address
- Mobile Number
- Date of Birth
- Gender
- Program
- Year Level
- Address
- Profile Picture


---

# Technologies Used

## Frontend

- HTML
- Tailwind CSS
- Laravel Blade Template


## Backend

- Laravel Framework
- PHP


## Database

- MySQL


---

# Database Structure

The system uses a MySQL database named:

```
student_registration
```

The main table used in the system is:

```
students
```

The table stores student registration records including personal information, academic details, and uploaded profile pictures.


## Database Structure Screenshot

![Database Structure](screenshots/database-structure.jpg)



---

# Database Table Fields

The `students` table contains the following fields:


| Field Name | Description |
|---|---|
| id | Primary key |
| student_id | Unique student identification number |
| first_name | Student first name |
| middle_name | Student middle name |
| last_name | Student last name |
| email | Student email address |
| mobile_number | Student contact number |
| date_of_birth | Student birth date |
| gender | Student gender |
| program | Student academic program |
| year_level | Student current year level |
| address | Student residential address |
| profile_picture | Uploaded student image |
| created_at | Record creation date |
| updated_at | Record update date |


---

# System Flow

```
Student Registration Form

          ↓

Input Validation

          ↓

Save Student Information

          ↓

Store Data in MySQL Database

          ↓

Display Student Profile
```


---

# Laravel Project Structure

The following image shows the Laravel project structure of the Aurevian University Student Registration System.


![Laravel Project Structure](screenshots/project-structure.png)



---

# Installation Guide


## 1. Clone Repository

```bash
git clone <repository-url>
```


## 2. Install Dependencies

```bash
composer install
```


## 3. Setup Environment File

Create a copy of `.env.example`:

```bash
cp .env.example .env
```


Update your database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_registration
DB_USERNAME=root
DB_PASSWORD=
```


## 4. Generate Application Key

```bash
php artisan key:generate
```


## 5. Run Database Migration

```bash
php artisan migrate
```


## 6. Create Storage Link

For profile picture uploads:

```bash
php artisan storage:link
```


## 7. Run the Application

```bash
php artisan serve
```


Open in browser:

```
http://127.0.0.1:8000
```


---

# Screenshots


## Student Registration Page


![Student Registration Page 1](screenshots/registration-page1.jpg)


![Student Registration Page 2](screenshots/registration-page2.jpg)



---

## Student Profile Page


![Student Profile Page 1](screenshots/student-profile1.png)


![Student Profile Page 2](screenshots/student-profile2.png)



---

## Database Structure


![Database Structure](screenshots/database-structure.jpg)



---

# Testing

The system was tested using different scenarios:


## Valid Registration

Expected Result:

- Student information is saved successfully
- Profile picture is uploaded
- Student profile page is displayed


## Invalid Registration

Expected Result:

- Validation messages are displayed
- Data will not be saved until requirements are completed


---

# Author

Developed by:

**John Carlo R. Benitez**

Aurevian University Student Registration System

2026