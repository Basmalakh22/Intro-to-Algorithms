 ## 2.3-1 Using Figure 2.4 as a model, illustrate the operation of merge sort on the array A = (3,41,52,26,38,57,9,49).
 - (3) (41) (52) (26) (38) (57) (9) (49)
 - (3,41)  (26,52) (38,57) (9,49)
 - (3,26,41,52) (9,38,49,57)
 - (3,9,26,38,41,49,52,57)
 ## 2.3-2 Rewrite the MERGE procedure so that it does not use sentinels, instead stopping once either array L or R has had all its elements copied back to A and then copying the remainder of the other array back into A.
 ```
 Merge (A,p,q,r)

 n1 = q-p+1

 n2 = r-q

 let L[1..n1]andd R[1..n2]be new arrays

 for i = 1 to n1

      L[i] = A[p+i-1]

 for j = 1 to n2

     R[j] =A[q+j]

 i = 1

 j = 1

 for k = p to r 

     if i > n1
         A[k] = R[j]

         j = j+1

     else if j > n2 

         A[k] = L[i]

         i = i + 1
     
     else if L[i] ≤ R[j]

         A[k] = L[i]

         i = i + 1

     else 

     A[k] = R[j]

     j = j + 1
 ``` 

 ## 2.3-3
 - BASE CASE
     - when n = 2 , T(2) = 2 = 2 log 2 

 ## 2.3-4 We can express insertion sort as a recursive procedure as follows. In order to sort A[1.. n], we recursively sort A[1 .. n - 1]and then insert A[ n ] into the sorted array A[1 .. n - 1]. Write a recurrence for the running time of this recursive version of insertion sort.
 ```
  INSERT (A,K)

  key = A[ K ]

  index = K-1

  while index > 0 and A[ index ] >key

      A[ index +1 ] =A[ index ]

  A[ index +1 ] = key
 ```
  ---
  ```
  Recurse-Insertion-Sort (A,n)

  if n > 1

      Recurse-Insertion-Sort (A,n-1)

      INSERT (A,n)
 ```
  ## 2.3-5 Referring back to the searching problem (see Exercise 2.1-3), observe that if the sequence A is sorted, we can check the midpoint of the sequence against v and eliminate half of the sequence from further consideration. The binary search al- gorithm repeats this procedure, halving the size of the remaining portion of the sequence each time. Write pseudocode, either iterative or recursive, for binary search. Argue that the worst-case running time of binary search is O(log n)
  ```
  Iterative-Binary-Search (A,v) 

  low=A[ 1 ]

  high=A[ A.length ]

  while low≤high

     mid=⌊(low+high)/2⌋

     if v==A[mid]

         return mid

     elseif v>A[mid]

         low=mid+1

     else 

         high=mid−1

  return  NIL 
  ``` 
  ## 2.3-6


  ## 2.3-7

​


    





