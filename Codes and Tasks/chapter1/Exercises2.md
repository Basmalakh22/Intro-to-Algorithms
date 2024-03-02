## 1.2-1 Give an example of an application that requires algorithmic content at the applica- tion level, and discuss the function of the algorithms involved.
- FILE EXPLORER: Applies sorting algorithm whenever the user wants to sort the files according to the filenames or file type or date modified.


## 1.2-2 Suppose we are comparing implementations of insertion sort and merge sort on the same machine. For inputs of size n, insertion sort runs in 8n2 steps, while merge sort runs in 64n lg n steps. For which values of n does insertion sort beat merge sort?
 ```py
 n = 2
 while n > 2 ** (n / 8.0):
    n += 1

 print("Minimum value of n for which merge sort runs faster is", n)
 ```

## 1.2-3 What is the smallest value of n such that an algorithm whose running time is 100n2 runs faster than an algorithm whose running time is 2ˆn on the same machine?
```py
 n = 1
 while 100 * n * n > 2 ** n:
    n += 1
 print("Minimum value of n for which A runs faster than B is", n)
```
