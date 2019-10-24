

   	// livechat by www.mylivechat.com/  2018-06-12

   	
	   // first loading
	   if (typeof (MyLiveChat) == "undefined") {
		   MyLiveChat = {};
		   MyLiveChat.RawConfig ={InlineChatHideSubject:"1",UIPopupMode:"Modern",WaitingShowForClick:"1",OperatingHoursCheckDay6:"1",RoutingNoWait:"True",OperatingHoursCheckDay4:"1",OperatingHoursCheckDay5:"1",OperatingHoursCheckDay2:"1",OperatingHoursCheckDay3:"1",OperatingHoursCheckDay0:"0",OperatingHoursCheckDay1:"1",UIMobileMode:"Dialog",InlineChatOnlineLogo:"upload",WaitingShowForSmart:"1",WaitingFieldDepartment:"1",InlineChatBubbleUIMode:"1",InPageTemplate:"5",InlineChatWaitingFieldDepartment:"0",OperatingHoursCheckWeekend:"0",InPageImageOffline:"1",WaitingShowForInvite:"0",InPageImageOnline:"1",OperatingHoursSchedule:"1",WebConsoleRedirectTime:"635992148559863584",WidgetOpenNewWindow:"False",WaitingFieldQuestion:"1",ButtonOpenNewWindow:"False",InPageTemplateMobile:"1",InPageUseBubbleTop:"0",UIDialogMode:"Classic",InlineChatOfflineLogo:"upload",maxWaitTime:"300",WaitingFieldEmail:"1",OperatingHoursValDay3:"9:00-24:00",InPageBubbleTop:"1",OperatingHoursValDay1:"9:00-24:00",FeedbackBehavior:"Redirect",OperatingHoursValDay2:"9:00-24:00",OperatingHoursValDay5:"9:00-24:00",OperatingHoursValDay4:"9:00-24:00",OperatingHoursValWeekday:"9:15-17:00",OperatingHoursValDay6:"9:00-24:00",InPageUseBubbleTopOnlineOnly:"0",RoutingEnable:"True",OperatingHoursCheckWeekday:"1",OnholdWaitTime:"120",OperatingHoursEnable:"1"};
		   MyLiveChat.RawQuery ={hccid:"40020117",apimode:"chatinline"};
		   for (var mlcp in MyLiveChat.RawConfig) {
			   MyLiveChat[mlcp] = MyLiveChat.RawConfig[mlcp];
		   }
		   for (var mlcp in MyLiveChat.RawQuery) {
			   MyLiveChat[mlcp] = MyLiveChat.RawQuery[mlcp];
		   }

		   MyLiveChat.HCCID ='40020117';
		   MyLiveChat.PageBeginTime = new Date().getTime();
		   MyLiveChat.LoadingHandlers = [];
		   //	,"Departments"
		   MyLiveChat.CPRFIELDS = ["SyncType", "SyncStatus", "SyncResult", "HasReadyAgents", "VisitorUrls", "VisitorStatus", "VisitorDuration", "VisitorEntryUrl", "VisitorReferUrl"];
	   }
	   else {
		   MyLiveChat.MultiLinked = true;
	   }
	


	   MyLiveChat.Version =3006;
	   MyLiveChat.FirstRequestTimeout =28800;
	   MyLiveChat.NextRequestTimeout =57600;
	   MyLiveChat.SyncType =null;
	   MyLiveChat.SyncStatus ="LOADING";
	   MyLiveChat.SyncUserName =null;
	   MyLiveChat.SyncResult ="LOADING";
	   MyLiveChat.HasReadyAgents =false;
	   MyLiveChat.SourceUrl ="http://www.apnagps.com/";
	   MyLiveChat.AgentTimeZone = parseInt("6" || "-5");
	   MyLiveChat.VisitorStatus ="";
	   MyLiveChat.UrlBase ="https://s9.mylivechat.com/livechat2/";
	   MyLiveChat.SiteUrl ="https://s9.mylivechat.com/";

   	

	   if (!MyLiveChat.AgentId) MyLiveChat.AgentId = MyLiveChat.RawAgentId;

	   MyLiveChat.Departments = [];

	   MyLiveChat.Departments.push({
		   Name:"Default",
		   Agents: [{
			   Id:'User:1',
			   Name:"Sana Patel",
			   Online:false
   			}],
		   Online:false
   		});

	   MyLiveChat.Departments.push({
		   Name:"Technical Support",
		   Agents: [{
			   Id:'User:1',
			   Name:"Sana Patel",
			   Online:false
   			}],
		   Online:false
   		});

	   MyLiveChat.Departments.push({
		   Name:"Purchasing  Support",
		   Agents: [{
			   Id:'User:1',
			   Name:"Sana Patel",
			   Online:false
   			}],
		   Online:false
   		});



	   MyLiveChat.VisitorUrls = [];



   	

	   function MyLiveChat_AddScript(tag) {
		   var func = MyLiveChat_AddScript;
		   var arr = func._list;
		   if (!arr) func._list = arr = [];
		   if (func._loading) {
			   arr.push(tag);
			   return;
		   }
		   function ontagload() {
			   func._loading = false;
			   if (!arr.length) return;
			   tag = arr.shift();
			   LoadTag();
		   }
		   function LoadTag() {
			   func._loading = true;
			   if ('onload' in tag) {
				   tag.onload = ontagload;
			   }
			   else {
				   var iid = setInterval(function () {
					   if (tag.readyState != 'complete' && tag.readyState != 'loaded')
						   return;
					   clearInterval(iid);
					   ontagload();
				   }, 10);
			   }
			   var p = document.getElementsByTagName("head")[0] || document.body;
			   p.insertBefore(tag, p.firstChild);
		   }
		   LoadTag();
	   }

	   function MyLiveChat_GetLastScriptTag() {
		   var coll = document.getElementsByTagName("script");
		   return coll[coll.length - 1];
	   }
	   function MyLiveChat_ImportCss(url) {
		   var p = document.head || document.getElementsByTagName("head")[0] || document.body;
		   var tag = document.createElement("link");
		   tag.setAttribute("rel", "stylesheet");
		   tag.setAttribute("href", url);
		   p.insertBefore(tag, p.firstChild);
	   }
	   function MyLiveChat_DocWrite(html, relativetag) {
		   if (html.substr(0, 7) == "<script")	//Low IE interactive or defer
		   {
			   var src = html.match(/src=["']?([^"'>]*)["']/)[1];
			   if (!MyLiveChat.LoadedScripts) MyLiveChat.LoadedScripts = {};
			   if (MyLiveChat.LoadedScripts[src]) return;
			   MyLiveChat.LoadedScripts[src] = true;

			   var tag = document.createElement("script");
			   tag.setAttribute("src", src);
			   MyLiveChat_AddScript(tag);
		   }
		   else {
			   if (!document.body || document.readyState == "loading") {
				   document.write(html);
				   return;
			   }

			   if (!relativetag) relativetag = MyLiveChat_GetLastScriptTag();
			   var div = document.createElement("DIV");
			   div.innerHTML = html;
			   while (true) {
				   var c = div.firstChild;
				   if (!c) break;
				   div.removeChild(c);
				   relativetag.parentNode.insertBefore(c, relativetag);
			   }
		   }
	   }

	   MyLiveChat.NewGuid = function () {
		   var guid = "";
		   for (var i = 1; i <= 32; i++) {
			   guid += Math.floor(Math.random() * 16.0).toString(16);
			   if (i == 8 || i == 12 || i == 16 || i == 20) guid += "-";
		   }
		   return guid;
	   }
	   
   	MyLiveChat.RandomID='faa35a36-ea19-b5df-0556-aacddd25d708';

   	

	   MyLiveChat.VisitorDuration = 0;
	   MyLiveChat.VisitorEntryUrl = "";
	   MyLiveChat.VisitorReferUrl = "";

	   MyLiveChat.ShowButton =true;
	   MyLiveChat.ShowLink =true;
	   MyLiveChat.ShowBox =true;
	   MyLiveChat.ShowSmart =false;


	   MyLiveChat.NoPrivateLabel =true;


	   MyLiveChat.LoadingHandlers.push(function (funcself) {
		   MyLiveChat_RunLoadingHandler('chatinline', funcself);
	   });

	   MyLiveChat.ResourcesVary ="\x26culture=en-GB\x26mlcv=3006\x26template=5";

   	

   	

	   MyLiveChat['chatinline' + "_script_tag"] = MyLiveChat_GetLastScriptTag();

	   if (typeof (MyLiveChat_Initialize) != "undefined") {
		   MyLiveChat_Initialize()
	   }
	   else if (!MyLiveChat.MultiLinked) {
		   MyLiveChat_ImportCss(MyLiveChat.UrlBase + "chatinline.css");
		   MyLiveChat_DocWrite("<script defer='defer' src='" + MyLiveChat.UrlBase + "resources2.aspx?HCCID=" + MyLiveChat.HCCID + MyLiveChat.ResourcesVary + "'></scr" + "ipt>");
		   MyLiveChat_DocWrite("<script defer='defer' src='" + MyLiveChat.UrlBase + "script/livechatinit2.js'></scr" + "ipt>");
	   }


   	