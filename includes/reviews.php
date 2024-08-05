<?php

// Replace with your API key
$apiKey = 'AIzaSyAaPWhs3UVDkpQC6sb118KcDUMgxwJ0OWQ';

// Replace with your search query (specific business name and location)
$query = urlencode('Al Shamil Zone Business Men Services, Dubai, UAE');

// Google Places API endpoint for Find Place from Text
$apiUrl = "https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=$query&inputtype=textquery&fields=place_id&key=$apiKey";

// Initialize cURL session
$ch = curl_init();

// Set the URL and other options for the cURL session
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Decode the JSON response
$responseData = json_decode($response, true);

if ($responseData['status'] == 'OK' && isset($responseData['candidates'][0]['place_id'])) {
   // Extract Place ID
   $placeId = $responseData['candidates'][0]['place_id'];
   echo "Place ID: " . $placeId;
} else {
   echo "Failed to retrieve Place ID. Error: " . $responseData['status'];
}

?>


<?php

// Replace with your API key
$apiKey = 'AIzaSyAaPWhs3UVDkpQC6sb118KcDUMgxwJ0OWQ';

// Replace with your Place ID
$placeId = 'ChIJTem8nThDXz4RmhZOL0UkLBM';

// Google Places API endpoint for Place Details
$apiUrl = "https://maps.googleapis.com/maps/api/place/details/json?placeid=$placeId&fields=name,rating,review&key=$apiKey";

// Initialize cURL session
$ch = curl_init();

// Set the URL and other options for the cURL session
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Decode the JSON response
$responseData = json_decode($response, true);

$reviews = [];

if ($responseData['status'] == 'OK') {
   // Extract reviews
   $reviews = $responseData['result']['reviews'];

   
} else {
}

?>