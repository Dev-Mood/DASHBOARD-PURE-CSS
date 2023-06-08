<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .navbar {
      background-color: #333;
      color: #fff;
      width: 200px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      overflow-y: auto;
    }
    
    .navbar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    
    .navbar li {
      padding: 10px 20px;
      cursor: pointer;
    }
    
    .navbar li:hover {
      background-color: #555;
    }
    
    .content {
      margin-left: 200px;
      padding: 20px;
    }
    
    h1 {
      margin-top: 0;
    }
    #logout {
        margin-top: 500px;
        color: #fff;
        text-decoration: none;
    }
    table {
            border-collapse: collapse;
            width: 80%;
            margin-left: 230px;
            position: relative;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #000;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            float: right;
            margin-right: 80px;
            position: relative;
            margin: 8px;
        }
        .button:hover {
            background-color: dodgerblue;
        }
  </style>
</head>
<body>
  <div class="navbar">
    <ul>
      <li>Dashboard</li>
      <li>Profile</li>
      <li>Settings</li>
      <li id="logout"><a href="logout.php" id="logout">Logout</a></li>
    </ul>
  </div>
  
  <div class="content">
    <h1>Welcome to the Dashboard!</h1>
    <p>This is the main content area of the dashboard.</p>
  </div>
  <a href="#" class="button">ADD DEVICE</a>
  <table>
        <tr>
            <th>ID</th>
            <th>Device Name</th>
            <th>Description</th>
            <th>Picture</th>
            <th>Specs</th>
            <th>Quantity</th>
            <th>Serial Number</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <!-- Add more rows as needed -->
    </table>

</body>
</html>
