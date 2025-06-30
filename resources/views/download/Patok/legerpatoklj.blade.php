<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kartu Dokumentasi Patok LJ</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
    }

    body {
      padding: 20px;
      box-sizing: border-box;
    }

    .main-content {
      flex: 1;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid black;
      padding-bottom: 10px;
    }

    .header img {
      height: 50px;
    }

    .header-title {
      flex-grow: 1;
      text-align: center;
      font-weight: bold;
      font-size: 16px;
    }

    .double-column {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .column {
      flex: 1;
      border: 1px solid black;
      padding: 10px;
      box-sizing: border-box;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      margin-bottom: 10px;
      text-decoration: underline;
    }

    .patok-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 10px;
    }

    .patok-table td {
      border: 1px solid #000;
      padding: 4px 6px;
      vertical-align: top;
      font-size: 12px;
    }

    .subsection-title {
      background-color: #eee;
      font-weight: bold;
      text-align: center;
    }

    .orthophoto {
      border: 1px solid #000;
      height: 120px;
      text-align: center;
      line-height: 120px;
      font-style: italic;
      font-size: 12px;
    }

    .keterangan {
      border-top: 1px solid #000;
      height: 60px;
      padding-top: 5px;
      font-size: 12px;
    }

    .footer {
      margin-top: 10px;
      text-align: right;
      font-size: 12px;
    }

    .cssportal-grid {
      display: grid;
      grid-template-rows: repeat(6, 1fr);
      grid-template-columns: repeat(6, 1fr);
      gap: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>

  <div class="header">
    <img src="img/pupr.png" alt="Logo">
    <div class="header-title">
      KARTU DOKUMENTASI PATOK (PATOK LJ)
    </div>
    <div style="font-size: 12px;">
      LEMBAR DISTRIBUSI KE : [ ] [ ] [ ]<br>
      NOMOR LEMBAR KARTU : ________
    </div>
  </div>

  <div class="main-content">
    <div class="double-column">
      <!-- Kiri -->
      <div class="column">
        <div class="section-title">KEDUDUKAN PATOK LJ</div>
        <div class="double-column">
          <div class="column">
            FOTO DOKUMENTASI PATOK
          </div>
          <div class="column">
            <p><strong>PATOK :</strong></p>
            <table class="patok-table">
              <tr><td colspan="2" class="subsection-title">DESKRIPSI PATOK</td></tr>
              <tr><td>NAMA PATOK</td><td>:</td></tr>
              <tr><td>NOMOR RUAS / NAMA RUAS</td><td>:</td></tr>
              <tr><td>NOMOR SEKSI / NAMA SEKSI</td><td>:</td></tr>
              <tr><td>LOKASI PATOK</td><td>: KM ____</td></tr>
              <tr><td>PROVINSI</td><td>:</td>
                @if (isset($data['administratif'][0]['nama_prov']))
                    {{ $data['administratif'][0]['nama_prov'] }}
                @else
                    ---
                @endif</tr>
              <tr><td>KABUPATEN / KOTA</td><td>:</td>
                @if (isset($data['administratif'][0]['nama_kab']))
                    {{ $data['administratif'][0]['nama_kab'] }}
                @else
                    ---
                @endif</tr>
              <tr><td>KECAMATAN</td><td>:</td>
                @if (isset($data['administratif'][0]['nama_kec']))
                    {{ $data['administratif'][0]['nama_kec'] }}
                @else
                    ---
                @endif</tr>
              <tr><td>DESA / KELURAHAN</td><td>:</td>
                @if (isset($data['administratif'][0]['nama_desa']))
                    {{ $data['administratif'][0]['nama_desa'] }}
                @else
                    ---
                @endif</tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT GEODETIK (WGS 1984)</td></tr>
              <tr><td>LINTANG</td><td>:</td></tr>
              <tr><td>BUJUR</td><td>:</td></tr>
              <tr><td>TINGGI ELLIPSOID</td><td>: ____ METER</td></tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT UTM</td></tr>
              <tr><td>UTARA</td><td>: ____ METER</td></tr>
              <tr><td>TIMUR</td><td>: ____ METER</td></tr>
              <tr><td>ZONA</td><td>:</td></tr>

              <tr><td colspan="2" class="subsection-title">TINGGI ORTHOMETRIK</td></tr>
              <tr><td>MODEL GEOID</td><td>:</td></tr>
              <tr><td>TINGGI</td><td>: ____ METER</td></tr>
            </table>
          </div>
        </div>
        <div class="orthophoto">DENAH LOKASI - ORTHOPHOTO</div>
        <div class="keterangan">KETERANGAN:</div>
      </div>

      <!-- Kanan -->
      <div class="column">
        <div class="section-title">KEDUDUKAN PATOK LJ</div>
        <div class="double-column">
          <div class="column">
            FOTO DOKUMENTASI PATOK
          </div>
          <div class="column">
            <p><strong>PATOK :</strong></p>
            <table class="patok-table">
              <tr><td colspan="2" class="subsection-title">DESKRIPSI PATOK</td></tr>
              <tr><td>NAMA PATOK</td><td>:</td></tr>
              <tr><td>NOMOR RUAS / NAMA RUAS</td><td>:</td></tr>
              <tr><td>NOMOR SEKSI / NAMA SEKSI</td><td>:</td></tr>
              <tr><td>LOKASI PATOK</td><td>: KM ____</td></tr>
              <tr><td>PROVINSI</td><td>:</td></tr>
              <tr><td>KABUPATEN / KOTA</td><td>:</td></tr>
              <tr><td>KECAMATAN</td><td>:</td></tr>
              <tr><td>DESA / KELURAHAN</td><td>:</td></tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT GEODETIK (WGS 1984)</td></tr>
              <tr><td>LINTANG</td><td>:</td></tr>
              <tr><td>BUJUR</td><td>:</td></tr>
              <tr><td>TINGGI ELLIPSOID</td><td>: ____ METER</td></tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT UTM</td></tr>
              <tr><td>UTARA</td><td>: ____ METER</td></tr>
              <tr><td>TIMUR</td><td>: ____ METER</td></tr>
              <tr><td>ZONA</td><td>:</td></tr>

              <tr><td colspan="2" class="subsection-title">TINGGI ORTHOMETRIK</td></tr>
              <tr><td>MODEL GEOID</td><td>:</td></tr>
              <tr><td>TINGGI</td><td>: ____ METER</td></tr>
            </table>
          </div>
        </div>
        <div class="orthophoto">DENAH LOKASI - ORTHOPHOTO</div>
        <div class="keterangan">KETERANGAN:</div>
      </div>
    </div>
  </div>

  <div class="footer">
    Sumber: Direktorat Jenderal Bina Marga
  </div>

</body>
</html>
