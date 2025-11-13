# 🎓 Final Year Project Management System

![Laravel](https://img.shields.io/badge/Laravel-Framework-red?logo=laravel)
![Node.js](https://img.shields.io/badge/Node.js-Auth_Service-green?logo=node.js)
![MySQL](https://img.shields.io/badge/Database-MySQL-blue?logo=mysql)
![Bootstrap](https://img.shields.io/badge/UI-Bootstrap-purple?logo=bootstrap)
![Status](https://img.shields.io/badge/Status-Under_Development-yellow)
![License](https://img.shields.io/badge/License-Academic_Project-lightgrey)

---

## 📘 Overview

The **Final Year Project (FYP) Management System** is a **web-based platform** designed to simplify and digitalize the management of final year projects in the **College of Computing and Informatics (CCI)**.  
It provides an efficient and transparent way for **coordinators**, **supervisors**, and **students** to collaborate, monitor progress, and streamline administrative processes.

This project was developed for **CSEB5123 – Advanced Web Application Development** and carries **40%** of the total course assessment.

---

## 🏗️ System Architecture

| Layer | Technology | Description |
|-------|-------------|-------------|
| **Frontend** | Laravel Blade / HTML / CSS / Bootstrap | User interface and responsive design |
| **Backend** | Laravel Framework (PHP) | Business logic and routing |
| **Authentication Service** | Node.js | Handles user registration & authentication |
| **Database** | MySQL | Stores structured data (users, projects, assignments) |

---

## 👥 User Roles & Key Functionalities

### 🧑 Coordinator
- 🔐 Register and log in  
- 🏗️ Create and manage projects  
- 👩‍🎓 Assign students, supervisors, and examiners  
- 👁️ View all project details and statuses  
- ✏️ Update or delete projects  

### 👨‍🏫 Supervisor
- 🔑 Log in and access assigned projects  
- 📅 Update project details (start date, end date, milestones)  
- 📊 Track project status — *On Track*, *Delayed*, *Extended*, *Completed*  

---

## 📊 Use Case Diagram

![Use Case Diagram](https://github.com/user-attachments/assets/3aabcb3c-fbd1-419f-a87c-63a5afe3078e)


**Main Actors:**  
- Coordinator  
- Supervisor  

**Primary Use Cases:**  
Register Account • Login • Logout • Create Project • Assign Student • Assign Supervisor & Examiner • View / Update / Delete Project • Update Project Details

---

## 🗄️ Database Structure

| Table | Description |
|--------|--------------|
| **users** | Stores user data (Coordinator, Supervisor, Student) |
| **projects** | Project details (title, duration, type, progress, status) |
| **assignments** | Links students, supervisors, and examiners |
| **milestones** | Tracks progress milestones (1, 2, Final Report) |

💡 All relationships are enforced using **foreign keys** to maintain referential integrity.

---

## 🧠 System Flow Summary

1. Coordinator registers and logs in
2. Creates projects and assigns users
3. Supervisor updates milestones and project status
4. Coordinator monitors progress
5. All users log out securely
6. Data stored dynamically in MySQL

---

## 🧾 Assessment Mapping

| Criteria                 | Implementation                          |
|--------------------------|----------------------------------------|
| Version Control          | Fully managed with Git and GitHub       |
| System Analysis & Design | Includes UML (Use Case, Class Diagram)  |
| Front-End (UI/UX)        | Built with Laravel Blade + Bootstrap    |
| System Implementation    | Fully functional Laravel system         |
