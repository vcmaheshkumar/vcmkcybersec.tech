<?php
try {
  // Returns a `FacebookFacebookResponse` object
  $response = $fb->post(
    '/',
    array (
      'scrape' => 'true',
      'id' => 'https://vcmkcybersec.tech/'
    ),
    '{EAA1nUecACloBAPrIqZAOHblM4SZAKIBNoOPe8HqfbdPLeDG8Mffz2MV1pizZAOTwQHZCMw2wTtLZA2DqPZBxsnHywWF5esdNpzD5zs8GJQr9FFTbgnWbjLd9mojHES7KZCpZA5wwqKhvtSrQLkRMM6DsB88oevhQysUthHsbMZA0wtij8ZCPNvkuPcKWEjZBcaA02H1o0sg4dRGq8ZAIp7uZByL3TanFIOd9BTZB68jZBcwIRDFPZBjWyNHTHz6QqVzBCekDp3gZD}'
  );
} catch(FacebookExceptionsFacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookExceptionsFacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
?>