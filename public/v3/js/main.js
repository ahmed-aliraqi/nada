/* ============================================
   BEAUTY STORE - Main JavaScript
   ============================================ */

// ---- Product Data ----
const products = [
    {
        id: 1,
        name: "Rose Elixir Perfume",
        category: "perfumes",
        subcategory: "floral",
        price: 89.99,
        originalPrice: 120.00,
        rating: 4.8,
        reviews: 124,
        badge: "sale",
        featured: true,
        bestseller: true,
        description: "A captivating blend of Bulgarian rose, peony, and white musk that unfolds into a luxurious floral symphony. Perfect for the modern woman who commands attention with effortless grace.",
        notes: { top: "Bergamot, Pink Pepper", heart: "Bulgarian Rose, Peony", base: "White Musk, Sandalwood" },
        images: [
            "https://picsum.photos/seed/rose-perfume-1/600/800",
            "https://picsum.photos/seed/rose-perfume-2/600/800",
            "https://picsum.photos/seed/rose-perfume-3/600/800",
            "https://picsum.photos/seed/rose-perfume-4/600/800"
        ]
    },
    {
        id: 2,
        name: "Midnight Oud",
        category: "perfumes",
        subcategory: "oriental",
        price: 129.99,
        originalPrice: null,
        rating: 4.9,
        reviews: 89,
        badge: "best",
        featured: true,
        bestseller: true,
        description: "An opulent oriental fragrance weaving rare oud wood with smoky amber and a whisper of vanilla. A scent that lingers like a whispered secret in the dark.",
        notes: { top: "Saffron, Cardamom", heart: "Oud Wood, Rose", base: "Amber, Vanilla, Musk" },
        images: [
            "https://picsum.photos/seed/oud-perfume-1/600/800",
            "https://picsum.photos/seed/oud-perfume-2/600/800",
            "https://picsum.photos/seed/oud-perfume-3/600/800",
            "https://picsum.photos/seed/oud-perfume-4/600/800"
        ]
    },
    {
        id: 3,
        name: "Velvet Amber",
        category: "perfumes",
        subcategory: "warm",
        price: 94.99,
        originalPrice: null,
        rating: 4.7,
        reviews: 67,
        badge: null,
        featured: true,
        bestseller: false,
        description: "Warm amber wrapped in cashmere musk with hints of caramelized praline. Like being wrapped in a golden silk blanket on a winter evening.",
        notes: { top: "Caramel, Pink Pepper", heart: "Amber, Iris", base: "Cashmere Musk, Praline" },
        images: [
            "https://picsum.photos/seed/amber-perfume-1/600/800",
            "https://picsum.photos/seed/amber-perfume-2/600/800",
            "https://picsum.photos/seed/amber-perfume-3/600/800",
            "https://picsum.photos/seed/amber-perfume-4/600/800"
        ]
    },
    {
        id: 4,
        name: "Jasmine Dream",
        category: "perfumes",
        subcategory: "floral",
        price: 79.99,
        originalPrice: 99.99,
        rating: 4.6,
        reviews: 156,
        badge: "sale",
        featured: false,
        bestseller: true,
        description: "An intoxicating bouquet of night-blooming jasmine, tuberose, and ylang-ylang that captures the magic of a moonlit garden in full bloom.",
        notes: { top: "Mandarin, Bergamot", heart: "Jasmine, Tuberose, Ylang-Ylang", base: "Cedarwood, Vanilla" },
        images: [
            "https://picsum.photos/seed/jasmine-perfume-1/600/800",
            "https://picsum.photos/seed/jasmine-perfume-2/600/800",
            "https://picsum.photos/seed/jasmine-perfume-3/600/800",
            "https://picsum.photos/seed/jasmine-perfume-4/600/800"
        ]
    },
    {
        id: 5,
        name: "Cedar & Smoke",
        category: "perfumes",
        subcategory: "woody",
        price: 109.99,
        originalPrice: null,
        rating: 4.5,
        reviews: 43,
        badge: "new",
        featured: false,
        bestseller: false,
        description: "A bold, unisex fragrance combining smoky vetiver with Virginia cedar and a touch of leather. Raw sophistication in every spritz.",
        notes: { top: "Black Pepper, Ginger", heart: "Cedarwood, Vetiver", base: "Leather, Smoke, Amber" },
        images: [
            "https://picsum.photos/seed/cedar-perfume-1/600/800",
            "https://picsum.photos/seed/cedar-perfume-2/600/800",
            "https://picsum.photos/seed/cedar-perfume-3/600/800",
            "https://picsum.photos/seed/cedar-perfume-4/600/800"
        ]
    },
    {
        id: 6,
        name: "Golden Saffron",
        category: "perfumes",
        subcategory: "oriental",
        price: 139.99,
        originalPrice: 175.00,
        rating: 4.9,
        reviews: 201,
        badge: "sale",
        featured: true,
        bestseller: true,
        description: "The crown jewel of our collection. Rare Kashmiri saffron intertwined with Turkish rose and liquid gold amber. A fragrance reserved for extraordinary moments.",
        notes: { top: "Saffron, Blood Orange", heart: "Turkish Rose, Labdanum", base: "Gold Amber, Oud, Sandalwood" },
        images: [
            "https://picsum.photos/seed/saffron-perfume-1/600/800",
            "https://picsum.photos/seed/saffron-perfume-2/600/800",
            "https://picsum.photos/seed/saffron-perfume-3/600/800",
            "https://picsum.photos/seed/saffron-perfume-4/600/800"
        ]
    },
    {
        id: 7,
        name: "White Tea & Ginger",
        category: "perfumes",
        subcategory: "fresh",
        price: 69.99,
        originalPrice: null,
        rating: 4.4,
        reviews: 98,
        badge: null,
        featured: false,
        bestseller: false,
        description: "A serene blend of white tea leaves, crystallized ginger, and soft white woods. Clean, calming, and effortlessly elegant.",
        notes: { top: "White Tea, Ginger", heart: "Freesia, Neroli", base: "White Woods, Musk" },
        images: [
            "https://picsum.photos/seed/tea-perfume-1/600/800",
            "https://picsum.photos/seed/tea-perfume-2/600/800",
            "https://picsum.photos/seed/tea-perfume-3/600/800",
            "https://picsum.photos/seed/tea-perfume-4/600/800"
        ]
    },
    {
        id: 8,
        name: "Noir Mystique",
        category: "perfumes",
        subcategory: "dark",
        price: 119.99,
        originalPrice: null,
        rating: 4.7,
        reviews: 76,
        badge: "new",
        featured: false,
        bestseller: false,
        description: "Dark, magnetic, and utterly unforgettable. Black orchid meets dark chocolate and smoky incense in a fragrance that owns every room.",
        notes: { top: "Black Plum, Bergamot", heart: "Black Orchid, Dark Chocolate", base: "Incense, Patchouli, Vetiver" },
        images: [
            "https://picsum.photos/seed/noir-perfume-1/600/800",
            "https://picsum.photos/seed/noir-perfume-2/600/800",
            "https://picsum.photos/seed/noir-perfume-3/600/800",
            "https://picsum.photos/seed/noir-perfume-4/600/800"
        ]
    },
    {
        id: 9,
        name: "Silk Foundation",
        category: "makeup",
        subcategory: "face",
        price: 54.99,
        originalPrice: null,
        rating: 4.8,
        reviews: 312,
        badge: "best",
        featured: true,
        bestseller: true,
        description: "Weightless, buildable coverage that melts into skin like liquid silk. 24-hour wear with a natural luminous finish that lets your skin breathe.",
        images: [
            "https://picsum.photos/seed/silk-foundation-1/600/800",
            "https://picsum.photos/seed/silk-foundation-2/600/800",
            "https://picsum.photos/seed/silk-foundation-3/600/800",
            "https://picsum.photos/seed/silk-foundation-4/600/800"
        ]
    },
    {
        id: 10,
        name: "Rose Lip Kit",
        category: "makeup",
        subcategory: "lips",
        price: 44.99,
        originalPrice: 59.99,
        rating: 4.7,
        reviews: 189,
        badge: "sale",
        featured: true,
        bestseller: false,
        description: "A curated trio of rose-infused lip colors — from soft nude to deep burgundy. Enriched with rose hip oil for all-day hydration and velvety comfort.",
        images: [
            "https://picsum.photos/seed/rose-lipkit-1/600/800",
            "https://picsum.photos/seed/rose-lipkit-2/600/800",
            "https://picsum.photos/seed/rose-lipkit-3/600/800",
            "https://picsum.photos/seed/rose-lipkit-4/600/800"
        ]
    },
    {
        id: 11,
        name: "Velvet Eyeshadow Palette",
        category: "makeup",
        subcategory: "eyes",
        price: 62.99,
        originalPrice: null,
        rating: 4.9,
        reviews: 267,
        badge: "best",
        featured: true,
        bestseller: true,
        description: "12 ultra-pigmented shades in matte, shimmer, and metallic finishes. Buttery smooth formula blends effortlessly from subtle daytime elegance to dramatic evening glamour.",
        images: [
            "https://picsum.photos/seed/eyeshadow-palette-1/600/800",
            "https://picsum.photos/seed/eyeshadow-palette-2/600/800",
            "https://picsum.photos/seed/eyeshadow-palette-3/600/800",
            "https://picsum.photos/seed/eyeshadow-palette-4/600/800"
        ]
    },
    {
        id: 12,
        name: "Glow Highlighter",
        category: "makeup",
        subcategory: "face",
        price: 38.99,
        originalPrice: null,
        rating: 4.6,
        reviews: 145,
        badge: null,
        featured: false,
        bestseller: true,
        description: "Finely milled pearl pigments create an ethereal, lit-from-within glow. Apply to cheekbones, brow bone, and cupid's bow for a radiant, sculpted look.",
        images: [
            "https://picsum.photos/seed/glow-highlighter-1/600/800",
            "https://picsum.photos/seed/glow-highlighter-2/600/800",
            "https://picsum.photos/seed/glow-highlighter-3/600/800",
            "https://picsum.photos/seed/glow-highlighter-4/600/800"
        ]
    },
    {
        id: 13,
        name: "Matte Lip Collection",
        category: "makeup",
        subcategory: "lips",
        price: 49.99,
        originalPrice: 65.00,
        rating: 4.5,
        reviews: 203,
        badge: "sale",
        featured: false,
        bestseller: false,
        description: "Five statement matte lipsticks in universally flattering shades. Long-wearing, non-drying formula with vitamin E for comfort that lasts all day.",
        images: [
            "https://picsum.photos/seed/matte-lips-1/600/800",
            "https://picsum.photos/seed/matte-lips-2/600/800",
            "https://picsum.photos/seed/matte-lips-3/600/800",
            "https://picsum.photos/seed/matte-lips-4/600/800"
        ]
    },
    {
        id: 14,
        name: "Precision Eyeliner",
        category: "makeup",
        subcategory: "eyes",
        price: 24.99,
        originalPrice: null,
        rating: 4.4,
        reviews: 178,
        badge: null,
        featured: false,
        bestseller: false,
        description: "Ultra-fine tip for effortless precision. Jet-black, waterproof, smudge-proof formula that lasts up to 24 hours. From subtle lash lines to dramatic wings.",
        images: [
            "https://picsum.photos/seed/eyeliner-1/600/800",
            "https://picsum.photos/seed/eyeliner-2/600/800",
            "https://picsum.photos/seed/eyeliner-3/600/800",
            "https://picsum.photos/seed/eyeliner-4/600/800"
        ]
    },
    {
        id: 15,
        name: "Blush Bouquet",
        category: "makeup",
        subcategory: "face",
        price: 36.99,
        originalPrice: null,
        rating: 4.7,
        reviews: 134,
        badge: "new",
        featured: false,
        bestseller: false,
        description: "A palette of four buildable blush shades from soft petal pink to deep berry. Micro-milled powder blends seamlessly for a natural, healthy flush.",
        images: [
            "https://picsum.photos/seed/blush-bouquet-1/600/800",
            "https://picsum.photos/seed/blush-bouquet-2/600/800",
            "https://picsum.photos/seed/blush-bouquet-3/600/800",
            "https://picsum.photos/seed/blush-bouquet-4/600/800"
        ]
    },
    {
        id: 16,
        name: "Setting Mist",
        category: "makeup",
        subcategory: "face",
        price: 28.99,
        originalPrice: null,
        rating: 4.6,
        reviews: 221,
        badge: null,
        featured: false,
        bestseller: true,
        description: "Micro-fine mist locks in makeup for up to 16 hours. Infused with hyaluronic acid and rose water to keep skin hydrated and dewy without disturbing your look.",
        images: [
            "https://picsum.photos/seed/setting-mist-1/600/800",
            "https://picsum.photos/seed/setting-mist-2/600/800",
            "https://picsum.photos/seed/setting-mist-3/600/800",
            "https://picsum.photos/seed/setting-mist-4/600/800"
        ]
    }
];

