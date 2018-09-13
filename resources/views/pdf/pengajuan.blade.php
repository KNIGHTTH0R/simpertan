<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    body{
      background-color: white;
      margin: 40px 80px;
    }

    #header{
      margin-left: 30px;
      font-family: Verdana;
    }

    .nama-kab{
      font-size: 12pt;
      font-weight: bold;
    }

    .nama-opd {
      font-size: 15pt;
      font-weight: bold;
    }

    .alamat{
      font-size: 10pt;
      font-weight: normal;
      margin-bottom: 20px;
    }

    hr{
      border-top: 5px double;
    }

    #no-sk{
      font-size: 10pt;
      font-weight: 400;
      text-align: center;
    }
  </style>
  <body bgcolor="white">
    <img align="left" src="{{ asset('images/login-logo.png') }}"  width="60px">
    <div id="header">
      <center>
        <span class="nama-kab">PEMERINTAH KABUPATEN SUKABUMI </span><br>
        <span class="nama-opd">BADAN PERENCANAAN PEMBANGUNAN DAERAH</span><br>
        <span class="alamat">Komplek Perkantoran Jajaway</span>
      </center>
    </div>
    <hr>

    <div id="tanggal">
      <p align="right"> Sukabumi, <?php echo date('d F Y'); ?></p>
    </div>

    <div id="no-sk">
      <span><u><b> SURAT KETERANGAN PENELITIAN </b></u></span><br>
      <span> Nomer: &emsp; &emsp;/&emsp; &emsp; &emsp;/&emsp; &emsp; &emsp;     </span>
    </div>


    <table width="100%">
      <thead>
        <tr>
          <th>Month</th>
          <th>Savings</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>January</td>
          <td>$100</td>
        </tr>
        <tr>
          <td>February</td>
          <td>$80</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td>Sum</td>
          <td>$180</td>
        </tr>
      </tfoot>
    </table>


    <p>
     Berdasarkan surat dari Universitas Pendidikan Indonesia (UPI) Nomor 4609/UN404/DT/2014
    tanggal 15 Desember 2015 perihal ijin melakukan penelitian, dengan ini kami menerangkan bahwa:
    </p>


      <pre>
      Nama  :Riffa Alfaridzi Priatna


      NIM  :0804252


      Fakultas :Pendidikan Matematika dan Ilmu Pengetahuan Alam


      Jurusan  :Pendidikan Ilmu Komputer
      </pre>


    <div id="#penutup">

    </div>
    <p><font face="Arial">
     Telah melakukan penelitian di sekolah kami tanggal<font color="red"> 7 s/d 21 Maret 2015</font>, dengan judul
    "Penerapan Metode Pembelajaran IMPROVE Berbasis Multimedia Interaktif Untuk Meningkatkan
     Intrapersonal intelegensi siswa dalam Mata Pelajaran TIK"
    </font></p>
   </body>


</html>
