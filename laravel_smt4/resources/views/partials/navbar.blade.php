<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar-full">
    <div class="navbar-left">
        <h2 class="brand">🌸 Hidaya_Davier</h2>
    </div>

    <div class="navbar-right">
        <a href="/" class="nav-link">Home</a>
        <a href="/posts" class="nav-link">Posts</a>
        <a href="/about" class="nav-link">About</a>
        <a href="/contact" class="nav-link">Contact</a>
    </div>
</nav>

<style>
/* Navbar full width */
.navbar-full {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;              /* full layar */
    padding: 15px 50px;       /* jarak kiri-kanan */
    background-color: #ffffff; /* putih */
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    font-family: 'Poppins', sans-serif;
    position: sticky;
    top: 0;
    z-index: 1000;
}

/* Brand di kiri */
.navbar-left .brand {
    margin: 0;
    color: #ff4fa3;
    font-weight: 700;
    font-size: 1.6rem;
    letter-spacing: 1px;
    transition: transform 0.3s, text-shadow 0.3s;
}
.navbar-left .brand:hover {
    transform: scale(1.1);
    text-shadow: 0 0 15px rgba(255,105,180,0.6);
}

/* Menu di kanan */
.navbar-right {
    display: flex;
    gap: 30px;
}
.navbar-right .nav-link {
    color: #d63384;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: color 0.3s, transform 0.3s;
}
.navbar-right .nav-link:hover {
    color: #ff80b5;
    transform: scale(1.05);
}

/* Responsive */
@media (max-width: 768px) {
    .navbar-full {
        flex-direction: column;
        align-items: flex-start;
        padding: 15px 20px;
    }
    .navbar-right {
        flex-wrap: wrap;
        gap: 15px;
    }
}
</style>
