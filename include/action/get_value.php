<?php

$af = function($p) {
	$sock = \acpp\connect($p['address'], $p['port'], 3);
	\acpp\requestSendI1List($sock, "gfts", $p['item']);
	$data = \acpp\getmFTS($sock);
	\acpp\suspend($sock);
	return $data;
};
