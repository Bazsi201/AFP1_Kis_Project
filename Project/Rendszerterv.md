# Rendszerterv
## 1. A rendszer célja

A Top G's nevű csapat feladata, egy olyan alkalmazás fejlesztése, ami egy iskola funkcionalitását és környezetszennyezését hivatott pozitív irányba terelni. Az alkalmazás feladati közé tartozik, az iskolán belül elérhető diákok, ki listázása, valamint ezek módosítása, új diák esetén a megjelenítendő listáhpz a hozzáadása, amennyiben egy diák elballagott vagy iskolát váltott, ebben az esetben a diákot el is lehessen távolítani az adatbázisból. Az iskola jelenleg nem rendelkezik, semmilyen alkalmazással, ami esetleges módon megkönnyíthetné a munkáját. Füzetekbe, lapokon tartják számon az aktuális diákokat, mivel emberi munkáról van szó az adminisztrálásban is így a hibák gyakoriak, a papír alapú rendszer lassú, nem megbízható. Az implementációt X,Y segítségével valósítjuk meg.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters: Szabó Gergő
   * Product owner: Szabó Gergő
   * Üzleti szereplő: Tajti Tibor
     
### 2.2 Projektmunkások és felelőségek:
   * Frontend: Mihály Balázs, Kaponya Martin, Szabó Zsolt, Négyesi Imre
   * Backend: Mihály Balázs, Kaponya Martin, Szabó Zsolt, Négyesi Imre
   * Tesztelés: Mihály Balázs, Kaponya Martin, Szabó Zsolt, Négyesi Imre
     
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |                2 |                   2 |

### 2.4 Mérföldkövek:

 - 09.26 Rendszerterv
 - 09.29 Funkcionális specifikáció
 - 09.29 Követelmény specifikáció
 - 10.03 Adatbázis kialakítása
 - 10.09 Frontend design megtervezése
 - 10.09 Backend funkciók elkészítése

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők

### 3.2 Üzleti folyamatok

## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | ... | ... |

### Nemfunkcionális követelmények

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Felület | Tanuló hozzáadása | ... |
| K2 | Felület | Tanuló szerkesztése | ... |
| K3 | Felület | Tanuló törlése | ... |
| K4 | Felület | Tanuló adatainak áttekintése | ... |

### Támogatott eszközök

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

### 5.2 Menühierarchiák

## 6. Fizikai környezet

### Vásárolt softwarekomponensek és külső rendszerek

### Hardver topológia

### Fizikai alrendszerek

### Fejlesztő eszközök


## 8. Architekturális terv

### Webszerver

### Adatbázis rendszer

### A program elérése, kezelése

## 9. Adatbázis terv

## 10. Implementációs terv

A webes felület HTML, CSS és PHP nyelven fog elkészülni. A nem egymáshoz kapcsolódó funkciókat amennyire csak lehet, elkülönítjük, úgy csatoljuk egymáshoz ezzel is egy átláthatóbb, könnyebben változtatható lesz a source code-unk. Az adatokat MYSQL adatbázisban fogjuk tárolni.

## 11. Tesztterv

A tesztelések célja, hogy meggyőződjünk a felület gombjainak, beviteli mezőinek, illetve minden komponensének működéséről. A teszteléseket minden tag megadott számban elvégzi, különfile-ba dokumentálni fogja.


## 12. Telepítési terv

Mivel egy webes felületről van szó, ezért nem szükséges semmit a számítógépre telepíteni, elegendő egy tetszőleges böngésző és internetkapcsolat.
Az URL-t ismerve bárki begépelheti a böngésző keresőjébe és elérheti az oldalt.

## 13. Karbantartási terv

Figyelembe kell venni a felhasználó által jött visszajelzést is a programmal kapcsolatban.
Ha hibát talált, mielőbb orvosolni kell, lehet az:
*	Működéssel kapcsolatos
*	Kinézet, dizájnnal kapcsolatos
