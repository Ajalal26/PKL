<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function upload_file($fileTmp,$fileDest,$fileLimit){
  $fileDest = $_SERVER['DOCUMENT_ROOT']."/arthadasboard3/".$fileDest;
    if($fileLimit=='false'){
        $kirim = move_uploaded_file($fileTmp,$fileDest);
        if($kirim){
            return ;
        }else{
            return "gagal";
        }
    }else{
      
        $fileSize = fileSize($fileTmp)/1024;

        if($fileSize >= $fileLimit){
            return "File Terlalu Besar";
        }else{
             $kirim = move_uploaded_file($fileTmp,$fileDest);

             if($kirim){
                return "ok";
             }else{
                return "gagal";
             }
        }
    }
}

function uploadFile($fileTmp,$fileDest,$fileLimit){
  $fileDest = $_SERVER['DOCUMENT_ROOT']."/arthadasboard3/".$fileDest;
    if($fileLimit==false){
        $kirim = move_uploaded_file($fileTmp,$fileDest);
        return $kirim;
    }else{
        $fileSize = fileSize($fileTmp)/1000;

        if($fileSize >= $fileLimit){
            return false;
        }else{
             $kirim = move_uploaded_file($fileTmp,$fileDest);
             return $kirim;
        }
    }
}

function changeFileName($fileName,$initial){
  $file = explode('.',$fileName);
  $ext = $file[sizeof($file)-1];
  $newFileName = $initial.date('Y').date('m').date('d').date('H').date('i').date('s').uniqid().'.'.$ext;

  return $newFileName;
}

function hapusFile($fileName,$dest){
  $fileDest = $_SERVER['DOCUMENT_ROOT'].'/arthadasboard3/'.$dest;
  if($fileName=='' || $fileName==null){
    return false;
  }else{
    $hapus = unlink($fileDest.$fileName);
    return $hapus;
  }
}

function konversiTgl($tgl){
  if($tgl == null || $tgl == '0000-00-00'){
    return "-";
  }else{
     $tgl = date_create($tgl);
     return date_format($tgl,'d/m/Y');
  }
   

   
}

function blnIndo($namabulan){
    switch ($namabulan) {
      case 'Jan':
          return "Jan";
        break;

      case 'Feb':
          return "Feb";
        break;

      case 'Mar':
          return "Mar";
        break;

      case 'Apr':
          return "Apr";
        break;

       case 'Ags':
          return "Ags";
        break;

      case 'Sep':
          return "Sep";
        break;
      case 'Okt':
          return "Okt";
        break;

      case 'Nov':
          return "Nop";
        break;

      case 'Dec':
          return "Des";
        break;
      
      default:
        # code...
        break;
    }
}

function numToBln($namabulan){
    switch ($namabulan) {
      case 1:
          return "Jan";
        break;

      case 2:
          return "Feb";
        break;

      case 3:
          return "Mar";
        break;

      case 4:
          return "Apr";
        break;

      case 5:
          return "May";
        break;
      case 6:
          return "Jun";
        break;

      case 7:
          return "Jul";
        break;

       case 8:
          return "Ags";
        break;

      case 9:
          return "Sep";
        break;

      case 10:
          return "Okt";
        break;

      case 11:
          return "Nov";
        break;

      case 12:
          return "Dec";
        break;
      
      default:
        # code...
        break;
    }
}

function formatTanggal($tgl){
    $tgl = date_create($tgl);
    return $tgl;
}

function tgl_indo($tgl){
    $ubah = gmdate($tgl, time()+60*60*8);
    $pecah = explode("-",$ubah);
    $tanggal = $pecah[2];
    $bulan = bulan($pecah[1]);
    $tahun = $pecah[0];
    return $tanggal.' '.$bulan.' '.$tahun;
}

function tgldikit($tgl){
 
        $inttime=date('Y-m-d H:i:s',$tgl);
 
        $arr_bulan=array("","Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");
        $tglBaru=explode(" ",$inttime);
        $tglBaru1=$tglBaru[0];$tglBaru2=$tglBaru[1];
        $tglBarua=explode("-",$tglBaru1);
        $tgl=$tglBarua[2]; $bln=$tglBarua[1]; $thn=$tglBarua[0];
        if(substr($bln,0,1)=="0") $bln=substr($bln,1,1);
        $bln=substr($arr_bulan[$bln],0,10);
        $ubahTanggal="$tgl $bln $thn";
 
     return $ubahTanggal;
}

