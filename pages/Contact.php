<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div style="text-align:center">
        <button><a href="../index.php">Home</a></button>
          <h2>Contact Us</h2>
          <p>If something goes wrong or needs help, leave us a message!</p>
        </div>
        <div class="row">
          <div class="column">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.834036683918!2d108.22842141480781!3d16.074099788877945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421825f1045e4f%3A0xcc796e42a4979a!2zNjU4IE5nw7QgUXV54buBbiwgQW4gSOG6o2kgQuG6r2MsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1617351953526!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="column">
            <form action="/action_page.php">
              <label for="fname">Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
              <label for="lname">PhoneNumber</label>
              <input type="text" id="lname" name="lastname" placeholder="Your Phone Number..">
              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="usa">VietNam</option>
                <option value="usa">ThaiLand</option>
                <option value="usa">Japan</option>
              </select>
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
</body>
<style>
* {
    box-sizing: border-box;
  }
  
  /* Style inputs */
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid rgb(110, 103, 103);
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    background-color:   rgb(245, 243, 235);
  }
  
  input[type=submit] {
    background-color: #5ccac5;
    color: rgb(23, 26, 27);
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #2989a7;
  }
  
  /* Style the container/contact section */
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    background: url(background-3d-dong_032845717.gif);
    background-size: cover;
    font-size: 16px;
    font-family: Lato, sans-serif;
    color: bisque;
  }
  
  /* Create two columns that float next to eachother */
  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
</html>