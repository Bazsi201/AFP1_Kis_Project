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

![Üzletifolyamat](../Project/Pictures/uzleti_folyamatok_modellje.png)

## 4. Követelmények

### funkcionális követelmények

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Felület | Tanuló hozzáadása | Tanulót tudunk felvinni az adazbázisba |
| K2 | Felület | Tanuló szerkesztése | Tanuló adatait tudjuk megváltoztatni az adazbázisba |
| K3 | Felület | Tanuló törlése | Tanulót tudunk törölni az adazbázisból  |
| K4 | Felület | Tanuló adatainak áttekintése | Egy keresett tanuló adatát tudjuk megtekinteni |

### Támogatott eszközök

Mivel egy webes felületet készítünk, ezért elegendő egy számítógép vagy bármilyen okos eszköz amin van internetkapcsolat.

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

- felhasználó

### 5.2 Menühierarchiák

  - Felhasználó
    - Adatbázist bővítheti.
    - Törölhet az adatbázisból.
    - Módosíthat az adatbázisban szereplő tanuló adatain.
    - Kereshet az adatbázisból.

## 6. Fizikai környezet

- **Az alkalmazás csak web platformra készül, MySQL adatbázissal lesz futtatva.**
  - **Nincsenek megvásárolt komponensek.**
  - **Fejlesztői eszközök:**
    - **Visual Studio Code**
    - **XAMPP**


## 7. Architekturális terv

A rendszer tökéletes működéséhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk. A bootstrap felel a reszponzív webdesign-ért. A backend php alapon nyugszik.

## 8. Adatbázis terv

### *Tábla*
- *students:* Az adatbázisba felvitt tanulók
  - *id:* Azonosító szám, a tanuló egyedi azonosítója
  - *name:* A tanuló neve
  - *email:* A tanuló email címe
  - *phone:* A tanuló telefonszáma
  - *course:* Szak megnevezése


*Szerkezet*
![Képernyőterv](../Project/Pictures/adatbazis_szerkezet.png)

*DSL*


CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `course` varchar(191) NOT NULL
)

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `course`) VALUES
(1, 'Balazs Mihaly', 'm.bazsi@gmail.com', '+36302561440', 'PTI bsc.');

ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

## 9. Implementációs terv

A webes felület HTML, CSS és PHP nyelven fog elkészülni. A nem egymáshoz kapcsolódó funkciókat amennyire csak lehet, elkülönítjük, úgy csatoljuk egymáshoz ezzel is egy átláthatóbb, könnyebben változtatható lesz a source code-unk. Az adatokat MYSQL adatbázisban fogjuk tárolni.

## 10. Tesztterv

A tesztelések célja, hogy meggyőződjünk a felület gombjainak, beviteli mezőinek, illetve minden komponensének működéséről. A teszteléseket minden tag megadott számban elvégzi, különfile-ba dokumentálni fogja.


## 11. Telepítési terv

Mivel egy webes felületről van szó, ezért nem szükséges semmit a számítógépre telepíteni, elegendő egy tetszőleges böngésző és internetkapcsolat.
Az URL-t ismerve bárki begépelheti a böngésző keresőjébe és elérheti az oldalt.

## 12. Karbantartási terv

Figyelembe kell venni a felhasználó által jött visszajelzést is a programmal kapcsolatban.
Ha hibát talált, mielőbb orvosolni kell, lehet az:
*	Működéssel kapcsolatos
*	Kinézet, dizájnnal kapcsolatos
