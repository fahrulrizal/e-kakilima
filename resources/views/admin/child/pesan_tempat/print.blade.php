<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bukti Pembayaran</title>
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
                                    <img src="{{ asset('img/ekakilima.png') }}" style="width:100%; max-width:300px;">
                                </td>
                                <td>
                                    Bukti Pembayaran<br>
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
                        No KTP
                    </td>
                    <td>
                     {{ $pesantempat->Biodata->no_ktp }}    
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Nama Lengkap
                    </td>
                    
                    <td>
                         {{ $pesantempat->Biodata->nama_lengkap }}    
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Kode Tempat
                    </td> 
                    <td>
                        {{ $pesantempat->Tempat->kode_tempat }} 
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Harga
                    </td>
                    
                    <td>
                        {{ $pesantempat->harga }} 
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Jumlah
                    </td>
                    
                    <td>
                        {{ $pesantempat->jumlah }} 
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>