| Teszteset               | Elvárt eredmény                                                                                                     | 
 |-------------------------|---------------------------------------------------------------------------------------------------------------------| 
 | Add student gomb megnyomása | Átirányítás a tanuló hozzáadása felületre. |
 | Kitöltetlen űrlap beküldése | A felhasználó értesítése a kitöltetlen mezőkről. | 
 | Már létező e-mail cím hozzáadása | Felhasználó értesítése email cím ütközésről. | 
 | Már létező telefonszám hozzáadása | Felhasználó értesítése telefonszám ütközésről. |
 | Kitöltött űrlap beküldése | Amennyiben nincs adatütküzés, tanuló adatbázisba feltöltése. |
 | Back gomb lenyomása | Visszaírányítás a főoldalra. |
 | Adatbázisból adatok megjelenítés a főoldalon | Ha van adat, azok listázása, amennyiben nincsen, akkor üres lista megjelnetíése. |
 | Edit gomb lenyomása | Átírányítás a szerkesztő oldalra, tanuló adatainak megjelenítése szerkesztésre |
 | Update student gomb lenyomása | Tanuló adatainak módosítása, amennyiben nincs adatütközés és minden adat meg lett adva. Lásd Add gomb tesztesetek. | 
 | Delete gomb lenyomása | Tanuló törlése adatábizból. Felhasználó értesítése sikeres delete esetén. Visszaírányítés a főoldalra.|
 | View gomb lenyomása | Tanuló adatainak megjelenítése, áttekintése. | 

#### Ezeket a teszteseteket végrehalyatani a legtöbb kombinációval

*Tesztelő:* Kaponya Martin
*Tesztelés dátuma:* 2022.október.01.
| Tesztszám | Rövid leírás                     | Várt eredmény                                                                   | Eredmény                                                                       | Megjegyzés                |
|-----------|----------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| Teszt #01 | Add student gomb megnyomása | Művelet végrehajtódik. Átirányítás a megfelelő oldalra. | Művelet  végrehajtódik. Átirányítás a megfelelő oldalra. | Nem találtam problémát. |
| Teszt #02 | Kitöltetlen űrlap beküldése | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond.| Nem találtam problémát. |
| Teszt #03 | Már létező e-mail cím hozzáadása | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát.| Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |
| Teszt #04 | Már létező telefonszám hozzáadása | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |

*Tesztelő:* Szabó Zsolt
*Tesztelés dátuma:* 2022.október.05.
| Tesztszám | Rövid leírás                     | Várt eredmény                                                                   | Eredmény                                                                       | Megjegyzés                |
|-----------|----------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| Teszt #01 | Kitöltött űrlap beküldése | Művelet végrehajtódik. Adatbázisba feltöltés, aztán főoldalra visszaírányítás, felhasználó értesítése a sikerességről. | Művelet végrehajtódik. Adatbázisba feltöltés, aztán főoldalra visszaírányítás, felhasználó értesítése a sikerességről | Nem találtam problémát. |
| Teszt #02 | Back gomb lenyomása | Művelet végrehajtódik, főoldalra visszairányítás. | Művelet végrehajtódik, főoldalra visszairányítás. | Nem találtam problémát.|
| Teszt #03 | Adatbázisból adatok megjelenítés a főoldalon | Művelet végrehajtódik. Adatok sikeres megjelneítése, amennyiben van. | Művelet végrehajtódik. Adatok sikeres megjelneítése, amennyiben van. | Nem találtam problémát. |
| Teszt #04 | Edit gomb lenyomása | Művelet végrehajtódik. Átírányítás a szerkesztő oldalra, tanuló adatainak megjelenítése szerkesztésre. | Művelet végrehajtódik. Átírányítás a szerkesztő oldalra, tanuló adatainak megjelenítése szerkesztésre. | Nem találtam problémát. |