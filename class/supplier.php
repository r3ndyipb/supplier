<?php

function autoCode($tipe){

    $autoCode   = mysql_query("SELECT max(kodeklp) as maxCode FROM keu_5klsupplier where kodeklp like '".$tipe."%'");
    $data       = mysql_fetch_array($autoCode);
    $maxCode    = $data['maxCode'];

    $urutan = substr($maxCode, 3, 3);
    if($urutan == 0){
        $urutan = 1;
    }else{
        $urutan++;
    }

    //$huruf = "K";
    //$kodeBarang = $huruf . sprintf("%03s", $urutan);
    $kodeBarang = sprintf("%03s", $urutan);

    return $kodeBarang;
}

function listAkun(){
    $queryAkun =  "select * from keu_5akun where noakun like '211%'" ;
    $fetchnya= mysql_query($queryAkun) or die(mysql_error());

    $listAkun = '<select id="noakun" name="noakun" class="form-control">';
    while( $rowAkun = mysql_fetch_assoc($fetchnya) )
    {
        $listAkun =  $listAkun . "<option id=\"" . $rowAkun['noakun'] . "\" value=\"" . $rowAkun['noakun'] . "\" >".$rowAkun['noakun']. " - ". $rowAkun['namaakun'] . "</option>\n";
    }

    $listAkun = $listAkun."</select>";

    echo $listAkun;
}

function tipeSupplier(){

    $field_query = mysql_query( "show columns from keu_5klsupplier where Field='tipe'" );
    if( mysql_num_rows( $field_query ) <= 0 )
    return false;
    $fieldDetail = mysql_fetch_array( $field_query );
    //print_r($fieldDetail);
    $tipe = preg_replace( '/(^set\()|(^enum\()|\'|\)/i', '', $fieldDetail['Type'] );
    $list = explode( ',', $tipe );
    
    $listnya = '<select id="tipesupplier" name="tipesupplier" class="form-control">';
    foreach( $list as $val )
    {
        $listnya =  $listnya . "<option id=\"" . $val . "\" value=\"" . $val . "\" >". $val . "</option>\n";
    }

    $listnya = $listnya."</select>";

    echo $listnya;

}
?>