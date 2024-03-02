## Требования

- PHP 7.0

## Установка

```bash
composer require aevkiselev/example-library
```

## Использование

```php
$sender = new Sender();

if ($sender->send())
{
    echo 'Done!';
}
```