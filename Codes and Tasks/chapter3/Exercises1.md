 ## 3.1-1
 ### Let f(n) and g(n) be asymptotically nonnegative functions. Using the basic definition of Θ-notation, prove that max ( f(n) , g(n) ) = Θ ( f(n) + g(n) )
 - using  Θ-notation
     - 0 ≤ C1 g(n) ≤ F(n) ≤ C2 g(n)
         - 0 ≤ C1 ( f(n) + g(n) ) ≤ max ( f(n) , g(n) ) ≤  C2 ( f(n) + g(n) )
     - for all n ≥ n0
         - f(n) + g(n) ≥ max ( f(n) , g(n) )
     - by using O-notation and Ω-notatio 
     -  0 ≤ F(n) ≤ C g(n) and  0 ≤ C g(n) ≤ F(n)
         - F(n) ≤ max ( f(n) , g(n) ) => 1
         - g(n) ≤  max ( f(n) , g(n) ) => 2
     - adding 1 , 2 
         -  f(n) + g(n) ≤ 2  max ( f(n) , g(n) )
         - 1/2 f(n) + g(n) ≤ max ( f(n) , g(n) )
     - 0 ≤ 1/2 f(n) + g(n) ≤ max ( f(n) , g(n) ) ≤ ( f(n) + g(n) ) for all n ≥ n0
         -  C1 = 1/2 
         - C2 = 1
 - so max ( f(n) , g(n) ) = Θ ( f(n) + g(n) )
 ---
  ## 3.1-2
 ### Show that for any real constants a and b, where b > 0 , (n + a)ˆb = Θ(nˆb)
 - (1) find f(n) , g(n) 
     -  g(n) = nˆb
     - f(n) = (n + a)ˆb 
 - (2) by using O-notation and Ω-notatio 
      - 0 ≤ F(n) ≤ C g(n) and  0 ≤ C g(n) ≤ F(n)
         - (n + a)ˆb ≤ 2nˆb
         - (n + a)ˆb ≤ 1/2 nˆb
     - 0 ≤ C1 g(n) ≤ F(n) ≤ C2 g(n)
         - 0 ≤ 1/2nˆb ≤ (n + a)ˆb ≤ 2nˆb
         - So (n + a)ˆb = Θ(nˆb)
         - C1 = 1/2ˆb
         - C2 = 2ˆb
 ---
 ## 3.1-3
 ### Explain why the statement, “The running time of algorithm A is at least O(nˆ2),” is meaningless.
 - T(n) ≥ O(nˆ2) , O-notation gives upper bound  by 0 ≤ F(n) ≤ C g(n)
 - that mean  T(n) is greater than some upper bound which is meaningless.
 ---
 ## 3.1-4
 ### Is 2ˆn+1 = O(2ˆn)? Is 2ˆ2n = O(2ˆn)?
 -  2ˆn+1 = O(2ˆn) ?
     - 2ˆn+1 = 2 • 2ˆn
     - so for n ≥ 1 and C ≥ 2
     - by using 0 ≤ F(n) ≤ C g(n)
     - 0 ≤ 2ˆn+1 ≤ C 2ˆn
     - yes  2ˆn+1 = O(2ˆn)

 -  2ˆ2n = O(2ˆn) ?
     -  2ˆ2n = 2ˆn • 2ˆn
     - need constant like 0 ≤ 2ˆn • 2ˆn ≤ C 2ˆn
     - C ≥ 2ˆn impossible
 ---
 ## 3.1-5
 ### Prove Theorem 3.1. for any two function f(n) and g(n) , f(n) = Θ( g(n) ) if and only if f(n) = O( g(n) ) and f(n) = Ω( g(n) )
 - f(n) = O( g(n) ) and f(n) = Ω( g(n) )  ==>  f(n) = Θ( g(n) )
 -  f(n) = Ω( g(n) ) for all n ≥ n1
     -  0 ≤ C1 g(n) ≤ F(n)

 - f(n) = O( g(n) )   
     - 0 ≤ F(n) ≤ C g(n) for all n ≥ n2
 - by combining 0 ≤ C1 g(n) ≤ F(n) ≤ C2 g(n)
 - so f(n) = Θ( g(n) ) if and only if f(n) = O( g(n) ) and f(n) = Ω( g(n) )

 ---
  
 ## 3.1-6
 ### Prove that the running time of an algorithm is Θ(g(n)) if and only if its worst-case running time is O(g(n)) and its best-case running time is Ω(g(n))
 - T(n)  =  Θ(g(n)) for all n ≥ n0
 - 0 ≤ C1 g(n) ≤ F(n) ≤ C2 g(n)
 -  0 ≤ F(n) ≤ C g(n) for all n ≥ n0 , T(n) is upper bounded by O(n) it meaning worst-case running time of the algorithm is O(n)
 - and  0 ≤ C g(n) ≤ F(n) for all n ≥ n0 , T(n) is lower bounded by Ω(n) it meaning best-case running time of the algorithm is Ω(n)
 --- 
 ## 3.1-7
 ### Prove that  O( g(n) ) ∩  ω( g(n) ) is the empty set.
 - O( g(n) ) is a set of function f(n) like 0 ≤ F(n) ≤ C1 g(n) for all n ≥ n0
 - ω( g(n) ) is a set of function f(n) like 0 ≤ C2 g(n) ≤ F(n) for all n ≥ n0
     - 0 ≤ C2 g(n) ≤ F(n) ≤ C1 g(n) not true
 - so O( g(n) ) ∩  ω( g(n) ) is the empty set.
 ---
 ## 3.1-8
 - Ω( g(n , m) ) 
     - 0 ≤ C g(n , m) ≤ f(n , m) for all n ≥ n0 or m ≥ m0
 - Θ( g(n , m) ) 
     - 0 ≤ C1 g(n , m) ≤ f(n , m) ≤ C2 g(n , m)  for all n ≥ n0 or m ≥ m0




     
     
      






                  
​
 
⁡


