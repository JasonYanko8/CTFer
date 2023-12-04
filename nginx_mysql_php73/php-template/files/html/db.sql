CREATE DATABASE IF NOT EXISTS ctf;

USE ctf;

CREATE TABLE  IF NOT EXISTS users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, email, password)
VALUES ('admin', 'aaa@moyu.com', 'asoiduA12az'),
        ('xiao_li', 'john@example.com', '123456'),
        ('xiao_wang', 'jane@example.com', '123456');