// ---- Cart Functions ----
function getCart() {
    try {
        return JSON.parse(localStorage.getItem('beautyCart')) || [];
    } catch (e) {
        return [];
    }
}

function saveCart(cart) {
    localStorage.setItem('beautyCart', JSON.stringify(cart));
    updateCartBadge();
}

function addToCart(productId, quantity = 1) {
    const cart = getCart();
    const product = products.find(p => p.id === productId);
    if (!product) return;

    const existing = cart.find(item => item.id === productId);
    if (existing) {
        existing.quantity += quantity;
    } else {
        cart.push({
            id: product.id,
            name: product.name,
            price: product.price,
            image: product.images[0],
            category: product.category,
            quantity: quantity
        });
    }

    saveCart(cart);
    showToast(`${product.name} added to cart`);
}

function removeFromCart(productId) {
    let cart = getCart();
    cart = cart.filter(item => item.id !== productId);
    saveCart(cart);
    if (typeof renderCartPage === 'function') renderCartPage();
    if (typeof renderCheckoutSummary === 'function') renderCheckoutSummary();
}

function updateCartQuantity(productId, newQty) {
    const cart = getCart();
    const item = cart.find(i => i.id === productId);
    if (!item) return;

    if (newQty <= 0) {
        removeFromCart(productId);
        return;
    }

    item.quantity = newQty;
    saveCart(cart);
    if (typeof renderCartPage === 'function') renderCartPage();
    if (typeof renderCheckoutSummary === 'function') renderCheckoutSummary();
}

