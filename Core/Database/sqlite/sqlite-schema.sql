CREATE TABLE users (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  email TEXT NOT NULL UNIQUE,
  password TEXT NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);



DROP TABLE `users`;

INSERT INTO users (email, password, created_at, updated_at) VALUES ('petermunene@chungu.co.ke', '$2y$10$/jegBsnEIWhfhxM1b1r5ZuzeUVetRa/.aFAfSFDI9XdNuzYYiCney', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


UPDATE `users` set email = 'pmunene@chungu.co.ke';



CREATE TABLE poems (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title TEXT NOT NULL UNIQUE,
  author TEXT NOT NULL,
  body TEXT NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE poems_new (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title TEXT NOT NULL UNIQUE,
  author_id INTEGER NOT NULL,
  body TEXT NOT NULL,
  category_id INTEGER DEFAULT 1,
  status BOOLEAN DEFAULT 0,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (author_id) REFERENCES authors(id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO poems_new (title, author_id, body, created_at, updated_at)
SELECT title, (SELECT id FROM authors WHERE authors.name = poems.author), body, created_at, updated_at
FROM poems;

DROP TABLE poems;
ALTER TABLE poems_new RENAME TO poems;


CREATE TABLE categories (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT NOT NULL UNIQUE,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE subscribers (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  email TEXT NOT NULL UNIQUE,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE authors (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO authors (name, created_at, updated_at) VALUES ('munenepeter', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);


-- undefined
-- Sacrificial Love
-- Survival
-- Nature
-- Pursuit of Love
-- Power and Corruption
-- Loneliness
-- Justice
-- Family
-- Circle of Life
-- Pursuit of Love