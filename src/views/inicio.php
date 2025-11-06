<!-- === ESTILOS PERSONALIZADOS === -->
<style>
    body {
        background: linear-gradient(135deg, #e8defa, #fff);
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    .token-wrapper {
        max-width: 900px;
        margin: 60px auto;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 6px 20px rgba(156, 39, 176, 0.25);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .token-wrapper:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(156, 39, 176, 0.35);
    }

    .token-header {
        background: linear-gradient(135deg, #a56cc1, #c77dff);
        color: #fff;
        text-align: center;
        padding: 30px 20px;
    }

    .token-header h1 {
        margin: 0;
        font-size: 1.8rem;
        letter-spacing: 1px;
    }

    .token-header p {
        margin-top: 8px;
        font-size: 0.95rem;
        opacity: 0.9;
    }

    .table-container {
        padding: 25px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        overflow: hidden;
        border-radius: 10px;
    }

    thead {
        background-color: #c77dff;
        color: #fff;
    }

    th, td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #eee;
        font-size: 0.95rem;
    }

    tbody tr:hover {
        background-color: #f7ecff;
    }

    .btn-action {
        background-color: #a56cc1;
        color: #fff;
        border: none;
        border-radius: 25px;
        padding: 6px 16px;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s;
    }

    .btn-action:hover {
        background-color: #9c27b0;
        transform: scale(1.05);
    }

    .btn-refresh {
        display: inline-block;
        margin-top: 20px;
        background-color: #c77dff;
        color: white;
        border: none;
        border-radius: 30px;
        padding: 10px 20px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-refresh:hover {
        background-color: #9d4edd;
        transform: translateY(-2px);
    }

    .footer-note {
        text-align: center;
        font-size: 0.85rem;
        color: #7b7b7b;
        margin-bottom: 15px;
    }
</style>

<!-- === CONTENIDO === -->
<div class="token-wrapper">
    <div class="token-header">
        <h1>Gestión de Tokens API</h1>
        
    </div>

    <div class="table-container">
        <table id="tablaTokens">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Token</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tbl_tokens">
                <!-- Aquí se cargarán los tokens dinámicamente -->
            </tbody>
        </table>
</div>

<!-- === SCRIPTS === -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo BASE_URL ?>src/views/js/functions_token.js"></script>
