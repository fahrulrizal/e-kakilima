<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>A simple, clean, and responsive HTML invoice template</title>
        <link rel="stylesheet" href="{{ asset('css/print.css') }}">
    </head>
    <body>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                                </td>
                                <td>
                                    Invoice #: {{id}}<br>
                                    Created: {{tampilkan tanggal}}<br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class="information">
                    <td>
                        <table>
                            <tr>
                                <td>
                                    E-KakiLima, Inc.<br>
                                    Jl.Pahlawan No.2A<br>
                                    Samarinda, Kalimantan timur
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="item">
                    <td>
                        No Ktp
                    </td>
                    
                    <td>
                        {{tampil no ktp}}
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Nama Lengkap
                    </td>
                    
                    <td>
                        {{tampil nama}}
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        kode tempat
                    </td>
                    
                    <td>
                        {{tampil kode tempat}}
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        harga
                    </td>
                    
                    <td>
                        {{tampil harga}}
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        jumlah
                    </td>
                    
                    <td>
                        {{tampil jumlah}}
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>