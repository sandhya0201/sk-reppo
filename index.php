<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>update data</title>
  <style>
 

    .form-container {
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .form-container label {
      display: block;
      margin-bottom: 6px;
      color: #555;
      font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    .form-container textarea {
      resize: vertical;
      min-height: 80px;
    }

    .form-container button {
      width: 100%;
      padding: 12px;
      background-color: #8c00e3ff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #470387ff;
    }
   
  </style>
</head>
<body>
  
 <div class="heading">
<a href="show.php" >Show Data</a>
 </div>
 
  <div class="form-container">
    <h2>Student's Information</h2>
    <form action="action.php" method="POST">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="Your name" required />

      <label for="Class">Class</label>
      <input type="text" name="class" placeholder="e.g.IX X" required />

      <label for="Subject">Subject</label>
      <textarea  name="subject" placeholder="Maths Science" required></textarea>

      <label for="Marks">Marks</label>
      <input type="text" name="marks" placeholder="88,40,60" required />

      <button type="submit" name="create">Submit</button>
    </form>
  </div>
  </div>
</body>
</html>
