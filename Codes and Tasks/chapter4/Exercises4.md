 ## 4.4-1
 ### Use a recursion tree to determine a good asymptotic upper bound on the recurrence T (n)= 3T (n/2) +n  Use the substitution method to verify your answer.
 - a = 3 ,b = 2 ,F(n) = n
 - T(n) = F(n) ∑ i=0 ,h-1 (a/b)ˆi +nˆlogab
 - T(n) = n ∑ i=0 ,h-1 (3/2)ˆi+nˆlog3
 -  T(n) = nˆlog3
 - T(n) = nˆ1.58
 ---
 ## 4.4-2
 ### Use a recursion tree to determine a good asymptotic upper bound on the recurrenc T(n)=T(n/2)+nˆ2. Use the substitution method to verify your answer.
 - a = 1 ,b = 2 ,F(n) = nˆ2
 - T(n) = F(n) ∑ i=0 ,h-1 (a/b)ˆi +nˆlogab
 - T(n) = nˆ2 ∑ i=0 ,h-1 (3/2)ˆi+nˆlog3
 -  T(n) = nˆ2 +0
 - T(n) = nˆ2 
 --- 
 ## 4.4-3
 ### Use a recursion tree to determine a good asymptotic upper bound on the recurrence T(n) = 4T(n/2+2)+n Use the substitution method to verify your answer.
 - a = 4 ,b = 2 
 - H = nlogab = nˆ2
 - T(n) =n.H
 - T(n) = n/2+2 .nˆ2
 - T(n) = nˆ2 
 ---
 ## 4.4-4
 ### Use a recursion tree to determine a good asymptotic upper bound on the recurrence T(n) = 2T(n-1)+1  Use the substitution method to verify your answer.
 ---
 ##  4.4-5
 ### Use a recursion tree to determine a good asymptotic upper bound on the recurrence T(n) = T(n-1) + T(n/2)+n . Use the substitution method to verify your answer.
 ---
 ## 4.4-6
 ### Argue that the solution to the recurrence T (n) = T (n/3) +T(2n/3)+cn, where c is a constant, is Ω(n lg n) by appealing to a recursion tree.
 - a = 2,b1 =3 ,b2 = 3/2 ,F(n) = n
 - level h:cost = nˆlogab = n
 - T(n) = n .nˆlog2 3/2 
 -  T(n) = nlog n
 ---
 ## 4.4-7
 ### Draw the recursion tree for T (n) = 4T (n/2) + cn, where c is a constant, and provide a tight asymptotic bound on its solution. Verify your bound by the substi- tution method.
 - a = 4 ,b = 2 ,F(n) = n
 - T(n) = F(n) ∑ i=0 ,h-1 (a/b)ˆi + nˆlogab
 - T(n) = n ∑ i=0 ,h-1 (4/2)ˆi + nˆlog4 2
 - T(n) = n +  nˆ2
 - T(n) = nˆ2
 ---
 ## 4.4-8
 ### Use a recursion tree to give an asymptotically tight solution to the recurrence T .(n) = T (n - a) + T (a) + cn, where a ≥ 1 and c > 0 are constants.
 - a =2 ,F(n) = n
 - n - Ha = 1
 - Ha = n - 1
 - H = n-1/a = n/a
 - T(n) = n . H
 - T(n) = n . n/a
 - T(n) = nˆ2

 ---
 ### 4.4-9
 ### Use a recursion tree to give an asymptotically tight solution to the recurrence T.( n) = T (αn) + T((1−α)n) +cn, where  ̨ is a constant in the range 0 <  ̨ < 1 and c > 0 is also a constant.
