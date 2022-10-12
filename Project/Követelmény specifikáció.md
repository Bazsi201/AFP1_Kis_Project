# Követelmény specifikáció

## 1. Áttekintés

A Top G's nevű csapat feladata, egy olyan alkalmazás fejlesztése, ami egy iskola funkcionalitását és környezetszennyezését hivatott pozitív irányba terelni. Az alkalmazás feladati közé tartozik, az iskolán belül elérhető diákok, ki listázása, valamint ezek módosítása, új diák esetén a megjelenítendő listáhpz a hozzáadása, amennyiben egy diák elballagott vagy iskolát váltott, ebben az esetben a diákot el is lehessen távolítani az adatbázisból. Az iskola jelenleg nem rendelkezik, semmilyen alkalmazással, ami esetleges módon megkönnyíthetné a munkáját. Füzetekbe, lapokon tartják számon az aktuális diákokat, mivel emberi munkáról van szó az adminisztrálásban is így a hibák gyakoriak, a papír alapú rendszer lassú, nem megbízható. Az implementációt X,Y segítségével valósítjuk meg.

## 2. A jelenlegi helyzet leírása

Jelenleg az iskolában azt, hogy kinek mi az adata, csak papír alapon tartották nyílván. A papír alapú módszer, működik, de eléggé lassú, emberi hibából adódóan a félreértések esélye jelentős. A megírt lapok elveszhetnek, szennyeződhetnek, az emberi írás mások számára olvashatatlan lehet. Az emberek jelenleg csak úgy tudnak tájékozódni mások adatairól, ha személyesen bemennek az iskolába. Ezt a plusz utat szeretné a megrendelő kikerülni, azzal, hogy online elérhetővé teszi azon adatokat melyeket publikusak mindenki számára. A megrendelő szereti a modern dolgokat, többek között is ezért is gondolta úgy, hogy itt az ideje elkészíteni az alkalmazást.

## 3. Vágyálomrendszer

A megrendelő egy olyan alkalamazást szeretne, ami megkönnyíti az adminisztrációt az iskola tanulóinak és a dolgozóinak is, illetve csökkenteni az iskola kiadását, hiszen rengeteg papírt felhasználva tudták eddig az adatbázist vezetni. Másrészről a környezetszennyezést is így legalább tudják csökkenteni, ami egy plusz pozitívum és pozitív példát mutat mint a diákoknak, mint a többi iskolának is.

## 4. Jelenlegi üzleti folyamatok modellje

Jelenleg elég egyszerű módon, előreegyeztetett időpontban befáradt a diák, szülő a titkárságra, kért egy nyomtatványt és azt kitöltve tudták a diák adatait. Ezután bármi adatváltozás volt, mindig be kellett mennie valakinek, hogy értesítse az iskolát az adatváltozásról.

## 5. Igényelt üzleti folyamatok modellje

A megrendelő ügyfele otthon, vagy akár a buszon ülve is képes információt szeretni arról, hogy milyen autók lelhetők fel az autó kölcsönzőben, ezeket telefonon vagy akár e-mail-en is letudja foglalni egy előre meghatározott időpontra. Az előre fixált időponton az ügyfél elfárad az autókölcsönzőbe, ahol az ott dolgozók már várni fogják. Elkísérik az általa kiválasztott autóhoz, majd átadják a szükséges dolgokat. Ezután az ügyfél használhatja az autót. A bérlési idő lejáratának napján visszahozza.

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Felület | Tanuló hozzáadása | Tanulót tudunk felvinni az adazbázisba |
| K2 | Felület | Tanuló szerkesztése | Tanuló adatait tudjuk megváltoztatni az adazbázisba |
| K3 | Felület | Tanuló törlése | Tanulót tudunk törölni az adazbázisból |
| K4 | Felület | Tanuló adatainak áttekintése | Egy keresett tanuló adatát tudjuk megtekinteni |

## 7. Fogalomtár

HTML (Hypertext Markup Language) : A HTML egy olyan nyelv, melyet weboldalak elkészítésére használhatunk. Minden weboldal mögött HTML található.

PHP : egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére.
