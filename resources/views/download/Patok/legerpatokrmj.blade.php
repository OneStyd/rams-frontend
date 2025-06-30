<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kartu Dokumentasi Patok RMJ</title>
  <style>
    body {
      margin: 20px;
      font-family: Arial, sans-serif;
      font-size: 12px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      border-bottom: 1px solid black;
      padding-bottom: 5px;
    }

    .logo {
      display: flex;
      align-items: flex-start;
    }

    .logo img {
      width: 60px;
      margin-right: 10px;
    }

    .instansi {
      font-size: 12px;
      font-weight: bold;
      line-height: 1.2;
    }

    .title {
      text-align: center;
      font-weight: bold;
      font-size: 14px;
      margin-top: 5px;
      flex-grow: 1;
    }

    .top-right {
      font-size: 10px;
      text-align: right;
    }

    .top-right p {
      margin: 2px 0;
    }

    .top-right .kotak {
      letter-spacing: 4px;
      font-weight: bold;
    }

    .label-identifikasi {
      margin-top: 15px;
      font-weight: bold;
    }

    .identifikasi {
      border: 1px solid black;
      margin-top: 5px;
      padding: 5px 10px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      font-size: 12px;
    }

    .identifikasi p {
      margin: 2px 0;
    }

    .full-width {
      grid-column: span 2;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
      margin-top: 20px;
    }

    .patok-box {
      border: 1px solid black;
      height: 300px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .photo-box {
      height: 70%;
      border-bottom: 1px solid black;
      background-color: #f9f9f9;
      text-align: center;
      line-height: 210px; /* Vertically center text */
      font-style: italic;
      color: #666;
      font-size: 12px;
    }

    .info-box {
      padding: 5px;
    }

    .info-box p {
      margin: 2px 0;
      line-height: 1.2;
    }
  </style>
</head>
<body>

  <div class="header">
    <div class="logo">
      <img src="{{ asset('img/pupr.png') }}" alt="Logo">
      <div class="instansi">
        KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT<br>
        DIREKTORAT JENDERAL BINA MARGA
      </div>
    </div>
    <div class="title">KARTU DOKUMENTASI PATOK<br>( PATOK RMJ )</div>
    <div class="top-right">
      <p>LEMBAR DISTRIBUSI KE: <span class="kotak">[ ] [ ] [ ] [ ]</span></p>
      <p>NOMOR LEMBAR KARTU / FOTO DOKUMENTASI PATOK RMJ:
         <span class="kotak">[ ] [ ] [ ] [ ] [ ] [ ] [ ] [ ] [ ]</span>
      </p>
    </div>
  </div>

  <!-- Label Identifikasi -->
  <div class="label-identifikasi">IDENTIFIKASI</div>

  <!-- Kotak Identifikasi -->
  <div class="identifikasi full-width">
    <p class="full-width"><strong>NOMOR KODE DAN RUAS</strong> : 
      @if(isset($data['patok'][0]->nomor_kode_ruas))
        {{ $data['patok'][0]->nomor_kode_ruas }}
      @else
        ---
      @endif
    </p>
    <p><strong>NOMOR RUAS / NAMA RUAS</strong> : 
      @if(isset($data['patok'][0]->nomor_ruas) && isset($data['patok'][0]->nama_ruas))
        {{ $data['patok'][0]->nomor_ruas }} / {{ $data['patok'][0]->nama_ruas }}
      @else
        ---
      @endif
    </p>
    <p><strong>PROVINSI</strong> : 
      @if (isset($data['administratif'][0]['nama_prov']))
          {{ $data['administratif'][0]['nama_prov'] }}
      @else
          ---
      @endif
    </p>
    <p><strong>NOMOR SEKSI / NAMA SEKSI</strong> : 
      @if(isset($data['patok'][0]->nomor_seksi) && isset($data['patok'][0]->nama_seksi))
        {{ $data['patok'][0]->nomor_seksi }} / {{ $data['patok'][0]->nama_seksi }}
      @else
        ---
      @endif
    </p>
  </div>

  <!-- Grid 8 Patok -->
  <div class="grid-container">
    @if(isset($data['patok']) && count($data['patok']) > 0)
      @foreach($data['patok'] as $index => $patok)
        @if($index < 8)
        <div class="patok-box">
          <div class="photo-box">
            @if(!empty($patok->foto_url))
              <img src="{{ asset($patok->foto_url) }}" alt="Foto Patok" style="max-height:100%; max-width:100%;">
            @else
              Foto Patok
            @endif
          </div>
            <div class="info-box">
              <p><strong>NOMOR RUAS / NAMA RUAS:</strong> {{ $patok->nomor_ruas ?? '---' }} / {{ $patok->nama_ruas ?? '---' }}</p>
              <p><strong>NOMOR SEKSI / NAMA SEKSI:</strong> {{ $patok->nomor_seksi ?? '---' }} / {{ $patok->nama_seksi ?? '---' }}</p>
              <p><strong>NOMOR URUT:</strong> {{ $patok->nomor_urut ?? '---' }}</p>
              <p><strong>NOMOR RMJ:</strong> {{ $patok->nomor_rmj ?? '---' }}</p>
              <p><strong>KOORDINAT X (UTM Timur):</strong> {{ $patok->koordinat_x ?? '---' }}</p>
              <p><strong>KOORDINAT Y (UTM Utara):</strong> {{ $patok->koordinat_y ?? '---' }}</p>
              <p><strong>KOORDINAT Z (Tinggi):</strong> {{ $patok->koordinat_z ?? '---' }}</p>
              <p><strong>POSISI:</strong> {{ $patok->posisi ?? '---' }}</p>
            </div>
        </div>
        @endif
      @endforeach
    @else
      @for($i=0; $i<8; $i++)
        <div class="patok-box">
          <div class="photo-box">
            @if(isset($patok->foto_url) && $patok->foto_url != '')
              <img src="{{ asset($patok->foto_url) }}" alt="Foto Patok" style="max-height:100%; max-width:100%;">
            @else
              Foto Patok
            @endif
          </div>
          <div class="info-box">
            <p><strong>NOMOR RUAS / NAMA RUAS:</strong> 
              {{ isset($patok->nomor_ruas) ? $patok->nomor_ruas : '---' }} / {{ isset($patok->nama_ruas) ? $patok->nama_ruas : '---' }}
            </p>
            <p><strong>NOMOR SEKSI / NAMA SEKSI:</strong> 
              {{ isset($patok->nomor_seksi) ? $patok->nomor_seksi : '---' }} / {{ isset($patok->nama_seksi) ? $patok->nama_seksi : '---' }}
            </p>
            <p><strong>NOMOR URUT:</strong> {{ isset($patok->nomor_urut) ? $patok->nomor_urut : '---' }}</p>
            <p><strong>NOMOR RMJ:</strong> {{ isset($patok->nomor_rmj) ? $patok->nomor_rmj : '---' }}</p>
            <p><strong>X:</strong> {{ isset($patok->koordinat_x) ? $patok->koordinat_x : '---' }}</p>
            <p><strong>Y:</strong> {{ isset($patok->koordinat_y) ? $patok->koordinat_y : '---' }}</p>
            <p><strong>Z:</strong> {{ isset($patok->koordinat_z) ? $patok->koordinat_z : '---' }}</p>
            <p><strong>POSISI:</strong> {{ isset($patok->posisi) ? $patok->posisi : '---' }}</p>
          </div>
        </div>
      @endfor
    @endif
  </div>

</body>
</html>
