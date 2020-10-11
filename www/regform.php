<?PHP
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form>\
      <h3> Your Information</h3>
      <label>Username</label>  <input type="text" id="username-name" required>
      <label>Password</label>   <input type="password" id="password" required>
      <label>Email</label> <input type="text" id="email" required>
      <br>

      <label>First Name</label>  <input type="text" id="first-name" required>
      <label>Last Name</label>   <input type="text" id="last-name" required>
      <label>Cell Phone</label> <input type="text" id="cell" required>
      <br>
      <label>Street Address</label>  <input type="text" id="street" required>
      <label>City</label>   <input type="text" id="city" required>
      <label>zip code</label> <input type="text" id="zip" required>
      <br>
      <h3> Parent Information</h3>
      <label> Parent First Name</label>  <input type="text" id="parent-first-name" required>
      <label> Parent Last Name</label>   <input type="text" id="parent-last-name" required>
      <label>Parent Cell Phone</label> <input type="text" id="parent-cell" required>
      <label>Parent Email</label> <input type="text" id="parent-email" required>
      <br>
      <h3> Injury History</h3>
      <label>Past Injuries</label> <input type="text" id="injury" required>
      <label>Current Medication</label> <input type="text" id="med" required>
      <br>
      <h3>Social Media</h3>
      <label>Instagram</label> <input type="text" id="insta" required>
      <label>twitter</label> <input type="text" id="twitter" required>
      <br> 
      <h3> Informed Consent</h3>
      <p> In consideration of being allowed to participate in the activities and programs of NorthEast Sports Training and Rehabilitation, Inc, and to use its facilities, equipment, and machinery in addition to the payment of any fee or charge, I do hereby waive, release, and forever discharge NorthEast Sports Training and Rehabilitation, Inc, and its officers, agents, employees, representatives, executors, and all others from any and all responsibilities or liability for injuries or damages resulting from any participation in any activities or my use of equipment or machinery in the above mentioned facilities or arising out of my participation in any activities at said facility. I do hereby release all of those mentioned and any others acting on their behalf from any responsibility of liability for any injury or damage to myself, out of or connected with my participation in any activities at NorthEast Sports Training and Rehabilitation, Inc, or the use of any equipment at NorthEast Sports Training and Rehabilitation, Inc.
      I understand and am aware that strength, flexibility, and aerobic exercise, including the use of equipment, can be a potentially hazardous activity. I also understand that fitness activities involve a risk of injury and that I am voluntarily participating in these activities and using equipment and machinery with knowledge of the dangers involved. </p>
      <input type="radio" id="informed" value="I Agree" required>
      <label for="I Agree"> I Agree to the following terms and conditions</label><br>
      <input type="submit" value="Submit">
      <label for="Submit">Submit</label
  </body>
</html>
