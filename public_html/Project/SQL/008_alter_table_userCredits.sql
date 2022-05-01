ALTER TABLE Users ADD COLUMN credits INT 
not null default 0; 
COMMENT 'sets the credits';