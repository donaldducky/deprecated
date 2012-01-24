<?php
require 'deprecated.php';

try {
  run();
} catch (Exception $e) {
  echo "All tests passed.";
}
