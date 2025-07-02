<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Bangunan Penghubung (Jembatan)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            margin: 0.5px 0px 2px 0px;
            border: 0.1px solid black;
            table-layout: fixed;
            width: 100%;
        }
        
        .full-width {
            width: 100% !important;
        }

        th,
        td {
            border: 0.1px solid black;
            padding-top: 1px;
            padding-bottom: 1x;
            padding-left: 5px;
            padding-right: 5px;
        }

        td {
            font-size: 3.5px;
            font-weight: normal;
        }

        th {
            font-size: 3.5px;
            font-weight: normal;
            text-align: center;
            background-color: #ffffff;
        }

        h1,
        h2 {
            text-align: center;
            font-weight: normal;
        }

        .header-table {
            width: 100%;
            border: 0.1px solid black;
        }

        .section-title {
            text-align: left;
            font-weight: normal;
            padding: 0px;
            font-size: 4.5px;
            margin: 0px;
        }

        .header-table td {
            border: none;
            text-align: left;
            margin-left: 1px;
        }

        .title-left {
            float: left;
            width: 30%;
        }

        .title-center {
            float: left;
            width: 40%;
        }

        .title-right {
            float: right;
            width: 30%;
        }

        .title-left h2 {
            text-align: left;
            font-size: 10px;
        }

        .title-center h2 {
            font-size: 12px;
        }

        .title-right h2 {
            text-align: right;
            font-size: 6px;
        }

        .section-left {
            float: left;
            width: 100%;
        }

        .section-center {
            float: left;
            width: 43%;
            margin-left: 1%;
        }

        .section-right {
            float: right;
            width: 25%;
        }

        .text-left {
            float: left;
        }

        .text-right {
            float: right;
        }
        .table-row {
            display: flex;
            width: 100%;
            gap: 7.5px;
        }
            
        .table-wrapper {
            vertical-align: top;
        }
    </style>
</head>

