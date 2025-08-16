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

        $dom = new DOMDocument();

        $this->data = $dom->loadHTML($data_html);

        return $this->data;
    }
}

?>