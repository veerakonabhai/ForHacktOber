<?php 
// A recursive solution for subset sum problem 
  
// Returns true if there is a subset of set 
// with sun equal to given sum 
function isSubsetSum($set, $n, $sum) 
{ 
    // Base Cases 
    if ($sum == 0) 
        return true; 
    if ($n == 0 && $sum != 0) 
        return false; 
      
    // If last element is greater 
    // than sum, then ignore it 
    if ($set[$n - 1] > $sum) 
        return isSubsetSum($set, $n - 1, $sum); 
      
    /* else, check if sum can be  
       obtained by any of the following 
        (a) including the last element 
        (b) excluding the last element */
    return isSubsetSum($set, $n - 1, $sum) ||  
        isSubsetSum($set, $n - 1,  
                    $sum - $set[$n - 1]); 
} 
  
// Driver Code 
$set = array(3, 34, 4, 12, 5, 2); 
$sum = 9; 
$n = 6; 
  
if (isSubsetSum($set, $n, $sum) == true) 
    echo"Found a subset with given sum"; 
else
    echo "No subset with given sum"; 
      
?> 