function getCartTotal() {
    const cart = getCart();
    return cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
}

function getCartCount() {
    const cart = getCart();
    return cart.reduce((sum, item) => sum + item.quantity, 0);
}

function updateCartBadge() {
    const badges = document.querySelectorAll('.cart-badge');
    const count = getCartCount();
    badges.forEach(badge => {
        badge.textContent = count;
        if (count > 0) {
            badge.classList.add('show');
        } else {
            badge.classList.remove('show');
        }
    });
}

// ---- Toast Notification ----
function showToast(message, icon = 'fa-check-circle') {
    let toast = document.getElementById('toast-notification');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'toast-notification';
        toast.className = 'toast-luxury';
        toast.innerHTML = `<i class="fas ${icon}"></i><span></span>`;
        document.body.appendChild(toast);
    }
    toast.querySelector('span').textContent = message;
    toast.querySelector('i').className = `fas ${icon}`;
    toast.classList.add('show');
    clearTimeout(toast._timeout);
    toast._timeout = setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// ---- Theme Toggle ----
function initTheme() {
    const saved = localStorage.getItem('beautyTheme');
    if (saved === 'light') {
        document.documentElement.setAttribute('data-theme', 'light');
    } else {
        document.documentElement.removeAttribute('data-theme');
    }
    updateThemeIcon();
}

