# PHP Deep Equality Check with Potential Stack Overflow

This repository contains a PHP function designed to perform a deep equality check between two values.  The function handles nested objects and primitive data types, however, it has a significant flaw: it can lead to stack overflow errors when dealing with deeply nested objects. The solution demonstrates how to address this issue by using an iterative approach instead of recursion.

## Bug
The `foo()` function uses recursion. While elegant, recursion has a limit and very deep nested objects will likely cause stack overflow.  

## Solution
The solution replaces the recursive approach with an iterative one, utilizing a stack to manage comparisons.  This prevents stack overflow errors, ensuring the function can handle arbitrarily deep object structures. 