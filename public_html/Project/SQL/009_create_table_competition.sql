CREATE TABLE IF NOT EXISTS Comps(
    -- Remember to refer to your proposal for your exact columns
    id int AUTO_INCREMENT PRIMARY KEY,
    title varchar(240) not null,
    duration int default 3,
    expires TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL duration DAY)),
    current_reward int DEFAULT (starting_reward),
    starting_reward int DEFAULT 1,
    join_fee int default 1,
    current_participants int default 0,
    min_participants int DEFAULT 3,
    paid_out tinyint(1) DEFAULT 0,
    did_calc TINYINT(1) DEFAULT 0,
    min_score int DEFAULT 1,
    first_place_per int default 75,
    second_place_per int default 20,
    third_place_per int default 5,
    check (first_place_per + second_place_per + third_place_per = 100),
    cost_to_create int DEFAULT 1,
    created_by int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY(created_by) REFERENCES Users(id),
    check (min_score >= 1),
    check (starting_reward >= 1),
    check (current_reward >= starting_reward),
    check (min_participants >= 3),
    check (current_participants >= 0),
    check (join_fee >= 0)
)