function toggleTheme() {
    const isLight = document.documentElement.getAttribute('data-theme') === 'light';
    if (isLight) {
        document.documentElement.removeAttribute('data-theme');
        localStorage.setItem('beautyTheme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('beautyTheme', 'light');
    }
    updateThemeIcon();
}

function updateThemeIcon() {
    const isLight = document.documentElement.getAttribute('data-theme') === 'light';
    document.querySelectorAll('.theme-toggle-icon').forEach(icon => {
        icon.className = isLight ? 'fas fa-moon theme-toggle-icon' : 'fas fa-sun theme-toggle-icon';
    });
}

// ---- Scroll Reveal ----
function initScrollReveal() {
    const reveals = document.querySelectorAll('.reveal');
    if (!reveals.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(el => observer.observe(el));
}

// ---- Navbar Scroll Effect ----
function initNavbarScroll() {
    const navbar = document.querySelector('.navbar-luxury');
    if (!navbar) return;

    function onScroll() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
}

// ---- Scroll to Top ----
function initScrollToTop() {
    const btn = document.getElementById('scroll-top-btn');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }
    }, { passive: true });

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// ---- Stars HTML ----
function starsHTML(rating) {
    let html = '';
    const full = Math.floor(rating);
    const half = rating % 1 >= 0.3;
    for (let i = 0; i < full; i++) html += '<i class="fas fa-star"></i>';
    if (half) html += '<i class="fas fa-star-half-alt"></i>';
    const empty = 5 - full - (half ? 1 : 0);
    for (let i = 0; i < empty; i++) html += '<i class="far fa-star"></i>';
    return html;
}

