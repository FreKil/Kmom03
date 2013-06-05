<?php
//===================================================
//File: index.php
//Desc: Holds the report information
//Author: Freddy
//Created: 30/04 - 2013
//===================================================


//---------------------------------------------------
//Basic imports and variable creation.
$pageId = "report";
$title = "Redovisningar";
include('incl/header.php');
include('incl/footer.php');


//---------------------------------------------------
//Creates the basic information of this file
$html = <<<input
<div id="content">
	<h1>Redovisning av kursmomenten</h1>
	
	<article>
		<h2>Kmom03: En gästbok i ditt MVC-ramverk </h2>
		<p>
			<b>Vilken uppfattning fick du om CodeIgniter? </b><br />
			Verkar vara ett bra ramverk med en tydlig struktur och har både välkommenterad kod samt en bra dokumentation där man kan läsa om hur ramverket är tänkt att användas samt vilka funktioner som finns inbyggda för att underlätta byggandet av egna applikationer.
		</p>
		<p>
			<b>Gjorde du extrauppgiften och byggde din egna gästbok i CodeIgniter, hur kändes det? </b><br />
			Vart lite lättare att hänga med än under gästboksbygget i Lydia(Drygia) eftersom vi mest fokuserade på att bygga själva gästboken i CodeIgniter medan vi byggde både på gästboken och ramverket i Lydia guiden, vilket var lite rörigt. Utöver det så fungerade dom båda gästböckerna nästan likadant så där var det inte så mycket skillnad annat än att vi använde oss av lite andra funktioner och sånt.</p>
		<p>
			<b>Har du grepp om MVC-strukturen? Vad tycker du så här långt? </b><br />
			Tycker mig förstå bra hur den fungerar är ju en litet annat sätt att strukturera upp sin applikation på än vad jag är van vid. Men jag ser en hel del fördelar med en tydligare indelning av applikationens kod, samt att klasserna till själva ramverket gör att det blir mindre kod att skriva när man skapar själva applikationerna vilket underlättar en del. Nackdelen är ju att man måste sätta sig in i varje nytt ramverk man ska använda sig av och det är ju en hel del saker som finns i dom som man måste lära sig.</p>
		<p>
			<b>Gjorde du extra-uppgiften om Lydias vy-hantering, några reflektioner? </b><br />
			Ser ut som ett bra sätt att gruppera dom olika delar av applikationerna för att göra det lätt att hitta det man söker.
		</p>
		<p>
			<b>Tittade du på extra-uppgiften om spam, några reflektioner? </b><br />
			Var ett rätt intressant sätt att skydda sig mot spam och verkar ha varit rätt effektivt också. Vanligtvis brukar man ju se diverse captcha på sidorna för att skydda sig mot spam men det här var ju betydligt vänligare mot användarna, dock faller det för botar som är lite smartare kodade.
		</p>
	</article>
	
	<article>
		<h2>Kmom02: Grunden till ett MVC-ramverk </h2>
		<p>
			Döpte mitt MVC-ramverk till Drygia. Har väl inte direkt någon anledning till namnvalet utan tog det föra jag kom att tänka på mer elller mindre.
		</p>
		<p>
			Har mer eller mindre följt guiden rakt av. 
			Har inte kommit i kontakt med ett MVC ramverk tidigare och hade heller ingen aning att det existerande, har väl dock sett några av dom här underliga länkarna förut på vissa webbplatser men aldrig direkt reflekterat över dom.
		</p>
		<p>
			Lydia överlag verkar ha en bra struktur som är rätt tydlig att förstå sig på. Gillar iden med att strukturera upp en webbsida på det här viset eftersom det blir lättare att hitta dom delar man vill ändra på dock är det ju rätt mycket att sätta sig in i som nybörjare, många filer och ett helt nytt sätt att tänka på som man måste lära sig.
		</p>
		<p>
			Har kollat lite på andra ramverk på nätet bland annat en video serie som någon på forumet föreslog <a href="http://www.youtube.com/watch?v=Aw28-krO7ZM">(Länk)</a></br>
			Tyckte den gav en bra grund att stå på för att komma igång med hela MVC tänket.
		</p>
	</article>
	
	<article>
		<h2>Kmom01: En boilerplate</h2>
		<p>
			<b>Hur tänkte du och gick tillväga när du gjorde din me-sida?</b><br />
			Tog mest en kopia av det vi gjorde i HTMLPHP kursen då den koden duger fint som ME sida. Ändrade dock en del i strukturen för att koden skulle bli snyggare och tydligare att läsa.
		</p>
		<p>
			<b>Vad tycker du om boilerplate-konceptet?</b>
			Det är ju ett bra sätt att snabbt kunna komma igång med ett nytt projekt. Är ju en hel del saker som ska skrivas och struktureras upp när man ska skapa en ny webbsida så att ha en grundstomme klar redan är ju givetvis positivt.
			HTML5 Boilerplate innehåller inte bara strukturen i form av mappar och liknande utan har en hel del tillägg som t.ex css filen som nollställer allt samt en hel del fix för att webbsidan ska visas så likt som möjligt i dom olika webbläsarna som finns.
			Och det är ju skönt att ha sådana saker fixade direkt när man ska påbörja ett nytt projekt och som nybörjare får man ju också en hel del saker fixade som man annars kanske inte hade tänkt på eller ens vetat om att det fanns.
		</p>
		<p>
			<b>Vilken utvecklingsmiljö använder du?</b>
			Sitter på Windows XP och använder mig utav WAMP, Filezilla samt Notepad++.
			Har dock installerat och testat lite med Putty nu eftersom det användes tillsammans med Git för att på ett lätt sätt kunna kopiera över filerna från github till driftservern. Så det lär väl bli en del Putty i den här kursen antar jag.
		</p>
	</article>
	
</div>
input;


//---------------------------------------------------
//Prints out this page.
echo $headInfo. $bannerInfo . $html . $footer;
?>