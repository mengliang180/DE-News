<main>
        <div class="row">
            <div class="colm-form">
                <div class="form-container">
                    <h1>Create Account</h1>
                   
                    
                    <input type="text" placeholder="Enter Username">
                  
                    <input type="text" placeholder="Enter phone number">
                    
                    <input type="text" placeholder="Enter Email">
                   
                    <input type="password" placeholder="Enter Password">
                    
                    <button class="btn-login" href="index.php">Create Account</button>
                    <a href="index.php">Back to home page</a>
                </div>
            </div>
        </div>
    </main>
    
    
    <style>
    
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
           
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f0f2f5;
    color: #1c1e21;
}

main {
    height: 90vh;
    width: 100vw;
    position: relative;
    margin: 0 auto;
}



.row {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    max-width: 1000px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.colm-logo {
    flex: 0 0 50%;
    text-align: left;
}

.colm-form {
    flex: 0 0 40%;
    text-align: center;
}

.colm-logo img {
    max-width: 400px;
}

.colm-logo h2 {
    font: 26px;
    font-weight: 400;
    padding: 0 30px;
    line-height: 32px;
}

.colm-form .form-container {
    background-color: #ffffff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    padding: 20px;
    max-width: 400px;
}

.colm-form .form-container input, .colm-form .form-container .btn-login {
    width: 100%;
    margin: 5px 0;
    height: 45px;
    vertical-align: middle;
    font-size: 16px;
}

.colm-form .form-container input {
    border: 1px solid #dddfe2;
    color: #1d2129;
    padding: 0 8px;
    outline: none;
}

.colm-form .form-container input:focus {
    border-color: #1877f2;
    box-shadow: 0 0 0 2px #e7f3ff;
}

.colm-form .form-container .btn-login {
    background-color: blue;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
}

.colm-form .form-container a {
    display: block;
    color: #1877f2;
    font-size: 14px;
    text-decoration: none;
    padding: 10px 0 20px;
    border-bottom: 1px solid #dadde1;
}

.colm-form .form-container a:hover {
    text-decoration: underline;
}

.colm-form .form-container .btn-new {
    background-color: #42b72a;
    border: none;
    border-radius: 6px;
    font-size: 17px;
    line-height: 48px;
    padding: 0 16px;
    color: #ffffff;
    font-weight: 700;
    margin-top: 20px; 
}

.colm-form p {
    font-size: 14px;
}

.colm-form p a {
    text-decoration: none;
    color: #1c1e21;
    font-weight: 600;
}

.colm-form p a:hover {
    text-decoration: underline;
}
