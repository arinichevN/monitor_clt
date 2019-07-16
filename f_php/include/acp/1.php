<?php

namespace acp;

define("ACP_BUFFER_MAX_SIZE", 508);

define("ACP_DELIMITER_COLUMN", "\t");
define("ACP_DELIMITER_ROW", "\n");
define("ACP_DELIMITER_BLOCK", "\r");
define("ACP_DELIMITER_PACKET", "\0");

define("ACP_RESP_APP_BUSY", "B");
define("ACP_RESP_APP_IDLE", "I");


define("ACP_CMD_APP_START", "ast");
define("ACP_CMD_APP_STOP", "asp");
define("ACP_CMD_APP_EXIT", "aex");
define("ACP_CMD_APP_RESET", "ars");
define("ACP_CMD_APP_PING", "apn");
define("ACP_CMD_APP_HELP", "ahl");
define("ACP_CMD_APP_PRINT", "apr");
define("ACP_CMD_APP_TIME", "atm");
define("ACP_CMD_APP_NO", "ano");

define("ACP_CMD_GET_FTS", "gfts");
define("ACP_CMD_GET_ITS", "gits");
define("ACP_CMD_GET_INT", "gi");
define("ACP_CMD_GET_NEXT_ITEM", "gni");
define("ACP_CMD_SET_FLOAT", "sf");
define("ACP_CMD_SET_INT", "si");

define("ACP_CMD_SET_PWM_DUTY_CYCLE", "spwmds");
define("ACP_CMD_SET_PWM_PERIOD", "spwmp");
define("ACP_CMD_SET_PWM_RESOLUTION", "spwmr");
define("ACP_CMD_SET_PWM_DUTY_CYCLE_MIN", "spwmdsi");
define("ACP_CMD_SET_PWM_DUTY_CYCLE_MAX", "spwmdsa");
define("ACP_CMD_SET_PM_DUTY_CYCLE", "spmdc");
define("ACP_CMD_SET_PM_DUTY_TIME_MIN", "spmdtm");
define("ACP_CMD_SET_PM_IDLE_TIME_MIN", "spmitm");

define("ACP_CMD_STOP", "sp");
define("ACP_CMD_START", "st");
define("ACP_CMD_RESET", "rs");
define("ACP_CMD_GET_DATA", "gd");

define("ACP_CMD_PROG_STOP", "psp");
define("ACP_CMD_PROG_START", "pst");
define("ACP_CMD_PROG_RESET", "prs");
define("ACP_CMD_PROG_ENABLE", "penl");
define("ACP_CMD_PROG_DISABLE", "pdsl");
define("ACP_CMD_PROG_ADD", "padd");
define("ACP_CMD_PROG_DELETE", "pdel");
define("ACP_CMD_PROG_GET_DATA_RUNTIME", "pgdr");
define("ACP_CMD_PROG_GET_DATA_INIT", "pgdi");
define("ACP_CMD_PROG_GET_DATA", "pgd");
define("ACP_CMD_PROG_GET_ERROR", "pgerr");
define("ACP_CMD_PROG_GET_ENABLED", "pgenl");
define("ACP_CMD_PROG_NEXT_STEP", "pnstp");
define("ACP_CMD_PROG_PREV_STEP", "ppstp");

define("ACP_CMD_CHANNEL_STOP", "csp");
define("ACP_CMD_CHANNEL_START", "cst");
define("ACP_CMD_CHANNEL_RESET", "crs");
define("ACP_CMD_CHANNEL_ENABLE", "cenl");
define("ACP_CMD_CHANNEL_DISABLE", "cdsl");
define("ACP_CMD_CHANNEL_ADD", "cadd");
define("ACP_CMD_CHANNEL_DELETE", "cdel");
define("ACP_CMD_CHANNEL_GET_DATA_RUNTIME", "cgdr");
define("ACP_CMD_CHANNEL_GET_DATA_INIT", "cgdi");
define("ACP_CMD_CHANNEL_GET_DATA", "cgd");
define("ACP_CMD_CHANNEL_GET_ERROR", "cgerr");
define("ACP_CMD_CHANNEL_GET_ENABLED", "cgenl");

