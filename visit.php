<?php
// Warna Terminal
$biru = "\e[34m";
$kuning = "\e[33m";
$cyan = "\e[96m";
$magenta = "\e[35m";
$hijau = "\e[92m";
$merah = "\e[91m";

echo "$cyan + //////////////////////////////+\n";

echo "$cyan ___           _     _
|_ _|_ __  ___(_) __| | ___
 | || '_ \/ __| |/ _` |/ _ \
 | || | | \__ \ | (_| |  __/
|___|_| |_|___/_|\__,_|\___|\n";
echo "_   _                 _
| | | | ___  __ _ _ __| |_ ____
| |_| |/ _ \/ _` | '__| __|_  /
|  _  |  __/ (_| | |  | |_ / /
|_| |_|\___|\__,_|_|   \__/___|\n\n";

echo " Only God Can Stop Me :D \n ";
echo " $merah INFO! ";
echo file_get_contents("https://pastebin.com/raw/k4qabq9K");
echo " \n";
echo "$hijau Contact Me : \n";
echo " Facebook : http://fb.me/basmal106 \n";
echo " Email : Abdulm@merahputih.id \n";
echo " \n \n";
echo " ~~~~~~ AUTO VISITOR BLOG 2018 ~~~~~\n  ";
echo ' Website Mu: ';
$url = trim(fgets(STDIN));
echo ' Jumlah Visitor: ';
$max = trim(fgets(STDIN));

error_reporting(0);
class Random_UA
 {
    
    /**
     * 
     */ 
    var $linux_proc;
    /**
     * 
     */
    var $mac_proc;
    
    /**
     * A
     */
    var $lang;
    
    function __construct()
    {
        $this->linux_proc = array(
            'i686',
            'x86_64'
        );
        
        $this->mac_proc = array(
            'Intel',
            'PPC',
            'U; Intel',
            'U; PPC'
        );
        
        $this->lang = array(
            'en-US',
            'sl-SI'
        );
    }
    
    function firefox() {
        $ver = array(
    	'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), mktime())) . ' Firefox/' . rand(5, 7) . '.0',
    	'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), mktime())) . ' Firefox/' . rand(5, 7) . '.0.1',
    	'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), mktime())) . ' Firefox/3.6.' . rand(1, 20),
    	'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), mktime())) . ' Firefox/3.8'
        );
    
        $platforms = array(
    	'(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; ' . $this->lang[array_rand($this->lang, 1)] . '; rv:1.9.' . rand(0, 2) . '.20) ' . $ver[array_rand($ver, 1)],
    	'(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; rv:' . rand(5, 7) . '.0) ' . $ver[array_rand($ver, 1)],
    	'(Macintosh; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0) ' . $ver[array_rand($ver, 1)]
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function safari() {
        $saf = rand(531, 535) . '.' . rand(1, 50) . '.' . rand(1, 7);
        if (rand(0, 1) == 0) {
    	$ver = rand(4, 5) . '.' . rand(0, 1);
        } else {
    	$ver = rand(4, 5) . '.0.' . rand(1, 5);
        }
    
        $platforms = array(
    	'(Windows; U; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
    	'(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
    	'(iPod; U; CPU iPhone OS ' . rand(3, 4) . '_' . rand(0, 3) . ' like Mac OS X; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/" . rand(3, 4) . ".0.5 Mobile/8B" . rand(111, 119) . " Safari/6$saf",
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function iexplorer() {
        $ie_extra = array(
    	'',
    	'; .NET CLR 1.1.' . rand(4320, 4325) . '',
    	'; WOW64'
        );
        $platforms = array(
    	'(compatible; MSIE ' . rand(5, 9) . '.0; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; Trident/' . rand(3, 5) . '.' . rand(0, 1) . ')'
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function opera() {
        $op_extra = array(
    	'',
    	'; .NET CLR 1.1.' . rand(4320, 4325) . '',
    	'; WOW64'
        );
        $platforms = array(
    	'(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00',
    	'(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00'
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    function chrome() {
        $saf = rand(531, 536) . rand(0, 2);
    
        $platforms = array(
    	'(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
    	'(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
    	'(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf"
        );
    
        return $platforms[array_rand($platforms, 1)];
    }
    
    /**
     * Main function which will choose random browser
     * @return string user agent
     */
    function generate() {
        $x = rand(1, 5);
        switch ($x) {
    	case 1:
    	    return "Mozilla/5.0 " . $this->firefox();
    	    break;
    	case 2:
    	    return "Mozilla/5.0 " . $this->safari();
    	    break;
    	case 3:
    	    return "Mozilla/" . rand(4, 5) . ".0 " . $this->iexplorer();
    	    break;
    	case 4:
    	    return "Opera/" . rand(8, 9) . '.' . rand(10, 99) . ' ' . $this->opera();
    	    break;
    	case 5:
    	    return 'Mozilla/5.0' . $this->chrome();
    	    break;
        }
    }
    
}

class autovisitor extends Random_UA {

	public function __construct($url) {
		$this->url = $url;
	}

	private function curl() {
		$ch = curl_init();
		CURL_SETOPT($ch, CURLOPT_URL, $this->url);
		CURL_SETOPT($ch, CURLOPT_HTTPHEADER, array('Referer: '.$this->acakReferer(),
												   'User-Agent: '.$this->generate()));
		CURL_SETOPT($ch, CURLOPT_FOLLOWLOCATION, true);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYHOST, 0);
		CURL_SETOPT($ch, CURLOPT_SSL_VERIFYPEER, 0);
		CURL_SETOPT($ch, CURLOPT_RETURNTRANSFER, 1);
		CURL_SETOPT($ch, CURLOPT_USERAGENT, $this->generate());
		$result = curl_exec($ch);
		curl_close($ch);

		return $result;
	}

	private function xflush() {
    	static $output_handler = null;
    	if ($output_handler === null) {
        	$output_handler = @ini_get('output_handler');
    	}
    	if ($output_handler == 'ob_gzhandler') {
        	return;
    	}
    	flush();
    	if (function_exists('ob_flush') AND function_exists('ob_get_length') AND ob_get_length() !== false) {
       		@ob_flush();
    	} else if (function_exists('ob_end_flush') AND function_exists('ob_start') AND function_exists('ob_get_length') AND ob_get_length() !== FALSE) {
       		@ob_end_flush();
        	@ob_start();
    	}
	}

	private function acakReferer() {
		$list = array();
		/* Asal traffic yang di submit */ 
		$list[] = "http://facebook.com";
		$list[] = "http://google.com.sg";
		$list[] = "http://twitter.com";
 		$list[] = "http://facebook.com";
        $list[] = "http://google.com.sg";
	    $list[] = "http://twitter.com";
	    $list[] = "http://google.co.id";
	    $list[] = "http://google.com.my";
	    $list[] = "http://google.jp";
	    $list[] = "http://google.us";
	    $list[] = "http://google.tl";
	    $list[] = "http://google.ac";
	    $list[] = "http://google.ad";
	    $list[] = "http://google.ae";
	    $list[] = "http://google.af";
	    $list[] = "http://google.ag";
	    $list[] = "http://google.ru";
	    $list[] = "http://google.by";
	    $list[] = "http://google.ca";
	    $list[] = "http://google.cn";
	    $list[] = "http://google.cl";
	    $list[] = "http://google.cm";
	    $list[] = "http://google.cv";
	    $list[] = "http://google.gg";
	    $list[] = "http://google.ge";
	    $list[] = "http://google.gr";
	    $list[] = "http://google.com.tw";
	    $list[] = "https://search.yahoo.com";
        $list[] = "http://www.beinyu.com";


		$acak = array_rand($list,1);
		return $list[$acak];
	}

	public function jalankan() {
		$this->xflush();

		$this->curl();
		return $this->acakReferer(); 

		$this->xflush();
	}

} 

for($i = 1; $i < $max+1; $i++) {
	$class = new autovisitor($url);
	echo $i.". VISITOR TERKIRIM MELALUI REFERER - [".$class->jalankan()."\n";
}
?>
