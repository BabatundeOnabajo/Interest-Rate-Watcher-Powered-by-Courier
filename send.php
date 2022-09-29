<?php

# This file controls the actual sending of messages to end users about an interest rate change, with the help of Courier.

$emailAddress = "INCLUDE_YOUR_EMAIL_ADDRESS_HERE"; #You should include your email address here. This email address will be used to notify you when the interest rate of the relevant central bank changes.

# $emailAddress = $_POST['INCLUDE_NAME_OF_VARIABLE_FOR_EMAIL_ADDRESS_HERE']; #This line of code has been commented out. This can be uncommented out if you are intending to use this on a website of your own where users can enter their email address. This will likely be of interest to financial institutions, statistical authorities, and so on. 

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
 * 5 - Eurozone area - note that the website does not actually give a specific area called "Eurozone area" but instead lists the constituent countries. For the sake of this script we will use Belgium 
* 23 - Hungary
 * 25 - India 
* 28 - Israel
 * 30 - Japan
 * 39 - Mexico 
* 43 - New Zealand 
* 45 - Norway
 * 47 - Poland
 * 53 - Russian Federation 
*  N/A - Saudi Arabia (Saudi Arabia is missing because http://www.worldgovernmentbonds.com/central-bank-rates/ does not track it)
 * 63 - Switzerland
 * 66 - Turkey 
 *  */



 /*  */

$servername = "localhost"; #We use the details to log on to the local server. This script can also be used in production. You may need to change this if your authentication details differ.

$username = "root"; #This is the default username in most cases. You may need to change it if your authentication details differ.

$password = ""; #This is the default password in most cases (i.e. nothing). You may need to change it if your authentication details differ.

$conn = mysqli_connect($servername, $username, $password); #We use this line of code to connect to the database. Be sure that your login details are accurate otherwise an error could be thrown!


# We use the following section to create the database and table necessary for us to log interest rate changes by a central bank. The name of the database is interest_rate_watcher . It should be noted that if you are using the popular software phpMyAdmin, you can simply use the import function for the file interest_rate_watcher.sql which will import and do other things.

$stmt = $conn->prepare("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'interest_rate_watcher"); #This line checks to see if a database known as interest_rate_watcher exists.

$stmt->execute(); #Unlike with other prepared statements, we don't need to use the bind_param argument

$stmt_result = $stmt->get_result(); #This is the first step in helping us get the number of rows.

if($stmt_result->num_rows <= 0){ #If the number of rows retrieved is less than or equal to 0, we create the database
    
$queryToCreateDatabase = "CREATE DATABASE interest_rate_watcher";    

mysqli_query($conn, $queryToCreateDatabase);

  
}

### This is the part where we begin scraping the website.

$urlToScrape = "http://www.worldgovernmentbonds.com/central-bank-rates/"; #This website lists the various interest rates set by central banks around the world.

$outputOfURLScrape = strip_tags(file_get_contents($urlToScrape, "r"), "<html><script><b>"); #This is the output of the URL that has been scraped.

$arrayOfInterestRates = array(); #We create an array of interest rates. Unlike with other languages, in PHP, we can be assured of their order (unlike, say, the HashMap in Java).

if(preg_match_all('/(\d+|\d+[.,]\d{1,4})(?=\s*%)/', $outputOfURLScrape, $matches)){ #Here we use a regular expression to extract the various percentages of the interest rates set by the central bank. 
  foreach($matches as $match){
      
      $arrayOfInterestRates = array(); #We use a foreach(){} loop to iterate over the range of interest rates extracted from the website. In PHP, we can be reasonably sure that the order will remain the same so we do not need to be worried about the order changing. We will use this array to then send the appropriate email.
  }
    
}
       
#We perform an if(){} statement here just to make sure that the appropriate databases and tables are created.



?>