define("ACP_CMD_REG_PROG_TUNE", "rptune");
define("ACP_CMD_REG_PROG_SWITCH", "rpswitch");
define("ACP_CMD_REG_PROG_GET_STATE", "rpgst");
define("ACP_CMD_REG_PROG_GET_STATE_STSP", "rpgstsp");

define("ACP_CMD_REG_PROG_SET_GOAL", "rpsgoal");
define("ACP_CMD_REG_PROG_SET_HEATER_POWER", "rpshp");
define("ACP_CMD_REG_PROG_SET_COOLER_POWER", "rpscp");
define("ACP_CMD_REG_PROG_SET_EM_MODE", "rpsemm");
define("ACP_CMD_REG_PROG_SET_CHANGE_GAP", "rpschgap");
define("ACP_CMD_REG_PROG_SET_COOLER_MODE", "rpscm");
define("ACP_CMD_REG_PROG_SET_HEATER_MODE", "rpshm");

define("ACP_CMD_ALR_PROG_SET_SMS", "pssms");
define("ACP_CMD_ALR_PROG_SET_RING", "psring");
define("ACP_CMD_ALR_PROG_SET_GOAL", "psgoal");
define("ACP_CMD_ALR_PROG_SET_DELTA", "psdelta");
define("ACP_CMD_ALR_ALARM_DISABLE", "almdsl");
define("ACP_CMD_ALR_ALARM_GET", "almg");

define("ACP_CMD_LCK_LOCK", "lckl");
define("ACP_CMD_LCK_UNLOCK", "lckul");

define("ACP_CMD_MOBILE_RING", "mring");
define("ACP_CMD_MOBILE_SEND_SMS", "mssms");

define("ACP_CMD_REGONF_PROG_SET_HEATER_DELTA", "ronfshd");
define("ACP_CMD_REGONF_PROG_SET_COOLER_DELTA", "ronfscd");


define("ACP_CMD_REGSMP_PROG_SET_HEATER_KP", "rsmpshkp");
define("ACP_CMD_REGSMP_PROG_SET_HEATER_KI", "rsmpshki");
define("ACP_CMD_REGSMP_PROG_SET_HEATER_KD", "rsmpshkd");

define("ACP_CMD_REGSMP_PROG_SET_COOLER_KP", "rsmpsckp");
define("ACP_CMD_REGSMP_PROG_SET_COOLER_KI", "rsmpscki");
define("ACP_CMD_REGSMP_PROG_SET_COOLER_KD", "rsmpsckd");

define("ACP_CMD_BB_CHANNEL_PROG_SAVE_GOAL", "bbcpsg");
define("ACP_CMD_BB_CHANNEL_PROG_SAVE_DELTA", "bbcpsd");
define("ACP_CMD_BB_CHANNEL_CLOSE", "bbccls");
define("ACP_CMD_BB_CHANNEL_OPEN", "bbcopn");

