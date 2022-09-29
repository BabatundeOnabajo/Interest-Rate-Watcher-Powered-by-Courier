# Interest Rate Watcher powered by Courier
The interest rate set by a country's central bank is perhaps one of the most important economic policies in a country. It influences the interest rates charged on credit cards, mortgages, car loans, overdraft charges and much more. The interest rate forms one part of what is known as "monetary policy", which refers to the set of policies that a central bank uses to influence an economy. Despite the importance of the interest rate set by a central bank, only a minority of people would be able to state what the current interest rate set by their country's central bank is. 

# Countries covered and details in the format of web domain | international dialling code | central bank of country
* United States of America (.com | +1 | Federal Reserve)
* Great Britain (.co.uk | +44 | Bank of England)
* Chile (.cl | +56 | Central Bank of Chile)
* South Korea (.kr | + 82 | Bank of Korea)
* Brazil (.br | +55 | Central Bank of Brazil)
* Canada (.ca | +1 | Bank of Canada)
* People's Republic of China (.cn | +86 | People's Bank of China)
* Czech Republic (.cz | +420 | Czech National Bank)
* Denmark (.dk | +45 | Danmarks Nationalbank)
* Eurozone area (all countries in the economic region, e.g. France, Germany, Italy, and so on) (various web extensions | various phone numbers | European Central Bank)
* Hungary (.hu | +36 | Hungarian National Bank)
* India (.in | +91 | Central Bank of India)
* Israel (.il | +972 | Bank of Israel)
* Japan (.jp | +81 | Bank of Japan)
* Mexico (.mx | +52 | Bank of Mexico)
* New Zealand (.nz | +64 | Reserve Bank)
* Norway (.no | +47 | Norges Bank)
* Poland (.pl | +48 | National Bank of Poland)
* Russian Federation (.ru | +7 | Central Bank of the Russian Federation)
* Saudi Arabia (.sa | +966 | Saudi Central Bank)
* South Africa (.za | +27 | South African Reserve Bank)
* Switzerland (.ch | +41 | Swiss National Bank)
* Turkey (.tr | +90 | Central Bank of Turkey)
(where a country is not covered, the default is the Federal Reserve on the basis of the US Dollar being the world's reserve currency)

# Recommend platforms and requisite tools to run
* Windows, Mac or Linux
* xampp - This will be needed to run the script
* 

# Description of included files
* interest_rate_watcher.sql - This is the SQL database that contains both a list of the central banks covered by this code as well as a log of the interest rate set by the given central bank in question. 
* send.php - This is the file that actually sends the messages, through Courier's API. Please note, you must have already incorporated the files from Courier to correctly use send.php . 

# Instructions
You can use Composer to get the prerequisite tools needed to run the Courier API. This can be done as follows with:

`composer require trycourier/courier guzzlehttp/guzzle `


# Further Information
Further information on how to use this script can be found from the YouTube playlist here: https://youtube.com/playlist?list=PLlWpwpaAZuRCR1I27-3Dzddpml0t3AzpO

# Legal


# Credits
