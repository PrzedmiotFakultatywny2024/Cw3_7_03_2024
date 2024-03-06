## Zadanie 1

Zmodyfikowane polecenie z uwzględnieniem dobrych praktyk programowania oraz wymagania dodania stylów CSS w osobnym pliku brzmi następująco:

Cel: Tworzenie responsywnej i stylowej strony internetowej z formularzem, za pomocą którego użytkownicy mogą dodawać nazwy produktów do listy zakupów. Po przesłaniu formularza strona powinna dynamicznie aktualizować wyświetlaną listę zakupów, dodając nowe produkty.

Wymagania:

* Struktura HTML: Utwórz formularz HTML z jednym polem tekstowym dla nazwy produktu i przyciskiem submit. Użyj semantycznych tagów HTML5 dla lepszej dostępności i SEO.
* Metoda przesyłania danych: Ustaw metodę przesyłania formularza na POST.
* Przetwarzanie danych w PHP: W pliku PHP, użyj sesji lub innych mechanizmów przechowywania, aby zachować listę zakupów między żądaniami. Przetwarzaj dane z formularza, dodając nowe produkty do listy.
* Wyświetlanie listy zakupów: Aktualną listę zakupów wyświetl jako listę punktowaną lub numerowaną poniżej formularza, z zastosowaniem odpowiednich tagów HTML dla list.
* Aktualizacja listy: Zapewnij, by każde nowe przesłanie formularza aktualizowało listę zakupów o nowe produkty bez konieczności odświeżania całej strony.

## Zadanie 2

### Zadanie: Stworzenie strony turnieju e-sportowego z obsługą bazy danych

#### Cel:
Zaprojektowanie i implementacja jednostronicowej aplikacji PHP z formularzem do zarządzania turniejem e-sportowym. Strona powinna umożliwić tworzenie tabeli w bazie danych dla zapisów turnieju, dodawanie wyników uczestników, oraz wyświetlanie rankingów. Dodatkowo, interfejs użytkownika musi być estetyczny i responsywny, z wykorzystaniem osobnego pliku CSS.

#### Wymagania:

1. **Struktura bazy danych**: Utworzenie tabeli `EsportsTournament` z kolumnami dla ID uczestnika, nazwy drużyny, zdobytych punktów i daty dodania wpisu.
2. **Interfejs użytkownika**:
   - Formularz do dodawania wyników drużyn, zawierający pola dla nazwy drużyny i zdobytych punktów.
   - Przyciski do wykonywania akcji: "Stwórz Tabelę", "Dodaj Wynik" i "Pokaż Ranking".
   - Estetyczne wyświetlanie rankingu w formie tabeli.
3. **Przetwarzanie danych**:
   - Implementacja PHP do obsługi logiki formularza: tworzenie tabeli, dodawanie wyników do bazy i wyświetlanie rankingu.
   - Używanie sesji  przechowywania dla zachowania stanu aplikacji pomiędzy żądaniami.
4. **Stylizacja**:
   - Stworzenie pliku CSS dla estetycznej i responsywnej prezentacji strony.

#### Kroki realizacji:

1. **Przygotowanie środowiska**:
   - Utworzenie struktury plików: `esport_tournament.php` i `style.css`.

2. **Implementacja back-endu (`config.php`)**:
   - Definiowanie klasy połączenia z bazą danych (można wykorzystać podany wcześniej kod z lekkimi modyfikacjami).
   - Implementacja logiki przetwarzającej formularze: tworzenie tabeli, dodawanie wyników, wyświetlanie rankingu.

3. **Stworzenie interfejsu użytkownika**:
   - Projektowanie formularza HTML z przyciskami do obsługi akcji.
   - Implementacja wyświetlania rankingu w postaci tabeli.

4. **Stylizacja (`style.css`)**:
   - Stylizacja formularza, przycisków i tabeli dla poprawy estetyki strony.

5. **Testowanie**:
   - Sprawdzenie poprawności działania formularzy i przycisków.
   - Testowanie responsywności i wyglądu strony na różnych urządzeniach.

## Zadanie 3

### Zadanie: Stworzenie aplikacji do zarządzania magazynem towarów

#### Cel:
Zaprojektowanie i implementacja aplikacji webowej z formularzem do zarządzania magazynem towarów. Aplikacja powinna umożliwić tworzenie rekordów towarów w bazie danych, dodawanie informacji o przyjęciu i wydaniu towarów, oraz wyświetlanie stanu aktualnego magazynu. Interfejs użytkownika musi być intuicyjny i responsywny, z wykorzystaniem osobnego pliku CSS.

#### Wymagania:

1. **Struktura bazy danych**: Utworzenie tabeli `WarehouseInventory` z kolumnami dla ID towaru, nazwy towaru, ilości na stanie, ceny za jednostkę i daty ostatniej aktualizacji.
2. **Interfejs użytkownika**:
   - Formularz do dodawania nowych towarów, zawierający pola dla nazwy towaru, ilości na stanie i ceny za jednostkę.
   - Formularze do aktualizacji stanu magazynu (przyjęcie/wydanie towarów), zawierające pola dla identyfikacji towaru i ilości przyjętej/wydanej.
   - Przyciski do wykonywania akcji: "Dodaj Towar", "Aktualizuj Stan", "Pokaż Stan Magazynu".
   - Estetyczne wyświetlanie stanu magazynu w formie tabeli.
3. **Przetwarzanie danych**:
   - Implementacja PHP do obsługi logiki formularza: dodawanie nowych towarów do bazy, aktualizacja stanu magazynu, wyświetlanie aktualnego stanu.
   - Używanie sesji do przechowywania dla zachowania stanu aplikacji pomiędzy żądaniami.
4. **Stylizacja**:
   - Stworzenie pliku CSS dla intuicyjnej i responsywnej prezentacji strony.

#### Kroki realizacji:

1. **Przygotowanie środowiska**:
   - Utworzenie struktury plików: `warehouse_management.php` i `style.css`.

2. **Implementacja back-endu (`config.php`)**:
   - Definiowanie klasy połączenia z bazą danych.
   - Implementacja logiki przetwarzającej formularze: dodawanie nowych towarów, aktualizacja stanu magazynu, wyświetlanie stanu.

3. **Stworzenie interfejsu użytkownika**:
   - Projektowanie formularzy HTML do dodawania nowych towarów i aktualizacji stanu magazynu.
   - Implementacja wyświetlania stanu magazynu w postaci tabeli.

4. **Stylizacja (`style.css`)**:
   - Stylizacja formularzy, przycisków i tabeli dla intuicyjnego i estetycznego wyglądu strony.

5. **Testowanie**:
   - Sprawdzenie poprawności działania formularzy i przycisków.
   - Testowanie intuicyjności interfejsu i wyglądu strony na różnych urządzeniach.
