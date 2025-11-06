<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #e9d5ff, #f5e1ff);
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form {
        background: linear-gradient(135deg, #c084fc, #a855f7);
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        width: 380px;
        color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .form:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(168, 85, 247, 0.3);
    }

    h2 {
        text-align: center;
        font-size: 26px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 25px;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 6px;
        color: #f3e8ff;
    }

    input[type="text"] {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 10px;
        font-size: 15px;
        background: rgba(255, 255, 255, 0.9);
        color: #4a148c;
        transition: all 0.3s ease;
        box-shadow: inset 0 0 4px rgba(0,0,0,0.1);
    }

    input[type="text"]:focus {
        outline: none;
        background: #f8e8ff;
        box-shadow: 0 0 10px rgba(168, 85, 247, 0.6);
    }

    .button {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, #b06cf9, #9333ea);
        color: #fff;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        margin-top: 10px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(147, 51, 234, 0.4);
    }

    .button:hover {
        background: linear-gradient(135deg, #a855f7, #7e22ce);
        box-shadow: 0 6px 15px rgba(126, 34, 206, 0.4);
    }

    .form div {
        margin-bottom: 20px;
    }
</style>

<div class="form-container">
    <form class="form" id="frmEditarToken">
        <h2>Editar Token</h2>

        <div>
            <label for="token">Token</label>
            <input type="text" id="token" name="token" required>
        </div>

        <button type="button" class="button" onclick="actualizar_token();">Actualizar Token</button>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </form>
</div>

<script src="<?php echo BASE_URL ?>src/views/js/functions_token.js"></script>

<script>
    // Cargar token actual automáticamente al abrir la página
    editar_token();
</script>
