<?php

class Log {

    // default log file location
    private $log_file = 'logs/default_log.txt';

    public function __construct($user_log_file = null) {
        if ($user_log_file !== null) {
            $this->log_file = $user_log_file;
        }
        $this->check_file();
    }

    public function write($message, $type = 'NOTICE') {
        $current = file_get_contents($this->log_file);
        $current .= date('Y-m-d H:i:s')." (".strtoupper($type).") > ".$message."\n";
        file_put_contents($this->log_file, $current);
    }

    private function check_file() {
        if (!file_exists($this->log_file)) {
            if (!touch($this->log_file)) {
                die("<p>Error: Could not create new log file ({$this->log_file}), please check file permissions.</p>");
            }
        }
    }

}
