 # chapter 2 

 1. [difference between pseudocode and real code](#difference-between-pseudocod-and-real-code)
 1. [ Insertion sort](#insertion-sort)
 1. [ things about a loop invariant](#things-about-a-loop-invariant)
 1. [ Analyzing algorithms](#analyzing-algorithms)
 1. [ RAM model](#ram-model)
 1. [ Order of growth](#orde-of-growth)
 1. [ Designing algorithms](#designing-algorithms)

 ---

 ### **difference between pseudocode and real code**
 - pseudocode use expressive method that is clear and concise to given a specific  algorithm.
 - pseudocode is not concerned with issues of software engineering " For example Issues of data abstraction, modularity and error handling "

 ---

 ## Insertion sort
 - sort small number of elements
 - We rearrange in insertion sort from right to left


 **pseudocode of insertion sort**


 INSERTION-SORT(A)

    for j = 2 to A.length                            

         key = A[ j ]

         i = j - 1                                    

         while i > 0 and A [ i ] > key               

             A[ i+1 ] = A[ i ]

             i = i - 1

         A[ i+ 1 ] = key



 ***pseudocode explanation***

 A (5, 2, 4, 6, 1, 3)

 j = 2 : `started from index 2`

 i = j - 1 : `2 -1 =1`

 while i > 0 and A [ i ] > key  : `while 1 > 0 and 5 > 2`

 A[ i+1 ] : `A[1 + 1] = A[2]`

 A[ i ] :`A[1]`

 A[ 2 ] = A[ 1 ] : `switch 2,5 `

 i = i - 1 :  `i = 1 - 1 = 0`

 while 0 > 0 and A [ i ] > key :`The condition is not run`

 A[ i+ 1 ] = key : `A [0+1] = key  >> A[1] = key  >> A[1] = 2  `

 ---

 ### things about a loop invariant:

 what is a loop invariant? :`a tool used to prove the correctness of algorithm ,specificially in regards to a loop , it is a properties of type boolean and must be aligned with the goal of the algorithm , it is must hold be true at initialization ,Maintenance and Termination `

 1. Initialization: ` It is true prior to the first iteration of the loop.`
 2. Maintenance: `If it is true before an iteration of the loop, it remains true before the next iteration.`
 3. Termination: `When the loop terminates. `

 the invariant gives us a useful property that helps show that the algorithm is correct.

 ## Let us see how these properties hold for insertion sort.

 >**Initialization**  
 j = 2 and the scop of the array A[ 1 ... j-1 ] = A [ 1 ... 2-1] = A [ 1 ]


 >**Maintenance**  
 assuming loop invariant holds at iteration (j) , >> The subarray A [ 1 ... j-1]
 , in the next iteration (j+1) , the code compares and possibl updates with A[ j ] then the subarray A [ 1 ... j ]


 >**Termination**  
 j > A.length = n , each loop iteration increases j by 1 , so that j= n + 1 at that time then the subarray A [ 1 ... n]
 ---
 ## Analyzing algorithms
 - Choose the most efficient of several possible algorithms for the same problem.
 - Running time of an algorithm : `The number of steps executed by the algorithm`
 - input size : `number of items in the input`
 ---
 ## RAM model
 - Generic single-processor model.
 - Supports simple constant-time instructions "Arithmetic , Data Movement , Control" 
 - Run time (cost) is uniform (1 time unit) for all simple instructions.
 - no concurrent operations.
 - Memory is unlimited.
 - no hierarchy.
 
 ---
 ### Worst-case Complexity
 - Maximum steps the algorithm takes for any possible input.

 ### Average-case Complexity
 - Average of the running times of all possible inputs.

 ### Best-case Complexity
 - Minimum number of steps for any possible input
 ---
 ## Order of growth
 - how running time grows with input size
 - Complexity function can be used to compare the performance of algorithms.
 - Asymptotic complexity: `the running time for large inputs`
 
 ---
 ## Designing algorithms

 ### 1. The divide-and-conquer approach
 - devide problem into smallar instances of the same problems,Conquer the sub-problems by solving them recursively and Combine the solutions to the sub-problems into solution for the original problem
 - merge sort algorithm depends on divide-and-conquer
 ### 1.1 merge sort algorithm

  MERGE-SORT(A,p,r)

    if p < r

         q = ( p + r ) / 2

         MERGE-SORT(A, p, q)

         MERGE-SORT(A, q + 1, r)

         MERGE(A, p, q, r)

 - Declare left and right var which will mark the extreme indices of the array
 - Left will be assigned to 0 and right will be assigned to n-1
 - Find mid = (left+right)/2
 - Call mergeSort on (left,mid) and (mid+1,rear)
 - Above will continue till left < right
 - Then we will call merge on the 2 subproblems
 - Divide: ` D(n)= Θ(1) `
 - Conquer: ` 2T(n/2) `
 - Combine: ` Θ(n) `
 - ` T(n)= Θ(n log n) `
 ### 1.2. recursion tree
 - The number of nodes at depth d in a perfect binary tree = 2ˆd
 - A perfect binary tree of height h has:2ˆh+1 • −1 nodes
 - Number of leaf nodes in a perfect binary tree of height h = 2ˆh
 - Number of internal nodes in a perfect binary tree of height h = 2ˆh − 1
 - h = log n

 *Tree Termonology*
 - A = Root:` No parent for this node`
 - Siblings:` the nodes that have the same parent`
 - leaf (External node):` havs no child `
 - Internal node:` a node with at least one child`
 - Ancestors of a node:` parent,grandparent, grand-grandparent`
 - Descendant of a node:` child,grandchild, grand-grandchild`
 - Depth of a node:` number of ancestors`
 - Height of a tree:` maximum depth of any node in the tree`
 - Degree of a tree:` the maximum number of this node`
 - Degree of a node:` number of this node children`
 ---
 ## Correctness of bubblesort
 - Θ(nˆ2)
 - not efficient

 BUBBLESORT(A)

     for i = 1 to A.length - 1

       for j= A.length downto i + 1 
 
         if A[ j ]  < A [j - 1]

           exchange A[ j ]  with A[j - 1]

 









 



 




 

