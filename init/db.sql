CREATE DATABASE IF NOT EXISTS quotevault;
USE quotevault;

CREATE TABLE IF NOT EXISTS quotes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  author VARCHAR(255) NOT NULL,
  text TEXT NOT NULL
);

INSERT INTO quotes (author, text) VALUES
('Albert Einstein', 'Life is like riding a bicycle. To keep your balance, you must keep moving.'),
('Steve Jobs', 'Stay hungry, stay foolish.'),
('Confucius', 'It does not matter how slowly you go as long as you do not stop.');
