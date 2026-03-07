<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Novo Pedido de Orçamento</title>
</head>

<body style="margin:0; padding:0; background:#F3F4F6; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; border:1px solid #D1D5DB;">

                    <!-- HEADER -->

                    <tr>
                        <td style="background:#0D47A1; padding:25px; text-align:center; color:white;">
                            <h1 style="margin:0; font-size:24px;">Origem3D</h1>
                            <p style="margin:5px 0 0 0; font-size:14px; opacity:0.9;">
                                Novo pedido de orçamento
                            </p>
                        </td>
                    </tr>

                    <!-- CONTENT -->

                    <tr>
                        <td style="padding:30px; color:#1A1A1A;">

                            <h2 style="margin-top:0; color:#0D47A1;">
                                Novo pedido recebido
                            </h2>

                            <p style="color:#6B7280; margin-bottom:25px;">
                                Um novo pedido de orçamento foi enviado pelo site.
                            </p>

                            <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">

                                <tr>
                                    <td style="background:#F9FAFB; border:1px solid #D1D5DB;"><strong>Nome</strong></td>
                                    <td style="border:1px solid #D1D5DB;">{{ $name }}</td>
                                </tr>

                                <tr>
                                    <td style="background:#F9FAFB; border:1px solid #D1D5DB;"><strong>Email</strong></td>
                                    <td style="border:1px solid #D1D5DB;">{{ $email }}</td>
                                </tr>

                                <tr>
                                    <td style="background:#F9FAFB; border:1px solid #D1D5DB;"><strong>Telefone</strong></td>
                                    <td style="border:1px solid #D1D5DB;">{{ $phone }}</td>
                                </tr>

                            </table>

                            <h3 style="margin-top:30px; color:#0D47A1;">
                                Descrição do Projeto
                            </h3>

                            <div style="background:#F9FAFB; padding:15px; border-radius:6px; border:1px solid #D1D5DB; color:#2F2F2F;">
                                {{ $projectDescription }}
                            </div>

                        </td>
                    </tr>

                    <!-- FOOTER -->

                    <tr>
                        <td style="background:#0F2A5F; padding:20px; text-align:center; color:#BAB5B5; font-size:13px;">
                            Mensagem enviada pelo site <strong>Origem3D</strong>.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>