# Bubble Sort Kata

## Introduction

Suppose you have a list of **unique** numbers as in `<2,7,3,4,1,5>` placed with no specific order within a collection.

You are asked to write an algorithm that sorts those numbers from lower to higher.

From previous sorting problems you've just remembered the existence of an algorithm that does that for you.
This is the **Bubble Sort** algorithm, which definition and pseudo-code are the following:

### Algorithm Definition

>Bubble Sort is a simple sorting algorithm that works by repeatedly stepping through the list to be sorted,
>comparing each pair of adjacent items and swapping them if they are in the wrong order.

_More on [Wikipedia](http://en.wikipedia.org/wiki/Bubble_sort)_

### Pseudo-code

```
bubblesort(A):
    repeat
        changed = false
        for i = 1 to length(A) - 1
            if A[i - 1] > A[i]
                swap A[i - 1], A[i]
                changed = true
    until not changed
```

### Examples

 Input             | Output
 :------           | :----
 `<2,3,1>`         | `<1,2,3>`
 `<8,7,6,2,1>`     | `<1,2,6,7,8>`
 `<1,2,3,4>`       | `<1,2,3,4>`
 `<2,6,3,4,5,1>`   | `<1,2,3,4,5,6>`
 


## Goal

You goal is to write, **using a TDD approach**, the necessary code in order to **implement Bubble Sort** for any given list. Code can be found in the `src` folder, while tests can be found - suprisingly - in the `tests` folder.

## Start

0. Install composer.phar (if you don't already have it)
    - [*nix installation guide](https://getcomposer.org/doc/00-intro.md#installation-nix)
    - [Windows installation guide](https://getcomposer.org/doc/00-intro.md#installation-windows)

1. Clone the respository and install dependencies
    - `git clone https://github.com/cuevaec/code-katas-bubble-sort-php.git`
    - `cd codekatas-php-bubbleSort; composer install`

2. Check you are good to go
    - `bin/phpunit`
    - You should see the Bubble Sort tests failing, now it's your turn to implement the necessary code to make them pass

## Benchmark

Once done with the kata you can benchmark your solution by running the `Benchmark.php` script from the command line:
`php Benchmark.php`.

This script will output the time and memory used by your solution and can be used to compare different implementations of the algorithm.
