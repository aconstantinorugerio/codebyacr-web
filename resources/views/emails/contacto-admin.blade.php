<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo Contacto - CodeByACR</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f7fb;
    font-family:Arial, Helvetica, sans-serif;
">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f7fb;padding:40px 0;">
<tr>
<td align="center">

<table width="650" cellpadding="0" cellspacing="0"
style="
background:#ffffff;
border-radius:18px;
overflow:hidden;
box-shadow:0 10px 30px rgba(0,0,0,.08);
">

    <!-- HEADER -->
    <tr>
        <td
        style="
        background:linear-gradient(135deg,#0f172a,#1e40af);
        padding:40px;
        text-align:center;
        ">

            <h1 style="
            color:#ffffff;
            margin:0;
            font-size:34px;
            letter-spacing:1px;
            ">
                CodeByACR
            </h1>

            <p style="
            color:#cbd5e1;
            margin-top:10px;
            font-size:15px;
            ">
                Desarrollo Web • Laravel • UI/UX • Automatización
            </p>

        </td>
    </tr>

    <!-- TITULO -->
    <tr>
        <td style="padding:40px 40px 10px 40px;">

            <h2 style="
            margin:0;
            color:#0f172a;
            font-size:28px;
            ">
                🚀 Nuevo formulario de contacto recibido
            </h2>

            <p style="
            color:#64748b;
            margin-top:10px;
            font-size:15px;
            line-height:24px;
            ">
                Se ha recibido una nueva solicitud desde el sitio web
                <strong>CodeByACR.com</strong>.
            </p>

        </td>
    </tr>

    <!-- DATOS -->
    <tr>
        <td style="padding:20px 40px;">

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>
                    <td style="
                    background:#f8fafc;
                    padding:15px;
                    border-radius:10px;
                    border-left:4px solid #2563eb;
                    ">
                        <strong>👤 Nombre:</strong><br>
                        {{ $datos['nombre'] }}
                    </td>
                </tr>

                <tr><td height="12"></td></tr>

                <tr>
                    <td style="
                    background:#f8fafc;
                    padding:15px;
                    border-radius:10px;
                    border-left:4px solid #2563eb;
                    ">
                        <strong>📧 Correo:</strong><br>
                        {{ $datos['correo'] }}
                    </td>
                </tr>

                <tr><td height="12"></td></tr>

                <tr>
                    <td style="
                    background:#f8fafc;
                    padding:15px;
                    border-radius:10px;
                    border-left:4px solid #2563eb;
                    ">
                        <strong>📱 Teléfono:</strong><br>
                        {{ $datos['telefono'] }}
                    </td>
                </tr>

                <tr><td height="12"></td></tr>

                <tr>
                    <td style="
                    background:#f8fafc;
                    padding:15px;
                    border-radius:10px;
                    border-left:4px solid #2563eb;
                    ">
                        <strong>🏢 Empresa:</strong><br>
                        {{ $datos['empresa'] }}
                    </td>
                </tr>

                <tr><td height="12"></td></tr>

                <tr>
                    <td style="
                    background:#f8fafc;
                    padding:20px;
                    border-radius:10px;
                    border-left:4px solid #10b981;
                    ">
                        <strong>💬 Mensaje:</strong>

                        <p style="
                        margin-top:10px;
                        line-height:26px;
                        color:#334155;
                        ">
                            {{ $datos['mensaje'] }}
                        </p>
                    </td>
                </tr>

            </table>

        </td>
    </tr>

    <!-- BOTON -->
    <tr>
        <td align="center" style="padding:20px 40px 40px 40px;">

            <a href="mailto:{{ $datos['correo'] }}"
            style="
            background:#2563eb;
            color:#ffffff;
            text-decoration:none;
            padding:14px 30px;
            border-radius:8px;
            font-weight:bold;
            display:inline-block;
            ">
                Responder al contacto
            </a>

        </td>
    </tr>

    <!-- FIRMA -->
    <tr>
        <td style="
        background:#f8fafc;
        padding:30px;
        text-align:center;
        border-top:1px solid #e2e8f0;
        ">

            <img src="{{ asset('asset/images/Firma_ACR_CodeByACR.png') }}"
                 alt="Firma"
                 width="100%"
                 style="margin-bottom:15px;">

    

           

            <p style="
            margin:0;
            color:#64748b;
            font-size:14px;
            ">
                🌐 www.codebyacr.com
            </p>

        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>