CREATE TABLE users (
    username VARCHAR(50) UNIQUE NOT NULL PRIMARY KEY,
    usertype BOOLEAN DEFAULT FALSE/* TRUE = teacher, FALSE  = Student */
);

CREATE TABLE homeworks (
	h_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(50) NOT NULL,
	question VARCHAR(140),
	username VARCHAR(50) NOT NULL,
	due_date DATETIME NOT NULL,
	FOREIGN KEY (username) REFERENCES Users(username)
);

CREATE TABLE answers (
	a_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	h_id INT UNSIGNED,
	username VARCHAR(50) NOT NULL,
	submission_time DATETIME NOT NULL,
	answer VARCHAR(600),
	FOREIGN KEY (username) REFERENCES Users(username),
	FOREIGN KEY (h_id) REFERENCES Homeworks(h_id)
);

CREATE TABLE assigned_to (
	h_id INT UNSIGNED NOT NULL,
	username VARCHAR(50) NOT NULL,
	FOREIGN KEY (h_id) REFERENCES Homeworks(h_id),
	FOREIGN KEY (username) REFERENCES Users(username),
	CONSTRAINT pk_PersonID PRIMARY KEY (h_id,username)
);