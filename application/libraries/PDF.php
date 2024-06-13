<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'dompdf-master/autoload.inc,php';
use Dompdf\Dompdf;
use Dompdf\Options;

class pdf {
    public function generate($view, $filename='', $paper, $orientations='', $stream=TRUE){
        $option = new Option();
        $option->set('IsRemoteEnabled',TRUE);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        $dompdf->setPaper($paper, $orientations);
        $dompdf->render();
        if ($stream)
        {
            $dompdf->stream($filename.'.pdf', array('Attachement = 0'));
            exit();
        }
        else
        {
            return $dompdf->output();
        }
    }
}
?>