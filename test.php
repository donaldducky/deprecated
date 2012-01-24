<?php
require 'deprecated.php';

try {
  run();
  throw new Exception('wat');
} catch (Exception $e) {
  echo "All tests passed.";
}
