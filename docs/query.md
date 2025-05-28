# Database Documentation

## Schema

### Room Types Table
```sql
CREATE TABLE room_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE
);
```

### Rooms Table
```sql
CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_number VARCHAR(20) NOT NULL UNIQUE,
    room_type_id INT,
    capacity INT NOT NULL,
    price_per_night DECIMAL(10, 2) NOT NULL COMMENT 'Price in PHP (Pesos)',
    description TEXT,
    image_path VARCHAR(255),
    is_available BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (room_type_id) REFERENCES room_types(id) ON DELETE SET NULL
);
```

### Room Availabilities Table
```sql
CREATE TABLE room_availabilities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_id INT NOT NULL,
    date DATE NOT NULL,
    is_available BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (room_id) REFERENCES rooms(id) ON DELETE CASCADE,
    UNIQUE (room_id, date)
);
```

## Sample Data

### Room Types
```sql
INSERT INTO room_types (name) VALUES
('Classic'),
('Deluxe'),
('Premiere'),
('Suite');
```

### Sample Rooms
```sql
INSERT INTO rooms (room_number, room_type_id, capacity, price_per_night, description)
VALUES
('101', 1, 2, 5000.00, 'Cozy Classic Room for two'),
('102', 1, 2, 5000.00, 'Classic Room with street view'),
('201', 2, 3, 7500.00, 'Deluxe Room with garden view'),
('301', 3, 3, 10000.00, 'Premiere Room with balcony'),
('401', 4, 4, 15000.00, 'Luxury Suite with sea view');
```