<?php

session_start();

$_SESSION['first-name'] = $_POST['first-name'];
$_SESSION['last-name'] = $_POST['last-name'];

if (empty($_SESSION['first-name'])) {
  $_SESSION['error-first-name'] = 'The field can not be empty';
} elseif (!preg_match('/[[:alpha:]]/', $_SESSION['first-name'])) {
  $_SESSION['error-first-name'] = 'The field can contain only alphabetic characters';
} else {
  unset($_SESSION['error-first-name']);
}

if (empty($_SESSION['last-name'])) {
  $_SESSION['error-last-name'] = 'The field can not be empty';
} elseif (!preg_match('/[[:alpha:]]/', $_SESSION['last-name'])) {
  $_SESSION['error-last-name'] = 'The field can contain only alphabetic characters';
} else {
  unset($_SESSION['error-last-name']);
}

if (isset($_SESSION['error-first-name']) or isset($_SESSION['error-last-name'])) {
  header('Location: index.php');
} else {
  header('Location: success.php');
}