// ---- Product Card HTML ----
function productCardHTML(product, delayClass = '') {
    let badgeHTML = '';
    if (product.badge === 'sale') badgeHTML = '<span class="product-badge badge-sale">Sale</span>';
    else if (product.badge === 'new') badgeHTML = '<span class="product-badge badge-new">New</span>';
    else if (product.badge === 'best') badgeHTML = '<span class="product-badge badge-best">Bestseller</span>';

    let priceHTML = `$${product.price.toFixed(2)}`;
    if (product.originalPrice) {
        priceHTML += `<span class="product-price-old">$${product.originalPrice.toFixed(2)}</span>`;
    }

    return `
    <div class="col-6 col-md-4 col-lg-3 reveal ${delayClass}">
      <div class="product-card">
        <div class="product-card-image">
          ${badgeHTML}
          <a href="product.html?id=${product.id}">
            <img src="${product.images[0]}" alt="${product.name}" loading="lazy">
          </a>
          <div class="product-quick-actions">
            <button class="quick-action-btn" onclick="addToCart(${product.id})" title="Add to Cart">
              <i class="fas fa-shopping-bag"></i>
            </button>
            <a href="product.html?id=${product.id}" class="quick-action-btn" title="View Details">
              <i class="fas fa-eye"></i>
            </a>
          </div>
        </div>
        <div class="product-card-body">
          <div class="product-card-category">${product.category}</div>
          <a href="product.html?id=${product.id}" class="product-card-title">${product.name}</a>
          <div class="product-card-rating">
            <div class="stars">${starsHTML(product.rating)}</div>
            <span class="count">(${product.reviews})</span>
          </div>
          <div class="product-card-footer">
            <div class="product-price">${priceHTML}</div>
          </div>
        </div>
      </div>
    </div>
  `;
}

// ---- Home Page Logic ----
function initHomePage() {
    // Featured Products
    const featuredGrid = document.getElementById('featured-grid');
    if (featuredGrid) {
        const featured = products.filter(p => p.featured).slice(0, 4);
        featuredGrid.innerHTML = featured.map((p, i) => productCardHTML(p, `reveal-delay-${i + 1}`)).join('');
    }

    // Best Sellers
    const bestGrid = document.getElementById('bestsellers-grid');
    if (bestGrid) {
        const best = products.filter(p => p.bestseller).slice(0, 4);
        bestGrid.innerHTML = best.map((p, i) => productCardHTML(p, `reveal-delay-${i + 1}`)).join('');
    }

    initScrollReveal();
}