$crc8_table = [
    0x00, 0x3e, 0x7c, 0x42, 0xf8, 0xc6, 0x84, 0xba, 0x95, 0xab, 0xe9, 0xd7,
    0x6d, 0x53, 0x11, 0x2f, 0x4f, 0x71, 0x33, 0x0d, 0xb7, 0x89, 0xcb, 0xf5,
    0xda, 0xe4, 0xa6, 0x98, 0x22, 0x1c, 0x5e, 0x60, 0x9e, 0xa0, 0xe2, 0xdc,
    0x66, 0x58, 0x1a, 0x24, 0x0b, 0x35, 0x77, 0x49, 0xf3, 0xcd, 0x8f, 0xb1,
    0xd1, 0xef, 0xad, 0x93, 0x29, 0x17, 0x55, 0x6b, 0x44, 0x7a, 0x38, 0x06,
    0xbc, 0x82, 0xc0, 0xfe, 0x59, 0x67, 0x25, 0x1b, 0xa1, 0x9f, 0xdd, 0xe3,
    0xcc, 0xf2, 0xb0, 0x8e, 0x34, 0x0a, 0x48, 0x76, 0x16, 0x28, 0x6a, 0x54,
    0xee, 0xd0, 0x92, 0xac, 0x83, 0xbd, 0xff, 0xc1, 0x7b, 0x45, 0x07, 0x39,
    0xc7, 0xf9, 0xbb, 0x85, 0x3f, 0x01, 0x43, 0x7d, 0x52, 0x6c, 0x2e, 0x10,
    0xaa, 0x94, 0xd6, 0xe8, 0x88, 0xb6, 0xf4, 0xca, 0x70, 0x4e, 0x0c, 0x32,
    0x1d, 0x23, 0x61, 0x5f, 0xe5, 0xdb, 0x99, 0xa7, 0xb2, 0x8c, 0xce, 0xf0,
    0x4a, 0x74, 0x36, 0x08, 0x27, 0x19, 0x5b, 0x65, 0xdf, 0xe1, 0xa3, 0x9d,
    0xfd, 0xc3, 0x81, 0xbf, 0x05, 0x3b, 0x79, 0x47, 0x68, 0x56, 0x14, 0x2a,
    0x90, 0xae, 0xec, 0xd2, 0x2c, 0x12, 0x50, 0x6e, 0xd4, 0xea, 0xa8, 0x96,
    0xb9, 0x87, 0xc5, 0xfb, 0x41, 0x7f, 0x3d, 0x03, 0x63, 0x5d, 0x1f, 0x21,
    0x9b, 0xa5, 0xe7, 0xd9, 0xf6, 0xc8, 0x8a, 0xb4, 0x0e, 0x30, 0x72, 0x4c,
    0xeb, 0xd5, 0x97, 0xa9, 0x13, 0x2d, 0x6f, 0x51, 0x7e, 0x40, 0x02, 0x3c,
    0x86, 0xb8, 0xfa, 0xc4, 0xa4, 0x9a, 0xd8, 0xe6, 0x5c, 0x62, 0x20, 0x1e,
    0x31, 0x0f, 0x4d, 0x73, 0xc9, 0xf7, 0xb5, 0x8b, 0x75, 0x4b, 0x09, 0x37,
    0x8d, 0xb3, 0xf1, 0xcf, 0xe0, 0xde, 0x9c, 0xa2, 0x18, 0x26, 0x64, 0x5a,
    0x3a, 0x04, 0x46, 0x78, 0xc2, 0xfc, 0xbe, 0x80, 0xaf, 0x91, 0xd3, 0xed,
    0x57, 0x69, 0x2b, 0x15];

function crc_update($crc, $b) {
    for ($i = 8; $i; $i--) {
        $crc = (($crc ^ $b) & 1) ? ($crc >> 1) ^ 0x8c : ($crc >> 1);
        $b >>= 1;
    }
    return $crc;
}

function crc_update_by_str($crc, $str) {
    $len = \strlen($str);
    $i = 0;
    while ($len--) {
        $extract = ord($str[$i]);
        for ($t = 8; $t; $t--) {
            $sum = ($crc ^ $extract) & 0x01;
            $crc >>= 1;
            if ($sum) {
                $crc ^= 0x8C;
            }
            $extract >>= 1;
        }
        $i++;
    }

    return $crc;
}

function crc_check($buf_str) {
    $str = "";
    $n = 0;
    $f = 0;
    $crc_buf = NULL;
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($buf_str[$i] === ACP_DELIMITER_BLOCK) {
            $n++;
        }
        if (!$f) {
            $str .= $buf_str[$i];
        }
        if ($n === 3 && !$f) {
            $f = 1;
            continue;
        }
        if ($f) {
            $crc_buf = ord($buf_str[$i]);
            break;
        }
    }
    if (is_null($crc_buf)) {
        return 0;
    }
    $crc_fact = 0x00;
    $crc_fact = crc_update_by_str($crc_fact, $str);
    if ($crc_fact !== $crc_buf) {
        return 0;
    }
    return 1;
}

