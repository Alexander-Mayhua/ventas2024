<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f0f2f5;
    }

    .sidebar {
        width: 250px;
        background: #2c3e50;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        color: white;
        padding-top: 20px;
    }

    .main-content {

        padding: 20px;

    }

    .logo {
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid #34495e;
    }

    .menu-item {
        padding: 15px 25px;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
    }

    .menu-item:hover {
        background: #34495e;
    }

    .menu-item i {
        margin-right: 10px;
    }

    .dashboard-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card h3 {
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 24px;
        color: #3498db;
        font-weight: bold;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .search-bar {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 300px;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 70px;
        }

        .menu-item span {
            display: none;
        }

        .main-content {
            margin-left: 70px;
        }
    }
</style>


</head>
<body>
    <div class="main-content" style="min-height: 500px;">
        <div class="header">
            <h1>Panel de Administrador</h1>
            <input type="text" class="search-bar" placeholder="Buscar...">
        </div>

        <div class="dashboard-cards" style="height: 200px; text-align: center;">
            <div class="card">
                <div class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>productos">PRODUCTOS</a>
                </div>
            </div>
            <div class="card">
                <div class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>compras">COMPRAS</a>
                </div>
            </div>
            <div class="card">
                <div class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>categorias">CATEGORIAS</a>
                </div>
            </div>
            <div class="card">
                <div class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo BASE_URL ?>persona">PERSONA</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>