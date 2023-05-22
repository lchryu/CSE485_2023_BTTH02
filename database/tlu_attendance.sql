CREATE TABLE USER (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(50),
  password VARCHAR(50),
  role VARCHAR(20)
);

CREATE TABLE ADMIN (
  admin_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  name VARCHAR(100),
  phone VARCHAR(20),
  email VARCHAR(100),
  FOREIGN KEY (user_id) REFERENCES USER(user_id)
);

CREATE TABLE COURSE (
  course_id INT AUTO_INCREMENT PRIMARY KEY,
  admin_id INT,
  course_name VARCHAR(100),
  time_begin DATETIME,
  time_end DATETIME,
  FOREIGN KEY (admin_id) REFERENCES ADMIN(admin_id)
);

CREATE TABLE CLASS (
  class_id INT AUTO_INCREMENT PRIMARY KEY,
  course_id INT,
  class_name VARCHAR(100),
  member INT,
  FOREIGN KEY (course_id) REFERENCES COURSE(course_id)
);

CREATE TABLE STUDENT (
  student_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  class_id INT,
  name VARCHAR(100),
  phone VARCHAR(20),
  email VARCHAR(100),
  FOREIGN KEY (user_id) REFERENCES USER(user_id),
  FOREIGN KEY (class_id) REFERENCES CLASS(class_id)
);


CREATE TABLE INSTRUCTOR (
  instructor_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  class_id INT,
  name VARCHAR(100),
  phone VARCHAR(20),
  email VARCHAR(100),
  FOREIGN KEY (user_id) REFERENCES USER(user_id),
  FOREIGN KEY (class_id) REFERENCES CLASS(class_id)
);

CREATE TABLE ATTENDANCE (
  attendance_id INT AUTO_INCREMENT PRIMARY KEY,
  student_id INT,
  date_attendance DATE,
  time_attendance TIME,
  status VARCHAR(20),
  class_id INT,
  FOREIGN KEY (student_id) REFERENCES STUDENT(student_id),
  FOREIGN KEY (class_id) REFERENCES CLASS(class_id)
);

-- Chèn dữ liệu vào bảng USER
INSERT INTO USER (user_name, password, role)
VALUES 
	('ktz', 'hellodung', 'admin'),
	('txn', 'hellonam', 'admin'),
    ('lhl', 'hellolan', 'instructor'),
	('nhd', 'helloduc', 'instructor'),
    ('lch', 'hellohoi', 'user'),
    ('nnad', 'helloduong', 'user'),
    ('pts', 'helloson', 'user');
    
-- Chèn dữ liệu vào bảng ADMIN
INSERT INTO ADMIN (user_id, name, phone, email)
VALUES 
	(1,'Kieu Tuan Dung', '09785657878', 'ktz@gmail.com'),
	(2,'Truong Xuan Nam', '0967798786','txn@gmail.com');

-- Chèn dữ liệu vào bảng COURSE
INSERT INTO COURSE (admin_id, course_name, time_begin, time_end)
VALUES 
	(1, 'English 101', '2023-01-01', '2023-05-31'),
    (2, 'Cong nghe Web 101', '2023-01-01', '2023-05-31');

-- Chèn dữ liệu vào bảng CLASS
INSERT INTO CLASS (course_id, class_name, member)
VALUES 
	(1, '62THNB', 55),
    (1, '62THVA', 50),
    (2, '62TH2', 30);

-- Chèn dữ liệu vào bảng STUDENT
INSERT INTO STUDENT (user_id, class_id, name, phone, email)
VALUES 
	(5, 1, 'Luong Chung Hoi', '0978677424', 'lch@gmail.com'),
	(6, 1, 'Nguyen Ngoc Anh Duong', '0978686809', 'nnad@gmail.com'),
	(7, 2, 'Pham Thanh Son', '0823479204', 'pts@gmail.com');

-- Chèn dữ liệu vào bảng INSTRUCTOR
INSERT INTO INSTRUCTOR (user_id, class_id, name, phone, email)
VALUES 
	(3, 1, 'Luong Hong Lan', '555555555', 'lhl@gmail.com'),
	(4, 2, 'Nguyen Huy Duc', '888888888', 'nhd@gmail.com');

-- Chèn dữ liệu vào bảng ATTENDANCE
INSERT INTO ATTENDANCE (student_id, date_attendance, time_attendance, status, class_id)
VALUES 
	(1, '2023-10-01', '09:00:00', 'present', 1),
	(2, '2023-02-16', '09:00:00', 'late', 1),
	(3, '2023-05-01', '09:00:00', 'absent', 2);

