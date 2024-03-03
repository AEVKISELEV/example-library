## Требования

- PHP 7.0 и выше

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