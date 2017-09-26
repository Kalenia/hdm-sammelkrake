/**
* Ist ein Datum g�ltig
* @param y: Jahr
* @param m: Monat
* @param d: Tag
* @return true = g�ltig, false = ung�ltig
*/
function isValidDate(y,m,d)
{
	//--Gibt Datum des letzten Tag des Monats aus--
	var thisDate = new Date(y,m,1);
	//einen Tag weiter schalten
	thisDate.setMonth(thisDate.getMonth()+1);
	//vom ersten Tag des n�chsten monats
	//ein Tag abziehen
	thisDate.setTime(thisDate.getTime() - 12*3600*1000);
	
	if (d>thisDate.getDate())
		{return false;}
	else
		{return true;}
}

/**
* �bernimmt das angeklickte Datum in das Ausgabeelement
* @param n: Kalendertag zum Kombinieren mit Monat und Jahr
*/
function putDate(n)
{
	var d = getDateFromMemory();
	d.setDate(n);
}
/**
* setzt das �bergebene Datum in die Speicherzelle
* @param d: datum zum schreiben in die Speicherzelle
*/
function setDateToMemory(d)
{
	document.all.date_memory.innerHTML = d.getFullYear()+','+(d.getMonth()+1)+','+d.getDate();
}
/**
* Gibt das Datum aus der Speicherzelle zur�ck
* @return: datum in Date format
*/
function getDateFromMemory()
{
	var s = document.all.date_memory.innerHTML;
	var z = s.split(',');
	return new Date(z[0],z[1]-1,z[2]);
}
/**
* schaltet einen Monat Weiter
*/
function nextMonth()
{
	var d = getDateFromMemory();
	var m = d.getMonth()+1;
	var y = d.getFullYear();
	//Falls Jahres wechsel
	if ((m+1)>12)
	{
		m = 0;
		y = y + 1;
	}
	d = new Date(y,m,01);
	setDateToMemory(d);
	loadcalendar();
}
/**
* schaltet einen Monat zur�ck
*/
function prevMonth()
{
	var d = getDateFromMemory();
	var m = d.getMonth()+1;
	var y = d.getFullYear();
	
	//Falls Jahres1wechsel
	if ((m-1)<1)
	{
		m = 11;
		y = y - 1;
	}
	else
	{
		m = m - 2;
	}
	d = new Date(y,m,01);
	setDateToMemory(d);
	
	loadcalendar();
}
/**
* zum erstmaligen aufrufen des Kalenders
*/
function iniCalendar()
{
	//heutiges Datum setzen
	var d = new Date();
	//aktuelles Datum speichern
	setDateToMemory(d);
	//Calender laden
	loadcalendar();
}
/**
*	L�d die Tabelle mit dem �bergebenen Datum (Monat)
*/
function loadcalendar() 
{
	//aktuelles Datum holen (1. des Monats)
	var d = getDateFromMemory();
	//Monat ermitteln aus this_date (z�hlen beginnt bei 0, daher +1)
	var m = d.getMonth(); 
	//Jahr ermitteln aus this_date (YYYY)
	var y = d.getFullYear();
	//Monat und Jahr eintragen
	document.all.calendar_month.innerHTML = getMonthname(m+1) + ' ' + y;
	//ersten Tag des Monats festlegen
	var firstD = d;
	firstD.setDate(1);
	//Wochentag ermitteln vom 1. des �bergebenen Monats (Wochentag aus firstD)
	var dateDay = firstD.getDay(); //So = 0, Mo = 1 ... Sa = 6
	//Sonntag soll den Wert 7 darstellen -> Mo = 1 ... So = 7
	dateDay = (dateDay == 0) ? 7: dateDay;
	//Speicher f�r aktuelle Zelle
	var entry = '';
	//Speicher f�r aktuellen Tag
	var zahl = '';
	//heutiges Datum ermitteln
	var hD = new Date();
	//ist event 
	//falls event, dann darf der Rahmen
	//nicht vom isHolyday �berschrieben werden
	var bEvent = false;
	
	//Alle Kalender Spalten durchz�hlen
	for (var i = 1; i <= 42; i++)
	{
		bEvent = false;
		//holen der aktuellen Zelle
		entry = document.getElementById('calendar_entry_'+i);
		//errechnen der Tages Zahl
		zahl = (i+1)-dateDay;
		//datum zusammenschreiben
		var dx = new Date(y,m,zahl);

		//Eintragen der Daten ab ersten Tag im Monat und wenn es ein g�ltiges Datum ist
		if (i >= dateDay && isValidDate(y,m,zahl))		
		{
			entry.innerHTML = '<a class=calendar_link href=javascript:putDate('+zahl+')>'+zahl+'</a>';
			entry.hidden = false;
			entry.style.visibility='visible';
			entry.style.border = 'solid 1px';
						
			//heutiges Datum hervorheben			
			if (hD.getDate() == dx.getDate() && 
				hD.getMonth() == dx.getMonth() && 
				hD.getYear() == dx.getYear())
			{
				entry.style.fontWeight = 'bold';
				entry.style.backgroundColor = 'FFFF33';
			}
				
		}
		else
		{
			entry.innerHTML = '';
		
			if (i>= dateDay)
			{//Wenn Kalenderende
				//Zelle = hidden
				entry.hidden = true;
				entry.style.border = '0px';
			}
			else
			{//Wenn Kalenderanfang
				//Border-width = 0px
				entry.style.border = '0px';
			}
		} 				  				
	}		
}

/**
* Gibt den Monatsnamen anhand der Monatsnummer zur�ck
*@param monthnumber: Monatsnummer (1-12)
*/
function getMonthname(monthnumber)
{
	switch(monthnumber)
	{
		case 1:
		  return 'Januar';
		  break;
		case 2:
		  return 'Februar';
		  break;
		case 3:
		  return 'Marz';
		  break;
		case 4:
		  return 'April';
		  break;
		case 5:
		  return 'Mai';
		  break;
		case 6:
		  return 'Juni';
		  break;
		case 7:
		  return 'Juli';
		  break;
		case 8:
		  return 'August';
		  break;
		case 9:
		  return 'September';
		  break;
		case 10:
		  return 'Oktober';
		  break;
		case 11:
		  return 'November';
		  break;
		case 12:
		  return 'Dezember';
		  break;
		default:
		  return '---';
	}
}