# normalisatie

//Database normalisatie is een proces dat wordt toegepast bij het ontwerpen van een relationele database om de gegevensstructuur te optimaliseren en redundantie te verminderen

//1NF--------In 1NF moeten alle waarden in een kolom atomaire (ondeelbaar) waarden zijn. Er mogen geen herhalende groepen of meervoudige waarden in een enkele cel van een tabel zijn. Elke rij en kolom moet uniek identificeerbaar zijn.

//2NF--------Een tabel bevindt zich in 2NF als het in 1NF is en als elk niet-sleutelattribuut volledig functioneel afhankelijk is van de gehele primaire sleutel. Met andere woorden, er mag geen gedeeltelijke afhankelijkheid van de primaire sleutel zijn.

//3NF---------Een tabel bevindt zich in 3NF als het in 2NF is en als er geen transitieve functionele afhankelijkheid is. Dat wil zeggen, elk niet-sleutelattribuut moet direct afhankelijk zijn van de primaire sleutel, niet van een ander niet-sleutelattribuut.


# Normalisatie ZZP-Daily

## 1ste - 1NF
factuurnummer, datum, vervaldatum, omschrijving,totaal excl BTW, totaal incl BTW, bedrag, duur_van_tijd, bedrag, bedrijfsnaam

## 2e - 2NF
Klant: Primary_key:klant_id, bedrijfsnaam, adres, postcode, plaats
Service: Primary_key:service_id, omschrijving, bedrag, duur_van_tijd

## 3e - 3NF

Klant:      Primary_key:klant_id, bedrijfsnaam, adres, postcode, plaats
Service:    Primary_Key:service_id, duur_van_tijd, bedrag, omschrijving
Factuur:    Primary_Key:factuurnummer, datum, vervaldatum, totaal_Excl_BTW, 21%_BTW, totaal_Incl_btw, Foreign_Key: klant_id, Foreign: service_id