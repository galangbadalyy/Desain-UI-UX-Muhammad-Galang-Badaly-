const submitButton = document.getElementById('submit');
const togglePasswordButton = document.getElementById('toggle');

togglePasswordButton.addEventListener('click', () => {
    const passwordInput = document.getElementById('password');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
})

submitButton.addEventListener('click', () => {
    
    console.log('Tombol submit diklik');

    const username = document.getElementById('username').value;
    console.log('Username:', username);

    const password = document.getElementById('password').value;
    console.log('Password:', password);
    // username = ahmad2017 , password = integrity

    if (username === 'ahmad2017' && password === 'integrity') {
        window.location.href = 'home.html'
    } else {
        alert('Username atau Password salah!')
        window.location.href = 'index.html'
    }

})