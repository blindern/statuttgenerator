# Dokumentasjon for kollegiet
[Tilbake til readme](../README.md)

## Informasjon om statutter på kollegie-pc

### Oppbevaring og oppdatering av statutter
På Kollegiets PC er det en mappe som heter *Statutter*. Inni denne ligger både gjeldende og tidligere statutter.

### Gjeldende statutter
Gjeldende statutter skal alltid ligge oppdatert i mappen *GJELDENDE STATUTTER*. Alle filene i denne mappen skal være skrivebeskyttet, for å unngå at disse skrives over ved nye endringer.

### Oppdatering av statutter
1. Flytt dokumentet som endres fra *GJELDENDE STATUTTER* til *TIDLIGERE STATUTTER*.
2. Tilføy hvilken dato statutten sist ble endret i filnavnet (ikke dagens dato, se vedtatt dato i dokumentet)
  * Slik: 43 Instruks for medisinalkollegiet (2010-11-15).doc
3. Kopier dokumentet inn til *GJELDENDE STATUTTER*.
4. Fjern skrivebeskyttelsen
  * Gå på egenskaper til filen og fjern haken for «Read only»
5. Gjør endringer
6. Sett på skrivebeskyttelse igjen

### Publisering av statutter
For publisering av statutter er det laget et eget verktøy. Dette verktøyet gjør følgende:

1. Genererer automatisk *innholdsfortegnelse*
  * Datoen i innholdsfortegnelsen hentes fra slutten av dokumentet
2. Genererer *PDF-versjon* av alle dokumentene, samt en *samle-PDF* med alle dokumentene
3. Genererer *HTML-versjon* av alle dokumentene (for nettsiden)
4. Laster det automatisk opp til nettsiden
  * http://blindern-studenterhjem.no/statutter

### Distribusjon
Når endringer gjøres må nytt dokument printes ut og legges inn i de ulike statutt-permene:

1. Biblioteket
2. Præces sin perm
3. Kontoret sine permer

Når endringen slås opp på Kollegietavla bør man kjøre en «sammenlikning» av det gamle og nye dokumentet slik at det klart kommer frem hva som er endret. (I Word: Review -> Compare)

### Statutt-systemet
Filene det er henvist til nedenfor ligger i mappen STATUTT-GENERATOR.

#### Tittel som brukes i innholdsfortegnelse
Når innholdsfortegnelsen genereres hentes tittelen ut fra selve metadataen til dokumentet. Hvis dette ikke finnes brukes filnavnet som tittel.

Dette kan overprøves ved å endre filen ALIASES.txt

#### Oppsett innholdsfortegnelse
Innholdsfortegnelsen kan endres ved å endre *Mal innholdsfortegnelse.doc*

Det kan legges til opp til 6 forskjellige kategorier (statutter, reglement, osv.). Se INNSTILLINGER.txt for detaljer.

Tabellen i innholdsfortegnelsen må ikke endre struktur. Da vil ikke systemet klare å generere teksten i tabellen.

#### Feilsøking
1. Hvis ny PC: Systemet er avhengig av et program som heter Ghostscript. Se INNSTILLINGER.txt og sørg for at korrekt adresse er satt til programmet.
2. Mapper flyttet: Hvis statutt-mappen flyttes må systemet gjøres kjent med den nye plasseringen. Se INNSTILLINGER.txt hvor adressene legges inn.
3. Hent ned statuttgeneratoren fra GitHub dersom systemet på maskinen ikke fungerer.
4. Hør med Henrik Steen (416 20 292) som har laget systemet.
