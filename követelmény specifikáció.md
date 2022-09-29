# Követelmény specifikáció

## 1. Áttekintés

A Top G's nevű csapat feladata, egy olyan alkalmazás fejlesztése, ami egy iskola funkcionalitását és környezetszennyezését hivatott pozitív irányba terelni. Az alkalmazás feladati közé tartozik, az iskolán belül elérhető diákok, ki listázása, valamint ezek módosítása, új diák esetén a megjelenítendő listáhpz a hozzáadása, amennyiben egy diák elballagott vagy iskolát váltott, ebben az esetben a diákot el is lehessen távolítani az adatbázisból. Az iskola jelenleg nem rendelkezik, semmilyen alkalmazással, ami esetleges módon megkönnyíthetné a munkáját. Füzetekbe, lapokon tartják számon az aktuális diákokat, mivel emberi munkáról van szó az adminisztrálásban is így a hibák gyakoriak, a papír alapú rendszer lassú, nem megbízható. Az implementációt X,Y segítségével valósítjuk meg.

## 2. A jelenlegi helyzet leírása

Jelenleg az iskolában azt, hogy kinek mi az adata, csak papír alapon tartották nyílván. A papír alapú módszer, működik, de eléggé lassú, emberi hibából adódóan a félreértések esélye jelentős. A megírt lapok elveszhetnek, szennyeződhetnek, az emberi írás mások számára olvashatatlan lehet. Az emberek jelenleg csak úgy tudnak tájékozódni mások adatairól, ha személyesen bemennek az iskolába. Ezt a plusz utat szeretné a megrendelő kikerülni, azzal, hogy online elérhetővé teszi azon adatokat melyeket publikusak mindenki számára. A megrendelő szereti a modern dolgokat, többek között is ezért is gondolta úgy, hogy itt az ideje elkészíteni az alkalmazást.

## 3. Vágyálomrendszer

A megrendelő egy olyan alkalmazást szeretne ami, segítené az ő ügyfeleit abban, hogy elérjék az általuk kínált autókat anélkül, hogy az ügyfél befáradna a kölcsönzőbe, ezzel biztosítani a rugalmasságot, gyorsaságot. A szoftver rendelője a későbbiekben valószínűleg továb szeretné fejlesztettni a meglévő applikációt, jelenleg kísérleteznek vele, milyen mértékű pozitív visszajelzéseket kapnak, később ennek megfelelően a szoftvert valószínűleg bővíteni kell egyéb funkciókkal. Az elérhető autók listázása mellett e megrendelő szeretné, ha gyorsan, egyszerűen lehetne autókat hozzáadni a kínálathoz, abban az esetben, ha bővíteni szeretné a flottát, valamint a meglévő autókat tudja módosítani, szükség esetén eltávolítani a megjelenítendő autók közül, erre egy külön oldalt szeretne, amihez csak ő fér hozzá. Fontos számára, hogy egyértelműek legyenek a gombok, a mezők, mit, hova kell beírni, vagy éppen hova, melyik gombra kell kattintani, az egyszerű kezelhetőséget támogatja. Nem szeretne több munkanapot eltölteni azzal, hogy megtanulja használni a szoftvert. A szoftvernek készen kell állnia arra, hogy bővíthető legyen, egyéb funkciókkal, a későbbiekben elképzelhető, hogy a megrendelő szeretne regisztrálási lehetőséget, a rendszeresen tőle bérlőknek kedvezményeket nyújtani, ezeket nyilvántartani.

## 4. Jelenlegi üzleti folyamatok modellje

A jelenlegi rendszerben az megrendelő ügyfeleinek el kell menniük az autókölcsönző telephelyére, vagy el kell látogassanak az autókölcsönző  weboldalára, ahol láthatja milyen autó kínálattal rendelkeznek, ezek közül tud választani egyet. Ezután egy ott dolgozóval pontosan fixálják az adatokat, hogy mikortól kell, mennyi időre, a bérlési folyamat első szakasza ezzel végbe is zajlott. A második szakasza a bérlésnek akkor kezdődik amikor érte megy az előre egyeztetett autóért, ilyenkor keresnie kell egy ott dolgozót, aki segít neki átadja a szükséges dolgokat, ezután használhatja az autót, majd végül a bérlés lejáratának napján visszahozza az autót.

## 5. Igényelt üzleti folyamatok modellje

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | ... | ... | ... |

## 7. Fogalomtár
