<?php
//echo htmlentities(file_get_contents("http://google.com/"));

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}


if (isset($_POST['url'])) {

  $myurl=test_input($_POST['url']);

  if (empty($myurl)) {echo 'Enter a valid URL.';return;}

  $myurl = addhttp($myurl);

  if (!$data = @file_get_contents($myurl)) {
        $error = error_get_last();
        echo "HTTP request failed. Unable to connect.";
        //echo "HTTP request failed. Error was: " . $error['message'];
  }
  else
  {
    echo htmlentities($data);
  }

}
else {
	print("View Source Code Of Any URL Address");
}

?>