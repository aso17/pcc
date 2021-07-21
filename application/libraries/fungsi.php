<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

use Dompdf\Dompdf;
use phpDocumentor\Reflection\PseudoTypes\False_;
use SebastianBergmann\CodeCoverage\Report\Html\Facade;

class fungsi
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }
    public function generate($view, $data = array(), $html = '', $filename = 'reportPlaning', $size = 'A4', $orientation = 'landscape',  $attachment = False)
    {
        $options = new Dompdf();
        $html = $this->ci->load->view($view, $data, true);
        $options->loadHtml($html);
        $options->setPaper($size, $orientation);
        $options->render();
        $options->stream($filename, ['Attachment' => $attachment]);
    }
}