// ---- Shop Page Logic ----
function initShopPage() {
    const grid = document.getElementById('shop-grid');
    const searchInput = document.getElementById('shop-search');
    const sortSelect = document.getElementById('shop-sort');
    const filterChips = document.querySelectorAll('.filter-chip[data-category]');
    const priceFilters = document.querySelectorAll('.filter-chip[data-price]');
    const resultCount = document.getElementById('result-count');

    let activeCategory = 'all';
    let activePrice = 'all';
    let searchQuery = '';
    let sortBy = 'featured';

    function renderProducts() {
        let filtered = [...products];

        // Category filter
        if (activeCategory !== 'all') {
            filtered = filtered.filter(p => p.category === activeCategory);
        }

        // Price filter
        if (activePrice !== 'all') {
            switch (activePrice) {
                case 'under50': filtered = filtered.filter(p => p.price < 50); break;
                case '50to100': filtered = filtered.filter(p => p.price >= 50 && p.price <= 100); break;
                case 'over100': filtered = filtered.filter(p => p.price > 100); break;
            }
        }

        // Search
        if (searchQuery) {
            const q = searchQuery.toLowerCase();
            filtered = filtered.filter(p =>
                p.name.toLowerCase().includes(q) ||
                p.category.toLowerCase().includes(q) ||
                p.description.toLowerCase().includes(q)
            );
        }

        // Sort
        switch (sortBy) {
            case 'price-low': filtered.sort((a, b) => a.price - b.price); break;
            case 'price-high': filtered.sort((a, b) => b.price - a.price); break;
            case 'rating': filtered.sort((a, b) => b.rating - a.rating); break;
            case 'newest': filtered.sort((a, b) => b.id - a.id); break;
            default: filtered.sort((a, b) => (b.featured ? 1 : 0) - (a.featured ? 1 : 0));
        }

        if (resultCount) resultCount.textContent = `${filtered.length} product${filtered.length !== 1 ? 's' : ''}`;

        if (filtered.length === 0) {
            grid.innerHTML = `
        <div class="col-12 no-products">
          <i class="fas fa-search"></i>
          <h4>No products found</h4>
          <p>Try adjusting your filters or search terms.</p>
        </div>
      `;
        } else {
            grid.innerHTML = filtered.map((p, i) => productCardHTML(p, `reveal-delay-${(i % 4) + 1}`)).join('');
        }

        initScrollReveal();
    }

    // Event listeners
    filterChips.forEach(chip => {
        chip.addEventListener('click', () => {
            filterChips.forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
            activeCategory = chip.dataset.category;
            renderProducts();
        });
    });

    priceFilters.forEach(chip => {
        chip.addEventListener('click', () => {
            priceFilters.forEach(c => c.classList.remove('active'));
            chip.classList.add('active');
            activePrice = chip.dataset.price;
            renderProducts();
        });
    });

    if (searchInput) {
        let debounceTimer;
        searchInput.addEventListener('input', () => {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                searchQuery = searchInput.value.trim();
                renderProducts();
            }, 300);
        });
    }

    if (sortSelect) {
        sortSelect.addEventListener('change', () => {
            sortBy = sortSelect.value;
            renderProducts();
        });
    }

    renderProducts();
}

// ---- Product Page Logic ----
function initProductPage() {
    const params = new URLSearchParams(window.location.search);
    const productId = parseInt(params.get('id'));
    const product = products.find(p => p.id === productId);

    if (!product) {
        document.getElementById('product-page-content').innerHTML = `
      <div class="text-center py-5">
        <i class="fas fa-box-open" style="font-size:4rem;color:var(--text-muted);opacity:0.3;margin-bottom:1.5rem;display:block"></i>
        <h3>Product not found</h3>
        <p class="text-secondary-custom mt-2">The product you are looking for does not exist.</p>
        <a href="shop.html" class="btn-gold mt-3 d-inline-block">Browse Shop</a>
      </div>
    `;
        return;
    }

    // Gallery
    const mainImage = document.getElementById('gallery-main-img');
    const thumbsContainer = document.getElementById('gallery-thumbs');

    if (mainImage && thumbsContainer) {
        mainImage.src = product.images[0];
        mainImage.alt = product.name;

        thumbsContainer.innerHTML = product.images.map((img, i) => `
      <div class="thumb ${i === 0 ? 'active' : ''}" onclick="switchGalleryImage('${img}', this)">
        <img src="${img}" alt="${product.name} ${i + 1}" loading="lazy">
      </div>
    `).join('');
    }

    // Info
    const titleEl = document.getElementById('product-title');
    const priceEl = document.getElementById('product-price-display');
    const ratingEl = document.getElementById('product-rating');
    const descEl = document.getElementById('product-description');
    const notesEl = document.getElementById('product-notes');

    if (titleEl) titleEl.textContent = product.name;

    if (priceEl) {
        let html = `$${product.price.toFixed(2)}`;
        if (product.originalPrice) {
            html += `<span class="old-price">$${product.originalPrice.toFixed(2)}</span>`;
        }
        priceEl.innerHTML = html;
    }

    if (ratingEl) {
        ratingEl.innerHTML = `
      <div class="stars">${starsHTML(product.rating)}</div>
      <span class="rating-text">${product.rating} (${product.reviews} reviews)</span>
    `;
    }

    if (descEl) descEl.textContent = product.description;

    if (notesEl && product.notes) {
        notesEl.innerHTML = `
      <div class="mb-2"><strong style="color:var(--accent)">Top Notes:</strong> <span class="text-secondary-custom">${product.notes.top}</span></div>
      <div class="mb-2"><strong style="color:var(--accent)">Heart Notes:</strong> <span class="text-secondary-custom">${product.notes.heart}</span></div>
      <div><strong style="color:var(--accent)">Base Notes:</strong> <span class="text-secondary-custom">${product.notes.base}</span></div>
    `;
    }

    // Quantity
    const qtyInput = document.getElementById('product-quantity');
    window.changeProductQty = function(delta) {
        let val = parseInt(qtyInput.value) + delta;
        if (val < 1) val = 1;
        if (val > 99) val = 99;
        qtyInput.value = val;
    };

    // Add to cart
    const addToCartBtn = document.getElementById('add-to-cart-btn');
    if (addToCartBtn) {
        addToCartBtn.addEventListener('click', () => {
            const qty = parseInt(qtyInput.value) || 1;
            addToCart(product.id, qty);
            addToCartBtn.classList.add('btn-loading');
            setTimeout(() => addToCartBtn.classList.remove('btn-loading'), 600);
        });
    }

    // Order form
    const orderForm = document.getElementById('order-form');
    if (orderForm) {
        orderForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = orderForm.querySelector('button[type="submit"]');
            btn.classList.add('btn-loading');
            setTimeout(() => {
                btn.classList.remove('btn-loading');
                showToast('Order placed successfully!', 'fa-check-circle');
                orderForm.reset();
            }, 1200);
        });
    }

    // Related products
    const relatedGrid = document.getElementById('related-products-grid');
    if (relatedGrid) {
        const related = products
            .filter(p => p.category === product.category && p.id !== product.id)
            .slice(0, 4);
        relatedGrid.innerHTML = related.map((p, i) => productCardHTML(p, `reveal-delay-${i + 1}`)).join('');
    }

    initScrollReveal();
}

