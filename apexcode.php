<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApexCode.pl | Prezentacja Projektu</title>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #FAFAFB;
            --card-bg: #FFFFFF;
            --green: #22c55e;
            --green-hover: #16a34a;
            --green-light: rgba(34, 197, 94, 0.12);
            --text-main: #111111;
            --text-muted: #555555;
            --border: #E5E5E5;
            --shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
            --theme-glow-1: rgba(34, 197, 94, 0.45);
            --theme-glow-2: rgba(16, 185, 129, 0.35);
            --theme-particle: rgba(34, 197, 94, 0.65);
            --theme-particle-shadow: rgba(34, 197, 94, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            overflow-x: hidden;
            position: relative;
            min-height: 100vh;
        }

        .bg-animation {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: -1;
            pointer-events: none;
            background-color: #FAFAFB;
            overflow: hidden;
        }

        .bg-animation::before,
        .bg-animation::after {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.4;
            animation: glowMove 12s ease-in-out infinite alternate;
        }

        .bg-animation::before {
            background: var(--theme-glow-1);
            top: -100px;
            left: -100px;
        }

        .bg-animation::after {
            background: var(--theme-glow-2);
            bottom: -100px;
            right: -100px;
            animation-delay: -6s;
            animation-duration: 15s;
        }

        @keyframes glowMove {
            0% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(200px, 150px) scale(1.2); }
            100% { transform: translate(100px, 250px) scale(0.9); }
        }

        .particle {
            position: absolute;
            background: var(--theme-particle);
            border-radius: 50%;
            box-shadow: 0 0 8px var(--theme-particle-shadow);
            animation: rain linear infinite;
        }

        @keyframes rain {
            0% { transform: translateY(-50px); opacity: 0; }
            20% { opacity: 0.9; }
            80% { opacity: 0.9; }
            100% { transform: translateY(105vh); opacity: 0; }
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 50px 20px 80px 20px;
        }

        .nav-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text-main);
            font-weight: 700;
            font-size: 0.95rem;
            background: var(--card-bg);
            border: 1px solid var(--border);
            padding: 12px 24px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: all 0.2s ease;
        }

        .back-btn:hover {
            transform: translateX(-4px);
            border-color: var(--green);
            color: var(--green-hover);
        }

        .main-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 50px;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .main-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 6px;
            background: linear-gradient(90deg, var(--green), #4ade80);
        }

        .badge {
            display: inline-block;
            font-family: 'JetBrains Mono', monospace;
            background: var(--green-light);
            color: #15803d;
            border: 1px solid rgba(34, 197, 94, 0.3);
            font-weight: 700;
            font-size: 0.8rem;
            padding: 6px 14px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        h1 {
            font-size: 3.2rem;
            font-weight: 800;
            letter-spacing: -1.5px;
            line-height: 1.1;
            margin-bottom: 15px;
        }

        h1 span {
            color: #16a34a;
        }

        .subtitle {
            font-size: 1.15rem;
            color: var(--text-muted);
            max-width: 750px;
            line-height: 1.7;
            margin-bottom: 40px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .feature-card {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 24px;
            transition: all 0.25s ease;
        }

        .feature-card:hover {
            border-color: var(--green);
            transform: translateY(-3px);
        }

        .feature-icon {
            width: 42px;
            height: 42px;
            background: var(--green-light);
            color: #16a34a;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            font-size: 1.15rem;
            font-weight: 750;
            margin-bottom: 8px;
        }

        .feature-card p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        .preview-section {
            margin-top: 40px;
        }

        .preview-header h2 {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            margin-bottom: 20px;
        }

        .preview-frame {
            border-radius: 18px;
            overflow: hidden;
            border: 2px solid var(--border);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            background: #0d1117;
            position: relative;
            transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
        }

        .preview-frame:hover {
            border-color: var(--green);
            transform: scale(1.015);
            box-shadow: 0 25px 50px rgba(34, 197, 94, 0.15);
        }

        .preview-img {
            width: 100%;
            height: auto;
            display: block;
        }

        .tech-stack {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid var(--border);
        }

        .tech-badge {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.8rem;
            background: var(--bg);
            border: 1px solid var(--border);
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 700;
        }

        @media(max-width: 768px) {
            .main-card { padding: 30px 20px; }
            h1 { font-size: 2.2rem; }
            .features-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div class="bg-animation" id="bg-animation"></div>

    <div class="container">
        <div class="nav-bar">
            <a href="index.php" class="back-btn">&larr; Wróć do portfolio</a>
        </div>

        <div class="main-card">
            <span class="badge">PLATFORMA WEBOWA</span>
            <h1>Projekt <span>ApexCode.pl</span></h1>
            <p class="subtitle">
                Autorska platforma stworzona z naciskiem na maksymalną wydajność, wysoki poziom optymalizacji oraz nowoczesny, unikalny design UI/UX.
            </p>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚙️</div>
                    <h3>Panel Administratora</h3>
                    <p>Wygodne zarządzenie stroną oraz opcja dynamicznego dodawania nowych pluginów bezpośrednio przez panel.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📥</div>
                    <h3>Pobieranie Pluginów</h3>
                    <p>Użytkownicy mają możliwość szybkiego i bezpośredniego pobierania dostępnych dodatków ze strony.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">✨</div>
                    <h3>Nowoczesny Design</h3>
                    <p>Dopracowany, czysty styl dostosowany idealnie pod komputery oraz urządzenia mobilne.</p>
                </div>
            </div>

            <div class="preview-section">
                <div class="preview-header">
                    <h2>Podgląd witryny</h2>
                </div>
                <div class="preview-frame">
                    <img src="apexcode.png" alt="Podgląd strony ApexCode" class="preview-img">
                </div>
            </div>

            <div class="tech-stack">
                <span class="tech-badge">PHP</span>
                <span class="tech-badge">CSS3</span>
                <span class="tech-badge">JavaScript</span>
                <span class="tech-badge">Admin Panel</span>
                <span class="tech-badge">UI/UX</span>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('bg-animation');
        for (let i = 0; i < 65; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            const size = Math.random() * 5 + 3;
            particle.style.width = size + 'px';
            particle.style.height = (size * 1.5) + 'px';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDuration = (Math.random() * 4 + 3) + 's';
            particle.style.animationDelay = Math.random() * 5 + 's';
            container.appendChild(particle);
        }
    </script>
</body>
</html>