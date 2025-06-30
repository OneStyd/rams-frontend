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

    .foto-patok {
      width: 100%;
      height: auto;
      max-height: 150px;
      object-fit: contain;
      border: 1px solid #000;
      margin-bottom: 5px;
    }

    .foto-placeholder {
      border: 1px dashed #888;
      height: 100px;
      text-align: center;
      line-height: 100px;
      font-size: 12px;
      color: #888;
    }
  </style>
</head>
<body>

  <div class="header">
    <img src="{{ asset('img/pupr.png') }}" alt="Logo">
    <div class="header-title">
      KARTU DOKUMENTASI PATOK (PATOK CP)
    </div>
    <div style="font-size: 12px;">
      LEMBAR DISTRIBUSI KE : [ ] [ ] [ ]<br>
      NOMOR LEMBAR KARTU : ________
    </div>
  </div>

  <div class="main-content">
    <div class="double-column">
      <!-- Kolom Kiri -->
      <div class="column">
        <div class="section-title">KEDUDUKAN PATOK CP</div>
        <div class="double-column">
          <div class="column">
            <p style="text-align:center; font-size:12px;"><strong>FOTO DOKUMENTASI PATOK</strong></p>
            @if(isset($data[0]['foto']))
              <img src="{{ asset('storage/foto-patok/' . $data[0]['foto']) }}" alt="Foto Patok" class="foto-patok">
            @else
              <div class="foto-placeholder">Foto tidak tersedia</div>
            @endif
          </div>
          <div class="column">
            <p><strong>PATOK :</strong></p>
            <table class="patok-table">
              <tr><td colspan="2" class="subsection-title">DESKRIPSI PATOK</td></tr>
              <tr><td>NAMA PATOK</td><td>: {{ $data[0]['nama'] ?? '---' }}</td></tr>
              <tr><td>NOMOR RUAS / NAMA RUAS</td><td>: {{ $data[0]['nama_ruas'] ?? '---' }}</td></tr>
              <tr><td>NOMOR SEKSI / NAMA SEKSI</td><td>: {{ $data[0]['nama_seksi'] ?? '---' }}</td></tr>
              <tr><td>LOKASI PATOK</td><td>: KM {{ $data[0]['km'] ?? '---' }}</td></tr>
              <tr><td>PROVINSI</td><td>: {{ $data[0]['administratif']['nama_prov'] ?? '---' }}</td></tr>
              <tr><td>KABUPATEN / KOTA</td><td>: {{ $data[0]['administratif']['nama_kab'] ?? '---' }}</td></tr>
              <tr><td>KECAMATAN</td><td>: {{ $data[0]['administratif']['nama_kec'] ?? '---' }}</td></tr>
              <tr><td>DESA / KELURAHAN</td><td>: {{ $data[0]['administratif']['nama_desa'] ?? '---' }}</td></tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT GEODETIK (WGS 1984)</td></tr>
              <tr><td>LINTANG</td><td>: {{ $data[0]['lintang'] ?? '---' }}</td></tr>
              <tr><td>BUJUR</td><td>: {{ $data[0]['bujur'] ?? '---' }}</td></tr>
              <tr><td>TINGGI ELLIPSOID</td><td>: {{ $data[0]['tinggi_ellipsoid'] ?? '---' }} METER</td></tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT UTM</td></tr>
              <tr><td>UTARA</td><td>: {{ $data[0]['utm_n'] ?? '---' }} METER</td></tr>
              <tr><td>TIMUR</td><td>: {{ $data[0]['utm_e'] ?? '---' }} METER</td></tr>
              <tr><td>ZONA</td><td>: {{ $data[0]['zona'] ?? '---' }}</td></tr>

              <tr><td colspan="2" class="subsection-title">TINGGI ORTHOMETRIK</td></tr>
              <tr><td>MODEL GEOID</td><td>: {{ $data[0]['model_geoid'] ?? '---' }}</td></tr>
              <tr><td>TINGGI</td><td>: {{ $data[0]['tinggi_orto'] ?? '---' }} METER</td></tr>
            </table>
          </div>
        </div>
        <div class="orthophoto">DENAH LOKASI - ORTHOPHOTO</div>
        <div class="keterangan">KETERANGAN:</div>
      </div>

      <!-- Kolom Kanan -->
      <div class="column">
        <div class="section-title">KEDUDUKAN PATOK CP</div>
        <div class="double-column">
          <div class="column">
            <p style="text-align:center; font-size:12px;"><strong>FOTO DOKUMENTASI PATOK</strong></p>
            @if(isset($data[1]['foto']))
              <img src="{{ asset('storage/foto-patok/' . $data[1]['foto']) }}" alt="Foto Patok" class="foto-patok">
            @else
              <div class="foto-placeholder">Foto tidak tersedia</div>
            @endif
          </div>
          <div class="column">
            <p><strong>PATOK :</strong></p>
            <table class="patok-table">
              <tr><td colspan="2" class="subsection-title">DESKRIPSI PATOK</td></tr>
              <tr><td>NAMA PATOK</td><td>: {{ $data[1]['nama'] ?? '---' }}</td></tr>
              <tr><td>NOMOR RUAS / NAMA RUAS</td><td>: {{ $data[1]['nama_ruas'] ?? '---' }}</td></tr>
              <tr><td>NOMOR SEKSI / NAMA SEKSI</td><td>: {{ $data[1]['nama_seksi'] ?? '---' }}</td></tr>
              <tr><td>LOKASI PATOK</td><td>: KM {{ $data[1]['km'] ?? '---' }}</td></tr>
              <tr><td>PROVINSI</td><td>: {{ $data[1]['administratif']['nama_prov'] ?? '---' }}</td></tr>
              <tr><td>KABUPATEN / KOTA</td><td>: {{ $data[1]['administratif']['nama_kab'] ?? '---' }}</td></tr>
              <tr><td>KECAMATAN</td><td>: {{ $data[1]['administratif']['nama_kec'] ?? '---' }}</td></tr>
              <tr><td>DESA / KELURAHAN</td><td>: {{ $data[1]['administratif']['nama_desa'] ?? '---' }}</td></tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT GEODETIK (WGS 1984)</td></tr>
              <tr><td>LINTANG</td><td>: {{ $data[1]['lintang'] ?? '---' }}</td></tr>
              <tr><td>BUJUR</td><td>: {{ $data[1]['bujur'] ?? '---' }}</td></tr>
              <tr><td>TINGGI ELLIPSOID</td><td>: {{ $data[1]['tinggi_ellipsoid'] ?? '---' }} METER</td></tr>

              <tr><td colspan="2" class="subsection-title">KOORDINAT UTM</td></tr>
              <tr><td>UTARA</td><td>: {{ $data[1]['utm_n'] ?? '---' }} METER</td></tr>
              <tr><td>TIMUR</td><td>: {{ $data[1]['utm_e'] ?? '---' }} METER</td></tr>
              <tr><td>ZONA</td><td>: {{ $data[1]['zona'] ?? '---' }}</td></tr>

              <tr><td colspan="2" class="subsection-title">TINGGI ORTHOMETRIK</td></tr>
              <tr><td>MODEL GEOID</td><td>: {{ $data[1]['model_geoid'] ?? '---' }}</td></tr>
              <tr><td>TINGGI</td><td>: {{ $data[1]['tinggi_orto'] ?? '---' }} METER</td></tr>
            </table>
          </div>
        </div>
        <div class="orthophoto">DENAH LOKASI - ORTHOPHOTO</div>
        <div class="keterangan">KETERANGAN:</div>
      </div>
    </div>
  </div>

  <
