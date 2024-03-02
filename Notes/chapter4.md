 # Chapter 4
 ## Divide-and-Conquer
 - devide problem into smallar instances of the same problems,Conquer the sub-problems by solving them recursively and Combine the solutions to the sub-problems into solution for the
 original problem
 ## Recurrences
 -  recurrence is an equation or inequality that describes a function 
 ### three methods for solving recurrences
 -  substitution method
     - guess a bound and then use mathematical in- duction to prove our guess correct
 -  recursion-tree method
     - converts the recurrence into a tree whose nodes represent the costs incurred at various levels of the recursion
 -  master method
     -  provides bounds for recurrences of the form T(n) = aT(n/b) + f(n)

 ---

 ## A brute-force solution
 -  try every possible solution
 - for i = 1  ---> n
 - for j = i+1 ---> n-1 
 - Θ(nˆ2)

 ## The maximum-subarray problem
 -  do transformation then use Divide-and-Conquern technique
 - T(n) = Θ(n log n)

 ## The recursion-tree method for solving recurrences
 - each node represents the cost of a single subproblem,We sum the costs within each level of the tree to obtain a set of per-level costs, and then we sum all the per-level costs to determine the total cost of all levels of the recursion.

 - The number of nodes at depth d in a perfect binary tree = 2ˆd
 - A perfect binary tree of height h has:2ˆh+1 • −1 nodes
 - Number of leaf nodes in a perfect binary tree of height h = 2ˆh
 - Number of internal nodes in a perfect binary tree of height h = 2ˆh − 1
 - h = log n


 ## The master method for solving recurrences
 - T(n) = aT(n/b) + f(nˆk logˆp n)
     - case 1
         -  if a > bˆk then T(n) = Θ(nˆlog ab)
     - case 2
         - if a = bˆk and
             - if p < -1 then T(n) = Θ(nˆlog ab)
             - if p = -1 then T(n) = Θ(nˆlog ab log n)
             - if p > -1 then T(n) = Θ(nˆlog ab log n)
     - case 3
         - if a < bˆk and
              - if p < 0 then T(n) = Θ(nˆk)
             - if p > 0 then T(n) = Θ(nˆk log n)

