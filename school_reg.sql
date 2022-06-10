DROP DATABASE IF EXISTS school_reg;
CREATE DATABASE school_reg;
USE school_reg;

CREATE TABLE `courses` (
  `course_code` char(10) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `credits` varchar(50) NOT NULL,
  `dept_code` char(5) NOT NULL,
  `part` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `courses` (`course_code`, `course_name`, `credits`, `dept_code`, `part`) VALUES
('BEC1101', 'Fundamentals of E-Commerce', '10', 'BEC', '1.1'),
('BEC1102', 'Internet Programming (Web Programming)', '10', 'BEC', '1.1'),
('BEC1103', 'Operating Systems', '10', 'BEC', '1.1'),
('BEC1201', 'Quantitative Analysis for E-business ', '10', 'BEC', '1.2'),
('BEC1202', 'Database Design Concepts', '10', 'BEC', '1.2'),
('BEC1203', 'Intellectual Property in Electronic Commerce', '10', 'BEC', '1.2'),
('BEC2101', 'E-Commerce Website Engineering I', '12', 'BEC', '2.1'),
('BEC2102', 'Marketing Research', '10', 'BEC', '2.1'),
('BEC2103', 'E-Commerce Operations Management', '12', 'BEC', '2.1'),
('EIM1101', 'Introduction to Industrial and Manufacturing Engineering', '10', 'EIM', '1.1'),
('EIM1102', 'Workshop Technology 1', '10', 'EIM', '1.1'),
('EIM1103', 'Engineering Drawing I', '10', 'EIM', '1.1'),
('EIM1201', 'Human Factors Engineering', '10', 'EIM', '1.2'),
('EIM1202', 'Workshop Technology II', '10', 'EIM', '1.2'),
('EIM1203', 'Engineering Drawing II', '10', 'EIM', '1.2'),
('EIM2101', 'Solid Mechanics', '12', 'EIM', '2.1'),
('EIM2102', 'Materials Technology', '12', 'EIM', '2.1'),
('EIM2103', 'Engineering Modelling and Simulation', '12', 'EIM', '2.1'),
('EIM2201', 'Thermodynamics', '10', 'EIM', '2.2'),
('EIM2202', 'Engineering Design Principles', '12', 'EIM', '2.2'),
('EIM2203', 'Electrical and Electronic Technology', '12', 'EIM', '2.2'),
('ICS 411', 'Simulation and Modelling\r\n', '20', 'ICS', '4.1'),
('ICS 412', 'Systems Security and Cryptography', '20', 'ICS', '4.1'),
('ICS 413', 'Distributed Systems', '20', 'ICS', '4.1'),
('ICS1201', 'Visual Programming', '10', 'ICS', '1.2'),
('ICS1202', 'Database Design Concepts', '10', 'ICS', '1.2'),
('ICS1203', 'Data Structures and Algorithms', '10', 'ICS', '1.2'),
('ICS2201', 'Mobile Application and Development', '12', 'ICS', '2.2'),
('ICS2202', 'Microprocessors and Embedded Systems', '10', 'ICS', '2.2'),
('ICS2203', 'Design and Analysis of Algorithms', '10', 'ICS', '2.2'),
('ICS421', 'Artificial Intelligence and Expert Systems ', '20', 'ICS', '4.2'),
('ICS422', 'Management of Information Systems', '20', 'ICS', '4.2'),
('ICS423', 'Neural Networks & Pattern Matching', '20', 'ICS', '4.2'),
('IIT 417', 'Integrative Programming\r\n', '20', 'IIT', '4.1'),
('IIT1101', 'Principles of Programming Languages', '10', 'IIT', '1.1'),
('IIT1102', 'Operating Systems', '10', 'IIT', '1.1'),
('IIT1103', 'Logic Design & Switching Circuits', '10', 'IIT', '1.1'),
('IIT1201', 'Visual Programming', '10', 'IIT', '1.2'),
('IIT1202', 'Database Systems', '10', 'IIT', '1.2'),
('IIT1203', 'Data Structures and Algorithms', '10', 'IIT', '1.2'),
('IIT2101', 'Object Oriented Programming', '12', 'IIT', '2.1'),
('IIT2102', 'Web Technologies', '12', 'IIT', '2.1'),
('IIT2103', 'Data Communications and Computer Networks', '12', 'IIT', '2.1'),
('IIT2201', 'Mobile Application and Development', '12', 'IIT', '2.2'),
('IIT2202', 'Management of Information Systems', '10', 'IIT', '2.2'),
('IIT2203', 'E-business', '10', 'IIT', '2.2'),
('IIT410', 'Cybersecurity', '20', 'IIT', '4.1'),
('IIT416', 'System Programming Concepts &Compiler Design\r\n', '20', 'IIT', '4.1'),
('IIT420', 'Cyberspace Laws and Ethics', '20', 'IIT', '4.2'),
('IIT423', 'Human Computer Interaction', '20', 'IIT', '4.2'),
('IIT426', 'Platform Technologies', '20', 'IIT', '4.2'),
('ISE 1101', 'Principles of Programing Languages', '10', 'ISE', '1.1'),
('ISE 1102', 'Operating Systems \r\n', '10', 'ISE', '1.1'),
('ISE 1103', 'Fundamentals of Digital Electronics', '10', 'ISE', '1.1'),
('ISE 2101', 'Object Oriented Programming\r\n', '12', 'ISE', '2.1'),
('ISE 2102', 'Web Technologies', '12', 'ISE', '2.1'),
('ISE 2103', 'Data Communications and Networks\r\n', '12', 'ISE', '2.1'),
('ISE 411', 'Distributed Systems\r\n', '20', 'ISE', '4.1'),
('ISE 412', 'Mobile Computing and Wireless Communication', '20', 'ISE', '4.1'),
('ISE 413', 'Geographical Information Systems', '20', 'ISE', '4.1'),
('ISE1201', 'Visual Programming', '10', 'ISE', '1.2'),
('ISE1202', 'Database Design Concepts', '10', 'ISE', '1.2'),
('ISE1203', 'Data Structure and Algorithms', '10', 'ISE', '1.2'),
('ISE2201', 'Mobile Application and Development', '12', 'ISE', '2.2'),
('ISE2202', 'Software Architecture and Design', '10', 'ISE', '2.2'),
('ISE2203', 'Computer Graphics', '10', 'ISE', '2.2'),
('ISE421', 'Software Evolution & Re-Engineering', '20', 'ISE', '4.2'),
('ISE422', 'System Integration & Software Testing', '20', 'ISE', '4.2'),
('ISE423', 'Human Computer Interaction', '20', 'ISE', '4.2'),
('ISS1101', 'Principles of Programming Languages', '10', 'ISA', '1.1'),
('ISS1102', 'Operating Systems', '10', 'ISA', '1.1'),
('ISS1103', 'Introduction to Information Security', '10', 'ISA', '1.1'),
('ISS1201', 'Visual Programming Concepts', '10', 'ISA', '1.2'),
('ISS1202', 'Database Design and Security', '10', 'ISA', '1.2'),
('ISS1203', 'Data Structures and Algorithms', '10', 'ISA', '1.2'),
('ISS2101', 'Secure Coding', '12', 'ISA', '2.1'),
('ISS2102', 'Number Theory', '10', 'ISA', '2.1'),
('ISS2103', 'Data Communications and Networks', '12', 'ISA', '2.1'),
('ISS2201', 'Network Security', '10', 'ISA', '2.2'),
('ISS2202', 'Information Systems Risk Management', '10', 'ISA', '2.2'),
('ISS2203', 'Forensic and Incidence Response', '10', 'ISA', '2.2'),
('ISS411', 'Cryptography and Development of Cryptosystems\r\n', '20', 'ISA', '4.1'),
('ISS412', 'IT Auditing and Assurance', '20', 'ISA', '4.1'),
('ISS413', 'e-Finance Security', '20', 'ISA', '4.1'),
('ISS421', 'Computer Forensics', '20', 'ISA', '4.2'),
('ISS422', 'Cloud Computing', '20', 'ISA', '4.2'),
('ISS423', 'Security Audit Controls', '20', 'ISA', '4.2');


CREATE TABLE `departments` (
  `dept_code` char(5) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `departments` (`dept_code`, `dept_name`) VALUES
('ADM', 'Administrator'),
('BEC', 'Electronic Commerce'),
('BFA', ' Forensic Accounting and Auditing'),
('BFE', ' Financial Engineering'),
('EBE', ' Biomedical Engineering'),
('ECP', 'Chemical and Process Systems Engineering'),
('EEE', 'Electronic Engineering'),
('EIM', 'Industrial and Manufacturing Engineering'),
('EMT', 'Materials Technology and Engineering'),
('EPT', 'Polymer Technology and Engineering'),
('ICS', 'Computer Science'),
('IIT', ' Information Technology'),
('ISA', 'Information Security and Assurance'),
('ISE', 'Software Engineering'),
('SBT', 'Biotechnology'),
('SFP', 'Food Processing Technology'),
('SPT', ' Pharmacy'),
('SRA', ' Radiography');



CREATE TABLE `levels` (
  `part` char(10) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `levels` (`part`, `year`, `semester`) VALUES
('1.1', 1, 1),
('1.2', 1, 2),
('2.1', 2, 1),
('2.2', 2, 2),
('3.1', 3, 1),
('3.2', 3, 2),
('4.1', 4, 1),
('4.2', 4, 2),
('Admin', 0, 0),
('masters1.1', 1, 1),
('masters1.2', 1, 2),
('masters2.1', 2, 1),
('masters2.2', 2, 2);


CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `roles` (`role_id`, `title`) VALUES
(1, 'Admin'),
(2, 'Student');



CREATE TABLE `schools` (
  `school_id` char(10) NOT NULL,
  `school_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `schools` (`school_id`, `school_name`) VALUES
('BMS', 'Business Management and Science'),
('ET', 'Engineering and Technology'),
('IST', 'InformationScience and Technology'),
('ST', 'Industrial Science and Technology');

CREATE TABLE `school_courses` (
  `school_coursecode` char(15) NOT NULL,
  `school_coursename` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL,
  `part` char(10) NOT NULL,
  `school_id` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `school_courses` (`school_coursecode`, `school_coursename`, `credits`, `part`, `school_id`) VALUES
('BMS1101', 'Technical Communication Skills for Business I', 10, '1.1', 'BMS'),
('BMS1201', 'Technical Communication Skills for Business II', 10, '1.2', 'BMS'),
('EST1101', 'Technical Communication Skills for Engineers', 10, '1.1', 'ET'),
('IST1101', 'Technical Communication Skills for Information Sciences', 10, '1.1', 'IST'),
('IST1201', 'Ethics and Professionalism', 10, '1.2', 'IST');


CREATE TABLE `tec` (
  `id` int(11) NOT NULL,
  `status` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `tec` (`id`, `status`) VALUES
(1, 'Registered'),
(2, 'Not Registered');


CREATE TABLE `tec_courses` (
  `tec_course_code` char(10) NOT NULL,
  `tec_course_name` varchar(50) NOT NULL,
  `tec_credits` int(11) NOT NULL,
  `part` char(15) NOT NULL,
  `tec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tec_courses` (`tec_course_code`, `tec_course_name`, `tec_credits`, `part`, `tec_id`) VALUES
('TEC301', 'Research and Development Methodologies', 10, '1.2', 1),
('TEC302', 'Teaching and Learning in Higher Education', 10, '2.1', 1),
('TEC401', 'Curriculum Planning and Development', 10, '2.2', 1),
('TEC402', 'Technological Educational Learning', 10, '4.1', 1);


CREATE TABLE `university` (
  `uni_code` char(10) NOT NULL,
  `uni_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `university` (`uni_code`, `uni_name`) VALUES
('HIT', 'Harare Institute of Technology');



CREATE TABLE `university_courses` (
  `uni_coursecode` char(10) NOT NULL,
  `uni_coursename` varchar(50) NOT NULL,
  `credits` int(11) NOT NULL,
  `part` char(10) NOT NULL,
  `uni_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `university_courses` (`uni_coursecode`, `uni_coursename`, `credits`, `part`, `uni_code`) VALUES
('HIT0200', 'Project Product Development', 15, '2.2', 'HIT'),
('HIT0400', 'Capstone Project', 40, '4.2', 'HIT'),
('HIT1101', 'Technopreneurship I', 10, '1.1', 'HIT'),
('HIT1201', 'Technopreneurship II', 10, '1.2', 'HIT'),
('HIT200', 'Mini Project', 15, '2.1', 'HIT'),
('HIT2101', 'Technoprenuership III', 10, '2.1', 'HIT'),
('HIT2201', 'Technopreneurship IV', 10, '2.2', 'HIT'),
('HIT2203', 'Big Data and Data Analytics', 12, '2.2', 'HIT'),
('HIT400', 'Capstone Project', 40, '4.1', 'HIT');


CREATE TABLE `users` (
  `user_id` char(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `dept_code` char(10) NOT NULL,
  `role_id` int(11) NOT NULL,
  `part` char(10) NOT NULL,
  `uni_code` char(10) NOT NULL,
  `school_id` char(10) NOT NULL,
  `tec_id` int(11) NOT NULL DEFAULT 2,
  `reg_id` varchar(50) NOT NULL DEFAULT 'not registered',
  `fees` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `gender`, `email`, `password`, `dept_code`, `role_id`, `part`, `uni_code`, `school_id`, `tec_id`, `reg_id`, `fees`) VALUES
('admin', 'Administrator', '', 'M', 'admin@hit.ac.zw', 'admin', 'ADM', 1, 'Admin', 'HIT', 'IST', 2, 'not registered', 42000),
('h180412x', 'Tinashe', 'Mazambani', 'M', 'h180412x@hit.ac.zw', '123', 'ISA', 2, '4.2', 'HIT', 'IST', 2, 'not registered', 0),
('h180567z', 'Emma', 'Watson', 'F', 'h180567z@hit.ac.zw', '123', 'IIT', 2, '4.2', 'HIT', 'IST', 1, 'registered', 43000),
('h200156w', 'Rakinzi', 'Silver', 'M', 'h200156w@hit.ac.zw', '123', 'IIT', 2, '2.2', 'HIT', 'IST', 1, 'registered', 42000),
('h200798y', 'Justin', 'Jerahuni', 'M', 'h200798y@hit.ac.zw', '123', 'EIM', 2, '2.2', 'HIT', 'ET', 2, 'not registered', 0),
('h200800m', 'Shalom', 'Mutukumira', 'F', 'h200800m@gmail.com', '123', 'ISA', 2, '2.2', 'HIT', 'IST', 2, 'not registered', 0),
('h200832t', 'Denzel', 'Msusa', 'M', 'h200832t@hit.ac.zw', '123', 'ICS', 2, '2.2', 'HIT', 'IST', 2, 'not registered', 0),
('h210123a', 'Tatenda', 'Gondo', 'F', 'h210123a@hit.ac.zw', '123', 'EIM', 2, '1.2', 'HIT', 'ET', 2, 'not registered', 0),
('h210200m', 'Raymond', 'Matsenhura', 'M', 'h210200m@hit.ac.zw', '123', 'IIT', 2, '1.2', 'HIT', 'IST', 2, 'registered', 50000),
('h210405r', 'Patricia', 'Madende', 'F', 'h210405r@hit.ac.zw', '123', 'BEC', 2, '1.2', 'HIT', 'BMS', 2, 'not registered', 0),
('h210987b', 'John', 'Doe', 'M', 'h210987b@hit.ac.zw', '123', 'ISA', 2, '1.2', 'HIT', 'IST', 2, 'not registered', 0);


ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `fk_courses_dept` (`dept_code`),
  ADD KEY `fk_courses_levels` (`part`);


ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_code`);


ALTER TABLE `levels`
  ADD PRIMARY KEY (`part`);


ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);


ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`);


ALTER TABLE `school_courses`
  ADD PRIMARY KEY (`school_coursecode`),
  ADD KEY `fk_schoolcourses_part` (`part`),
  ADD KEY `fk_schoolcourses_schools` (`school_id`);


ALTER TABLE `tec`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tec_courses`
  ADD PRIMARY KEY (`tec_course_code`),
  ADD KEY `fk_teccourses_part` (`part`),
  ADD KEY `fk_teccourses_tec` (`tec_id`);


ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_code`);


ALTER TABLE `university_courses`
  ADD PRIMARY KEY (`uni_coursecode`),
  ADD KEY `fk_universitycourses_levels` (`part`),
  ADD KEY `fk_universitycourses_university` (`uni_code`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_users_levels` (`part`),
  ADD KEY `fk_users_university` (`uni_code`),
  ADD KEY `fk_users_department` (`dept_code`),
  ADD KEY `fk_users_tec` (`tec_id`),
  ADD KEY `fk_users_roles` (`role_id`),
  ADD KEY `fk_users_schools` (`school_id`);


ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `courses`
  ADD CONSTRAINT `fk_courses_dept` FOREIGN KEY (`dept_code`) REFERENCES `departments` (`dept_code`);


ALTER TABLE `school_courses`
  ADD CONSTRAINT `fk_schoolcourses_part` FOREIGN KEY (`part`) REFERENCES `levels` (`part`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_schoolcourses_schools` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`);


ALTER TABLE `tec_courses`
  ADD CONSTRAINT `fk_teccourses_part` FOREIGN KEY (`part`) REFERENCES `levels` (`part`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_teccourses_tec` FOREIGN KEY (`tec_id`) REFERENCES `tec` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `university_courses`
  ADD CONSTRAINT `fk_universitycourses_levels` FOREIGN KEY (`part`) REFERENCES `levels` (`part`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_universitycourses_university` FOREIGN KEY (`uni_code`) REFERENCES `university` (`uni_code`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_department` FOREIGN KEY (`dept_code`) REFERENCES `departments` (`dept_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_levels` FOREIGN KEY (`part`) REFERENCES `levels` (`part`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_schools` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_tec` FOREIGN KEY (`tec_id`) REFERENCES `tec` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_university` FOREIGN KEY (`uni_code`) REFERENCES `university` (`uni_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


