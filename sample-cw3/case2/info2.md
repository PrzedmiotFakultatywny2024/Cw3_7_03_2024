Dokumentacja sesji: https://www.php.net/manual/en/book.session.php

### 1. `session_start()`

Rozpoczyna nową sesję lub kontynuuje istniejącą. Jest to pierwsza funkcja, którą należy wywołać, jeśli chce się korzystać z sesji w skrypcie PHP.

```php
session_start();
```

### 2. `session_destroy()`

Zniszczenie sesji, usuwając wszystkie dane sesji zapisane na serwerze. Ta funkcja nie usuwa żadnych globalnych zmiennych związanych z sesją ani nie niszczy ciasteczka sesji. Aby całkowicie usunąć sesję, należy również usunąć ciasteczko sesji i/lub użyć `session_unset()`.

```php
session_start();
session_destroy();
```

### 3. `session_unset()`

Usuwa wszystkie zmienne sesji. Różni się od `session_destroy()`, ponieważ `session_unset()` tylko czyści zmienne sesji, ale pozostawia sesję aktywną.

```php
session_start();
session_unset();
```

### 4. `session_id()`

Zwraca identyfikator bieżącej sesji. Może być również używany do ustawienia nowego identyfikatora sesji, jeśli jest wywoływany z argumentem.

```php
session_start();
echo session_id(); // Wyświetla ID bieżącej sesji
```

### 5. `session_regenerate_id()`

Zastępuje bieżący identyfikator sesji nowym identyfikatorem, zachowując przy tym dane sesji. Jest to przydatne dla bezpieczeństwa, np. po zalogowaniu się użytkownika, aby zapobiec atakom typu session fixation.

```php
session_start();
session_regenerate_id();
```

### 6. `session_set_save_handler()`

Pozwala zdefiniować własne metody obsługi sesji, umożliwiając przechowywanie danych sesji w niestandardowy sposób, np. w bazie danych, zamiast w plikach na serwerze.

```php
session_set_save_handler($open, $close, $read, $write, $destroy, $gc);
```
