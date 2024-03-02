<?php
   /*An array is sorted in non-increasing order if every element 
   (starting from the second one) is less than or equal to the previous one.*/
   function insertion_Sort($my_array)
   {
       for($i=1;$i<count($my_array);$i++){
           $key = $my_array[$i];
           $j = $i-1;
           while($j>=0 && $my_array[$j] < $key){
               $my_array[$j+1] = $my_array[$j];
               $j--;
           }
           $my_array[$j+1] = $key;
       }
       return $my_array;
   }
   $insertion_sort_array = array(5,2,4,6,1,3);
   print_r(insertion_Sort($insertion_sort_array));




   

   

?>