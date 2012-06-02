<?php
/*
 * Created on Mar 11, 2012
 */

class Database extends SQLiteDatabase{

}


class Log {
	private $log;

	public function __construct($logfile = "tmp.log"){
		$this->log = fopen($logfile, 'w+');
	}

	public function __destruct(){
		fclose($this->log);
	}

	public function info($message){
		if(isset($this->log)){
			fwrite($this->log, "INFO: " . time_string() . ": " . $message);
		} else {
			echo "INFO :" . time_string() . ": " . $message;
		}
	}
	public function error($message){
		if(isset($this->log)){
			fwrite($this->log, "ERROR: " . time_string() . ": " . $message);
		} else {
			echo "ERROR :" . time_string() . ": " . $message;
		}
	}
	public function debug($message){
		if(isset($this->log)){
			fwrite($this->log, "DEBUG: " . time_string() . ": " . $message);
		} else {
			echo "DEBUG :" . time_string() . ": " . $message;
		}
	}
}

?>