function id_check($buf_str, $id) {
    $block_count = 0;
    $str = "";
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($buf_str[$i] === ACP_DELIMITER_BLOCK) {
            $block_count++;
            continue;
        }
        if ($block_count === 2) {
            $str.=$buf_str[$i];
        }
        if ($block_count > 2) {
            break;
        }
    }
    $found_id = 0;
    $n = sscanf($str, "%d", $found_id);
    if ($n !== 1) {
        return 0;
    }
    if ($found_id !== $id) {
        return 0;
    }
    return 1;
}

function responseCheck($buf_str, $request_id) {
    if (!crc_check($buf_str)) {
        throw new \Exception("responseCheck: bad crc");
    }
    if (!id_check($buf_str, $request_id)) {
        throw new \Exception("responseCheck: bad id");
    }
    return 1;
}

function getNewId() {
    return rand(0, getrandmax());
}

function send($buf) {
    $buf_len = \strlen($buf); //echo $buf;
    $n = \sock\sendBuf($buf);
    if ($n !== $buf_len) {
        throw new \Exception("acp\send: expected to write: $buf_len, but written: $n");
    }
}

function requestSend($cmd, $data, $pack_data_fun) {
    $buf = "";
    $buf = $cmd . ACP_DELIMITER_BLOCK;
    if (!is_null($data) && !is_null($pack_data_fun)) {
        $buf .= $pack_data_fun($data);
    }
    $buf.=ACP_DELIMITER_BLOCK;
    $id = getNewId();
    $buf.=$id . ACP_DELIMITER_BLOCK;
    $crc = 0x00;
    $crc = crc_update_by_str($crc, $buf);
    $buf.=chr($crc);
    send($buf);
    return $id;
}

function requestSendCmd($cmd) {
    return requestSend($cmd, NULL, NULL);
}

function requestSendI1List($cmd, $list) {
    $packI1List = function ($list) {
        $buf = "";
        foreach ($list as $value) {
            $buf.=$value . ACP_DELIMITER_ROW;
        }
        return $buf;
    };
    return requestSend($cmd, $list, $packI1List);
}

function requestSendI2List($cmd, $list) {
    $packI2List = function ($list) {
        $buf = "";
        foreach ($list as $value) {
            $v0 = intval($value['p0']);
            $v1 = intval($value['p1']);
            $buf.=$v0 . ACP_DELIMITER_COLUMN . $v1 . ACP_DELIMITER_ROW;
        }
        return $buf;
    };
    return requestSend($cmd, $list, $packI2List);
}

function requestSendI1F1List($cmd, $list) {
    $packI1F1List = function ($list) {
        $buf = "";
        foreach ($list as $value) {
            $v0 = intval($value['p0']);
            $v1 = floatval($value['p1']);
            $buf.=$v0 . ACP_DELIMITER_COLUMN . $v1 . ACP_DELIMITER_ROW;
        }
        return $buf;
    };
    return requestSend($cmd, $list, $packI1F1List);
}

function requestSendI1S1List($cmd, $list) {
    $packI1S1List = function ($list) {
        $buf = "";
        foreach ($list as $value) {
            $v0 = intval($value['p0']);
            $v1 = $value['p1'];
            $buf.=$v0 . ACP_DELIMITER_COLUMN . $v1 . ACP_DELIMITER_ROW;
        }
        return $buf;
    };
    return requestSend($cmd, $list, $packI1S1List);
}

function getBufParseStateData($request_id) {
    $buf = \sock\getBuf(ACP_BUFFER_MAX_SIZE);
    if (\strlen($buf) === 0) {
        throw new \Exception("getBufParseStateData: controller returned nothing");
    }
    if (!responseCheck($buf, $request_id)) {
        throw new \Exception("getBufParseStateData: response check failed");
    }
    $block_count = 0;
    $str = "";
    for ($i = 0; $i < \strlen($buf); $i++) {
        if ($buf[$i] === ACP_DELIMITER_BLOCK) {
            $block_count++;
            continue;
        }
        if ($block_count === 1) {
            $str.=$buf[$i];
        }
        if ($block_count > 2) {
            break;
        }
    }
    return $str;
}

function rowToArr($str, $items_count) {
    $data = \explode(ACP_DELIMITER_COLUMN, $str, $items_count);
    if (\count($data) !== $items_count) {
        throw new \Exception("rowToArr: bad format");
    }
    return $data;
}

