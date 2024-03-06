Dokumentacja https://www.php.net/manual/en/book.mysqli.php

Objaśnienia:


1. `require_once "config.php";`
    - Wczytuje plik `config.php`, który zawiera definicję klasy `Database` oraz logikę potrzebną do nawiązania połączenia z bazą danych. To pozwala na ponowne użycie kodu połączenia w różnych częściach aplikacji bez konieczności jego duplikacji.

2. `// Tworzenie obiektu bazy danych`
    - Tworzy instancję klasy `Database` zdefiniowanej w `config.php`. Jest to pierwszy krok do skorzystania z metod tej klasy, w tym metody `getConnection()`, która nawiązuje połączenie z bazą danych.

3. `$db = $database->getConnection();`
    - Wywołuje metodę `getConnection()` na obiekcie `$database` (instancja klasy `Database`). Metoda ta ma za zadanie nawiązać połączenie z bazą danych i zwraca obiekt połączenia (`mysqli`), który jest następnie przypisywany do zmiennej `$db`. Obiekt ten jest używany do wykonywania zapytań do bazy danych.

4. `// Sprawdzenie, czy połączenie jest nawiązane`
    - Sprawdza, czy połączenie z bazą danych zostało nawiązane pomyślnie. Używa do tego celu właściwości `connect_error` obiektu `$db`. Jeśli wystąpi błąd połączenia, skrypt zakończy się, wyświetlając komunikat o błędzie.

5. `// Wykonanie zapytania`
    - Definiuje zapytanie SQL, które ma zostać wykonane na bazie danych. W tym przypadku jest to proste zapytanie `SELECT`, które pobiera wszystkie rekordy z określonej tabeli.

6. `$result = $db->query($query);`
    - Używa obiektu połączenia `$db` do wykonania zdefiniowanego zapytania SQL. Wynik zapytania jest przypisywany do zmiennej `$result`. Metoda `query()` zwraca różne typy danych w zależności od wykonanego zapytania; dla zapytań `SELECT` zwraca obiekt zawierający wyniki zapytania.

7. `if ($result->num_rows > 0) {`
    - Sprawdza, czy zapytanie zwróciło jakiekolwiek wyniki. Właściwość `num_rows` obiektu wynikowego zawiera liczbę wierszy zwróconych przez zapytanie. Jeśli liczba wierszy jest większa od zera, oznacza to, że zapytanie zwróciło wyniki.

8. `// Przetwarzanie wyników`
    - Przechodzi przez wszystkie zwrócone wiersze wyników, używając pętli `while` i metody `fetch_assoc()`, która zwraca kolejny wiersz wyników jako tablicę asocjacyjną. Dla każdego wiersza wyświetlane są dane (np. `id` i wartości z określonej kolumny).

9. `// Zamknięcie połączenia`
    - Po zakończeniu pracy z bazą danych, połączenie z nią jest zamykane za pomocą metody `close()` na obiekcie połączenia `$db`. Jest to ważne dla zwolnienia zasobów systemowych i utrzymania wydajności aplikacji.