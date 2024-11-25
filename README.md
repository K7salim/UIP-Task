# UIP-Task
UIP Dashboard
![data01](https://github.com/user-attachments/assets/c69de381-d752-4e5f-b326-04ef85a74ce1)
![data012](https://github.com/user-attachments/assets/1f71e1a4-568f-4955-affd-47b4e8b6facb)


This is a SQL script I created to manage a database for preboarding attendance. It showcases my ability to design, implement, and manage structured relational databases using SQL.
Below are the highlights of the script:

Key Features of the Table

Table Structure:

The table stores key information about interns:
Personal Details: Name, email, and phone number.
Social Links: Facebook and Discord details.
Education Details: Course, school name, and school contact.
Internship Details: Internship type, hours requirement, orientation date, start and end dates, and status.
Indexes and Primary Key:

The app_id column serves as the primary key, ensuring each record is unique.
An auto-increment is applied to app_id, simplifying the insertion of new rows.
Character Encoding:

The table uses utf8mb4 encoding and collation, ensuring compatibility with a wide range of languages and symbols.
Sample Data:

The dump includes sample data entries for interns with realistic details, such as full names, educational institutions, internship timelines, and statuses (example, Active, Pending, Completed).
Engine and Transaction Support:

The table uses the InnoDB engine, which supports transactions, ensuring data integrity for operations like multi-table inserts.

Data Example
The sample dataset highlights a variety of interns:

Juan Dela Cruz: A full-time intern with 200 required hours, status: Active.
Maria Santos: A part-time intern from Ateneo, status: Active.
Salim T. Sengah Jr.: Self-referenced, with 400 required hours, status: Active.
SQL Script Functionalities
Insertion of Sample Data:

The INSERT INTO statements demonstrate how to populate the table with detailed intern records.
Data Retrieval:

Query examples could be added to fetch specific records, such as:
sql

SELECT name, email_address, status
FROM preboarding_attendance
WHERE status = 'Active';
Indexes for Performance:

Indexing on app_id accelerates lookups, ensuring fast query execution even with large datasets.
Advantages and Applications
Comprehensive Structure:
The table is well-suited for managing preboarding processes, tracking intern details and statuses.

Scalability:
The use of AUTO_INCREMENT and utf8mb4 encoding ensures future-proofing for large datasets and internationalization.

Integration Potential:
The database can be integrated with platforms like PHP dashboards or web applications for real-time data access and management.