window.switchGalleryImage = function(src, thumbEl) {
    const mainImg = document.getElementById('gallery-main-img');
    if (!mainImg) return;
    mainImg.style.opacity = '0';
    setTimeout(() => {
        mainImg.src = src;
        mainImg.style.opacity = '1';
    }, 250);

    document.querySelectorAll('.product-gallery-thumbs .thumb').forEach(t => t.classList.remove('active'));
    if (thumbEl) thumbEl.classList.add('active');
};

// ---- Cart Page Logic ----
function renderCartPage() {
    const container = document.getElementById('cart-items-container');
    const summaryContainer = document.getElementById('cart-summary-container');
    const emptyState = document.getElementById('cart-empty-state');
    const cartContent = document.getElementById('cart-content');

    const cart = getCart();

    if (cart.length === 0) {
        if (emptyState) emptyState.style.display = 'block';
        if (cartContent) cartContent.style.display = 'none';
        return;
    }

    if (emptyState) emptyState.style.display = 'none';
    if (cartContent) cartContent.style.display = 'block';

    if (container) {
        container.innerHTML = cart.map(item => `
      <div class="cart-item">
        <div class="cart-item-image">
          <a href="product.html?id=${item.id}"><img src="${item.image}" alt="${item.name}" loading="lazy"></a>
        </div>
        <div class="cart-item-info">
          <a href="product.html?id=${item.id}" class="cart-item-title">${item.name}</a>
          <div class="cart-item-category">${item.category}</div>
          <div class="mt-2">
            <div class="quantity-selector">
              <button onclick="updateCartQuantity(${item.id}, ${item.quantity - 1})">−</button>
              <input type="text" value="${item.quantity}" readonly>
              <button onclick="updateCartQuantity(${item.id}, ${item.quantity + 1})">+</button>
            </div>
          </div>
        </div>
        <div class="text-end">
          <div class="cart-item-price">$${(item.price * item.quantity).toFixed(2)}</div>
          <button class="cart-remove-btn" onclick="removeFromCart(${item.id})" title="Remove">
            <i class="fas fa-trash-alt"></i>
          </button>
        </div>
      </div>
    `).join('');
    }

    if (summaryContainer) {
        const subtotal = getCartTotal();
        const shipping = subtotal > 100 ? 0 : 9.99;
        const total = subtotal + shipping;

        summaryContainer.innerHTML = `
      <h4 class="mb-4" style="font-family:var(--font-display)">Order Summary</h4>
      <div class="cart-summary-row">
        <span class="text-secondary-custom">Subtotal (${getCartCount()} items)</span>
        <span>$${subtotal.toFixed(2)}</span>
      </div>
      <div class="cart-summary-row">
        <span class="text-secondary-custom">Shipping</span>
        <span>${shipping === 0 ? '<span style="color:var(--success)">Free</span>' : '$' + shipping.toFixed(2)}</span>
      </div>
      ${shipping > 0 ? '<div style="font-size:0.78rem;color:var(--text-muted);padding:0 0 0.5rem">Free shipping on orders over $100</div>' : ''}
      <div class="cart-summary-row total">
        <span>Total</span>
        <span>$${total.toFixed(2)}</span>
      </div>
      <a href="checkout.html" class="btn-gold w-100 mt-3 d-block text-center">Proceed to Checkout</a>
      <a href="shop.html" class="btn-outline-gold btn-sm-gold w-100 mt-2 d-block text-center">Continue Shopping</a>
    `;
    }
}

