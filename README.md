Age Counting Challenge
This PHP script solves the Age Counting Challenge from Coderbyte. The challenge involves counting the number of items with an age of 50 or greater in a JSON response from a given API endpoint.

Usage
Save this script as a PHP 
Run the script using a PHP interpreter
The script will output the filtered count of items with an age of 50 or greater.
Script Explanation
The script performs the following steps:

Sends a GET request to the API endpoint with the provided challenge token.
Parses the JSON response and extracts the data.
Splits the data into individual items.
Counts the number of items with an age of 50 or greater.
Filters the count string by removing any characters that appear in the challenge token.
Outputs the filtered count string.
Note
Make sure to replace the $challengeToken variable with your own challenge token from Coderbyte.
