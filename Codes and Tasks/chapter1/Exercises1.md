## 1.1-1 Give a real-world example that requires sorting or a real-world example that re- quires computing a convex hull.
- Sorting : Sorting listed products in an online marketplace by price or listing blog posts alphabetically or by date
- Finding Convex Hull : Finding shortest path between two points with some solid obstacles between them like solving a game maze or self-driving cars
## 1.1-2 Other than speed, what other measures of efficiency might one use in a real-world setting?
- memory ,power consumption
## 1.1-3 Select a data structure that you have seen previously, and discuss its strengths and limitations.
- STRENGTHS OF LINKED LIST
     - Simpler addition and removal of elements O(1) time complexity
     - Does not need contiguous memory space
     - New element can be easily inserted in any location
- LIMITATIONS OF LINKED LIST
     - Accessing an element by index or by value means traversing the list  O(n) time complexity
     - Additional memory is required for storing the address (pointer) of the next/previous element.
- STRENGTHS OF ARRAY
     - Accessing any element by index is simple O(1) time complexity
     - No additional memory required to store address
- LIMITATIONS OF ARRAY
     - Addition or removal of elements from any index but the last means re-arranging the whole list, O(n) time complexity
     - Accessing an element by value means traversing the list O(n) time complexity
     - Needs contiguous memory
 ## 1.1-4 How are the shortest-path and traveling-salesman problems given above similar? How are they different?
 -  shortest-path problem finds a path between two points such that sum of the weights is minimized.
 -  travelling-salesman problem finds the path covering all the points such that sum of the weights is minimized
 ## 1.1-5 Come up with a real-world problem in which only the best solution will do. Then come up with one in which a solution that is “approximately” the best is good enough.

