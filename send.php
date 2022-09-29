<?php

# This file controls the actual sending of messages to end users about an interest rate change, with the help of Courier.

$emailAddress = "INCLUDE_YOUR_EMAIL_ADDRESS_HERE"; #You should include your email address here. This email address will be used to notify you when the interest rate of the relevant central bank changes.

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
 * 69 - United Kingdom
 * 10 - Chile 
* 59 - South Korea
 * 7 - Brazil 
* 9 - Canada
 * 11 - People's Republic of China
 * 15 - Czech Republic
 * 16 - Denmark
 * Eurozone area - note that the website does not actually give a specific area called "Eurozone area" but instead lists the constituent countries. For the sake of this script we will use Belgium */


/* We use the following section to create the database and table necessary for us to log interest rate changes by a central bank * /

 /*  */

$servername = "localhost"; #We use the details to log on to the local server. This script can also be used in production. You may need to change this if your authentication details differ.

$username = "root"; #This is the default username in most cases. You may need to change it if your authentication details differ.

$password = ""; #This is the default password in most cases (i.e. nothing). You may need to change it if your authentication details differ.

$conn = mysqli_connect($servername, $username, $password); #We use this line of code to connect to the database. Be sure that your login details are accurate otherwise an error could be thrown!

#We perform an if(){} statement here just to make sure that the appropriate databases and tables are created.


?>