function initCartPage() {
    renderCartPage();
}

// ---- Checkout Page Logic ----
function renderCheckoutSummary() {
    const container = document.getElementById('checkout-summary');
    if (!container) return;

    const cart = getCart();
    const subtotal = getCartTotal();
    const shipping = subtotal > 100 ? 0 : 9.99;
    const total = subtotal + shipping;

    container.innerHTML = `
    <div class="cart-summary-card">
      <h4 class="mb-3" style="font-family:var(--font-display)">Order Summary</h4>
      <div style="max-height:250px;overflow-y:auto;margin-bottom:1rem">
        ${cart.map(item => `
          <div style="display:flex;gap:0.75rem;align-items:center;padding:0.6rem 0;border-bottom:1px solid var(--border-color)">
            <img src="${item.image}" alt="${item.name}" style="width:45px;height:60px;object-fit:cover;border-radius:4px">
            <div style="flex:1">
              <div style="font-size:0.85rem;font-weight:600">${item.name}</div>
              <div style="font-size:0.78rem;color:var(--text-muted)">Qty: ${item.quantity}</div>
            </div>
            <div style="font-weight:700;color:var(--accent);font-size:0.9rem">$${(item.price * item.quantity).toFixed(2)}</div>
          </div>
        `).join('')}
      </div>
      <div class="cart-summary-row">
        <span class="text-secondary-custom">Subtotal</span>
        <span>$${subtotal.toFixed(2)}</span>
      </div>
      <div class="cart-summary-row">
        <span class="text-secondary-custom">Shipping</span>
        <span>${shipping === 0 ? '<span style="color:var(--success)">Free</span>' : '$' + shipping.toFixed(2)}</span>
      </div>
      <div class="cart-summary-row total">
        <span>Total</span>
        <span>$${total.toFixed(2)}</span>
      </div>
    </div>
  `;
}

function initCheckoutPage() {
    renderCheckoutSummary();

    const checkoutForm = document.getElementById('checkout-form');
    if (checkoutForm) {
        checkoutForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = checkoutForm.querySelector('button[type="submit"]');
            btn.classList.add('btn-loading');
            setTimeout(() => {
                btn.classList.remove('btn-loading');
                btn.classList.add('confirm-animation');
                localStorage.removeItem('beautyCart');
                updateCartBadge();
                showToast('Order confirmed! Thank you for your purchase.', 'fa-check-circle');
                setTimeout(() => {
                    window.location.href = 'index.html';
                }, 2000);
            }, 1500);
        });
    }

    // Payment option selection
    document.querySelectorAll('.payment-option').forEach(opt => {
        opt.addEventListener('click', () => {
            document.querySelectorAll('.payment-option').forEach(o => o.classList.remove('selected'));
            opt.classList.add('selected');
            opt.querySelector('input[type="radio"]').checked = true;
        });
    });
}

// ---- Contact Page Logic ----
function initContactPage() {
    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            btn.classList.add('btn-loading');
            setTimeout(() => {
                btn.classList.remove('btn-loading');
                showToast('Message sent successfully!', 'fa-paper-plane');
                form.reset();
            }, 1200);
        });
    }
}

// ---- Initialize ----
document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initNavbarScroll();
    initScrollToTop();
    updateCartBadge();

    // Theme toggle buttons
    document.querySelectorAll('.theme-toggle-btn').forEach(btn => {
        btn.addEventListener('click', toggleTheme);
    });

    // Page-specific initialization
    const page = document.body.dataset.page;
    switch (page) {
        case 'home': initHomePage(); break;
        case 'shop': initShopPage(); break;
        case 'product': initProductPage(); break;
        case 'cart': initCartPage(); break;
        case 'checkout': initCheckoutPage(); break;
        case 'contact': initContactPage(); break;
        default: initScrollReveal();
    }
});
