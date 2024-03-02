 ## 2.2-1 
 ### Express the function nˆ3/1000 - 100nˆ2 - 100n + 3 in terms of ‚Θ-notation.

 = Θ (max(nˆ3/1000, −100nˆ2, −100n, 3))

 = Θ(nˆ3)

 ---
 ## 2.2-2
 Selection-Sort (A)

     for i=1 to A.length−1

         index=i

         for j=i+1 to A.length

             if A[ j ]< A[index] and j / index 

                index = j
     
         swap A[i] with A[index]


 
 ###  Why does it need to run for only the first n  -1 elements, rather than for all n elements?
 - last element already arranged so here is no need to continue the algorithm for the last element.

 
 
 ### Give the best-case and worst-case running times of selection sort in ‚Θ-notation?
 - Θ(nˆ2)

 ### What loop invariant does this algorithm maintain?
 - befor each iteration loop the subarray A[ 1..i−1 ] consists of i−1 smallest elements of A, sorted in increasing order.

 ---
 ## 2.2-3
 ### Consider linear search again (see Exercise 2.1-3). How many elements of the in- put sequence need to be checked on the average, assuming that the element being searched for is equally likely to be any element in the array? How about in the worst case? What are the average-case and worst-case running times of linear search in ‚Θ-notation? Justify your answers.
 
 - average case:`half the the elements in array A will be checked before v is found in it`

 - worst case :` v is not present in A` 

 - all the elements needs to be checked.

 - in average case and worst case Θ(n)

 ---
 ## 2.2-4
 ### How can we modify almost any algorithm to have a good best-case running time?
 - design algorithms in best-case scenario as special case and return a predetermined solution.
 


