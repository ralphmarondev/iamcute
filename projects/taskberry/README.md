# Taskberry

## Create Table in our database

- For Users

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,         -- Unique identifier for each user
    fullname VARCHAR(255) NOT NULL,             -- Full name of the user
    username VARCHAR(255) NOT NULL UNIQUE,      -- Username, must be unique
    password VARCHAR(255) NOT NULL              -- Plain text password (encrypt this later)
);
```

- For Tasks

```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Auto-incrementing primary key for each task
    name VARCHAR(255) NOT NULL,         -- Task name (up to 255 characters)
    starttime DATETIME NOT NULL,        -- Start time of the task
    endtime DATETIME NOT NULL,          -- End time of the task
    priority ENUM('low', 'medium', 'high') NOT NULL,  -- Task priority (low, medium, high)
    status ENUM('pending', 'in-progress', 'completed', 'overdue') NOT NULL,  -- Task status
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Timestamp when the task was created
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  -- Timestamp for when the task is last updated
);
```
