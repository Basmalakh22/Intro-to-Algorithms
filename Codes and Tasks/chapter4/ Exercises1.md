## 4.1-1
### What does FIND-MAXIMUM-SUBARRAY return when all elements of A are negative?
- the maximum subarray will contain only single element,the largest element of A
---
## 4.1-2
### Write pseudocode for the brute-force method of solving the maximum-subarray problem. Your procedure should run in Θ(nˆ2) time.

 FIND-MAXIMUM-SUBARRAY-BRUTEFORCE(A.low,high)

     left = low

     right = high

     sum = - ∞

     for i = low to high 
         
         tempsum = 0

         for j = i to high

             tempsum = tempsum + A[j]

             if tempsum > sum

             sum = tempsum

             left = i

             right = j

     return (left , right , sum)

---
## 4.1-4
### Suppose we change the definition of the maximum-subarray problem to allow the result to be an empty subarray, where the sum of the values of an empty subarray is 0. How would you change any of the algorithms that do not allow empty subarrays to permit an empty subarray to be the result?
- to return an empty subarray only if the sum of the maximum subarray is negative,we can modify the algorithms to check if the sum is return negative, we will return the empty subarray instead.
---



          
