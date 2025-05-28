// Function to switch between forms and clear messages
function showForm(formId) {
    document.querySelectorAll(".form-box").forEach(form => {
        form.classList.remove("active");
        const responseMsg = form.querySelector('.response');
        if (responseMsg) responseMsg.innerHTML = ''; // clear messages when switching
    });
    const targetForm = document.getElementById(formId);
    if (targetForm) {
        targetForm.classList.add("active");
    }
}

// Login Form Handler
const loginInfo = document.querySelector('.frm-login');
if (loginInfo) {
    loginInfo.addEventListener('submit', evt => {
        evt.preventDefault();

        const form = evt.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const formData = new FormData(form);

        const usernameInput = form.querySelector('.username');
        const passwordInput = form.querySelector('.password');
        const responseMsg = form.querySelector('.response');

        const username = usernameInput?.value.trim();
        const password = passwordInput?.value.trim();

        if (!username || !password) {
            responseMsg.innerHTML = "<p class='alert alert-danger'>Username and Password are required.</p>";
            return;
        }

        responseMsg.innerHTML = "<p class='alert alert-info'>Logging in...</p>";
        if (submitBtn) submitBtn.disabled = true;
        setTimeout(()=>{
            
        fetch("./incs/sign.php", {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`Server responded with status: ${response.status}`);
            }else{
                setTimeout(()=>{window.location.href = 'incs/welcome.php';}, 3000);
            }
            return response.text();  // or response.json() if your PHP returns JSON
        })
        .then(data => {
           responseMsg.innerHTML = `${data}`;
            // console.log(data);
        })
        .catch(error => {
            responseMsg.innerHTML = `<p class='alert alert-danger'>Login failed: ${error.message}</p>`;
            // console.error(error);
        })
        .finally(() => {
            if (submitBtn) submitBtn.disabled = false;
        });
        }, 1000);
    });
}

// Register Form Handler
const RegisterInfo = document.querySelector('.frm-register');
if (RegisterInfo) {
    RegisterInfo.addEventListener('submit', e => {
        e.preventDefault();

        const form = e.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const formData = new FormData(form);

        const usernameInput = form.querySelector('.username');
        const passwordInput = form.querySelector('.password');
        const confirmPasswordInput = form.querySelector('.confirm-password');
        const responseMsg = form.querySelector('.response');

        const username = usernameInput?.value.trim();
        const password = passwordInput?.value.trim();
        const confirmPassword = confirmPasswordInput?.value.trim();

        if (!username || !password || !confirmPassword) {
            responseMsg.innerHTML = "<p class='alert alert-danger'>Username, Password and Confirm Password are required.</p>";
            return;
        }

        if (password !== confirmPassword) {
            responseMsg.innerHTML = "<p class='alert alert-danger'>Passwords do not match.</p>";
            return;
        }

        responseMsg.innerHTML = "<p class='alert alert-info'>Registering...</p>";
        if (submitBtn) submitBtn.disabled = true;

        fetch("./incs/register.php", {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`Server responded with status: ${response.status}`);
            }else{
                setTimeout(()=>{
                    window.location.href = 'sign-in.php';
                }, 3000);
            }
            return response.text();  // or response.json() if your PHP returns JSON
        })
        .then(data => {
            responseMsg.innerHTML = `${data}`;
            console.log(data);
        })
        .catch(error => {
            responseMsg.innerHTML = `<p class='alert alert-danger'>Registration failed: ${error.message}</p>`;
            console.error(error);
        })
        .finally(() => {
            if (submitBtn) submitBtn.disabled = false;
        });
    });
}
