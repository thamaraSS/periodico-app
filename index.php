<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFRAMEN - Muro Informativo & Periódico Digital</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="img/logo_3.8.png">
    <style>
        :root {
            --fuchsia: #FF1493;
            --fuchsia-bright: #FF007F;
            --fuchsia-glow: rgba(255, 20, 147, 0.5);
            --gold: #FFD700;
            --gold-glow: rgba(255, 215, 0, 0.4);
            --black-bg: #0B0A12;
            --card-bg: rgba(20, 18, 30, 0.85);
            --text-light: #F8F8FF;
            --whatsapp-green: #25D366;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background-color: var(--black-bg);
            color: var(--text-light);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(255, 20, 147, 0.18) 0%, transparent 40%),
                radial-gradient(circle at 80% 80%, rgba(255, 215, 0, 0.12) 0%, transparent 40%),
                radial-gradient(rgba(255, 255, 255, 0.12) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 24px 24px;
        }

        header {
            background: rgba(11, 10, 18, 0.95);
            border-bottom: 1px solid rgba(255, 215, 0, 0.3);
            padding: 15px 30px;
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-section { display: flex; align-items: center; gap: 20px; }

        .logo-shield {
            width: 110px; 
            height: 110px;
            object-fit: contain;
            border-radius: 50%;
            border: 3px solid var(--gold);
            box-shadow: 0 0 22px var(--gold-glow), 0 0 12px var(--fuchsia-glow);
            background: #000;
            transition: transform 0.3s ease;
        }

        .logo-shield:hover { transform: scale(1.08); }

        .brand-title-wrap { display: flex; flex-direction: column; }

        .brand-header-line { display: flex; align-items: center; gap: 10px; }

        .brand-title {
            color: var(--gold);
            font-size: 2.2rem;
            font-weight: 900;
            letter-spacing: 2px;
        }

        .kuromi-badge {
            background: linear-gradient(135deg, #FF1493, #660033);
            color: white;
            font-size: 0.75rem;
            font-weight: 800;
            padding: 3px 10px;
            border-radius: 12px;
            border: 1px solid var(--fuchsia);
            letter-spacing: 1px;
            text-shadow: 0 0 5px rgba(0,0,0,0.5);
        }

        .brand-subtitle {
            color: #A0A0B0;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            margin-top: 2px;
        }

        .header-actions { display: flex; align-items: center; gap: 12px; }

        .btn-kuromi {
            background: linear-gradient(135deg, var(--fuchsia), #B00058);
            color: white;
            border: 1px solid var(--gold);
            padding: 10px 22px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.9rem;
            cursor: pointer;
            box-shadow: 0 0 12px var(--fuchsia-glow);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-kuromi:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 18px var(--fuchsia);
        }

        .btn-whatsapp {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: white;
            border: 1px solid #25D366;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            box-shadow: 0 0 12px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-whatsapp:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 18px rgba(37, 211, 102, 0.8);
        }

        .hero-section {
            max-width: 1000px;
            margin: 40px auto 20px auto;
            text-align: center;
            padding: 0 20px;
        }

        .hero-title-main {
            font-size: 2.8rem;
            font-weight: 900;
            line-height: 1.1;
            text-transform: uppercase;
            color: #FFFFFF;
            letter-spacing: 1px;
        }

        .hero-title-fuchsia {
            color: var(--fuchsia-bright);
            text-shadow: 0 0 20px var(--fuchsia-glow);
            display: block;
        }

        .hero-title-gold {
            color: var(--gold);
            font-size: 2.2rem;
            margin-top: 5px;
            letter-spacing: 4px;
            text-shadow: 0 0 15px var(--gold-glow);
        }

        .hero-description {
            color: #C0C0D0;
            font-size: 0.95rem;
            max-width: 750px;
            margin: 20px auto;
            line-height: 1.5;
        }

        .hero-description b { color: var(--gold); }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, #FF007F, #B00058);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 800;
            font-size: 0.95rem;
            cursor: pointer;
            box-shadow: 0 0 20px var(--fuchsia-glow);
            display: flex; align-items: center; gap: 8px;
            transition: all 0.3s;
        }

        .btn-hero-secondary {
            background: transparent;
            color: var(--gold);
            border: 2px solid var(--gold);
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 800;
            font-size: 0.95rem;
            cursor: pointer;
            box-shadow: 0 0 15px var(--gold-glow);
            display: flex; align-items: center; gap: 8px;
            transition: all 0.3s;
        }

        .btn-hero-primary:hover, .btn-hero-secondary:hover { transform: translateY(-3px); }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 500px;
            margin: 0 auto 40px auto;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 25px;
        }

        .stat-card {
            background: rgba(15, 12, 25, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 12px 15px;
            text-align: center;
        }

        .stat-number { font-size: 1.5rem; font-weight: 900; }
        .stat-number.gold { color: var(--gold); }
        .stat-number.fuchsia { color: var(--fuchsia); }

        .stat-label {
            color: #8A8A9A;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 2px;
        }

        .main-layout {
            max-width: 1240px;
            margin: 0 auto 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 2.2fr 1fr;
            gap: 25px;
        }

        @media (max-width: 900px) {
            .main-layout { grid-template-columns: 1fr; }
            .hero-title-main { font-size: 2rem; }
            .hero-title-gold { font-size: 1.6rem; }
            .stats-grid { grid-template-columns: 1fr; }
            .logo-shield { width: 80px; height: 80px; }
            .header-actions { flex-wrap: wrap; }
        }

        .kuromi-card {
            background: var(--card-bg);
            border: 1px solid rgba(255, 215, 0, 0.3);
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.6);
            backdrop-filter: blur(10px);
            margin-bottom: 20px;
        }

        .card-header {
            border-bottom: 1px dashed var(--fuchsia);
            padding-bottom: 12px;
            margin-bottom: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title { color: var(--gold); font-size: 1.2rem; font-weight: 800; }

        input, select, textarea {
            width: 100%;
            background: #08070F;
            border: 1px solid var(--fuchsia);
            color: #fff;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 12px;
            outline: none;
            font-size: 0.9rem;
        }

        input:focus, textarea:focus {
            border-color: var(--gold);
            box-shadow: 0 0 8px var(--gold-glow);
        }

        .password-wrapper {
            position: relative;
            width: 100%;
        }

        .password-wrapper input {
            padding-right: 45px;
        }

        .toggle-password-img {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-60%);
            width: 22px;
            height: 22px;
            cursor: pointer;
            object-fit: contain;
            transition: opacity 0.2s ease, transform 0.2s ease;
            filter: drop-shadow(0 0 2px var(--fuchsia));
        }

        .toggle-password-img:hover {
            transform: translateY(-60%) scale(1.15);
            opacity: 0.8;
        }

        .news-item {
            background: rgba(0,0,0,0.4);
            border-left: 4px solid var(--fuchsia);
            padding: 16px;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .news-media {
            width: 100%; max-height: 320px;
            object-fit: cover; border-radius: 8px;
            margin-top: 12px; border: 1px solid var(--gold);
        }

        .admin-dashboard-card {
            background: linear-gradient(145deg, rgba(30, 20, 45, 0.95), rgba(15, 10, 25, 0.95));
            border: 2px solid var(--gold);
            box-shadow: 0 0 25px var(--gold-glow), inset 0 0 15px rgba(255, 20, 147, 0.2);
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .admin-header-badge {
            background: linear-gradient(90deg, var(--gold), #FF8C00);
            color: #000;
            font-weight: 900;
            padding: 4px 12px;
            border-radius: 8px;
            font-size: 0.8rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .lock-notice {
            text-align: center;
            padding: 40px 20px;
            background: rgba(20, 15, 30, 0.7);
            border: 1px dashed var(--fuchsia);
            border-radius: 16px;
        }

        .lock-notice h3 {
            color: var(--gold);
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .contact-box {
            background: rgba(37, 211, 102, 0.08);
            border: 1px solid var(--whatsapp-green);
            border-radius: 12px;
            padding: 15px;
            text-align: center;
            margin-top: 5px;
        }

        .contact-box p {
            font-size: 0.85rem;
            color: #D0D0D0;
            margin-bottom: 12px;
        }

        .modal {
            display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.85); justify-content: center; align-items: center; z-index: 1000;
            backdrop-filter: blur(5px);
        }
        .modal-content {
            background: var(--black-bg); border: 2px solid var(--gold);
            padding: 30px; border-radius: 20px; width: 90%; max-width: 420px;
            box-shadow: 0 0 30px var(--fuchsia-glow);
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="header-container">
            <div class="logo-section">
                <img src="img/logo_3.8.png" alt="Escudo INFRAMEN" class="logo-shield" onerror="this.src='https://via.placeholder.com/110?text=IN'">
                <div class="brand-title-wrap">
                    <div class="brand-header-line">
                        <span class="brand-title">INFRAMEN</span>
                        <span class="kuromi-badge">2026</span>
                    </div>
                    <span class="brand-subtitle">Muro Informativo & Periódico Digital</span>
                </div>
            </div>
            
            <div class="header-actions" id="auth-buttons">
                <a href="https://wa.me/50370221412" target="_blank" class="btn-whatsapp">
                    💬 Contáctanos
                </a>
                <button class="btn-kuromi" onclick="abrirModal('modal-login')">Iniciar Sesión</button>
                <button class="btn-kuromi" style="background: #111;" onclick="abrirModal('modal-registro')">Registrarse</button>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <h1 class="hero-title-main">
            MURO INFORMATIVO Y
            <span class="hero-title-fuchsia">PERIÓDICO DIGITAL</span>
        </h1>
        <h2 class="hero-title-gold">INFRAMEN</h2>
        
        <p class="hero-description">
            Bienvenido al portal informativo oficial del <b>Instituto Nacional General Francisco Menéndez</b>. 
            Espacio donde convergen el rigor académico, el orgullo institucional y una visión moderna, audaz e interactiva. 🖤 💖 ✨
        </p>

        <div class="hero-buttons">
            <button class="btn-hero-primary" onclick="scrollHaciaAbajo()">⚡ Explorar Noticias</button>
            <button class="btn-hero-secondary" onclick="abrirModal('modal-login')">📝 Publicar en Muro</button>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number fuchsia">1ª Ed.</div>
                <div class="stat-label">Periódico</div>
            </div>
            <div class="stat-card">
                <div class="stat-number gold">100%</div>
                <div class="stat-label">Orgullo IN</div>
            </div>
        </div>
    </section>

    <!-- CUERPO PRINCIPAL -->
    <div class="main-layout" id="seccion-muro">
        <main>
            <div class="kuromi-card">
                <div class="card-header">
                    <h2 class="card-title">📰 Publicaciones Oficiales</h2>
                    <!-- SELECTOR DE FILTRO CON INFRAESTRUCTURA -->
                    <select id="filtro-cat" style="width: auto; padding: 6px 12px; margin: 0;" onchange="cargarNoticias()">
                        <option value="Todas">Todas las categorías</option>
                        <option value="Infraestructura">Infraestructura</option>
                        <option value="Académico">Académico</option>
                        <option value="Deportes">Deportes</option>
                        <option value="Cultural">Cultural</option>
                    </select>
                </div>
                <input type="text" id="input-busqueda" placeholder="🔍 Buscar noticias o artículos..." oninput="cargarNoticias()">
                
                <div id="news-container">
                    <!-- Se llena con JS -->
                </div>
            </div>
        </main>

        <aside>
            <!-- PANEL DE ADMINISTRACIÓN -->
            <div class="admin-dashboard-card" id="admin-panel" style="display: none;">
                <div class="card-header" style="border-bottom: 1px solid var(--gold);">
                    <h2 class="card-title" style="color:var(--gold); font-size:1.3rem;">👑 Panel Directivo</h2>
                    <span class="admin-header-badge">MODO ADMIN</span>
                </div>
                
                <p style="font-size:0.85rem; color:#DDD; margin-bottom:15px;">Gestión y publicación oficial de artículos para la comunidad escolar.</p>
                
                <form id="form-noticia">
                    <input type="text" id="tit" placeholder="Título de la publicación" required>
                    
                    <!-- SELECTOR DEL FORMULARIO CON INFRAESTRUCTURA -->
                    <select id="cat">
                        <option value="Infraestructura">Infraestructura</option>
                        <option value="Académico">Académico</option>
                        <option value="Deportes">Deportes</option>
                        <option value="Cultural">Cultural</option>
                    </select>
                    
                    <textarea id="cont" rows="4" placeholder="Escribe el contenido oficial aquí..." required></textarea>
                    
                    <label style="font-size:0.8rem; color:var(--gold); display:block; margin-bottom:5px; font-weight:bold;">
                        📁 Adjuntar elemento multimedia:
                    </label>
                    <input type="file" id="file" accept="image/*,video/*">
                    
                    <button type="submit" class="btn-kuromi" style="width:100%; margin-top:10px; background: linear-gradient(135deg, #FFD700, #FF8C00); color:#000;">
                        ✨ Publicar Noticia Oficial
                    </button>
                </form>
            </div>

            <!-- TARJETA CONTÁCTANOS EN EL SIDEBAR -->
            <div class="kuromi-card">
                <div class="card-header">
                    <h2 class="card-title">📱 Contáctanos</h2>
                </div>
                <div class="contact-box">
                    <p>¿Tienes dudas o sugerencias para el periódico escolar?</p>
                    <a href="https://wa.me/50370221412" target="_blank" class="btn-whatsapp" style="width: 100%; justify-content: center;">
                        💬 Escribir por WhatsApp
                    </a>
                </div>
            </div>

            <!-- STICKY BOARD -->
            <div class="kuromi-card">
                <div class="card-header">
                    <h2 class="card-title">💀 Sticky Board Estudiantil</h2>
                </div>
                <textarea id="note-text" rows="3" placeholder="Deja un saludo o mensaje..."></textarea>
                <button class="btn-kuromi" style="width:100%;" onclick="publicarNota()">Publicar Nota ✦</button>
                <div id="notes-list" style="margin-top:15px;"></div>
            </div>
        </aside>
    </div>

    <!-- MODAL LOGIN -->
    <div class="modal" id="modal-login">
        <div class="modal-content">
            <h3 style="color:var(--fuchsia); margin-bottom:15px; text-align:center;">Iniciar Sesión</h3>
            <form id="login-form">
                <input type="email" id="log-email" placeholder="Correo electrónico" onkeydown="sinEspacios(event)" oninput="limpiarEspacios(this)" required>
                
                <div class="password-wrapper">
                    <input type="password" id="log-pass" placeholder="Contraseña" onkeydown="sinEspacios(event)" oninput="limpiarEspacios(this)" required>
                    <img src="img/ojito.png" class="toggle-password-img" alt="Ver" onclick="togglePasswordImg('log-pass', this)" onerror="this.src='https://img.icons8.com/?size=100&id=T8KCO0TdWmpo&format=png&color=FFFFFF'">
                </div>

                <button type="submit" class="btn-kuromi" style="width:100%; margin-top:10px;">Ingresar</button>
            </form>
        </div>
    </div>

    <!-- MODAL REGISTRO -->
    <div class="modal" id="modal-registro">
        <div class="modal-content">
            <h3 style="color:var(--fuchsia); margin-bottom:15px; text-align:center;">Registro de Alumno</h3>
            <form id="reg-form">
                <input type="text" id="reg-nom" placeholder="Nombre completo" required>
                <input type="email" id="reg-em" placeholder="Correo (sin espacios)" onkeydown="sinEspacios(event)" oninput="limpiarEspacios(this)" required>
                
                <div class="password-wrapper">
                    <input type="password" id="reg-pa" placeholder="Contraseña (1 Mayús, 1 Núm, 1 Símbolo)" onkeydown="sinEspacios(event)" oninput="limpiarEspacios(this)" required>
                    <img src="img/ojito.png" class="toggle-password-img" alt="Ver" onclick="togglePasswordImg('reg-pa', this)" onerror="this.src='https://img.icons8.com/?size=100&id=T8KCO0TdWmpo&format=png&color=FFFFFF'">
                </div>

                <button type="submit" class="btn-kuromi" style="width:100%; margin-top:10px;">Completar Registro</button>
            </form>
        </div>
    </div>

    <script>
        const HOST = window.location.hostname;
        const API = `http://${HOST}:3000/api`;
        let token = localStorage.getItem('token');
        let user = JSON.parse(localStorage.getItem('user'));

        function sinEspacios(e) {
            if (e.key === " " || e.keyCode === 32) {
                e.preventDefault();
                return false;
            }
        }

        function limpiarEspacios(input) {
            input.value = input.value.replace(/\s+/g, '');
        }

        function togglePasswordImg(inputId, imgElement) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
                imgElement.src = 'img/ojito_abierto.png';
            } else {
                input.type = 'password';
                imgElement.src = 'img/ojito.png';
            }
        }

        function init() {
            if (token && user) {
                document.getElementById('auth-buttons').innerHTML = `
                    <a href="https://wa.me/50370221412" target="_blank" class="btn-whatsapp">
                        💬 Contáctanos
                    </a>
                    <span style="color:var(--gold); font-weight:bold; align-self:center;">💀 ${user.nombre}</span>
                    <button class="btn-kuromi" style="background:#333;" onclick="logout()">Cerrar Sesión</button>
                `;
                if (user.rol === 'admin') {
                    document.getElementById('admin-panel').style.display = 'block';
                }
            }
            cargarNoticias();
        }

        function abrirModal(id) { document.getElementById(id).style.display = 'flex'; }
        function cerrarModales() { document.querySelectorAll('.modal').forEach(m => m.style.display = 'none'); }
        window.onclick = (e) => { if (e.target.classList.contains('modal')) cerrarModales(); };

        function scrollHaciaAbajo() {
            document.getElementById('seccion-muro').scrollIntoView({ behavior: 'smooth' });
        }

        function logout() { localStorage.clear(); location.reload(); }

        async function cargarNoticias() {
            const newsContainer = document.getElementById('news-container');

            if (!token || !user) {
                newsContainer.innerHTML = `
                    <div class="lock-notice">
                        <h3>🔒 Contenido Reservado</h3>
                        <p style="color:#A0A0B0; font-size:0.9rem; margin-bottom:18px;">
                            Para ver las publicaciones y artículos del periódico escolar INFRAMEN debes iniciar sesión o registrarte.
                        </p>
                        <div style="display:flex; justify-content:center; gap:10px;">
                            <button class="btn-kuromi" onclick="abrirModal('modal-login')">Iniciar Sesión</button>
                            <button class="btn-kuromi" style="background:#111;" onclick="abrirModal('modal-registro')">Registrarse</button>
                        </div>
                    </div>
                `;
                return;
            }

            const search = document.getElementById('input-busqueda').value;
            const cat = document.getElementById('filtro-cat').value;
            
            try {
                const res = await fetch(`${API}/noticias?busqueda=${search}&categoria=${cat}`, {
                    headers: { 'Authorization': `Bearer ${token}` }
                });
                const news = await res.json();

                if(news.length === 0) {
                    newsContainer.innerHTML = '<p style="color:#8A8A9A; margin-top:15px;">No hay publicaciones disponibles en esta categoría.</p>';
                    return;
                }

                newsContainer.innerHTML = news.map(n => `
                    <div class="news-item">
                        <h3 style="color:var(--gold);">${n.titulo} <small style="color:var(--fuchsia); font-size:0.75rem;">[${n.categoria}]</small></h3>
                        <p style="margin-top:8px; line-height:1.4;">${n.contenido}</p>
                        ${n.media_url ? (n.media_tipo === 'imagen' ? `<img src="http://${HOST}:3000${n.media_url}" class="news-media">` : `<video src="http://${HOST}:3000${n.media_url}" controls class="news-media"></video>`) : ''}
                        <div style="margin-top:12px; font-size:0.8rem; color:#888; display:flex; justify-content:space-between; align-items:center;">
                            <span>Por: <b>${n.autor || 'Admin'}</b></span>
                            ${user && user.rol === 'admin' ? `<button onclick="borrarNoticia(${n.id})" style="color:#ff4444; background:none; border:none; cursor:pointer; font-weight:bold;">Eliminar</button>` : ''}
                        </div>
                    </div>
                `).join('');
            } catch (err) {
                newsContainer.innerHTML = '<p style="color:#ff4444; margin-top:15px;">Asegúrate de que la terminal con "node server.js" esté encendida.</p>';
            }
        }

        document.getElementById('login-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const correo = document.getElementById('log-email').value.trim();
            const password = document.getElementById('log-pass').value.trim();

            try {
                const res = await fetch(`${API}/auth/login`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ correo, password })
                });

                const data = await res.json();

                if (res.ok) {
                    localStorage.setItem('token', data.token);
                    localStorage.setItem('user', JSON.stringify(data.usuario));
                    alert('¡Bienvenido, ' + data.usuario.nombre + '!');
                    cerrarModales();
                    location.reload();
                } else {
                    alert(data.mensaje || 'Error al iniciar sesión');
                }
            } catch (err) {
                alert('No se pudo conectar con el servidor Node.js (Puerto 3000).');
            }
        });

        document.getElementById('reg-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const nombre = document.getElementById('reg-nom').value.trim();
            const correo = document.getElementById('reg-em').value.trim();
            const password = document.getElementById('reg-pa').value.trim();

            const regexPass = /^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;
            if (!regexPass.test(password)) return alert('La contraseña requiere mínimo 8 caracteres, una mayúscula, un número y un símbolo.');

            try {
                const res = await fetch(`${API}/auth/registro`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ nombre, correo, password })
                });
                const data = await res.json();
                alert(data.mensaje);
                if (res.ok) {
                    cerrarModales();
                    abrirModal('modal-login');
                }
            } catch (err) {
                alert('Error al conectar con la API.');
            }
        });

        document.getElementById('form-noticia').addEventListener('submit', async (e) => {
            e.preventDefault();
            const form = new FormData();
            form.append('titulo', document.getElementById('tit').value);
            form.append('categoria', document.getElementById('cat').value);
            form.append('contenido', document.getElementById('cont').value);
            const file = document.getElementById('file').files[0];
            if (file) form.append('archivo', file);

            const res = await fetch(`${API}/noticias`, {
                method: 'POST',
                headers: { 'Authorization': `Bearer ${token}` },
                body: form
            });
            if (res.ok) {
                alert('Publicación creada exitosamente');
                document.getElementById('form-noticia').reset();
                cargarNoticias();
            } else {
                alert('Ocurrió un error al publicar.');
            }
        });

        async function borrarNoticia(id) {
            if (confirm('¿Deseas eliminar esta publicación?')) {
                await fetch(`${API}/noticias/${id}`, { method: 'DELETE', headers: { 'Authorization': `Bearer ${token}` } });
                cargarNoticias();
            }
        }

        function publicarNota() {
            const txt = document.getElementById('note-text').value;
            if(!txt) return;
            const note = document.createElement('div');
            note.style = "background: rgba(255,20,147,0.1); border:1px solid var(--fuchsia); padding:10px; border-radius:8px; margin-bottom:8px; font-size:0.85rem;";
            note.innerHTML = `<b>💀 Estudiante:</b> ${txt}`;
            document.getElementById('notes-list').prepend(note);
            document.getElementById('note-text').value = '';
        }

        init();
    </script>
</body>
</html>