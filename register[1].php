<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Registration &middot; EddyCare</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link id="theme-font" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"><style id="theme-vars">:root{--primary:#2563eb;--primary-dark:#1f54c8;--primary-soft:rgba(37,99,235,.10);--accent:#10b981;--bg:#f4f6fb;--sidebar-bg:#0f172a;--sidebar-text:#cbd5e1;--font:'Plus Jakarta Sans',system-ui,-apple-system,'Segoe UI',sans-serif}</style><link rel="stylesheet" href="../style.css?v=3">
</head>
<body class="auth-body">
<div class="auth">
  <aside class="auth-side">
    <a class="auth-brand" href="../index.php"><span class="brand-icon"><i class="fa-solid fa-heart-pulse"></i></span>EddyCare</a>
    <div class="auth-hero">
      <h2>Join the <span>admin team.</span></h2>
      <p>Create an administrator account. We will email you a code to confirm your address before you can sign in.</p>
      <ul class="auth-features">
        <li><i class="fa-solid fa-calendar-check"></i> Real-time slot availability</li>
        <li><i class="fa-solid fa-envelope-circle-check"></i> Email notifications for patients &amp; doctors</li>
        <li><i class="fa-solid fa-user-doctor"></i> Verified specialist doctors</li>
      </ul>
    </div>
    <small>&copy; 2026 EddyCare</small>
  </aside>
  <main class="auth-main"><div class="auth-card">
    <div class="auth-icon"><i class="fa-solid fa-user-shield"></i></div>
  <h2>Create Admin Account</h2>
  <p class="auth-sub">Full system access &middot; email verification required</p>
    <form method="post">
    <div class="form-group"><label>Full Name</label><input class="form-control" name="full_name" autocomplete="name" value="" required></div>
    <div class="form-row">
      <div class="form-group"><label>Email Address</label><input type="email" class="form-control" name="email" autocomplete="email" value="" required></div>
      <div class="form-group"><label>Phone (optional)</label><input type="tel" class="form-control" name="phone" autocomplete="tel" value=""></div>
    </div>
    <div class="form-group"><label>Password</label>
      <div class="pw"><input type="password" class="form-control" name="password" autocomplete="new-password" id="pw" oninput="chk()" minlength="8" required>
      <button type="button" onclick="var f=document.getElementById('pw');f.type=f.type==='password'?'text':'password'" tabindex="-1"><i class="fa-solid fa-eye"></i></button></div>
      <div class="strength"><i id="bar"></i></div><span class="hint">At least 8 characters</span></div>
    <div class="form-group"><label>Confirm Password</label><input type="password" class="form-control" name="confirm" autocomplete="new-password" required></div>
    <button class="btn btn-block" type="submit"><i class="fa-solid fa-paper-plane"></i> Create Account &amp; Send Code</button>
  </form>
  <p class="auth-links">Already registered? <a href="login.php">Sign in</a></p>
  </div></main>
</div>
<script>
function chk(){var v=document.getElementById("pw").value,s=0;if(v.length>=8)s+=25;if(v.length>=12)s+=25;if(/[A-Z]/.test(v)&&/[a-z]/.test(v))s+=25;if(/[0-9\W]/.test(v))s+=25;
var b=document.getElementById("bar");b.style.width=s+"%";b.style.background=s>=75?"#10b981":s>=50?"#f59e0b":"#ef4444";}
</script></body>
</html>
