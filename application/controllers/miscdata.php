<?PHP

class Miscdata_Controller extends Base_Controller {

	public $restful = true;



	public function post_setconnection() {
		
			$action=Input::get('action');
			$decision=Input::get('decision');
			
			$Perms = Perms::find($decision);
			$Response = array();
			switch ($action) {
				case "AA":
					$Perms->comm_status = 2;
					$Response['action'] = "connect";
					$Response['response'] = "Connection made";
					break;
				case "AI":
					$Perms->comm_status = 0;
					$Response['action'] = "connect";
					$Response['response'] = "Connection ignored";
					break;
				case "AD":
					$Perms->comm_status = -99999;
					$Response['action'] = "connect";
					$Response['response'] = "Connection Dropped";
					break;
				case "AF":
					$Perms->comm_status = -1;
					$Response['action'] = "connect";
					$Response['response'] = "Connection Deleted";
					break;	
				case "DY":
					$Perms->doc_release = 1;
					$Response['action'] = "documents";
					$Response['response'] = "Documents Released";
					break;
				case "DN":
					$Perms->doc_release = 0;
					$Response['action'] = "documents";
					$Response['response'] = "Documents Withheld";
					break;
				case "DH":
					$Perms->doc_release = 2;
					$Response['action'] = "documents";
					$Response['response'] = "Document on hold";
					break;
			}
			$Perms->Save();
		return json_encode($Response);
	}
}