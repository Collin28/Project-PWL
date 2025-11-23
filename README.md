# ABTEND
*Abtend* is our innovative project designed to provide a seamless online attendance system for schools. The primary objective of Abtend is to streamline and simplify the traditional attendance process, making it more efficient and user-friendly for educational institutions.

## ⚙️ Installation
1. Clone this repository:
```http
  git clone https://github.com/Collin28/Project-PWL.git
```
2. Open the project directory:
```http
  cd Project-PWL
```


## 🖥️ Usage
1. Go to your Visual Studio Code (Or your Code editor apps) and open the folder.

2. start the local development sofware (laragon,xxamp,etc)

3. Run the website by opening http://localhost/<Folder Name>

4. You access the project now!!

Feature explanation:

Teacher:

Verification:
Enter their ID or face ID into the website so they can check their attendance.

Home page:
On the home page, teachers can see who is present, late, or absent, and can select a class. There is a chart showing student attendance percentages.

Recap:
Teachers can see when students are present and when they are leaving, absent, or late, and can follow up on students who are late or absent.


Students:

Verification:
Enter their ID or face ID into the website so they can check their attendance.

Home/Recap:
Students can see when they are coming in and when they are leaving.
Attendance types are automatically filled in: absent, present, or late.
Students can also see how many days they are present, late, or absent. At the bottom, there are notifications or announcements from the school itself.


## 🏗️ Architecture
```
PROJECT PWL/
├── index.html # Main HTML file
├── style.css # CSS for styling
├── script.js # JavaScript functionality
├── README.md # Project documentation
├── images/ # Store images here
```
## 🤝 Contribution
We welcome contributions from anyone who wants to make ABTEND better!
Whether you’re fixing bugs, adding new features, improving the UI, or enhancing documentation, every contribution is valuable and appreciated.

How to Contribute


1. Fork this repository.

2. Create a new branch for your feature or bug fix.

3. Commit your changes with a clear and descriptive message.

4. Push your branch and submit a Pull Request.

5. Wait for review, suggestions, and approval before merging.

## Entitiy

1. Student
- Student_ID
- Class
- Email
- Name

2. Admin
- Admin_ID
- Position
- Name
- Users_ID

3. Attendance
- Attendance_ID
- Student_ID
- Date
- Check-in_Time
- Status

4. Users
- Users_ID
- Name
- Password
- Role


## Main Feature 
Abtend is a digital attendance platform designed with one main feature: automatic attendance report recording. With our system, every step of the attendance process from checking in to generating reports is stored digitally, safely, and without the risk of losing data.
With Abtend, students can mark their attendance quickly, and teachers receive complete reports without doing manual work. It’s simple, efficient, and secure.

## Database Setup

1.Download the abtend.sql file.

2.Open Laragon.

3.Log in to phpmyadmin.

4.Create new database abtend(can be another name).

5.After create new database go to import.

6.Search File to import and choose abtend.sql file.

7.After select the abtend.sql file select.

8.And the database is already available.

## 📜 License
This Repository License is Using Apache license 2.0.


## 👥 Team Members
1. Collin Lee
2. Daniel Alexander
3. Grachia Freesella
4. Yones
