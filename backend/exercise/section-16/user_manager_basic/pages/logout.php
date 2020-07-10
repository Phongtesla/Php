<?php
// Xử lý logout
setcookie('is_login', true, time() - 900);
setcookie('user_login', $username, time() - 900);
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
redirect('?page=login');
