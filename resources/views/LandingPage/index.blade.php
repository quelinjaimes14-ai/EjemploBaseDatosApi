<!doctype html>
<html lang="es" id="app-root">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ropa Bella - Landing</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Montserrat', sans-serif; }
        .hero {
            background: linear-gradient( rgba(0,0,0,0.35), rgba(0,0,0,0.2) ), url('https://source.unsplash.com/1600x900/?fashion,clothes') center/cover no-repeat;
            color: #fff;
            padding: 100px 0;
        }
        .service-icon { font-size: 2.2rem; color: #ff6b6b; }
        .product-card img { height: 220px; object-fit: cover; }
        .badge-new { background: linear-gradient(90deg,#ff9a9e,#fecfef); color:#000; font-weight:600; }
        .footer { background:#0f1724; color:#d1d5db; padding:40px 0; }
        .price { font-weight:700; color:#111827; }
        @media (max-width:576px) {
            .hero { padding: 60px 0; text-align:center; }
            .hero .lead { font-size:1rem; }
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">RopaBella</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                <li class="nav-item ms-3"><a class="btn btn-outline-primary" href="#productos">Tienda</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h1 class="display-5 fw-bold">Moda consciente, estilo único</h1>
                <p class="lead mb-4">Descubre nuestra colección de prendas diseñadas para realzar tu estilo y cuidar el planeta. Calidad y tendencia en cada costura.</p>
                <a href="#productos" class="btn btn-primary btn-lg me-2">Ver productos</a>
                <a href="#servicios" class="btn btn-outline-light btn-lg">Nuestros servicios</a>
                <div class="mt-4 d-flex gap-3">
                    <div class="text-center">
                        <h4 class="mb-0">+500</h4><small>Clientes felices</small>
                    </div>
                    <div class="text-center">
                        <h4 class="mb-0">+120</h4><small>Productos</small>
                    </div>
                    <div class="text-center">
                        <h4 class="mb-0">Entrega</h4><small>24-72 hrs</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="card shadow-lg border-0">
                    <img src="https://source.unsplash.com/800x600/?outfit,model" class="card-img-top" alt="Moda">
                    <div class="card-body">
                        <h5 class="card-title">Nueva temporada</h5>
                        <p class="card-text text-muted">Selección curada con lo último en tendencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="servicios" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Nuestros servicios</h2>
            <p class="text-muted">Soluciones pensadas para tu marca y tu armario personal</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-scissors service-icon me-3"></i>
                        <h5 class="mb-0">Sastrería a medida</h5>
                    </div>
                    <p class="text-muted">Ajustes y confección personalizada para que tus prendas te queden perfectas.</p>
                    <a href="#contact" class="stretched-link text-decoration-none">Solicitar presupuesto</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-box-seam service-icon me-3"></i>
                        <h5 class="mb-0">Personalización de prendas</h5>
                    </div>
                    <p class="text-muted">Estampados, bordados y etiquetas personalizadas para tu negocio o evento.</p>
                    <a href="#contact" class="stretched-link text-decoration-none">Solicitar muestra</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-3">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-truck service-icon me-3"></i>
                        <h5 class="mb-0">Envío rápido</h5>
                    </div>
                    <p class="text-muted">Envíos nacionales e internacionales con seguimiento y opciones exprés.</p>
                    <a href="#contact" class="stretched-link text-decoration-none">Ver opciones</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section id="productos" class="py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0">Productos destacados</h2>
                <small class="text-muted">Calidad y estilo para todas las ocasiones</small>
            </div>
            <div>
                <a href="#" class="btn btn-sm btn-outline-secondary">Ver todo</a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="https://source.unsplash.com/400x400/?dress,fashion" class="card-img-top" alt="Vestido">
                        <span class="badge position-absolute top-0 start-0 m-2 badge-new">Nuevo</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title">Vestido Primavera</h6>
                        <p class="text-muted mb-2">Tela ligera y corte fluido.</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <span class="price">$49.99</span>
                                    <small class="text-muted text-decoration-line-through ms-2">$69.99</small>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card h-100 shadow-sm">
                    <img src="https://source.unsplash.com/400x400/?shirt,men" class="card-img-top" alt="Camisa">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title">Camisa Classic</h6>
                        <p class="text-muted mb-2">Algodón premium, disponible en varios colores.</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <span class="price">$29.99</span>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card h-100 shadow-sm">
                    <img src="https://source.unsplash.com/400x400/?jeans,denim" class="card-img-top" alt="Jeans">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title">Jeans Comfort</h6>
                        <p class="text-muted mb-2">Elástico y resistente para uso diario.</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <span class="price">$39.99</span>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card h-100 shadow-sm">
                    <img src="https://source.unsplash.com/400x400/?jacket,coat" class="card-img-top" alt="Chaqueta">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title">Chaqueta Urbana</h6>
                        <p class="text-muted mb-2">Corte moderno y forro térmico.</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <span class="price">$79.99</span>
                                </div>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-sm">Agregar al carrito</button>
                                <a href="#" class="btn btn-outline-secondary btn-sm">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Puedes duplicar tarjetas para más productos -->
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h3 class="fw-bold">Sobre RopaBella</h3>
                <p class="text-muted">Somos una empresa comprometida con la calidad y la sostenibilidad. Cada prenda es diseñada pensando en comodidad, durabilidad y estilo. Ofrecemos servicios a medida para marcas y clientes particulares.</p>
                <ul class="list-unstyled text-muted">
                    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Materiales responsables</li>
                    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Producción local</li>
                    <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Atención personalizada</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="https://source.unsplash.com/800x500/?fashion,studio" class="img-fluid rounded shadow-sm" alt="Sobre nosotros">
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <h4 class="fw-bold">Contacta con nosotros</h4>
                <p class="mb-4">¿Tienes dudas o quieres solicitar un servicio? Escríbenos y te responderemos lo antes posible.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-telephone me-2"></i>+34 600 000 000</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i>hola@ropabella.com</li>
                    <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>C/ Ejemplo 123, Ciudad</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" placeholder="tu@correo.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mensaje</label>
                                <textarea class="form-control" rows="4" placeholder="¿En qué podemos ayudarte?"></textarea>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="fw-bold mb-2">RopaBella</h5>
                <p class="small mb-0">© {{ date('Y') }} RopaBella. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-muted me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-muted me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
<script>
(function(){
    const TRACK_ENDPOINT = '/api/comportamientos'; // Ajusta endpoint según tu backend
    let userIp = 'unknown';

    const getIP = () =>
        fetch('https://api.ipify.org?format=json')
            .then(r => r.json())
            .then(j => j.ip)
            .catch(() => 'unknown');

    function nowISO(){ return new Date().toISOString(); }

    function elementName(el){
        if(!el) return '';
        if(el.dataset && el.dataset.tracking) return el.dataset.tracking;
        const attrs = [
            el.getAttribute && (el.getAttribute('aria-label') || el.getAttribute('alt') || el.getAttribute('title') || el.getAttribute('name')),
            el.id,
            el.className,
            (el.textContent || '').trim()
        ].filter(Boolean);
        return `${el.tagName ? el.tagName.toLowerCase() : 'el'}: ${String(attrs[0]||attrs[1]||attrs[2]||attrs[3]||'sin-descripcion').replace(/\s+/g,' ').slice(0,120)}`;
    }

    async function send(payload){
        try{
            await fetch(TRACK_ENDPOINT, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload)
            });
        }catch(err){
            // Silencioso para no romper UX; conservar en consola para depuración
            console.warn('tracking send failed', err);
        }
    }

    function buildPayload(tipo_movimiento, elementos){
        return {
            ip_usuario: userIp,
            tipo_movimiento: tipo_movimiento,
            origen: document.referrer || location.href,
            elementos_involucrados: elementos,
            
            fecha_hora: nowISO()
        };
    }

    // App Vue mínima para manejar ciclo de vida
    const App = {
        mounted(){
            // Envío de ingreso (1) cuando obtenemos IP
            getIP().then(ip => {
                send(buildPayload(1, elementName(document.body)));
            });

            // Clicks globales -> tipo 2 (o 4 si es descarga)
            document.addEventListener('click', function(e){
                const target = e.target;
                const clickedEl = target.closest && target.closest('a,button,input,textarea,label');
                const name = elementName(clickedEl || target);
                let tipo = 2;

                // Detectar enlaces de descarga por atributo download o extensión de archivo
                const a = target.closest ? target.closest('a') : null;
                if(a){
                    const href = a.getAttribute('href') || '';
                    const isDownload = a.hasAttribute('download') || /\.(pdf|zip|csv|xls|xlsx|docx?|png|jpe?g|svg|mp4|mp3)$/i.test(href);
                    if(isDownload) tipo = 4;
                }

                send(buildPayload(tipo, name));
            }, true);

            // Formularios -> tipo 3 (consulta)
            document.addEventListener('submit', function(e){
                const form = e.target;
                send(buildPayload(3, elementName(form)));
            }, true);

            // Movimiento del ratón -> tipo 3 (consulta). Muestreo para no saturar.
            let lastMouse = null;
            document.addEventListener('mousemove', function(e){
                lastMouse = { x: e.clientX, y: e.clientY, el: elementName(e.target) };
            });

            setInterval(function(){
                if(lastMouse){
                    // Se envía la última posición capturada
                    send({
                        ip_usuario: userIp,
                        tipo_movimiento: 3,
                        origen: document.referrer || location.href,
                        elementos_involucrados: JSON.stringify({ posicion: `${lastMouse.x},${lastMouse.y}`, elemento: lastMouse.el }),
                        fecha_hora: nowISO()
                    });
                    lastMouse = null;
                }
            }, 1000); // cada 1s (ajustable)
        }
    };

    Vue.createApp(App).mount('#app-root');
})();
</script>
</html>