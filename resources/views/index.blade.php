<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerja Setara Web Programming</title>
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">Logo</div>
        <nav>
            <a href="#" class="nav-link">Find Jobs</a>
            <a href="#" class="nav-link">Profile</a>
            <a href="#" class="nav-link">Find Company</a>
        </nav>
        <div class="auth-buttons">
            <button class="login-btn">Login</button>
            <button class="signup-btn">Sign Up</button>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Empowering Abilities, Unlocking Opportunities.</h1>
            <p>Connecting talented individuals with inclusive employers, creating a world where abilities shine and opportunities thrive.</p>
        </section>

        <section class="search-form">
            <div class="form-group">
                <label for="jobs">Jobs</label>
                <input type="text" id="jobs" placeholder="ex : caretaker, etc.">
            </div>
            <div class="form-group">
                <label for="place">Place</label>
                <input type="text" id="place" placeholder="ex : Jakarta, Tangerang, etc.">
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" placeholder="ex : Sinarmas, Mandiri, etc.">
            </div>
            <button class="find-btn">Find !</button>
        </section>

        <section class="top-companies">
            <h2>Top Companies</h2>
            <div class="company-cards">
                <div class="company-card">
                    <img src="/Image/Sinarmas.png" alt="">
                    <h3>PT.Sinarmas Tbk</h3>
                    <div class="job-info">
                        <span class="job-count">20 Jobs</span>
                        <span class="filled-count">7/20 filled</span>
                    </div>
                </div>
                <div class="company-card">
                    <img src="/Image/MNC.jpg" alt="MNC Group">
                    <h3>PT.MNC Asia Holding Tbk</h3>
                    <div class="job-info">
                        <span class="job-count">20 Jobs</span>
                        <span class="filled-count">7/20 filled</span>
                    </div>
                </div>
                <div class="company-card">
                    <img src="/Image/AeonMall.png" alt="Aeon Mall">
                    <h3>AEON Co., Ltd</h3>
                    <div class="job-info">
                        <span class="job-count">20 Jobs</span>
                        <span class="filled-count">7/20 filled</span>
                    </div>
                </div>
                <div class="company-card">
                    <img src="/Image/ICE.jpg" alt="Ice Hall">
                    <h3>Indonesia International Expo</h3>
                    <div class="job-info">
                        <span class="job-count">20 Jobs</span>
                        <span class="filled-count">7/20 filled</span>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

    <script src="/javascript/index.js"></script>
</body>
</html>