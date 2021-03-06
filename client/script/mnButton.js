function MnButton(descr, mu, channel_id, peer,show_name,delay_send_usec) {
    this.container = cd();
    this.container.title = peer.address + ":" +peer.port + ":" + channel_id;
    this.done = false;
    this.tmr1 = {tmr: null};
    this.valueE = cd();
    this.muE = cd();
    this.descrE = cd();

    this.valueE.innerHTML = '&empty;';
    this.muE.innerHTML = mu;
    this.descrE.innerHTML = descr;
    this.show_name = show_name;
    this.delay_send_usec=delay_send_usec;
    this.channel_id=channel_id;
    this.peer=peer;
    this.tmr = null;
    this.vs = 0;
    this.vns = 0;
    this.RETRY = 7;
	this.ACTION =
		{
			GET: 1
		};
    this.uf_count = 0;//number of bad updates
    this.updateStr = function () {

    };
    this.blink = function (style) {
        cla(this.valueE, style);
        let tmr = window.setTimeout(()=>{
            this.unmark(style);
        }, 300);
    };
    this.unmark = function (style) {
        clr(this.valueE, style);
    };
    this.update = function (v) {
		//console.log(d);
		let id = null;
		let value=null;
		let state=null;
		let vs = null;
		let vns = null;
		if(v !== null){
			let data = acp_parseResponse(v, {id:null, value:null, tv_sec:null, tv_nsec:null, state:null});
			if(data instanceof Array && data.length == 1){
				let _id = parseInt(data[0].id);
				let _value = parseFloat(data[0].value);
				let _vs = parseInt(data[0].tv_sec);
				let _vns = parseInt(data[0].tv_nsec);
				let _state = parseInt(data[0].state);
				if(!(isNaN(_id) || isNaN(_value) || !isFinite(_value) || isNaN(_vs) || isNaN(_vns) || isNaN(_state))){
					id = _id;
					value = _value;
					state = _state;
					vs = _vs;
					vns = _vns;
				}
			}
		}
        if(vs === null || vns ===null){
            this.valueE.innerHTML = '&empty;';
            cla(this.container, 'mn_dis');
            this.blink('mn_updatedf');
            return;
        }
        if(vs !== this.vs || vns !== this.vns){
            if (value !== null && state) {
                this.valueE.innerHTML = value.toFixed(1);
                this.uf_count = 0;
                clr(this.container, 'mn_dis');
                this.blink('mn_updated');
                this.vs = vs;
                this.vns = vns;
            } else {
                if (this.uf_count > this.RETRY) {
                    this.valueE.innerHTML = '&empty;';
                    cla(this.container, 'mn_dis');
                } else {
                    this.uf_count++;
                }
                this.blink('mn_updatedf');
                this.vs = vs;
                this.vns = vns;
            }
        }
    };
    this.sendRequest = function () {
		if(this.channel_id === null || this.peer.port === null || this.peer.ipaddr === null) return;
		let pack = acp_buildRequest([ACPP_SIGN_REQUEST_GET, CMD_NOID_GET_FTS, this.channel_id]);
        let data = [
            {
                action: ['get_data'],
                param: {ipaddr: this.peer.ipaddr, port: this.peer.port, packs: pack, pack_count: 1}
            }
        ];
        sendTo(this, data, this.ACTION.GET, 'server');
    };
	this.startSendingRequest = function () {
		this.tmr = window.setInterval(()=>{
			this.sendRequest();
		}, this.delay_send_usec);
    };
    this.enable=function(){
		this.active=true;
		this.startSendingRequest();
	};
	this.disable=function(){
		this.active=false;
		window.clearInterval(this.tmr);
	};
    this.confirm = function (action, d, dt_diff) {
		switch (action) {
			case this.ACTION.GET:
				this.update(d);
				break;
			default:
				console.log("confirm: unknown action: ", action);
				break;
         }
	};
	this.abort = function (action, m, n) {
		switch (action) {
			case this.ACTION.GET:
				this.update(null);
				break;
			default:
				console.log("abort: unknown action: ", action);
				break;
		}
	};
    a(this.container, [this.valueE, this.muE, this.descrE]);
    cla(this.valueE, ["mn_value"]);
    cla(this.muE, ["mn_mu"]);
    cla(this.descrE, ["mn_descr"]);
     if (!this.show_name) {
         cla(this.descrE, "hdn");
    }
    cla(this.container, ["mn_block", "select_none", "mn_dis"]);
}
