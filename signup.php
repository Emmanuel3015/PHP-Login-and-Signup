<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <title>Signup Split Card</title>
  </head>
  <body>

  <!-- Signup Form -->
    <div class="wrap">
      <div class="card">
        <!-- LEFT SIDE: Form -->
        <div class="left">
          <div>
            <h1 class="title">Signup</h1>

            <!-- User form input -->
            <form action="register.php" method="post">
              <label class="field" id="fullnames">
                <span class="icon"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-user-icon lucide-user"
                  >
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                  </svg>
                </span>
                <input 
                type="text" 
                placeholder="Enter full names" 
                name="fullnames"
                id="fullnames"
                />
                
              </label>

              <label class="field" for="email">
                <span class="icon"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-mail-icon lucide-mail"
                  >
                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                    <rect x="2" y="4" width="20" height="16" rx="2" />
                  </svg>
                </span>
                <input 
                type="email" 
                placeholder="Enter your email"
                name="email"
                id="email"  />
              </label>

              <label class="field" for="password">
                <span class="icon"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-lock-keyhole-icon lucide-lock-keyhole"
                  >
                    <circle cx="12" cy="16" r="1" />
                    <rect x="3" y="10" width="18" height="12" rx="2" />
                    <path d="M7 10V7a5 5 0 0 1 10 0v3" />
                  </svg>
                </span>
                <input
                  type="password"
                  placeholder="Enter your password"
                  name="password"
                  id="password"
                />
              </label>
              <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
          </div>

          <!-- Option for registered users -->
          <div class="bottom-text">
            Already have an account?
            <a href="#">Login now</a>
          </div>
        </div>

        <!-- RIGHT SIDE-->
        <div class="right">
          <!-- Replace "side.jpg" with your image file name -->
          <img src="office.jpg" alt="side image" />
          <div class="overlay">
            <div>
              <h2>Every new friend is a<br />new adventure.</h2>
              <p>let's get connected</p>
            </div>
          </div>
        </div>
      </div>
    </div>

 
  </body>
</html>
