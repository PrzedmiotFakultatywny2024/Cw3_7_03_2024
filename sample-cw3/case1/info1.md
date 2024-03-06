Sesje w PHP są mechanizmem przechowywania informacji o stanie na serwerze, które są dostępne na różnych stronach aplikacji podczas wizyty użytkownika. Sesje umożliwiają tworzenie aplikacji webowych, które pamiętają informacje o użytkowniku w czasie jego przeglądania serwisu. Informacje te mogą obejmować dane uwierzytelniające, preferencje czy stan koszyka zakupowego.

### Jak działają sesje?

1. **Rozpoczęcie sesji**: Kiedy użytkownik odwiedza stronę, PHP oferuje możliwość rozpoczęcia sesji, co jest zazwyczaj realizowane przez wywołanie funkcji `session_start()`. Ta funkcja sprawdza, czy identyfikator sesji został już przesłany przez przeglądarkę. Jeśli nie, PHP tworzy nowy identyfikator sesji.

2. **Przechowywanie danych sesji**: Po rozpoczęciu sesji, można przechowywać w niej różne dane, używając superglobalnej tablicy `$_SESSION`. PHP przechowuje te dane na serwerze i wiąże je z unikalnym identyfikatorem sesji.

3. **Zachowanie ciągłości sesji**: Aby zachować ciągłość sesji między różnymi żądaniami, PHP automatycznie wysyła identyfikator sesji do przeglądarki użytkownika w formie ciasteczka. Przy każdym kolejnym żądaniu przeglądarka odsyła ten identyfikator, co pozwala PHP na zidentyfikowanie sesji i powiązanych z nią danych.

4. **Zakończenie sesji**: Sesję można zakończyć wywołując `session_destroy()`, co usuwa wszystkie dane sesji z serwera. Identyfikator sesji w przeglądarce użytkownika również powinien być usunięty, aby całkowicie zakończyć sesję.



W PHP, dane sesji są domyślnie zapisywane na serwerze w plikach. Lokalizacja tych plików zależy od konfiguracji serwera i ustawień PHP. Oto kilka kluczowych aspektów dotyczących przechowywania sesji:

Domyślna lokalizacja
Domyślna ścieżka, gdzie PHP przechowuje pliki sesji, jest określona przez dyrektywę konfiguracyjną session.save_path w pliku php.ini. Jeśli ta dyrektywa nie zostanie jawnie ustawiona, PHP użyje domyślnej lokalizacji specyficznej dla systemu operacyjnego, na którym działa serwer. Na systemach Linux i podobnych, często jest to /tmp lub inny katalog tymczasowy.

Alternatywnie:

* baza danych
* pamięć podręczna
* redis

Wybór metody przechowywania sesji:

Wybór metody przechowywania sesji zależy od Twoich potrzeb.
Pliki na serwerze są prostym i domyślnym sposobem przechowywania sesji.
Bazy danych są dobrym wyborem, jeśli potrzebujesz większej skalowalności lub bezpieczeństwa.
Pamięć podręczna może poprawić wydajność, ale może być mniej niezawodna niż inne metody.
Redis jest dobrym wyborem, jeśli potrzebujesz wysokiej wydajności i skalowalności.