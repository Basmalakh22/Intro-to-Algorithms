 # Chapter 5 " Probabilistic Analysis and Randomized Algorithms "

 ## 5.1 The hiring problem
 HIRE-ASSISTANT(n)

     best = 0 // candidate 0 is a least-qualified dummy candidate

     for i = 1 to n

          interview candidate i

         if candidate i is better than candidate best

             best = i

             hire candidate 


 - Interviewing has a low cost, say ci, hiring is expensive, costing ch , m be the number of people hired , the total cost associated with this algorithm is O(ci n + ch m). 

  ### Worst-case analysis
  - O(ch n).
  ### Probabilistic analysis
  - Probabilistic analysis: is the use of probability in the analysis of problems
