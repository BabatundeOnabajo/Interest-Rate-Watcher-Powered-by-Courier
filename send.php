<?php

# This file controls the actual sending of messages to end users about an interest rate change, with the help of Courier.

# Our script considers the countries in the following order (note that the ordering of this list does not in any way imply a political opinion on the part of the author. This will be used later for the array in which information is stored

/* 1 - United States of America 
*  2 - Great Britain
 * 3 - Chile
 * 4 - South Korea
 * 5 - Brazil
 * 6 - Canada
 * 7 - People's Republic of China
 *8 - Czech Republic 
* 9 - Denmark 
* 10 - Eurozone area
 * 11 - Hungary
 * 12 - India
 * 13 - Israel
 * 14 - Japan
 * 15 - Mexico
 * 16 - New Zealand
 * 17 - Norway
 * 18 - Poland
 * 19 - Russian Federation
 * 20 - Saudi Arabia
 * 21 - Switzerland
 * 22 - Turkey */

/* The data relating to interest rates set by the central bank is obtained from http://www.worldgovernmentbonds.com/central-bank-rates/ . It is consistent, regular and well-formed. The only criticism against it is that it lists individual European countries (e.g. France, Germany, Belgium, etc) when it is more accurate to simply use "Eurozone area". This is beneficial to us as programmers as it means we can easily scrape it. To arrange the data to match the ordering of above, we need to consider how the aforementioned website lists the countries. Note that unlike the ordering above, this ordering begins with 0, as this is what we will be using to access our array.
 * 70 - United States of America
 *  */


/* We use the following section to create the database and table necessary for us to 

 *  */

 *  */
?>
