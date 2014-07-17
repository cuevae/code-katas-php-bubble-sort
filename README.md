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

## Goal

You goal is to write the necessary code in PHP and using TDD in order to implement Bubble sorting for any given list.
 Below you'll find some test cases:

 Input             | Output
 :------           | :----
 `<2,3,1>`         | `<1,2,3>`
 `<8,7,6,2,1>`     | `<1,2,6,7,8>`
 `<1,2,3,4>`       | `<1,2,3,4>`
 `<2,6,3,4,5,1>`   | `<1,2,3,4,5,6>`