function rowToStr($str) {
    $out=\str_replace(ACP_DELIMITER_COLUMN, " ", $str);
    return $out;
}

function getData($buf_str, $rowArr) {
    $data = [];
    $str = "";
//  $last_char = NULL;
    $field_count = \count($rowArr);
    $block_count = 0;
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($buf_str[$i] === ACP_DELIMITER_BLOCK) {
            $block_count++;
            continue;
        }
        if ($block_count < 1) {
            continue;
        }
        if ($block_count > 1) {
            return $data;
        }
        if ($buf_str[$i] === ACP_DELIMITER_ROW) {
            $arr = rowToArr($str, $field_count);
            $row = array_merge([], $rowArr);
            $j = 0;
            foreach ($row as $key => $value) {
                $row[$key] = $arr[$j];
                $j++;
            }
            \array_push($data, $row);
            $str = null;
        }
        $str.=$buf_str[$i];
// $last_char = $buf_str[$i];
    }
    return $data;
}

function getRowStr($buf_str) {
    $data = "";
    $str = "";
    $block_count = 0;
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($buf_str[$i] === ACP_DELIMITER_BLOCK) {
            $block_count++;
            continue;
        }
        if ($block_count < 1) {
            continue;
        }
        if ($block_count > 1) {
            return $data;
        }
        if ($buf_str[$i] === ACP_DELIMITER_ROW) {
            $row_str = rowToStr($str);
            $data .=$row_str;
            $str = null;
        }
        $str.=$buf_str[$i];
// $last_char = $buf_str[$i];
    }
    return $data;
}

function responseRead($request_id) {
    $buf = \sock\getBuf(ACP_BUFFER_MAX_SIZE);
    if (\strlen($buf) === 0) {
        throw new \Exception("responseRead: controller returned nothing");
    }
    if (!responseCheck($buf, $request_id)) {
        throw new \Exception("responseRead: response check failed");
    }
    return $buf;
}

function responseReadNParse($rowArr, $requestId) {
    $buf = responseRead($requestId);
    $data = getData($buf, $rowArr);
    if ($data === false) {
        throw new \Exception("responseRead: bad format");
    }
    return $data;
}

function responseReadRows($requestId) {
    $buf = responseRead($requestId);
    $data = getRowStr($buf);
    if ($data === false) {
        throw new \Exception("responseRead: bad format");
    }
    return $data;
}

function responseGetSeq($buf_str) {
    $seq_str = "";
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($buf_str[$i] === ACP_DELIMITER_COLUMN) {
            break;
        }
        $seq_str.=$buf_str[$i];
    }
    return intval($seq_str, 10);
}

function responseGetInl($buf_str) {
    $inl_str = "";
    $f1 = 0;
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($buf_str[$i] === ACP_DELIMITER_COLUMN) {
            $f1 = 1;
            continue;
        }
        if (!$f1) {
            continue;
        }
        if ($buf_str[$i] === ACP_DELIMITER_BLOCK) {
            break;
        }
        $inl_str.=$buf_str[$i];
    }
    return intval($inl_str, 10);
}

function responseGetData($buf_str) {
    $data = "";
    $n = 0;
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($buf_str[$i] === ACP_DELIMITER_BLOCK) {
            $n++;
            continue;
        }
        if ($n < 1) {
            continue;
        }
        if ($n > 1) {
            break;
        }
        $data.=$buf_str[$i];
    }
    return $data;
}

function bufferGetNextItem($arr, $seq) {
    foreach ($arr as $value) {
        if ($value["seq"] === $seq + 1) {
            return $value["data"];
        }
    }
    return NULL;
}

