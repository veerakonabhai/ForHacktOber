<?php 
// PHP program to find the 
// largest subset which 
// where each pair is 
// divisible. 
  
// function to find the 
// longest Subsequence 
function largestSubset($a, $n) 
{ 
      
    // Sort array in  
    // increasing order 
    sort($a); 
  
    // dp[i] is going to  
    // store size of largest 
    // divisible subset  
    // beginning with a[i]. 
    $dp = array(); 
  
    // Since last element is  
    // largest, d[n-1] is 1 
    $dp[$n - 1] = 1; 
  
    // Fill values for  
    // smaller elements. 
    for ($i = $n - 2; $i >= 0; $i--)  
    { 
  
        // Find all multiples of 
        // a[i] and consider 
        // the multiple that  
        // has largest subset  
        // beginning with it. 
        $mxm = 0; 
        for ($j = $i + 1; $j < $n; $j++) 
            if ($a[$j] % $a[$i] == 0) 
                $mxm = max($mxm, $dp[$j]); 
  
        $dp[$i] = 1 + $mxm; 
    } 
  
    // Return maximum value 
    // from dp[] 
    return max($dp); 
} 
  
    // Driver Code 
    $a = array(1, 3, 6, 13, 17, 18); 
    $n = count($a); 
    echo largestSubset($a, $n); 
      
// This code is contributed by anuj_67. 
?> 
