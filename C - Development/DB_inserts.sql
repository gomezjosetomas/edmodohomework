INSERT INTO users (username, usertype)
	VALUES ('Nick_Fury', TRUE),('tony_stark', FALSE),('steve_rogers', FALSE),
	('thor', FALSE),('natasha_romanova', FALSE),('Mister_Fantastic', TRUE);

INSERT INTO homeworks (h_id, title, question, username, due_date)
    VALUES ( DEFAULT, 'Infinity Stone 101', 'What is a Tesseract?', 'Nick_Fury', NOW()),
	( DEFAULT, 'History of SHIELD', 'What does S.H.I.E.L.D. stands for?', 'Nick_Fury', NOW()),
	( DEFAULT, 'Project PEGASUS', 'What is project PEGASUSS', 'Nick_Fury', NOW()),
	( DEFAULT, 'Dr. DOOM ', 'What is Dr. DOOM full name?', 'Mister_Fantastic', NOW());
	
INSERT INTO assigned_to (h_id, username)
	VALUES (1, 'tony_stark'),(1, 'steve_rogers'),(1, 'thor'),(1, 'natasha_romanova'),(4,'steve_rogers'),(2, 'tony_stark'),(3, 'tony_stark');
	
INSERT INTO  answers (a_id, h_id, username, submission_time, answer)
	VALUES (DEFAULT, 1, 'tony_stark', NOW(), 'This is my first answer.'),
	
	(DEFAULT, 1, 'tony_stark', NOW(), 'I am going to use this to power my suit.'),
	(DEFAULT, 1, 'steve_rogers', NOW(), 'Zola used it to create weapons and I crashed the plane with it in the north pole.'),
	(DEFAULT, 1, 'tony_stark', NOW(), 'Nevermind. This is an infinity stone.'),
	(DEFAULT, 1, 'thor', NOW(), 'We Asgardinas guarded this. My father Odin owns it. My brother Loki went crazy about it.'),
	(DEFAULT, 1, 'natasha_romanova', NOW(), 'This is beautiful!'),
	(DEFAULT, 1, 'tony_stark', NOW(), 'Nevermind. This is an infinity stone.'),
	(DEFAULT, 1, 'tony_stark', NOW(), 'An infinity stone of unparalleled power. A Cosmic Cube. I have seen a drawing on my faterh\'s notebook');
	
	
