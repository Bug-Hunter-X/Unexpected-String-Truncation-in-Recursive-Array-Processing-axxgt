# PHP Recursive Array Processing Bug

This repository demonstrates a subtle bug in a PHP function designed to recursively process an array. The function truncates strings longer than 10 characters and handles nested arrays.  However, the function might behave unexpectedly with certain inputs, leading to data loss or incorrect results.

## Bug Description

The `processData` function processes array data by recursively processing nested arrays and truncating strings longer than 10 characters.  While functional for many inputs, it could experience issues if you encounter deeply nested structures or unusually structured arrays.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`. 
3. Examine the output and see that the truncation happens even in array values.
4. Observe the unintended truncation when strings in nested arrays exceed the 10-character limit.

## Solution

The provided `bugSolution.php` provides a correction to address the potential issues and improve the robustness of the function.
