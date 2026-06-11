<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Hemos recibido tu solicitud</title>
</head>

<body style="
margin:0;
padding:0;
background:#2563eb;
font-family:Arial, Helvetica, sans-serif;
">

<table width="100%" cellpadding="0" cellspacing="0"
style="background:#f4f7fb;padding:40px 0;">

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
        background-color:#0f172a;
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

    <!-- CONTENIDO -->
    <tr>
        <td style="padding:45px;">

            <h2 style="
            margin-top:0;
            color:#0f172a;
            font-size:28px;
            ">
                👋 Hola {{ $datos['nombre'] }}
            </h2>

            <p style="
            color:#475569;
            font-size:16px;
            line-height:28px;
            ">
                Gracias por ponerte en contacto conmigo.
            </p>

            <p style="
            color:#475569;
            font-size:16px;
            line-height:28px;
            ">
                He recibido correctamente la información de tu proyecto y la revisaré personalmente para comprender tus necesidades y objetivos.
            </p>

            <div style="
            background:#f8fafc;
            border-left:4px solid #2563eb;
            padding:20px;
            margin:30px 0;
            border-radius:8px;
            ">

                <h3 style="
                margin-top:0;
                color:#0f172a;
                ">
                    🚀 ¿Qué sigue?
                </h3>

                <p style="
                margin-bottom:10px;
                color:#475569;
                ">
                    ✔ Revisaré tu solicitud.
                </p>

                <p style="
                margin-bottom:10px;
                color:#475569;
                ">
                    ✔ Analizaré los requerimientos de tu proyecto.
                </p>

                <p style="
                margin-bottom:10px;
                color:#475569;
                ">
                    ✔ Me pondré en contacto contigo para definir los siguientes pasos.
                </p>

                <p style="
                margin-bottom:0;
                color:#475569;
                ">
                    ✔ Recibirás una respuesta en un plazo aproximado de 24 horas.
                </p>

            </div>

            <p style="
            color:#475569;
            font-size:16px;
            line-height:28px;
            ">
                Si tu proyecto requiere atención inmediata, puedes comunicarte directamente conmigo por WhatsApp.
            </p>

        </td>
    </tr>

    <!-- BOTON -->
    <tr>
        <td align="center" style="padding:0 45px 40px 45px;">

            <a href="https://wa.me/527223635998"
            style="
            background:#25D366;
            color:#ffffff;
            text-decoration:none;
            padding:15px 30px;
            border-radius:8px;
            font-weight:bold;
            display:inline-block;
            font-size:16px;
            ">
                💬 Contactar por WhatsApp
            </a>

        </td>
    </tr>

    <!-- MENSAJE FINAL -->
    <tr>
        <td style="padding:0 45px 40px 45px;">

            <p style="
            color:#475569;
            font-size:16px;
            line-height:28px;
            ">
                Gracias por confiar en <strong>CodeByACR</strong>.
            </p>

            <p style="
            color:#475569;
            font-size:16px;
            line-height:28px;
            ">
                Será un gusto ayudarte a transformar tu idea en una solución digital profesional.
            </p>

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
                 alt="Firma CodeByACR"
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