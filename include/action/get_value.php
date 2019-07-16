<?php

$af = function($p) {
	$sock = \acpp\connect($p['address'], $p['port'], 3);
	\acpp\requestSendI1List($sock, ACPP_CMD_CHANNEL_GET_FTS, $p['item']);
	$data = \acpp\getmFTS($sock);
	\acpp\suspend($sock);
	return $data;
};
