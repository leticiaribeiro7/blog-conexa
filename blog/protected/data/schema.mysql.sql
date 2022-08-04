CREATE TABLE tbl_user
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(128) NOT NULL,
	password VARCHAR(128) NOT NULL,
	email VARCHAR(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE tbl_post
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	category VARCHAR(128) NOT NULL,
	title VARCHAR(128) NOT NULL,
	content TEXT NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	author_id INTEGER NOT NULL,
	FOREIGN KEY (author_id) REFERENCES tbl_user (id) 
		
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE tbl_comment
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content TEXT NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	author_id INTEGER NOT NULL,
	post_id INTEGER NOT NULL,
	FOREIGN KEY (post_id) REFERENCES tbl_post (id),
	FOREIGN KEY (author_id) REFERENCES tbl_user(id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO tbl_user (username, password, email) VALUES (
	'demo',
	'$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U.obZRUut4BoC',
	'webmaster@example.com'
);

INSERT INTO tbl_user (username, password, email) VALUES (
	'user2',
	'password',
	'webmaster@example.com'
);


INSERT INTO tbl_post (title, category, content, author_id) VALUES (
	'Welcome!',
	'Fofoca',
	'This blog system is developed using Yii.
	It is meant to demonstrate how to use Yii to build a complete real-world application.
	Complete source code may be found in the Yii releases.
	Feel free to try this system by writing new posts and posting comments.',
	1
);

INSERT INTO tbl_post (title, category, content, author_id) VALUES (
	'A Test Post',
	'Noticia',
	'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
	1
);

INSERT INTO tbl_comment (content, author_id, post_id) VALUES (
	'This is a test comment.',
	2,
	2
);