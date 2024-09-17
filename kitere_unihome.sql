CREATE TABLE properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    room_type ENUM('single', 'shared') NOT NULL,
    description TEXT,
    image VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);