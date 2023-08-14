CREATE TABLE users (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  email TEXT NOT NULL UNIQUE,
  password TEXT NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);



DROP TABLE `users`;

INSERT INTO users (email, password, created_at, updated_at) VALUES ('petermunene@chungu.co.ke', '$2y$10$/jegBsnEIWhfhxM1b1r5ZuzeUVetRa/.aFAfSFDI9XdNuzYYiCney', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
