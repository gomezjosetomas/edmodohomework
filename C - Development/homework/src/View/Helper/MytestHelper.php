<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\HtmlHelper;

	class MytestHelper extends HtmlHelper{
		public function testFunction($arg1){
			return ‘‘.$arg1.’‘;
		}
	}
?>