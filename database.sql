CREATE TABLE IF NOT EXISTS user (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL,
    email VARCHAR(190) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS notifications (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userID INT UNSIGNED NOT NULL,
    massage VARCHAR(255) NOT NULL,
    isRead TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT IGNORE INTO user (id, name, email, password_hash) VALUES
    (1, 'Demo Reader', 'demo@hakina.app', '$2y$10$ZOBkEv37r0rBiZXRkaU5xOo38QYKSr/6oxp992hm5LTXdIrvkVTEm');

INSERT IGNORE INTO notifications (id, userID, massage, isRead) VALUES
    (1, 3, 'liked your story.', 0),
    (2, 3, 'saved your latest story.', 1);
