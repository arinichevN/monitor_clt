function Monitor() {
    this.type = VISU_TYPE.MAIN;
    this.container = {};
    this.channels = [
		{name: '1', peer_id: 'gwua', remote_id: 1, mu: "&deg;C", group_id: 1},
		{name: '2', peer_id: 'gwua', remote_id: 2, mu: "&deg;C", group_id: 1},
		{name: '3', peer_id: 'gwua', remote_id: 3, mu: "&deg;C", group_id: 1},
		//{name: 'dht22(2) 4', peer_id: 'gwua', remote_id: 4, mu: "%", group_id: 1},
		//{name: 'ds18b20 5', peer_id: 'gwua', remote_id: 5, mu: "&deg;C", group_id: 2},
		//{name: 'ds18b20 6', peer_id: 'gwua', remote_id: 6, mu: "&deg;C", group_id: 2},
		//{name: 'max6675 7', peer_id: 'gwua', remote_id: 7, mu: "&deg;C", group_id: 3},
		//{name: 'max6675 8', peer_id: 'gwua', remote_id: 8, mu: "&deg;C", group_id: 3},
    ];
    this.peers = [
        {id: 'gwua', ipaddr: '127.0.0.1', port: 49188, timeout: 5, name: "модуль102"},

    ];
    this.groups = [
       {id: 1, name: 'arduino 1'},
       {id: 2, name: 'arduino 2'},
       {id: 3, name: 'arduino 3'},


    ];

    this.DELAY_V = 1000;//send request interval

    this.initialized = false;
    this.update = true; //editor will make it false
    this.visible = false;

    this.dataE = null;

    this.init = function () {
		this.container = cvis();
		this.dataE = cd();
		a(this.container, [this.dataE]);
		cla([this.dataE], ["monitor_cont1"]);
		this.makeData();
		this.initialized = true;
    };
    this.getName = function () {
        return trans.get(401);
    };
    this.updateStr = function () {

    };
    this.getGroupById = function (id) {
		for (let i = 0; i < this.groups.length; i++) {
			if (this.groups[i].id === id) {
				return this.groups[i];
			}
		}
		return null;
    };
    this.getPeerById = function (id) {
		for (let i = 0; i < this.peers.length; i++) {
			if (this.peers[i].id === id) {
				return this.peers[i];
			}
		}
		return null;
    };
    this.redrawMainB = function () {
		clearc(this.dataE);
		for (let i = 0; i < this.groups.length; i++) {
			this.groups[i].elem = new GroupElem(this.groups[i].name);
			a(this.dataE, this.groups[i].elem);
		}
		for (let i = 0; i < this.channels.length; i++) {
			let elem = new MnButton(this.channels[i].name, this.channels[i].mu, this.channels[i].remote_id, this.channels[i].peer, true, this.DELAY_V);
			this.channels[i].elem = elem;
			let group = this.getGroupById(this.channels[i].group_id);
			a(group.elem.content, this.channels[i].elem);
		}
    };
	this.enableMainB=function(){
		for (let i = 0; i < this.channels.length; i++) {
			this.channels[i].elem.enable();
		}
	};
    this.disableMainB=function(){
		for (let i = 0; i < this.channels.length; i++) {
			this.channels[i].elem.disable();
		}
	};
    this.makeData = function () {
        for (let i = 0; i < this.channels.length; i++) {
            this.channels[i].peer = this.getPeerById(this.channels[i].peer_id);
            this.channels[i].active = false;
            this.channels[i].elem = null;
        }
        for (let i = 0; i < this.groups.length; i++) {
            this.groups[i].elem = null;
        }
    };
    this.show = function () {
		document.title = trans.get(401);
		clr(this.container, "hdn");
		this.visible = true;
		this.redrawMainB();
		this.enableMainB();
    };
    this.hide = function () {
		cla(this.container, "hdn");
        this.disableMainB();
		this.visible = false;
    };
}
let vmonitor = new Monitor();
visu.push(vmonitor);
