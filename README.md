Math_Fibonacci
==============

Package to calculate and manipulate Fibonacci numbers

The Fibonacci series is constructed using the formula:
 F(n) = F(n - 1) + F (n - 2),
By convention F(0) = 0, and F(1) = 1.

An alternative formula that uses the Golden Ratio can also be used:
 F(n) = (PHI^n - phi^n)/sqrt(5) [Lucas' formula],
where PHI = (1 + sqrt(5))/2 is the Golden Ratio, and
 phi = (1 - sqrt(5))/2 is its reciprocal

Requires Math_Integer, and can be used with big integers if the GMP or
the BCMATH libraries are present.
 
This is old code I wrote for [PEAR](http://pear.php.net). 
Originally it was tracked in CVS, then it was moved to SVN, 
and now I am importing it to git :-)

-- Jesus M. Castagnetto
