<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Login Page</title>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <label for="mode">Select mode:</label>
    <select id="mode">
      <option value="user">User</option>
      <option value="admin">Admin</option>
    </select>

    <div id="userFields" class="hidden">
      <input type="text" placeholder="Username" /><br>
      <input type="tel" placeholder="Phone Number" /><br>
      <input type="email" placeholder="Email" /><br>
      <input type="password" placeholder="Create Password" /><br>
      <input type="text" placeholder="Address" /><br>
    </div>

    <div id="adminFields" class="hidden">
      <input type="text" placeholder="Username" /><br>
      <input type="password" placeholder="Password" /><br>
    </div>
  </div>

  <script>
    const modeSelect = document.getElementById('mode');
    const userFields = document.getElementById('userFields');
    const adminFields = document.getElementById('adminFields');

    modeSelect.addEventListener('change', function() {
      if (modeSelect.value === 'user') {
        userFields.classList.remove('hidden');
        adminFields.classList.add('hidden');
      } else if (modeSelect.value === 'admin') {
        adminFields.classList.remove('hidden');
        userFields.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