//function responseReadText($requestId) {
    //$data_buffer = [];
    //$inl = 1;
    //$seq = -1;
    //$seq_last = -1;
    //$data = "";
    //$out = "";
    //while ($inl !== 0) {
        //$buf = responseRead($requestId);
        //$seq = responseGetSeq($buf);
        //$inl = responseGetInl($buf);
        //$data = responseGetData($buf);
        //if ($seq === $seq_last + 1) {
            //$out.=$data;
            //$seq_last = $seq;
            //while (1) {
                //$str = bufferGetNextItem($data_buffer, $seq_last);
                //if (is_null($str)) {
                    //break;
                //}
                //$out.=$str;
                //$seq++;
                //$seq_last = $seq;
            //}
        //} else {
            //array_push($data_buffer, ["seq" => $seq, "data" => $data]);
        //}
    //}
    //return $out;
//}

function responseReadText($requestId) {
    $data_buffer = [];
    $inl = 1;
    $seq = -1;
    $data = "";
    $seq_max=-2;
    while (($inl === 1) || (($seq_max+1) !== count($data_buffer))) {
        $buf = responseRead($requestId);
        $seq = responseGetSeq($buf);
        if($inl===1){
			$inl = responseGetInl($buf);
		}
        $data = responseGetData($buf);
        array_push($data_buffer, ["seq" => $seq, "data" => $data]);
        if($seq_max < $seq){
			$seq_max=$seq;
		}
    }
    $out = "";
    $cseq=0;
    $f=true;
    while($f){
		$f=false;
	    foreach ($data_buffer as $value) {
	        if ($value["seq"] === $cseq) {
	            $out.=$value["data"];
	            $cseq++;
	            $f=true;
	            break;
	        }
	    }
	}
    return $out;
}

function getIrgValveState($request_id) {
    return responseReadNParse([
        'id' => null,
        'state' => null,
        'state_wp' => null,
        'state_rn' => null,
        'state_tc' => null,
        'step_tc' => null,
        'crepeat' => null,
        'blocked_rn' => null,
        'cbusy_time' => null,
        'time_passed_main' => null,
        'time_passed_tc' => null,
        'last_output' => null
            ], $request_id);
}

function getIrgValveState1($request_id) {
    return responseReadNParse([
        'id' => null,
        'output' => null,
        'rain' => null,
        'is_master' => null,
        'master_count' => null,
        'running_prog_id' => null,
        'prog_loaded' => null,
        'state_main' => null,
        'state_wp' => null,
        'state_rn' => null,
        'state_tc' => null,
        'crepeat' => null,
        'blocked_rn' => null,
        'time_passed' => null,
        'time_specified' => null,
        'time_rest_tc' => null,
        'em_peer_active' => null
            ], $request_id);
}

function getLgrDataInit($request_id) {
    return responseReadNParse([
        'id' => null,
        'interval_min' => null,
        'max_rows' => null
            ], $request_id);
}

function getLgrDataRuntime($request_id) {
    return responseReadNParse([
        'id' => null,
        'state' => null,
        'log_time_rest' => null
            ], $request_id);
}

function getRegonfDataRuntime($request_id) {
    return responseReadNParse([
        'id' => null,
        'state' => null,
        'state_r' => null,
        'output_heater' => null,
        'output_cooler' => null,
        'change_tm_rest' => null,
        'sensor_value' => null,
        'sensor_state' => null
            ], $request_id);
}

function getRegonfDataInit($request_id) {
    return responseReadNParse([
        'id' => null,
        'change_gap' => null,
        'goal' => null,
        'heater_use' => null,
        'heater_delta' => null,
        'heater_rsl' => null,
        'cooler_use' => null,
        'cooler_delta' => null,
        'cooler_rsl' => null
            ], $request_id);
}

function getRegsmpDataRuntime($request_id) {
    return responseReadNParse([
        'id' => null,
        'state' => null,
        'state_r' => null,
        'output_heater' => null,
        'output_cooler' => null,
        'change_tm_rest' => null,
        'sensor_value' => null,
        'sensor_state' => null
            ], $request_id);
}

function getRegsmpDataInit($request_id) {
    return responseReadNParse([
        'id' => null,
        'goal' => null,
        'change_gap' => null,
        'heater_mode' => null,
        'heater_use' => null,
        'heater_output_min' => null,
        'heater_output_max' => null,
        'heater_delta' => null,
        'heater_kp' => null,
        'heater_ki' => null,
        'heater_kd' => null,
        'cooler_mode' => null,
        'cooler_use' => null,
        'cooler_output_min' => null,
        'cooler_output_max' => null,
        'cooler_delta' => null,
        'cooler_kp' => null,
        'cooler_ki' => null,
        'cooler_kd' => null
            ], $request_id);
}