function rupiah($nilai, $pecahan = 0){
   return number_format($nilai, $pecahan, ',', '.');
}

function currency($nilai, $pecahan = 0){
   return number_format($nilai, $pecahan, '.', ',');
}
function rupiah2($harga)
{
    $a=(string)$harga; //membuat $harga menjadi string
    $len=strlen($a); //menghitung panjang string $a
 
    if ( $len <=18 )
    {
        $ratril=$len-3-1;
        $ramil=$len-6-1;
        $rajut=$len-9-1; //untuk mengecek apakah ada nilai ratusan juta (9angka dari belakang)
        $juta=$len-12-1; //untuk mengecek apakah ada nilai jutaan (6angka belakang)
        $ribu=$len-15-1; //untuk mengecek apakah ada nilai ribuan (3angka belakang)
 
        $angka='';
        for ($i=0;$i<$len;$i++)
        {
            if ( $i == $ratril )
            {
                $angka=$angka.$a[$i].".";
            }
            else if ($i == $ramil )
            {
                $angka=$angka.$a[$i].".";
            }
            else if ( $i == $rajut )
            {
                $angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 3angka dari depan
            }
            else if ( $i == $juta )
            {
                $angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 6angka dari depan
            }
            else if ( $i == $ribu )
            {
                $angka=$angka.$a[$i]."."; //meletakkan tanda titik setelah 9angka dari depan
            }
            else
            {
                $angka=$angka.$a[$i];
            }
        }
    }
    echo "Rp ".$angka.",-";
 }

 function terbilang($x){
  $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . " Belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " Seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " Seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
}

function terbilang_angka($bilangan) {

  $angka = array('0','0','0','0','0','0','0','0','0','0',
                 '0','0','0','0','0','0');
  $kata = array('','satu','dua','tiga','empat','lima',
                'enam','tujuh','delapan','sembilan');
  $tingkat = array('','ribu','juta','milyar','triliun');

  $panjang_bilangan = strlen($bilangan);

  /* pengujian panjang bilangan */
  if ($panjang_bilangan > 15) {
    $kalimat = "Diluar Batas";
    return $kalimat;
  }

  /* mengambil angka-angka yang ada dalam bilangan,
     dimasukkan ke dalam array */
  for ($i = 1; $i <= $panjang_bilangan; $i++) {
    $angka[$i] = substr($bilangan,-($i),1);
  }

  $i = 1;
  $j = 0;
  $kalimat = "";


  /* mulai proses iterasi terhadap array angka */
  while ($i <= $panjang_bilangan) {

    $subkalimat = "";
    $kata1 = "";
    $kata2 = "";
    $kata3 = "";

    /* untuk ratusan */
    if ($angka[$i+2] != "0") {
      if ($angka[$i+2] == "1") {
        $kata1 = "seratus";
      } else {
        $kata1 = $kata[$angka[$i+2]] . " ratus";
      }
    }

    /* untuk puluhan atau belasan */
    if ($angka[$i+1] != "0") {
      if ($angka[$i+1] == "1") {
        if ($angka[$i] == "0") {
          $kata2 = "sepuluh";
        } elseif ($angka[$i] == "1") {
          $kata2 = "sebelas";
        } else {
          $kata2 = $kata[$angka[$i]] . " belas";
        }
      } else {
        $kata2 = $kata[$angka[$i+1]] . " puluh";
      }
    }

    /* untuk satuan */
    if ($angka[$i] != "0") {
      if ($angka[$i+1] != "1") {
        $kata3 = $kata[$angka[$i]];
      }
    }

    /* pengujian angka apakah tidak nol semua,
       lalu ditambahkan tingkat */
    if (($angka[$i] != "0") OR ($angka[$i+1] != "0") OR
        ($angka[$i+2] != "0")) {
      $subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
    }

    /* gabungkan variabe sub kalimat (untuk satu blok 3 angka)
       ke variabel kalimat */
    $kalimat = $subkalimat . $kalimat;
    $i = $i + 3;
    $j = $j + 1;

  }

  /* mengganti satu ribu jadi seribu jika diperlukan */
  if (($angka[5] == "0") AND ($angka[6] == "0")) {
    $kalimat = str_replace("satu ribu","seribu",$kalimat);
  }

  return trim($kalimat);

} 