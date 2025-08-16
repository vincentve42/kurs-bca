<?php

namespace Kurs;
require './vendor/autoload.php';

// Refresh

header('Refresh : 3600');

use DOMXPath;
use FetchHtml\FetchHtml;
class Kurs
{

    
    public $passed_value;
    public function __construct()
    {
        $this->passed_value = 0;
    }
    public function buy_usd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="USD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_sgd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="SGD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                       
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                 
            }
        }
    }
    public function buy_eur($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="EUR"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;              
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;            
            }
        }
        return $this->passed_value;
    }
    public function buy_aud($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="AUD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                  
            }
        }
        return $this->passed_value;  
    }
     public function buy_dkk($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="DKK"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                   
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                   
            }
        }
        return $this->passed_value;  
    }
    public function buy_sek($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="SEK"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_cad($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="CAD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_chf($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="CHF"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_nzd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="NZD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_gbp($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="GBP"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_hkd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="HKD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_jpy($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="JPY"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_sar($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="SAR"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_cnh($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="CNH"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_myr($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="MYR"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function buy_thb($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="THB"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
     public function buy_krw($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="KRW"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-buy"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-buy"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-buy"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_usd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="USD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_sgd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="SGD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                       
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                 
            }
        }
    }
    public function sell_eur($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="EUR"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;              
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;            
            }
        }
        return $this->passed_value;
    }
    public function sell_aud($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="AUD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                  
            }
        }
        return $this->passed_value;  
    }
     public function sell_dkk($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="DKK"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                   
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                   
            }
        }
        return $this->passed_value;  
    }
    public function sell_sek($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="SEK"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_cad($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="CAD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_chf($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="CHF"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_nzd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="NZD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_gbp($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="GBP"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_hkd($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="HKD"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_jpy($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="JPY"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_sar($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="SAR"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_cnh($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="CNH"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_myr($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="MYR"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_thb($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="THB"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function sell_krw($method)
    {
        // Get The Html Data

        $data = new FetchHtml();

        $data_proses = $data->FetchBca();


        $search = new DOMXPath($data_proses);

        $rows = $search->query('//tr[@code="KRW"]');

        $row = $rows->item(0);

        switch($method)
        {
            
            case 0:
            {
                $this->passed_value = $search->query('.//p[@rate-type="ERate-sell"]', $row)->item(0)->nodeValue;       
                     
            }
            case 1:
            {
                $this->passed_value = $search->query('.//p[@rate-type="TT-sell"]', $row)->item(0)->nodeValue;       
                
            }
            case 2:
            {
                $this->passed_value = $search->query('.//p[@rate-type="BN-sell"]', $row)->item(0)->nodeValue;       
                    
            }
        }
        return $this->passed_value;   
    }
    public function __destruct()
    {
        $this->passed_value = 0;
    }
}

?>