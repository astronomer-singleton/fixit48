<?php
// Usage 0:
echo "admin1: ".password_hash('admin1', PASSWORD_DEFAULT)."\n";
echo "admin2: ".password_hash('admin2', PASSWORD_DEFAULT)."\n";
echo "user1: ".password_hash('user1', PASSWORD_DEFAULT)."\n";
echo "user2: ".password_hash('user2', PASSWORD_DEFAULT)."\n";
echo "user3: ".password_hash('user3', PASSWORD_DEFAULT)."\n";
echo password_hash('user1', PASSWORD_DEFAULT)."\n";

// Usage 1:
echo password_hash('rasmuslerdorf', PASSWORD_DEFAULT)."\n";
// $2y$10$xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
// For example:
// $2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a

// Usage 2:
$options = [
  'cost' => 11
];
echo "admin1: ".password_hash('admin1', PASSWORD_BCRYPT, $options)."\n";
// $2y$11$6DP.V0nO7YI3iSki4qog6OQI5eiO6Jnjsqg7vdnb.JgGIsxniOn4C
//echo password_hash('rasmuslerdorf', PASSWORD_BCRYPT, $options)."\n";
// $2y$11$6DP.V0nO7YI3iSki4qog6OQI5eiO6Jnjsqg7vdnb.JgGIsxniOn4C