<?php
class BankTransfer {
	public $settings = array(
		'description' => 'Provides payment information to your users for bank transfers.',
	);
	
	function payment_features() {
		return '<img src=" data:image/false;base64,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">';	
	}
	
	function payment_button($params) {
	    global $billic, $db;
	    if (get_config('banktransfer_instructions')=='') {
			return false;
	    }
	    return 'Pay by Bank Transfer';
	}
	
	function payment_page($params) {
		global $billic, $db;
		if (get_config('banktransfer_instructions')=='') {
			return 'Bank Transfer is not configured';
		}
		$html = '';
		if ($billic->user['verified']==0 && get_config('banktransfer_require_verification')==1) {
			return 'verify';
		} else {
			$html .= nl2br(str_replace('{$invoiceid}', $params['invoice']['id'], get_config('banktransfer_instructions')));
		}
		return $html;
	}
	
	function settings($array) {
		global $billic, $db;
		if (empty($_POST['update'])) {
			echo '<form method="POST"><input type="hidden" name="billic_ajax_module" value="BankTransfer"><table class="table table-striped">';
			echo '<tr><th>Setting</th><th>Value</th></tr>';
			echo '<tr><td>Require Verification</td><td><input type="checkbox" name="banktransfer_require_verification" value="1"'.(get_config('banktransfer_require_verification')==1?' checked':'').'></td></tr>';
			echo '<tr><td>Instructions</td><td><textarea class="form-control" name="banktransfer_instructions">'.safe(get_config('banktransfer_instructions')).'</textarea></td></tr>';
			echo '<tr><td colspan="2" align="center"><input type="submit" class="btn btn-default" name="update" value="Update &raquo;"></td></tr>';
			echo '</table></form>';
		} else {
			if (empty($billic->errors)) {
				set_config('banktransfer_require_verification', $_POST['banktransfer_require_verification']);
				set_config('banktransfer_instructions', $_POST['banktransfer_instructions']);
				$billic->status = 'updated';
			}	
		}
	}
}