<body>
    <div class="title">
        <div class="title-left">
            <h2>
                KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT<br />DIREKTORAT
                JENDERAL BINA MARGA
            </h2>
        </div>
        <div class="title-center">
            <h2>KARTU BANGUNAN PENGHUBUNG <br />(JEMBATAN)</h2>
        </div>
        <div class="title-right">
            <h2>LEMBAR DISTRIBUSI KE -----</h2>
            <h2>
                NOMOR LEMBAR KARTU BANGUNAN PENGHUBUNG --- -- - - --- -/- - -
            </h2>
        </div>
    </div>
    
    <h2 class="section-title">&nbsp;  IDENTIFIKASI</h2>
    <table class="header-table">
        <tr>
            <td>NOMOR KODE DAN NAMA</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['administratif'][0]['kode_prov']))
                    {{ $data['administratif'][0]['kode_prov'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>PROVINSI</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['administratif'][0]['nama_prov']))
                    {{ $data['administratif'][0]['nama_prov'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>
                <!-- @if (isset($data['administratif'][0]['kode_kab']))
                    {{ $data['administratif'][0]['kode_kab'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>KABUPATEN/KOTA</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['administratif'][0]['nama_kab']))
                    {{ $data['administratif'][0]['nama_kab'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>
                <!-- @if (isset($data['administratif'][0]['kode_kec']))
                    {{ $data['administratif'][0]['kode_kec'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>KECAMATAN</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['administratif'][0]['nama_kec']))
                    {{ $data['administratif'][0]['nama_kec'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>
                <!-- @if (isset($data['administratif'][0]['kode_desa']))
                    {{ $data['administratif'][0]['kode_desa'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>DESA/KELURAHAN</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['administratif'][0]['nama_desa']))
                    {{ $data['administratif'][0]['nama_desa'] }}
                @else
                    ---
                @endif --> ---
            </td>

        </tr>
        <tr>
            <td>NOMOR RUAS / SUB RUAS / NAMA RUAS</td>
            <td>:</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>NOMOR JEMBATAN (SESUAI BMS)</td>
            <td>:</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <td>NAMA JEMBATAN</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
        <tr>
            <td>PANJANG / LUAS JEMBATAN</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
        <tr>
            <td>KELAS JEMBATAN</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
        <tr>
            <td>LOKASI</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
        <tr>
            <td>TITIK IKAT LEGER JALAN</td>
            <td>:</td>
            <td>LJ</td>
            <td>---</td>
            <td>X</td>
            <td>:</td>
            <td>---</td>
            <td>Y</td>
            <td>:</td>
            <td>---</td>
            <td>Z</td>
            <td>:</td>
            <td>---</td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>---</td>
        </tr>
        <tr>
            <td>TITIK IKAT PATOK KM</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_ikat_patok_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>X</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_x']))
                    {{ $data['data_jalan_identifikasi']['titik_ikat_patok_x'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>Y</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_y']))
                    {{ $data['data_jalan_identifikasi']['titik_ikat_patok_y'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>Z</td>
            <td>:</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_ikat_patok_z']))
                    {{ $data['data_jalan_identifikasi']['titik_ikat_patok_z'] }}
                @else
                    ---
                @endif --> ---
            </td>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td>---</td>
        </tr>
        <tr>
            <td>TANGGAL SELESAI DIBANGUN</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
        <tr>
            <td>TANGGAL DIBUKA UNTUK LALU LINTAS</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
        <tr>
            <td>TANGGAL DITUTUP UNTUK LALU LINTAS</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
        <tr>
            <td>TIPE LINTASAN</td>
            <td>:</td>
            <td>---</td>
            <td>
                <!-- @if (isset($data['data_jalan_identifikasi']['titik_awal_segmen_km']) &&
                        isset($data['data_jalan_identifikasi']['titik_akhir_segmen_km']))
                    KM {{ $data['data_jalan_identifikasi']['titik_awal_segmen_km'] }} S/D KM
                    {{ $data['data_jalan_identifikasi']['titik_akhir_segmen_km'] }}
                @else
                    ---
                @endif --> ---
            </td>
        </tr>
    </table>

    <div class="section-container">
        <div class="table-row">
            <div class="table-wrapper" style="width: 15%">
            <h2 class="section-title">&nbsp;  DATA TEKNIK - 1</h2>
            <table class="header-table">
                <tr>
                    <th style="width: 60%">URAIAN</th>
                    <th >ASAL<br>TAHUN :<br>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---</th>
                    <th >PEMUT.I<br>TAHUN :<br>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---</th>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">PANJANG TOTAL</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">PANJANG BENTANG 1</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">PANJANG BENTANG 2</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">PANJANG BENTANG 3</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">PANJANG BENTANG 4</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr> <td> <br> </td> </tr>
                <tr>
                    <td>
                        <span class="text-left">LEBAR BENTANG 1</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">LEBAR BENTANG 2</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">LEBAR BENTANG 3</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="text-left">LEBAR BENTANG 4</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr> <td> <br> </td> </tr>
                <tr>
                    <td class="text-left">JENIS BENTANG 1</td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td class="text-left">JENIS BENTANG 2</td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td class="text-left">JENIS BENTANG 3</td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td class="text-left">JENIS BENTANG 4</td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['luas']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['luas'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td>
                        <!-- @if (isset($data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan']))
                            {{ $data['data_jalan_teknik1']["lahan_rumija"]['data_perolehan'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
            </table>
            </div>

            <div class="table-wrapper" style="width: 30%">
            <h2 class="section-title">&nbsp;  DATA ELEVASI BANGUNAN BAWAH & PERLETAKAN</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="3" style="width: 25%">ELEVASI BANGUNAN BAWAH</th>
                    <th rowspan="2" colspan="2">ASAL TAHUN : -</th>
                    <th rowspan="2" colspan="2">PEMUTAKHIRAN I TAHUN :</th>
                    <th rowspan="3" style="width: 25%">ELEVASI PERLETAKAN</th>
                    <th rowspan="2" colspan="2">ASAL TAHUN : -</th>
                    <th rowspan="2" colspan="2">PEMUTAKHIRAN I TAHUN :</th>
                </tr>
                <tr>
                </tr>
                <tr>
                    <th>HULU</th>
                    <th>HILIR</th>
                    <th>HULU</th>
                    <th>HILIR</th>
                    <th>HULU</th>
                    <th>HILIR</th>
                    <th>HULU</th>
                    <th>HILIR</th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">KEPALA JEMBATAN KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">KEPALA JEMBATAN KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">KEPALA JEMBATAN KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">KEPALA JEMBATAN KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">PILAR 1 KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">PILAR 1 KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">PILAR 1 KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">PILAR 1 KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">PILAR 2 KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">PILAR 2 KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">PILAR 2 KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">PILAR 2 KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">PILAR 3 KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">PILAR 3 KIRI</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                        <span class="text-left">PILAR 3 KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                        <span class="text-left">PILAR 3 KANAN</span>
                        <span class="text-right">(M)</span>
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            </div>
            
            <div class="table-wrapper" style="width: 55%">
            <h2 class="section-title">&nbsp;  DATA TEKNIK - 1</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="3" style="width: 10%">TIPE</th>
                    <th colspan="4">ASAL TAHUN : - / PEMUTAKHIRAN I TAHUN :</th>
                    <th rowspan="3" style="width: 10%">TIPE</th>
                    <th colspan="5">ASAL TAHUN : - / PEMUTAKHIRAN I TAHUN :</th>
                    <th rowspan="3" style="width: 10%">TIPE</th>
                    <th colspan="5">ASAL TAHUN : - / PEMUTAKHIRAN I TAHUN :</th>
                </tr>
                <tr>
                    <th colspan="4">BANGUNAN ATAS</th>
                    <th colspan="5">BANGUNAN BAWAH</th>
                    <th colspan="5">PONDASI</th>
                </tr>
                <tr>
                    <th>BENTANG 1</th>
                    <th>BENTANG 2</th>
                    <th>BENTANG 3</th>
                    <th>BENTANG 4</th>
                    <th>KEP.JBT.KI</th>
                    <th>PILAR 1</th>
                    <th>PILAR 2</th>
                    <th>PILAR 3</th>
                    <th>KEP.JBT.KA</th>
                    <th>KEP.JBT.KI</th>
                    <th>PILAR 1</th>
                    <th>PILAR 2</th>
                    <th>PILAR 3</th>
                    <th>KEP.JBT.KA</th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PELAT</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">DINDING</td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">LANGSUNG</td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">RANGKA</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">KOLOM</td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">SUMURAN</td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">GELAGAR</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">PORTAL</td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">TIANG PANCANG BETON</td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PILE SLAB</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">JUK/TIANG ULIR</td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">TIANG PANCANG PROFIL</td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BOX GIRDER</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">BALOK/PILE CAP</td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">TIANG PANCANG BAJA</td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BOX</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;"></td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">TIANG BOR</td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PELENGKUNG</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;"></td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;"></td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">CABLE STAYED</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;"></td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;"></td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">GANTUNGAN & SOKONGAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;"></td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;"></td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="1" style="border-right: 0.1px solid black; border-left: 0.1px solid black;">
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            </div>
        </div>
        
            <h2 class="section-title">&nbsp;  DATA TEKNIK - 2</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="4" style="width: 10%">URAIAN</th>
                    <th colspan="30" style="width: 90%">ASAL TAHUN : - / PEMUTAKHIRAN I TAHUN :</th>
                </tr>
                <tr>
                    <th colspan="20">BANGUNAN ATAS</th>
                    <th colspan="5">BANGUNAN BAWAH</th>
                    <th colspan="5">PONDASI</th>
                </tr>
                <tr>
                    <th colspan="4" style="width: 12%">KONSTRUKSI UTAMA</th>
                    <th colspan="4" style="width: 12%">KONSTRUKSI SEKUNDER</th>
                    <th colspan="4" style="width: 12%">LANTAI</th>
                    <th colspan="4" style="width: 12%">TROTOAR</th>
                    <th colspan="4" style="width: 12%">PARAPET</th>
                    <th rowspan="2" style="width: 3%">KEPALA <br> JEMB. KIRI</th>
                    <th rowspan="2" style="width: 3%">PILAR 1</th>
                    <th rowspan="2" style="width: 3%">PILAR 2</th>
                    <th rowspan="2" style="width: 3%">PILAR 3</th>
                    <th rowspan="2" style="width: 3%">KEPALA <br> JEMB. KANAN</th>
                    <th rowspan="2" style="width: 3%">KEPALA <br> JEMB. KIRI</th>
                    <th rowspan="2" style="width: 3%">PILAR 1</th>
                    <th rowspan="2" style="width: 3%">PILAR 2</th>
                    <th rowspan="2" style="width: 3%">PILAR 3</th>
                    <th rowspan="2" style="width: 3%">KEPALA <br> JEMB. KANAN</th>
                </tr>
                <tr>
                    <th>BENTANG 1</th>
                    <th>BENTANG 2</th>
                    <th>BENTANG 3</th>
                    <th>BENTANG 4</th>
                    <th>BENTANG 1</th>
                    <th>BENTANG 2</th>
                    <th>BENTANG 3</th>
                    <th>BENTANG 4</th>
                    <th>BENTANG 1</th>
                    <th>BENTANG 2</th>
                    <th>BENTANG 3</th>
                    <th>BENTANG 4</th>
                    <th>BENTANG 1</th>
                    <th>BENTANG 2</th>
                    <th>BENTANG 3</th>
                    <th>BENTANG 4</th>
                    <th>BENTANG 1</th>
                    <th>BENTANG 2</th>
                    <th>BENTANG 3</th>
                    <th>BENTANG 4</th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BAJA</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BETON</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PRATEKAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">DECK PLATE</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PENGASPALAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PASANGAN BATU</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PASANGAN BATA</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">KOMPOSIT (BAJA & BETON)</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <th rowspan="1" colspan="1">KONDISI</th>
                    <th colspan="60"></th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">RETAK</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">RUSAK</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BERKARAT</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PELAPUKAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PENYUSUTAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PECAH / HILANG</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">MENGGEMBUNG</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PENURUNAN MUTU</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PERUBAHAN BENTUK</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">SPALLING / KEROPOS</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">SAMBUNGAN LONGGAR</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">LENDUTAN / DEFORMASI</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 18 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 19 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 20 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 21 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 22 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 23 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 24 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 25 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 26 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 27 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 28 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 29 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 30 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
            </table>
            
        <div class="table-row">
            <div class="table-wrapper" style="width: 40%">
            <h2 class="section-title">&nbsp;  DATA TEKNIK - 3</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="3">TIPE LANDASAN</th>
                    <th colspan="8">ASAL TAHUN : - / PEMUTAKHIRAN I TAHUN :</th>
                </tr>
                <tr>
                    <th rowspan="2">KEPALA JEMBATAN KIRI</th>
                    <th colspan="2">PILAR 1</th>
                    <th colspan="2">PILAR 2</th>
                    <th colspan="2">PILAR 3</th>
                    <th rowspan="2">KEPALA JEMBATAN KANAN</th>
                </tr>
                <tr>
                    <th>KIRI</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>KANAN</th>
                    <th>KIRI</th>
                    <th>KANAN</th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">ROL</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">SENDI</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PELAT</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">POT</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">POT SPIRAL</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">ELASTOMER</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BANTALAN MORTAR</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">LAINNYA</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <th rowspan="1">BAHAN LANDASAN</th>
                    <th colspan="8"></th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BAJA</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">KARET</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BETON</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
            </table>
            </div>
            
            <div class="table-wrapper" style="width: 60%">
            <h2 class="section-title">&nbsp;  DATA BANGUNAN PENGAMAN</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="4" style="width: 11%">MACAM \ BAHAN</th>
                    <th colspan="17">ASAL TAHUN : - / PEMUTAKHIRAN I TAHUN :</th>
                </tr>
                <tr>
                    <th rowspan="3">PASANGAN BATU</th>
                    <th rowspan="3">PASANGAN BATA</th>
                    <th rowspan="3">KAYU</th>
                    <th rowspan="3">BAJA</th>
                    <th rowspan="3">BETON</th>
                    <th rowspan="1" colspan="12">KONDISI BANGUNAN PENGAMAN</th>
                </tr>
                <tr>
                    <th rowspan="2">RETAK</th>
                    <th rowspan="2">RUSAK</th>
                    <th rowspan="2">BERKARAT</th>
                    <th rowspan="2">PELAPUKAN</th>
                    <th rowspan="2">PENYUSUTAN</th>
                    <th rowspan="2">GEMBUNG</th>
                    <th rowspan="2">PECAH / HILANG</th>
                    <th rowspan="2">PENURUNAN MUTU</th>
                    <th rowspan="2">PERUBAHAN BENTUK</th>
                    <th rowspan="2">SPALLING / KEROPOS</th>
                    <th rowspan="2">SAMBUNGAN LONGGAR</th>
                    <th rowspan="2">LENDUTAN / DEFORMASI</th>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">TURAP</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">RIP / RAP</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">BRONJONG</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">DAM</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">CERUCUK</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">APRON</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">KANTONG LUMPUR</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">KRIB</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">LAINNYA</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 10 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 11 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 12 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 13 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 14 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 15 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 16 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 17 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;"><br><br><br></td>
                </tr>
            </table>
            </div>
        </div>
        
        <div class="table-row">
            <div class="table-wrapper" style="width: 60%">
            <h2 class="section-title">&nbsp;  PERWUJUDAN</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2" colspan="1">KEGIATAN POKOK</th>
                    <th colspan="4">ASAL / TAHUN : -</th>
                    <th colspan="4">PEMUTAKHIRAN I / TAHUN :</th>
                </tr>
                <tr>
                    <th colspan="1">PENYEDIA JASA</th>
                    <th colspan="1">CACAH</th>
                    <th colspan="1">BIAYA</th>
                    <th colspan="1">SUMBER DANA</th>
                    <th colspan="1">PENYEDIA JASA</th>
                    <th colspan="1">CACAH</th>
                    <th colspan="1">BIAYA</th>
                    <th colspan="1">SUMBER DANA</th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PEMBEBASAN LAHAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">DESAIN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PEMBANGUNAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PENINGKATAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PEMELIHARAAN & REHABILITASI</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">SUPERVISI</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">PENGUJIAN BEBAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;">LAINNYA</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
            </table>
            </div>
            
            <div class="table-wrapper" style="width: 40%">
            <h2 class="section-title">&nbsp;  DATA KONDISI UMUM</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="4" colspan="1" style="width: 19%">KATEGORI KONDISI</th>
                    <th rowspan="1" colspan="9">ASAL TAHUN : - / PEMUTAKHIRAN I TAHUN :</th>
                </tr>
                <tr>
                    <th rowspan="1" colspan="4">BANGUNAN ATAS</th>
                    <th rowspan="1" colspan="5">BANGUNAN BAWAH</th>
                </tr>
                <tr>
                    <th rowspan="2" colspan="1">BENTANG 1</th>
                    <th rowspan="2" colspan="1">BENTANG 2</th>
                    <th rowspan="2" colspan="1">BENTANG 3</th>
                    <th rowspan="2" colspan="1">BENTANG 4</th>
                    <th rowspan="2" colspan="1">KEPALA <br>JEMB. KIRI</th>
                    <th rowspan="2" colspan="1">PILAR 1</th>
                    <th rowspan="2" colspan="1">PILAR 2</th>
                    <th rowspan="2" colspan="1">PILAR 3</th>
                    <th rowspan="2" colspan="1">KEPALA <br>JEMB. KANAN</th>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">BAIK</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">RUSAK RINGAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">RUSAK SEDANG</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">RUSAK BERAT</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">RUSAK KRITIS</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td style="border-right: 0.1px solid black;">RUNTUH</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 7 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 8 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 9 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
            </table>
            </div>
        </div>
        
        <div class="table-row">
            <div class="table-wrapper" style="width: 60%">
            <h2 class="section-title">&nbsp;  LEGALISASI</h2>
            <table class="header-table">
                <tr>
                    <th rowspan="2" colspan="1" style="width: 15%">KEGIATAN POKOK</th>
                    <th colspan="3" style="width: 42.5%">ASAL / TAHUN : -</th>
                    <th colspan="3" style="width: 42.5%">PEMUTAKHIRAN I / TAHUN :</th>
                </tr>
                <tr>
                    <th>TGL.BL.TH</th>
                    <th>OLEH</th>
                    <th>PARAF</th>
                    <th>TGL.BL.TH</th>
                    <th>OLEH</th>
                    <th>PARAF</th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black; text-align: center">PENGUKURAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black; text-align: center">PENGGAMBARAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black; text-align: center">PENCATATAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <th colspan="1" style="border-right: 0.1px solid black; text-align: center">PEMERIKSAAN</th>
                    <th> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </th>
                    <th> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </th>
                    <th> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </th>
                    <th> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </th>
                    <th> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </th>
                    <th> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </th>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black; text-align: center">PERSETUJUAN</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black; text-align: center">DI</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black; text-align: center">TGL.BL.TH</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black; text-align: center">OLEH</td>
                    <td> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 3 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 4 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 5 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur4'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td> <!-- KOLOM 6 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ka_lajur3'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
            </table>
            </div>
            
            <div class="table-wrapper" style="width: 40%">
            <h2 class="section-title">&nbsp;  CATATAN</h2>
            <table class="header-table">
                <tr>
                    <th style="width: 50%">ASAL / TAHUN : -</th>
                    <th style="width: 50%">PEMUTAKHIRAN I / TAHUN :</th>
                </tr>
                <tr>
                    <td rowspan="9"> <!-- KOLOM 1 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur1'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                    <td rowspan="9"> <!-- KOLOM 2 -->
                        <!-- @if (isset($data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2']))
                            {{ $data['data_jalan_teknik2_lapis']["lapis_permukaan"]["tebal"]['nilai_ki_lajur2'] }}
                        @else
                            ---
                        @endif --> ---
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style="border-right: 0.1px solid black;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td>
                </tr>
            </table>
            </div>
        </div>
        </section>
    </div>
</body>