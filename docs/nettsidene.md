# Dokumentasjon for nettsidene (hjemmesideoppmann)
[Tilbake til readme](../README.md)

Scriptet på serveren tar i mot filopplastingen, pakker den ut og legger i en mappe som heter statutter.

Den gamle ```statutter```-mappen arkiveres i en mappe som heter ```statutter_arkiv```. Dette for å ha en ekstra kopi av gamle dokumenter, samt mulig for andre å hente frem disse.

Se scriptet i mappa ```nettsidene``` for hvordan det fungerer.

## Forklaring av filer
* ```statutter_upload.php``` - hovedscriptet som tar i mot nye dokumenter, arkiverer de gamle og publiserer de nye
* ```rewrite_index.php``` - dette scriptet kjøres i stedet for ```index.html``` i gjeldende dokumenter, for å legge inn lenke til historisk arkiv
* ```HEADER.html``` - header-fil for mappevisning (lastes inn av Apache-serveren) på arkivmappa

## Oppsett av server
De nødvendige filene ligger i ```nettsidene```-mappa, men må plasseres litt ulike steder.

Sørg for at disse mappene finnes:

* ```/dokumenter/statutter_arkiv/```

Opprett symlinker for følgende filer:

* ```statutter_upload.php``` til ```/dokumenter/```-mappa
* ```rewrite_index.php``` til ```/dokumenter/```-mappa
* ```HEADER.html``` til ```/dokumenter/statutter_arkiv/```-mappa

Legg til følgende i ```/dokumenter/.htaccess``` eller tilsvarende:

```apacheconf
RewriteEngine On
RewriteRule ^statutter/(index.html)?$ rewrite_index.php [L]
```

Legg til følgende i ```/dokumenter/statutter_arkiv/.htaccess``` eller tilsvarende:

```apacheconf
Options +Indexes
IndexOptions Charset=UTF-8
```

Mappene må også ha noe rettigheter satt riktig, slik at nye statutter-mapper kan lastes opp og mapper kan flyttes til arkiv.