function getAlrDataInit($request_id) {
    return responseReadNParse([
        'id' => null,
        'description' => null,
        'good_value' => null,
        'good_delta' => null,
        'check_interval' => null,
        'cope_duration' => null,
        'phone_number_group_id' => null,
        'sms' => null,
        'ring' => null
            ], $request_id);
}

function getAlrDataRuntime($request_id) {
    return responseReadNParse([
        'id' => null,
        'state' => null,
        'cope_time_rest' => null
            ], $request_id);
}

function getStpDataInit($request_id) {
    return responseReadNParse([
        'id' => null,
        'first_repeat_id' => null,
        'slave_peer_id' => null,
        'slave_remote_id' => null,
        'slave_check' => null,
        'slave_retry_count' => null,
        'repeat_first_step_id' => null,
        'repeat_count' => null,
        'repeat_next_repeat_id' => null,
        'step_goal' => null,
        'step_duration_sec' => null,
        'step_goal_change_mode' => null,
        'step_stop_kind' => null,
        'step_next_step_id' => null
            ], $request_id);
}

function getStpDataRuntime($request_id) {
    return responseReadNParse([
        'id' => null,
        'state' => null,
        'repeat_state' => null,
        'repeat_ccount' => null,
        'step_state' => null,
        'step_state_ch' => null,
        'step_value_start' => null,
        'step_goal_correction' => null,
        'step_state_sp' => null,
        'step_wait_above' => null,
        'step_tm_rest_sec' => null
            ], $request_id);
}

function getBBChannelInfo($request_id) {
    return responseReadNParse([
        'channel_id' => null,
        'state' => null,
        'temp' => null,
        'hum' => null,
        'fly' => null,
        'closed' => null,
        'goal' => null,
        'delta' => null,
        'temp_ok' => null,
        'hum_ok' => null,
        'fly_ok' => null,
        'closed_ok' => null,
        'goal_ok' => null,
        'delta_ok' => null
            ], $request_id);
}

function parseDate($buf_str) {
    $str = "";
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($i < 3) {
            continue;
        }
        if ($buf_str[$i] === "\n") {
            break;
        }
        $str.=$buf_str[$i];
    }
    $arr = rowToArr($str, 6);
    $data = [
        'year' => $arr[0],
        'month' => $arr[1],
        'day' => $arr[2],
        'hour' => $arr[3],
        'min' => $arr[4],
        'sec' => $arr[5]
    ];
    return $data;
}

function getDate() {
    $buf = \sock\getBuf(ACP_BUFFER_MAX_SIZE);
    if (\strlen($buf) === 0) {
        throw new \Exception("getDate: controller returned nothing");
    }
    if (!crc_check($buf)) {
        throw new \Exception("getDate: crc check failed");
    }
    $data = parseDate($buf);
    if ($data === false) {
        throw new \Exception("getDate: bad format");
    }
    return $data;
}

function getFTS($request_id) {
    return responseReadNParse([
        'id' => null,
        'value' => null,
        'tv_sec' => null,
        'tv_nsec' => null,
        'state' => null
            ], $request_id);
}

function parseString($buf_str) {
    $str = "";
    for ($i = 0; $i < \strlen($buf_str); $i++) {
        if ($i < 3) {
            continue;
        }
        if ($buf_str[$i] === "\n") {
            break;
        }
        $str.=$buf_str[$i];
    }
    return $str;
}

function getString() {
    $buf = \sock\getBuf(ACP_BUFFER_MAX_SIZE);
    if (\strlen($buf) === 0) {
        throw new \Exception("getString: controller returned nothing");
    }
    if (!crc_check($buf)) {
        throw new \Exception("getString: crc check failed");
    }
    $data = parseString($buf);
    if ($data === false) {
        throw new \Exception("getString: bad format");
    }
    return $data;
}
