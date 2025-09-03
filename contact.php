<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 40px;
    }

    .contact-form {
      background-color: #fff;
      padding: 30px;
      max-width: 500px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 8px;
    }

    .contact-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .contact-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .contact-form input[type="text"],
    .contact-form input[type="email"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .contact-form textarea {
      resize: vertical;
      height: 120px;
    }

    .contact-form button {
      background-color: #007BFF;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .contact-form button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="contact-form">
    <h2>Contact Us</h2>
    <form action="mail.php" method="POST">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="your name">

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="123@gmail.com">

      <label for="p_number">phone number</label>
      <input type="text" id="number" name="number" placeholder="89xxxxxxxx">

       <label for="adress">adress</label>
      <input type="text" id="add" name="adress" placeholder="s-hmzz">

      <label for="note">Note</label>
      <textarea id="message" name="note" ></textarea>

      <button type="submit" name="email">Send email</button>
    </form>
  </div>

</body>
</html>

</body>
</html>