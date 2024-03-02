## 2-1
- the sum
     - S1 = B12 - B22 = 8-2 =6
     - S2 = A11 + A12 = 1+3 =4
     - S3 = A12 + A22 = 7+5 =12
     - S4 = B21 - B11 = 4-6 =-2
     - S5 = A11 + A22 = 1+5 =6
     - S6 = B11 + B22 = 6+2 =8
     - S7 = A12 - A22 = 3+5 =-2
     - S8 = B21 + B22 = 4+2 =6
     - S9 = A11 - A21 = 1-7 =-6
     - S10 = B11 + B12 = 6+8 14
- tne products
     - P1 = A11 . S1 = 6
     - P2 = S2 . B22 = 8
     - P3 = S3 . B11 = 72
     - P4 = S4 . A22 = 10
     - P5 = S5 .S6 = 48
     - P6 = S7 . S8 = -12
     - P7 = S9 . S10 = -84
    
- the result
     - C11 = P5 + P4 - P2 +P6 = 18
     - C12 = P1 + P2 = 14
     - C21 = P3 + P4 = 62
     - C22 = P5 + P1 -P3 - P7 = 66

## 2.2
### Write pseudocode for Strassen’s algorithm.
 ```
 Square-Matrix-Multiply-Strassen (A,B)

 n = A.rows

 let C be a new n*n matrix

 if n == 1

   c11 = a11 . b11

 else partition A,B,C
    
    let S1,S2 ...,S10 be 10 new n/2 * n/2 matrixces

    let P1,P2 ...,P7 be 7 new n/2 * n/2 matrixces
     
     S1 = B12 - B22

     S2 = A11 + A12

     S3 = A21 + A22

     S4 = B21 - B11
    
     S5 = A11 + A22

     S6 = B11 + B22 

     S7 = A12 - A22

     S8 = B21 + B22

     S9 = A11 - A21

     S10 = B11 + B12


     P1 = SQUARE-MATRIX-MULTIPLY-STRASSEN(A11,S1)

     P2 = SQUARE-MATRIX-MULTIPLY-STRASSEN(B22,S2)

     P3 = SQUARE-MATRIX-MULTIPLY-STRASSEN(B11,S3)

     P4 = SQUARE-MATRIX-MULTIPLY-STRASSEN(A22,S4)

     P5 = SQUARE-MATRIX-MULTIPLY-STRASSEN(S5,S6)

     P6 = SQUARE-MATRIX-MULTIPLY-STRASSEN(S7,S8)

     P7 = SQUARE-MATRIX-MULTIPLY-STRASSEN(S9,S10)



     C11 = P5 + P4 - P2 +P6 

     C12 = P1 + P2 

     C21 = P3 + P4 

     C22 = P5 + P1 -P3 - P7 


     return C
     
     ```






