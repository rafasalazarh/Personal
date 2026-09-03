(() => {
    "use strict";

    const TOURS = {
        tour1: "https://pannellum.org/images/alma.jpg",
        tour2: "https://pannellum.org/images/cerro-toco-0.jpg",
        tour3: "https://pannellum.org/images/jfk.jpg",
        tour4: "https://pannellum.org/images/from-tree.jpg",
        tour5: "https://pannellum.org/images/bma-0.jpg",
        tour6: "https://pannellum.org/images/bma-1.jpg",
        tour7: "https://pannellum.org/images/bma-2.jpg",
        tour8: "https://pannellum.org/images/alma.jpg",
        tour9: "https://pannellum.org/images/cerro-toco-0.jpg",
        tour10: "https://pannellum.org/images/jfk.jpg",
        tour11: "https://pannellum.org/images/from-tree.jpg",
        tour12: "https://pannellum.org/images/bma-0.jpg",
        tour13: "https://pannellum.org/images/bma-1.jpg",
        tour14: "https://pannellum.org/images/bma-2.jpg",
        tour15: "https://pannellum.org/images/alma.jpg",
    };

    const PROPERTIES = [
        {
            id: "tour1",
            featured: true,
            type: "compra",
            kind: "Casa",
            title: "Casa de patio en Polanco",
            location: "Polanco, Miguel Hidalgo, CDMX",
            beds: 4,
            baths: 4,
            area: 320,
            price: "$18,900,000 MXN",
            image: "https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour2",
            type: "renta",
            kind: "Departamento",
            title: "Departamento con balcón en Condesa",
            location: "Hipódromo Condesa, CDMX",
            beds: 2,
            baths: 2,
            area: 118,
            price: "$42,000",
            priceNote: "/ mes",
            image: "https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour3",
            type: "compra",
            kind: "Villa",
            title: "Villa con terraza en Valle de Bravo",
            location: "Avándaro, Valle de Bravo",
            beds: 5,
            baths: 5,
            area: 480,
            price: "$24,500,000 MXN",
            image: "https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour4",
            type: "renta",
            kind: "Casa",
            title: "Casa familiar en Coyoacán",
            location: "Del Carmen, Coyoacán, CDMX",
            beds: 3,
            baths: 2,
            area: 210,
            price: "$38,000",
            priceNote: "/ mes",
            image: "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour5",
            type: "airbnb",
            kind: "Loft",
            title: "Loft industrial en Roma Norte",
            location: "Roma Norte, Cuauhtémoc, CDMX",
            beds: 1,
            baths: 1,
            area: 72,
            price: "$2,150",
            priceNote: "/ noche",
            image: "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour6",
            type: "compra",
            kind: "Penthouse",
            title: "Penthouse con vista en Santa Fe",
            location: "Santa Fe, Álvaro Obregón, CDMX",
            beds: 3,
            baths: 3,
            area: 245,
            price: "$16,200,000 MXN",
            image: "https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour7",
            type: "compra",
            kind: "Departamento",
            title: "Departamento en Torre Reforma",
            location: "Cuauhtémoc, CDMX",
            beds: 2,
            baths: 2,
            area: 142,
            price: "$11,800,000 MXN",
            image: "https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour8",
            type: "compra",
            kind: "Casa",
            title: "Residencia en Jardines del Pedregal",
            location: "Pedregal, Álvaro Obregón, CDMX",
            beds: 5,
            baths: 6,
            area: 560,
            price: "$32,000,000 MXN",
            image: "https://images.unsplash.com/photo-1600047509807-ba8e99d2d037?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour9",
            type: "airbnb",
            kind: "Estudio",
            title: "Estudio luminoso en el Centro",
            location: "Centro Histórico, CDMX",
            beds: 1,
            baths: 1,
            area: 48,
            price: "$1,280",
            priceNote: "/ noche",
            image: "https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour10",
            type: "renta",
            kind: "Casa",
            title: "Casa de jardín en San Ángel",
            location: "San Ángel Inn, CDMX",
            beds: 3,
            baths: 3,
            area: 265,
            price: "$55,000",
            priceNote: "/ mes",
            image: "https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour11",
            type: "airbnb",
            kind: "Villa",
            title: "Villa de selva cerca de Tulum",
            location: "Aldea Zama, Tulum, Q. Roo",
            beds: 3,
            baths: 3,
            area: 190,
            price: "$6,400",
            priceNote: "/ noche",
            image: "https://images.unsplash.com/photo-1600585154084-4e5fe7c39198?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour12",
            type: "renta",
            kind: "Departamento",
            title: "Departamento en Nápoles",
            location: "Nápoles, Benito Juárez, CDMX",
            beds: 2,
            baths: 2,
            area: 105,
            price: "$28,500",
            priceNote: "/ mes",
            image: "https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour13",
            type: "compra",
            kind: "Casa",
            title: "Townhouse en Polanco II",
            location: "Polanco, Miguel Hidalgo, CDMX",
            beds: 3,
            baths: 3,
            area: 198,
            price: "$14,750,000 MXN",
            image: "https://images.unsplash.com/photo-1600607687644-c7171b42498b?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour14",
            type: "airbnb",
            kind: "Cabaña",
            title: "Cabaña con chimenea en el Valle",
            location: "Colorines, Valle de Bravo",
            beds: 2,
            baths: 2,
            area: 95,
            price: "$3,900",
            priceNote: "/ noche",
            image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=80",
        },
        {
            id: "tour15",
            type: "renta",
            kind: "Loft",
            title: "Loft de doble altura en Doctores",
            location: "Doctores, Cuauhtémoc, CDMX",
            beds: 1,
            baths: 1,
            area: 88,
            price: "$22,000",
            priceNote: "/ mes",
            image: "https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1200&q=80",
        },
    ];

    const TYPE_LABEL = {
        compra: "Compra",
        renta: "Renta",
        airbnb: "Corta estancia",
    };

    const escapeHtml = (value) =>
        String(value).replace(/[&<>"']/g, (char) => ({
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
        }[char]));

    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");
    const header = document.getElementById("siteHeader");
    const grid = document.getElementById("propertiesGrid");
    const filterStatus = document.getElementById("filterStatus");
    const tourModal = document.getElementById("tourModal");
    const tourModalClose = document.getElementById("tourModalClose");
    const tourModalTitle = document.getElementById("tourModalTitle");
    const contactForm = document.getElementById("contactForm");
    const formStatus = document.getElementById("formStatus");
    const formSubmit = document.getElementById("formSubmit");
    const yearEl = document.getElementById("copyrightYear");

    let viewer = null;
    let lastFocused = null;
    let activeFilter = "all";

    const setMenuOpen = (open) => {
        navMenu.classList.toggle("is-open", open);
        hamburger.setAttribute("aria-expanded", String(open));
        hamburger.setAttribute("aria-label", open ? "Cerrar menú" : "Abrir menú");
    };

    const renderProperties = () => {
        grid.innerHTML = PROPERTIES.map((item) => {
            const note = item.priceNote ? `<span> ${escapeHtml(item.priceNote)}</span>` : "";
            return `
                <article class="property-card${item.featured ? " featured" : ""}" data-type="${escapeHtml(item.type)}">
                    <div class="property-image">
                        <img src="${escapeHtml(item.image)}" alt="${escapeHtml(item.title)}" width="800" height="600" loading="lazy">
                        <div class="property-badges">
                            <span class="badge badge-${escapeHtml(item.type)}">${escapeHtml(TYPE_LABEL[item.type])}</span>
                        </div>
                        <button type="button" class="btn-tour" data-tour="${escapeHtml(item.id)}" data-title="${escapeHtml(item.title)}">
                            Ver tour 360°
                        </button>
                    </div>
                    <div class="property-info">
                        <p class="property-kind">${escapeHtml(item.kind)}</p>
                        <h3>${escapeHtml(item.title)}</h3>
                        <p class="property-location">${escapeHtml(item.location)}</p>
                        <p class="property-details">
                            <span>${item.beds} rec.</span>
                            <span>${item.baths} baños</span>
                            <span>${item.area} m²</span>
                        </p>
                        <p class="property-price">${escapeHtml(item.price)}${note}</p>
                    </div>
                </article>
            `;
        }).join("");

        applyFilter(activeFilter);
    };

    const applyFilter = (filter) => {
        activeFilter = filter;
        const cards = grid.querySelectorAll(".property-card");
        let visible = 0;

        cards.forEach((card) => {
            const match = filter === "all" || card.dataset.type === filter;
            card.classList.toggle("hidden", !match);
            if (match) visible += 1;
        });

        const label = filter === "all" ? "el inventario" : TYPE_LABEL[filter].toLowerCase();
        filterStatus.textContent = `${visible} ${visible === 1 ? "propiedad" : "propiedades"} en ${label}.`;
    };

    const destroyViewer = () => {
        if (viewer && typeof viewer.destroy === "function") {
            viewer.destroy();
        }
        viewer = null;
    };

    const closeTour = () => {
        tourModal.hidden = true;
        document.body.style.overflow = "";
        destroyViewer();
        if (lastFocused) {
            lastFocused.focus();
        }
    };

    const openTour = (tourId, title) => {
        const panorama = TOURS[tourId];
        if (!panorama || typeof pannellum === "undefined") {
            return;
        }

        lastFocused = document.activeElement;
        tourModalTitle.textContent = title;
        tourModal.hidden = false;
        document.body.style.overflow = "hidden";
        destroyViewer();

        viewer = pannellum.viewer("panorama", {
            type: "equirectangular",
            panorama,
            autoLoad: true,
            compass: true,
            showControls: true,
            keyboardZoom: true,
            mouseZoom: true,
            hfov: 100,
            minHfov: 50,
            maxHfov: 120,
        });

        tourModalClose.focus();
    };

    const showFormStatus = (message, ok) => {
        formStatus.hidden = false;
        formStatus.textContent = message;
        formStatus.classList.toggle("is-ok", ok);
        formStatus.classList.toggle("is-err", !ok);
    };

    hamburger.addEventListener("click", () => {
        setMenuOpen(!navMenu.classList.contains("is-open"));
    });

    navMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => setMenuOpen(false));
    });

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", (event) => {
            const href = anchor.getAttribute("href");
            if (!href || href === "#") {
                return;
            }

            const target = document.querySelector(href);
            if (!target) {
                return;
            }

            event.preventDefault();
            const top = target.getBoundingClientRect().top + window.pageYOffset - 76;
            window.scrollTo({ top, behavior: "smooth" });
        });
    });

    window.addEventListener("scroll", () => {
        header.classList.toggle("is-scrolled", window.scrollY > 12);
    }, { passive: true });

    document.querySelectorAll(".filter-btn").forEach((button) => {
        button.addEventListener("click", () => {
            document.querySelectorAll(".filter-btn").forEach((item) => item.classList.remove("active"));
            button.classList.add("active");
            applyFilter(button.dataset.filter);
        });
    });

    grid.addEventListener("click", (event) => {
        const button = event.target.closest(".btn-tour");
        if (!button) {
            return;
        }
        openTour(button.dataset.tour, button.dataset.title);
    });

    tourModalClose.addEventListener("click", closeTour);
    tourModal.addEventListener("click", (event) => {
        if (event.target === tourModal) {
            closeTour();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && !tourModal.hidden) {
            closeTour();
        }
    });

    contactForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        const payload = {
            name: document.getElementById("name").value.trim(),
            email: document.getElementById("email").value.trim(),
            phone: document.getElementById("phone").value.trim(),
            service: document.getElementById("service").value,
            message: document.getElementById("message").value.trim(),
        };

        if (!payload.name || !payload.email || !payload.phone || !payload.service || !payload.message) {
            showFormStatus("Completa todos los campos para enviar la consulta.", false);
            return;
        }

        formSubmit.disabled = true;
        showFormStatus("Enviando…", true);

        try {
            const response = await fetch("contact.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(payload),
            });
            const result = await response.json().catch(() => ({ ok: false }));

            if (!response.ok || !result.ok) {
                throw new Error(result.error || "No se pudo enviar");
            }

            contactForm.reset();
            showFormStatus("Consulta recibida. Te contactaremos en menos de 24 horas.", true);
        } catch (error) {
            showFormStatus("No se pudo enviar. Revisa que XAMPP esté activo e inténtalo de nuevo.", false);
        } finally {
            formSubmit.disabled = false;
        }
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });

    yearEl.textContent = String(new Date().getFullYear());
    document.getElementById("heroInventory").textContent = `${PROPERTIES.length} listados`;
    renderProperties();

    document.querySelectorAll(".service-card, .property-card, .contact-item, .quotes-grid blockquote").forEach((el) => {
        el.classList.add("reveal");
        observer.observe(el);
    });
})();
