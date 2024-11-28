<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
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
            margin-left: 250px;
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
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h2>Admin Panel</h2>
        </div>
        <div class="menu-item">
            <i class="fas fa-home"></i>
            <span>inicio</span>
        </div>
        <div class="menu-item">
            <i class="fas fa-box"></i>
            <span>Productos</span>
        </div>
        <div class="menu-item">
            <i class="fas fa-shopping-cart"></i>
            <span>Compras</span>
        </div>
        <div class="menu-item">
            <i class="fas fa-tags"></i>
            <span>Categorías</span>
        </div>
        <div class="menu-item">
            <i class="fas fa-users"></i>
            <span>Personas</span>
        </div>
        <div class="menu-item">
            <i class="fas fa-cog"></i>
            <span>Configuración</span>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Dashboard</h1>
            <input type="text" class="search-bar" placeholder="Buscar...">
        </div>

        <div class="dashboard-cards">
            <div class="card">
                <h3>Total Productos</h3>
                <p>150</p>
            </div>
            <div class="card">
                <h3>Total Compras</h3>
                <p>45</p>
            </div>
            <div class="card">
                <h3>Categorías</h3>
                <p>12</p>
            </div>
            <div class="card">
                <h3>Usuarios</h3>
                <p>89</p>
            </div>
        </div>
    </div>
</body>
</html>