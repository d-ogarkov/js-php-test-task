# Тестовое задание: JavaScript и PHP

## 1. JavaScript

На странице присутствуют абзац с текстом, кнопка 1 и кнопка 2. При нажатии сначала на кнопку 1, а затем на кнопку 2 абзац скрывается (если раскрыт) и раскрывается (если скрыт). Для промежуточного хранения состояния используется дата-атрибут абзаца.

Запуск: `index.html`

## 2. PHP

Строка считается «корректным» кодом, если в ней правильно расставлены фигурные скобки. То, что находится внутри и снаружи скобок, не учитывается.

Примеры:

* `{{lajkdhf{adfa}{}adfasdfadf{}}}` — корректный код.
* `{{lajkdhf{adfa` — некорректный код.

Написан класс `Brackets`, в конструктор которого передается строка (допускается многобайтовая кодировка). Метод `isValid()` проверяет, является ли переданная строка корректным кодом, и возвращает `true` или `false`.

Для удобного тестирования создан также небольшой класс `Test` со статическим методом `run()`, который сравнивает полученное значение для данной строки с ожидаемым. Вывод идет в консоль.

Запуск: `php index.php`
