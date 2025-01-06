// Fungsi untuk memeriksa apakah input telah diisi
function checkInputs() {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const loginBtn = document.getElementById('login-btn');

    // Jika email dan password diisi, tombol login akan diaktifkan
    if (email && password) {
        loginBtn.disabled = false;
    } else {
        loginBtn.disabled = true;
    }
    }
  
  // Menambahkan event listener untuk tombol login
  document.getElementById('login-btn').addEventListener('click', function() {
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
  
    // Lakukan sesuatu setelah tombol login diklik
    alert(`Email: ${email}\nPassword: ${password}`);
  });
  