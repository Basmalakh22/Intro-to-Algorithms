 ## 3.2-1
 ### Show that if f .n/ and g.n/ are monotonically increasing functions, then so are the functions f(n) + g(n) and f (g(n)) and if f(n)and g(n) are in addition nonnegative, then f(n) . g(n) is monotonically increasing.
 - as f(n) . g(n) is monotonically increasing then 
     - m ≤ n => f(m) ≤ f(n) 
     - m ≤ n => g(m) ≤ g(n) 
     - f(m) + g(m) ≤  f(n) + g(n) 
     - by combining 1 , 2 
     - f(g(m)) ≤ f(g(n))
     - f(g(n)) is monotonically increasing
     - f(n) , g(n) nonnegative
     - f(m) . g(m) ≤ f(n) .g(n) 
     - then f(n) . g(n) is monotonically increasing.
 ---
 ## 3.2-2
 ### Prove equation (3.16) => a ˆlogcb = c ˆlogab
 -  a ˆlogcb = ( a ˆlogab)ˆlogcb
 - = (a ˆlogcb)ˆlogab
 - =  c ˆlogab
 ---
 ## 3.2-3 Prove equation (3.19). Also prove that n! = ω(2ˆn) and nŠ! = o(nˆn)
 - lg ([lg n]!) = O ([lg n] lg [lg n])
     -  O (lg n lg lg n)
     - O(lg n)

 ---
  ## 3.2-4 ? Is the function [log n]! polynomially bounded? Is the function [loglog n]!polynomi- ally bounded?
  --- 
  ## 3.2-5 ? Which is asymptotically larger: lg(lg * n)or lg * (lg n)/?

 
