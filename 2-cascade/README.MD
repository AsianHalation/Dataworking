# normalisatie

//Database normalisatie is een proces dat wordt toegepast bij het ontwerpen van een relationele database om de gegevensstructuur te optimaliseren en redundantie te verminderen

//1NF--------In 1NF moeten alle waarden in een kolom atomaire (ondeelbaar) waarden zijn. Er mogen geen herhalende groepen of meervoudige waarden in een enkele cel van een tabel zijn. Elke rij en kolom moet uniek identificeerbaar zijn.

//2NF--------Een tabel bevindt zich in 2NF als het in 1NF is en als elk niet-sleutelattribuut volledig functioneel afhankelijk is van de gehele primaire sleutel. Met andere woorden, er mag geen gedeeltelijke afhankelijkheid van de primaire sleutel zijn.

//3NF---------Een tabel bevindt zich in 3NF als het in 2NF is en als er geen transitieve functionele afhankelijkheid is. Dat wil zeggen, elk niet-sleutelattribuut moet direct afhankelijk zijn van de primaire sleutel, niet van een ander niet-sleutelattribuut.


# Normalisatie Le Deli

## 1ste - 1NF
bonnummer, datum, tijd, klantnaam, afdeling, aantal, omschrijving, prijs, totaal_Excl_BTW, totaal_Incl_BTW, 21%_BTW,

## 2e - 2NF
product: Primary_Key: product_id, omschrijving, prijs
Klant: Primary_Key: klant_id, klantnaam, tijd
Tafel: Primary_Key: tafel_id,

## 3e - 3NF
product: Primary_Key: product_id, omschrijving, prijs
Klant: Primary_Key: klant_id, klantnaam, tijd
Tafel: Primary_Key: tafel_id, 
    -   Foreign_Key: klant_id
Bon: Primary_Key: bonnummer, datum, tijd, aantal, afdeling, aantal, totaal_Excl_BTW, totaal_Incl_BTW, 21%_BTW, afdeling, 
    -   Foreign_Key: klant_id, 
    -   Foreign_Key: product_id,
    -   Foreign_Key: tafel_id
