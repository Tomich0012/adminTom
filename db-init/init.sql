CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE
);

INSERT INTO users (name, email)
VALUES ('Tom Heyerick', 'tom@example.com');

INSERT INTO users (name, email)
VALUES ('Lucian charlot', 'lucian.doe@example.com');

INSERT INTO users (name, email)
VALUES ('Louis Delaunois', 'louis@example.com');
