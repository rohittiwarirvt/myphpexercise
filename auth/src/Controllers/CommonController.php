<?php

namespace RohitAuth\Controllers;

use RohitAuth\Views\TemplateEng\Template ;


class CommonController {

	public function notfound() {
		$notfound_tpl = new Template('not-found.tpl');
		return $notfound_tpl->render();
	}
}