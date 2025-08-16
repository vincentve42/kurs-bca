<?php 



namespace FetchHtml;
require './vendor/autoload.php';

use DOMDocument;

class FetchHtml
{
    public $url;
    public $data;

    public function __construct()
    {
        $this->url = "https://www.bca.co.id/id/informasi/kurs";

        $this->data = "";

    }
    public function FetchBca()
    {


        $data_html = file_get_contents($this->url);

        $this->data = $data_html;

        libxml_use_internal_errors(true);

        $dom = new DOMDocument();

        libxml_clear_errors();

        $dom->loadHTML($data_html);
        
        $this->data = $dom;
        return $this->data;
    }
    public function __destruct()
    {
        $this->url = "https://www.bca.co.id/id/informasi/kurs";

        $this->data = "";

    }
}

?>